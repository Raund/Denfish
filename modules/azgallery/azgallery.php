<?php
/**
 * @since 1.5.0
 * @version 1.5.1.0 (2012-11-21)
 */

if (!defined('_PS_VERSION_'))
	exit;

class AzGallery extends Module
{
	private $_html = '';

	public function __construct()
	{
		$this->name = 'azgallery';
		$this->tab = 'front_office_features';
		$this->version = '1.5.1.2';
		$this->author = 'Tho <azcies@gmail.com>';
		$this->need_instance = 0;
		$this->secure_key = Tools::encrypt($this->name);

		parent::__construct();

		$this->displayName = $this->l('Images gallery');
		$this->description = $this->l('Images gallery module for your site.');
	}

	/**
	 * @see Module::install()
	 */
	public function install()
	{
		if (parent::install() == false
			|| $this->registerHook('leftHome') == false
			|| $this->registerHook('header') == false
			|| Configuration::updateValue('AZGALLERY_DISPLAY', 0) == false )
			return false;
			
		if( !$this->createTable() )
			return false;
		
		return true;
	}

	/**
	 * @see Module::uninstall()
	 */
	public function uninstall()
	{
		/* Deletes Module */
		if (parent::uninstall())
		{
			/* Deletes tables */
			$res = $this->dropTable();
			/* Unsets configuration */
			$res &= Configuration::deleteByName('AZGALLERY_DISPLAY');
			return $res;
		}
		return false;
	}

	/**
	 * Create table
	 */
	protected function createTable()
	{
		$sql1 = 'CREATE TABLE `'._DB_PREFIX_.'azgallery` (
		`id_image` int(10) unsigned NOT NULL auto_increment,
		`id_album` int(2) NOT NULL,
		`caption` varchar(256) NULL,
		PRIMARY KEY (`id_image`))
		ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8';
		
		$sql2 = 'CREATE TABLE `'._DB_PREFIX_.'azgallery_album` (
		`id_album` int(10) unsigned NOT NULL auto_increment,
		`title` varchar(256) NULL,
		`short_description` text NULL,
		`description` text NULL,
		PRIMARY KEY (`id_album`))
		ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8';
		
		if( !Db::getInstance()->Execute($sql1) )
			return false;
			
		if( !Db::getInstance()->Execute($sql2) )
			return false;
			
		return true;
	}
	
	/**
	 * Drop table
	 */
	protected function dropTable()
	{
		if( !$this->_deleteAllImages() )
			return false;
		if( !Db::getInstance()->Execute('DROP TABLE `'._DB_PREFIX_.'azgallery`') )
			return false;
		if( !Db::getInstance()->Execute('DROP TABLE `'._DB_PREFIX_.'azgallery_album`') )
			return false;
		
		return true;
	}
	
	private function _deleteAllImages()
	{
		$this->_deleteFiles( dirname(__FILE__).'/images/c/' );
		$this->_deleteFiles( dirname(__FILE__).'/images/' );
		return true;
	}
	
	private function _deleteFiles( $path )
	{
		$files = glob( $path.'{,.}*', GLOB_BRACE );
		foreach($files as $file)
		{
			if(is_file($file))
				unlink($file);
		}
	}

	public function getContent()
	{
		$errors = array();
		$this->_html .= '<h2>'.$this->displayName.' V.'.$this->version.'.</h2>';
		
		if( $_GET['deleteAll'] == 1 )
		{
			$this->_deleteAllImages();
		}
		
		/* Add */
		if ( Tools::isSubmit('submitNewAlbum') )
		{
			if( $_POST['name'] == '' )
				$errors[] = $this->l('Album name cannot blank');
			if( empty($_FILES['album_image']['tmp_name']) )
				$errors[] = $this->l('Album image cannot blank');
			else
			{
				/* Insert to database */
				if( Db::getInstance()->execute('
				INSERT INTO '._DB_PREFIX_.'azgallery_album (`id_album`, `title`, `short_description`, `description`) 
				VALUES (NULL, \''.$_POST['name'].'\', \''.$_POST['short_description'].'\', \''.$_POST['description'].'\')') )
				{
					$id_albumn = Db::getInstance()->Insert_ID();
					
					/* Upload image */
					if( !count($errors) && !empty($_FILES['album_image']['tmp_name']) )
					{
						$image = new Image($id_albumn);
						$method = 'auto';

						if (!$new_path = dirname(__FILE__).'/images/c/')
							$errors[] = $this->l('An error occurred during new folder creation');
						if (!($tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['album_image']['tmp_name'], $tmpName))
							$errors[] = $this->l('An error occurred during the image upload');
						elseif (!ImageManager::resize($tmpName, $new_path.$id_albumn.'.'.$image->image_format))
							$errors[] = $this->l('An error occurred while copying image.');
						elseif ($method == 'auto')
						{
							$imagesTypes = ImageType::getImagesTypes('products');
							foreach ($imagesTypes as $k => $image_type)
							{
								if (!ImageManager::resize($tmpName, $new_path.$id_albumn.'-'.stripslashes($image_type['name']).'.'.$image->image_format, $image_type['width'], $image_type['height'], $image->image_format))
									$errors[] = $this->l('An error occurred while copying image:').' '.stripslashes($image_type['name']);
							}
						}
						@unlink($tmpName);
						$this->_html .= $this->displayConfirmation('Created new album successfully');
					}
				}
				else
					$errors[] = $this->l('Cannot create new album');
			}
		}
		
		/* Update */
		if ( Tools::isSubmit('submitNewImage') )
		{
			if( empty($_FILES['_image']['tmp_name']) )
				$errors[] = $this->l('Image cannot blank');
			else
			{
				/* Insert to database */
				if( Db::getInstance()->execute('
				INSERT INTO '._DB_PREFIX_.'azgallery (`id_image`, `id_album`, `caption`) 
				VALUES (NULL, '.$_POST['album'].', \''.$_POST['caption'].'\')') )
				{
					$id_image = Db::getInstance()->Insert_ID();
					
					/* Upload image */
					if( !count($errors) && !empty($_FILES['_image']['tmp_name']) )
					{
						$image = new Image($id_image);
						$method = 'auto';

						if (!$new_path = dirname(__FILE__).'/images/')
							$errors[] = $this->l('An error occurred during new folder creation');
						if (!($tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['_image']['tmp_name'], $tmpName))
							$errors[] = $this->l('An error occurred during the image upload');
						elseif (!ImageManager::resize($tmpName, $new_path.$id_image.'.'.$image->image_format))
							$errors[] = $this->l('An error occurred while copying image.');
						elseif ($method == 'auto')
						{
							$imagesTypes = ImageType::getImagesTypes('products');
							foreach ($imagesTypes as $k => $image_type)
							{
								if (!ImageManager::resize($tmpName, $new_path.$id_image.'-'.stripslashes($image_type['name']).'.'.$image->image_format, $image_type['width'], $image_type['height'], $image->image_format))
									$errors[] = $this->l('An error occurred while copying image:').' '.stripslashes($image_type['name']);
							}
						}
						@unlink($tmpName);
						$this->_html .= $this->displayConfirmation('Uploaded image successfully');
					}
				}
				else
					$errors[] = $this->l('Cannot upload new image');
			}
		}
		
		if( isset($_GET['deleteAlbum']) && !Tools::isSubmit('submitNewAlbum') && !Tools::isSubmit('submitNewImage') )
		{
			if( !$this->_deleteAlbum( $_GET['deleteAlbum'] ) )
				$errors[] = $this->l('Cannot delete this album.');		
			else
				$this->_html .= $this->displayConfirmation('Deleted album successfully');
		}
		
		if( isset($_GET['deleteAzImage']) && !Tools::isSubmit('submitNewAlbum') && !Tools::isSubmit('submitNewImage') )
		{
			if( !$this->_deleteImagesByID( $_GET['deleteAzImage'] ) )
				$errors[] = $this->l('Cannot delete this image.');		
			else
				$this->_html .= $this->displayConfirmation('Deleted image successfully');
		}
		
		/* Display errors */
		if (count($errors))
			$this->_html .= $this->displayError(implode('<br />', $errors));
			
		/* Display form */
		$this->_adminHeader();
		$this->_displayForm();

		return $this->_html;
	}

	private function _displayForm()
	{
		if( !isset($_GET['id_album']) )
			$this->newAlbumForm();
			
		$this->addImageForm();
		
		if( !isset($_GET['id_album']) )
			$this->albumsList();
			
		$this->imagesList();
	}
	
	private function _adminHeader()
	{
		$this->context->controller->addCSS(($this->_path).'css/admin.css', 'all');
	}
	
	/* Add form */
	private function newAlbumForm()
	{
		/* Add banner */
		$this->_html .= '
		<fieldset>
			<legend><img src="'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/logo.gif" alt="" /> '.$this->l('New Album').'</legend>';
		/* Begin form */
		$this->_html .= '
			<form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post" enctype="multipart/form-data">';
		
		if( !isset( $_GET['edit'] ) || Tools::isSubmit('submitNewImage') )
		{
			/* name */
			$this->_html .= '
			<label>'.$this->l('Name:').'</label>
			<div class="margin-form">
				<input type="text" name="name" id="name" size="60" value="" /> *
			</div>';
			/* Short description */
			$this->_html .= '
			<label>'.$this->l('Short description:').'</label>
			<div class="margin-form">
				<textarea id="short_description" name="short_description" style="width: 350px; height: 70px;"></textarea>
			</div>';
			/* Description */
			$this->_html .= '
			<label>'.$this->l('Description:').'</label>
			<div class="margin-form">
				<textarea id="description" name="description" style="width: 350px; height: 100px;"></textarea>
			</div>';
			/* Image field */
			$this->_html .= '
				<label>'.$this->l('Album image:').'</label>
				<div class="margin-form">
					<input type="file" name="album_image" id="album_image" size="40" value="" /> *
				</div>';
			/* Add */
			$this->_html .= '
			<div class="margin-form">
				<input type="submit" class="button" name="submitNewAlbum" value="'.$this->l('Add').'" />
			</div>';
		}
		
		/* End form */
		$this->_html .= '</form>';
		/* End fieldset */
		$this->_html .= '</fieldset>';
		
		$this->_html .= '<br /><br />';
	}
	
	/* Add form */
	private function addImageForm()
	{
		/* Back to home */
		if( isset($_GET['id_album']) )
		{
			$this_url = '?controller=adminmodules&configure='.$this->name.'&token='.Tools::getValue('token').'&tab_module='.$this->tab.'&module_name='.$this->name;
			$this->_html .= '
			<a href="'.$this_url.'" title="'.$this->l('Back to home').'">
				<img src="'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/img/back.png" alt="'.$this->l('Back to home').'" /></a>
			<br />
			<br />';
		}
	
		/* Add image */
		$this->_html .= '
		<fieldset>
			<legend><img src="'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/logo.gif" alt="" /> '.$this->l('New Image').'</legend>';
		/* Begin form */
		$this->_html .= '
			<form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post" enctype="multipart/form-data">';
		
		if( !isset( $_GET['edit'] ) || Tools::isSubmit('submitNewAlbum') )
		{
			/* Image field */
			$this->_html .= '
				<label>'.$this->l('Image:').'</label>
				<div class="margin-form">
					<input type="file" name="_image" id="_image" size="40" value="" /> *
				</div>';
			/* Album */
			if( !isset($_GET['id_album']) )
			{
				$this->_html .= '
				<label>'.$this->l('Album:').'</label>
				<div class="margin-form">
					<select name="album" id="album">
						<option value="0">Home</option>';
						
				$albums = $this->getAlbums();
				foreach( $albums AS $album )
					$this->_html .= '<option value="'.$album['id_album'].'">'.$album['title'].'</option>';
						
				$this->_html .= '</select>
				</div>';
			}
			else
			{
				$this->_html .= '<input type="hidden" name="album" id="album" value="'.$_GET['id_album'].'" />';
			}
			
			/* Caption */
			$this->_html .= '
			<label>'.$this->l('Caption:').'</label>
			<div class="margin-form">
				<input type="text" name="caption" id="caption" size="80" value="" />
			</div>';
			/* Add */
			$this->_html .= '
			<div class="margin-form">
				<input type="submit" class="button" name="submitNewImage" value="'.$this->l('Add').'" />
			</div>';
		}
		
		/* End form */
		$this->_html .= '</form>';
		/* End fieldset */
		$this->_html .= '</fieldset>';
		
		$this->_html .= '<br /><br />';
	}
	
	/* Albums list */
	private function albumsList()
	{
		/* Add banner */
		$this->_html .= '
		<fieldset>
			<legend><img src="'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/logo.gif" alt="" /> '.$this->l('Albums').'</legend>
			<ul class="album_list">';
		
		$this_url = '?controller=adminmodules&configure='.$this->name.'&token='.Tools::getValue('token').'&tab_module='.$this->tab.'&module_name='.$this->name;
		$albums = $this->getAlbums();
		foreach( $albums AS $album )
		{
			$this->_html .= '<li>
			<p class="album_id">'.$album['id_album'].'</p>
			<p class="album_image"><img src="'.$this->_getAlbumImage($album['id_album'], 'small_default').'" /></p>
			<a class="album_link" href="'.$this_url.'&id_album='.$album['id_album'].'">'.$album['title'].'</a>
			<a class="album_delete" href="'.$this_url.'&deleteAlbum='.$album['id_album'].'">
				<img src="'._PS_BASE_URL_.__PS_BASE_URI__.'img/admin/delete.gif" /></a>
			</li>';
		}
		
		/* End fieldset */
		$this->_html .= '
			</ul>
		</fieldset>';
		
		$this->_html .= '<br /><br />';
	}
	
	/* Images list */
	private function imagesList()
	{
		/* Add banner */
		$this->_html .= '
		<fieldset>
			<legend><img src="'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/logo.gif" alt="" /> '.$this->l('Images').'</legend>
			<ul class="image_list">';
		
		$this_url = '?controller=adminmodules&configure='.$this->name.'&token='.Tools::getValue('token').'&tab_module='.$this->tab.'&module_name='.$this->name;
		$id_album = ( isset($_GET['id_album']) ? $_GET['id_album'] : 0 );
		$images = $this->getImages( $id_album );
		
		foreach( $images AS $image )
		{
			$this->_html .= '<li>
			<p class="image_id">'.$image['id_image'].'</p>
			<p class="image_small"><img src="'.$this->_getImageLink($image['id_image'], 'small_default').'" /></p>
			<p class="image_caption">'.$image['caption'].'</p>
			<a class="image_delete" href="'.$this_url.(isset($_GET['id_album']) ? '&id_album='.$_GET['id_album'] : '').'&deleteAzImage='.$image['id_image'].'">
				<img src="'._PS_BASE_URL_.__PS_BASE_URI__.'img/admin/delete.gif" /></a>
			</li>';
		}
		
		/* End fieldset */
		$this->_html .= '
			</ul>
		</fieldset>';
		
		$this->_html .= '<br /><br />';
	}
	
	/* Get album image URL */
	private function _getAlbumImage($id, $type)
	{
		return _PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/images/c/'.$id.'-'.$type.'.jpg';
	}
	
	/* Get all album */
	public function getAlbums()
	{
		return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'azgallery_album`');
	}
	
	/* Get all images in selected album */
	public function getImages( $id_album = 0 )
	{
		return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'azgallery` as g, `'._DB_PREFIX_.'azgallery_album` as a WHERE a.id_album = g.id_album AND g.id_album='.$id_album);
	}
	
	/* Get image URL */
	private function _getImageLink($id, $type)
	{
		return _PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/images/'.$id.'-'.$type.'.jpg';
	}
	
	/* Delete album */
	private function _deleteAlbum( $id_album )
	{
		$images = $this->getImages( $id_album );
		foreach( $images AS $image )
		{
			$this->_deleteImagesByID( $image['id_image'] );
		}
		
		$imagesTypes = ImageType::getImagesTypes('products');
		foreach ($imagesTypes as $k => $image_type)
		{
			@unlink( dirname(__FILE__).'/images/c/'.$id_album.'-'.$image_type['name'].'.jpg' );
		}
		@unlink( dirname(__FILE__).'/images/c/'.$id_album.'.jpg' );
		
		return Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'azgallery_album` WHERE `id_album`='.$id_album);
	}
	
	/* Delete image */
	private function _deleteImagesByID( $id_image )
	{
		$imagesTypes = ImageType::getImagesTypes('products');
		foreach ($imagesTypes as $k => $image_type)
		{
			@unlink( dirname(__FILE__).'/images/'.$id_image.'-'.$image_type['name'].'.jpg' );
		}
		@unlink( dirname(__FILE__).'/images/'.$id_image.'.jpg' );
		
		@Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'azgallery` WHERE `id_image`='.$id_image);
		
		return true;
	}
	
	/* Get last image in selected album */
	private function _getLastImage()
	{
		return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'azgallery` ORDER BY `id_image` DESC LIMIT 0,1');
	}
	
	public function hookHome($params)
	{		
		$this->smarty->assign(array(
			'gallery_path' => _PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name,
			'gallery_dir' => _PS_BASE_URL_.__PS_BASE_URI__.'index.php?fc=module&module='.$this->name.'&controller=gallery',
			'images' => $this->_getLastImage()
		));
		
		return $this->display(__FILE__, 'azgallery.tpl');
	}
	
	public function hookRightColumn($params)
	{
		return $this->hookLeftColumn($params);
	}
	
	public function hookHeader()
	{
		//$this->context->controller->addJS(($this->_path).'js/slimbox2.js');
		//$this->context->controller->addCSS(($this->_path).'css/slimbox2.css', 'all');

        $this->context->controller->addJS(($this->_path).'js/jquery.lightbox-0.5.pack.js');
        $this->context->controller->addCSS(($this->_path).'css/jquery.lightbox-0.5.css', 'all');
		
		$this->context->controller->addCSS(($this->_path).'css/azgallery.css', 'all');
	}
}