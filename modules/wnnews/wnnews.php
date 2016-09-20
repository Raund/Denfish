<?php
if (!defined('_PS_VERSION_'))
	exit;

class wnnews extends Module
{
	private $_html = '';

	public function __construct()
	{
		$this->name = 'wnnews';
		$this->tab = 'other';
		$this->version = '1';
		$this->author = 'Dulco';
		$this->need_instance = 0;
		$this->secure_key = Tools::encrypt($this->name);

		parent::__construct();

		$this->displayName = $this->l('Советы от Denfish');
		$this->description = $this->l('Советы от Denfish на вашем сайте.');
	}

	/**
	 * @see Module::install()
	 */
	public function install()
	{
		if (parent::install() == false
			|| $this->registerHook('leftColumn') == false
			|| $this->registerHook('header') == false
			|| Configuration::updateValue('wnnews_DISPLAY', 0) == false )
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
			$res &= Configuration::deleteByName('wnnews_DISPLAY');
			return $res;
		}
		return false;
	}

	/**
	 * Create table
	 */
	protected function createTable()
	{
		$sql1 = 'CREATE TABLE `'._DB_PREFIX_.'wnnews` (
		`id_image` int(10) unsigned NOT NULL auto_increment,
		`id_annonce` int(2) NOT NULL,
		`caption` text NULL,
		`date` TIMESTAMP NOT NULL ,
		PRIMARY KEY (`id_image`))
		ENGINE='._MYSQL_ENGINE_.' DEFAULT CHARSET=utf8';
		
		$sql2 = 'CREATE TABLE `'._DB_PREFIX_.'wnnews_annonce` (
		`id_annonce` int(10) unsigned NOT NULL auto_increment,
		`title` varchar(256) NULL,
		`short_description` text NULL,
		`description` text NULL,
		`date` TIMESTAMP NOT NULL ,
		PRIMARY KEY (`id_annonce`))
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
		if( !Db::getInstance()->Execute('DROP TABLE `'._DB_PREFIX_.'wnnews`') )
			return false;
		if( !Db::getInstance()->Execute('DROP TABLE `'._DB_PREFIX_.'wnnews_annonce`') )
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
	      $this->_html = '
		<fieldset class="width2">
			<legend><img src="../img/admin/AdminTools.gif" alt="" title="" />'.$this->l('Информация').'</legend>
			<a href="http://webnewbie.ru" target="_blank" ><img src="../modules/'.$this->name.'/logo.gif" /><strong>'.$this->l('webnewbie.ru').'</strong></a><br />
			<a href="http://webnewbie.ru/modules/blogwp/wordpress/index.php" target="_blank" ><strong>'.$this->l('Бесплатные советы').'</strong></a><br />
			<a href="http://webnewbie.ru" target="_blank" ><strong>'.$this->l('Бесплатные модули на Webnewbie').'</strong></a><br />
			<a href="http://webnewbie.ru/modules/blogwp/wordpress/prestashop/modul-novostej-i-statej-wnnews.html" target="_blank" ><strong>'.$this->l('Инструкция модуля wnnews').'</strong></a><br />
			</fieldset><br />';
	    $id_lang_default = (int)Configuration::get('PS_LANG_DEFAULT');
		$languages = Language::getLanguages(false);
		$iso = $this->context->language->iso_code;
		$errors = array();
		$this->_html .= '<h2>'.$this->displayName.' V.'.$this->version.'.</h2>';
		
		if( $_GET['deleteAll'] == 1 )
		{
			$this->_deleteAllImages();
		}
		
		/* Add */
		if ( Tools::isSubmit('submitNewannonce') )
		{
			if( $_POST['name'] == '' )
				$errors[] = $this->l('заполните поле "Название статьи"');
			if( empty($_FILES['annonce_image']['tmp_name']) )
				$errors[] = $this->l('добавьте картинку для анонса');
			else
			{
				/* Insert to database */
				if( Db::getInstance()->execute('
				INSERT INTO '._DB_PREFIX_.'wnnews_annonce (`id_annonce`, `title`, `short_description`, `description`) 
				VALUES (NULL, \''.$_POST['name'].'\', \''.$_POST['short_description'].'\', \''.$_POST['description'].'\')') )
				{
					$id_annoncen = Db::getInstance()->Insert_ID();
					
					/* Upload image */
					if( !count($errors) && !empty($_FILES['annonce_image']['tmp_name']) )
					{
						$image = new Image($id_annoncen);
						$method = 'auto';

						if (!$new_path = dirname(__FILE__).'/images/c/')
							$errors[] = $this->l('Произошла ошибка при создании новой папки');
						if (!($tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['annonce_image']['tmp_name'], $tmpName))
							$errors[] = $this->l('Произошла ошибка во время загрузки изображений');
						elseif (!ImageManager::resize($tmpName, $new_path.$id_annoncen.'.'.$image->image_format))
							$errors[] = $this->l('Произошла ошибка при копировании изображения.');
						elseif ($method == 'auto')
						{
							$imagesTypes = ImageType::getImagesTypes('products');
							foreach ($imagesTypes as $k => $image_type)
							{
								if (!ImageManager::resize($tmpName, $new_path.$id_annoncen.'-'.stripslashes($image_type['name']).'.'.$image->image_format, $image_type['width'], $image_type['height'], $image->image_format))
									$errors[] = $this->l('Произошла ошибка при копировании изображения:').' '.stripslashes($image_type['name']);
							}
						}
						@unlink($tmpName);
						$this->_html .= $this->displayConfirmation('Новый анонс создан успешно');
					}
				}
				else
					$errors[] = $this->l('Не создан новый анонс');
			}
		}
		
		/* Update */
		if ( Tools::isSubmit('submitMultiImage') )
		{
			if( empty($_FILES['userfile']['tmp_name']) )
				$errors[] = $this->l('Добавьте изображение');
			else
			{
				/* Insert to database */
				$countfile = count($_FILES['userfile']['name']);
				for ($i = 0; $i < $countfile; $i++) {
				if( Db::getInstance()->execute('
				INSERT INTO '._DB_PREFIX_.'wnnews (`id_image`, `id_annonce`, `caption`) 
				VALUES (NULL, '.$_POST['annonce'].', NULL)') )
				{
					$id_image = Db::getInstance()->Insert_ID();
					
					/* Upload image */
					if( !count($errors) && !empty($_FILES['userfile']['name']) )
					{
						$image = new Image($id_image);
						$method = 'auto';

						if (!$new_path = dirname(__FILE__).'/images/')
							$errors[] = $this->l('Произошла ошибка при создании новой папки');
						if (!($tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['userfile']['tmp_name'][$i], $tmpName))
							$errors[] = $this->l('Произошла ошибка во время загрузки изображений');
						elseif (!ImageManager::resize($tmpName, $new_path.$id_image.'.'.$image->image_format))
							$errors[] = $this->l('Произошла ошибка при копировании изображения.');
						elseif ($method == 'auto')
						{
							$imagesTypes = ImageType::getImagesTypes('products');
							foreach ($imagesTypes as $k => $image_type)
							{
								if (!ImageManager::resize($tmpName, $new_path.$id_image.'-'.stripslashes($image_type['name']).'.'.$image->image_format, $image_type['width'], $image_type['height'], $image->image_format))
									$errors[] = $this->l('Произошла ошибка при копировании изображения:').' '.stripslashes($image_type['name']);
							}
						}
						@unlink($tmpName);
					}
				}
				else
					$errors[] = $this->l('Невозможно загружать новые изображения');
			}
									$this->_html .= $this->displayConfirmation($countfile.' картинка успешно добавлена.');
			}
		}
		
		if ( Tools::isSubmit('submitNewImage') )
		{
			if( empty($_FILES['_image']['tmp_name']) )
				$errors[] = $this->l('Добавьте изображение');
			else
			{
				/* Insert to database */
				if( Db::getInstance()->execute('
				INSERT INTO '._DB_PREFIX_.'wnnews (`id_image`, `id_annonce`, `caption`) 
				VALUES (NULL, '.$_POST['annonce'].', \''.$_POST['caption'].'\')') )
				{
					$id_image = Db::getInstance()->Insert_ID();
					
					/* Upload image */
					if( !count($errors) && !empty($_FILES['_image']['name']) )
					{
						$image = new Image($id_image);
						$method = 'auto';

						if (!$new_path = dirname(__FILE__).'/images/')
							$errors[] = $this->l('Произошла ошибка при создании новой папки');
						if (!($tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['_image']['tmp_name'], $tmpName))
							$errors[] = $this->l('Произошла ошибка во время загрузки изображений');
						elseif (!ImageManager::resize($tmpName, $new_path.$id_image.'.'.$image->image_format))
							$errors[] = $this->l('Произошла ошибка при копировании изображения.');
						elseif ($method == 'auto')
						{
							$imagesTypes = ImageType::getImagesTypes('products');
							foreach ($imagesTypes as $k => $image_type)
							{
								if (!ImageManager::resize($tmpName, $new_path.$id_image.'-'.stripslashes($image_type['name']).'.'.$image->image_format, $image_type['width'], $image_type['height'], $image->image_format))
									$errors[] = $this->l('Произошла ошибка при копировании изображения:').' '.stripslashes($image_type['name']);
							}
						}
						@unlink($tmpName);
						$this->_html .= $this->displayConfirmation('Картинка загружена успешно');
					}
				}
				else
					$errors[] = $this->l('Не загружена картинка');
			}
		}
		
		if( isset($_GET['deleteannonce']) && !Tools::isSubmit('submitNewannonce') && !Tools::isSubmit('submitNewImage') )
		{
			if( !$this->_deleteannonce( $_GET['deleteannonce'] ) )
				$errors[] = $this->l('Не удается удалить анонс.');		
			else
				$this->_html .= $this->displayConfirmation('Deleted annonce successfully');
		}
		
		if( isset($_GET['deleteImage']) && !Tools::isSubmit('submitNewannonce') && !Tools::isSubmit('submitNewImage') )
		{
			if( !$this->_deleteImagesByID( $_GET['deleteImage'] ) )
				$errors[] = $this->l('Не удается удалить картинку.');		
			else
				$this->_html .= $this->displayConfirmation('Картинка удалена успешно');
		}
		
		if ( Tools::isSubmit('submitEditannonce') )
		{
		$edit_annonce = $_GET['editannonce'];
		if( Db::getInstance()->execute('
				UPDATE '._DB_PREFIX_.'wnnews_annonce SET `title` = \''.$_POST['name'].'\', `short_description` = \''.$_POST['short_description'].'\', `description` = \''.$_POST['description'].'\' WHERE `id_annonce` = '.$edit_annonce.'') )
				{
					
					/* Upload image */
					if( !count($errors) && !empty($_FILES['annonce_image']['tmp_name']) )
					{
					
						$imagesTypes = ImageType::getImagesTypes('products');
						foreach ($imagesTypes as $k => $image_type)
							{
								@unlink( dirname(__FILE__).'/images/c/'.$edit_annonce.'-'.$image_type['name'].'.jpg' );
							}
						@unlink( dirname(__FILE__).'/images/c/'.$edit_annonce.'.jpg' );
					
						$image = new Image($edit_annonce);
						$method = 'auto';

						if (!$new_path = dirname(__FILE__).'/images/c/')
							$errors[] = $this->l('Произошла ошибка при создании новой папки');
						if (!($tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['annonce_image']['tmp_name'], $tmpName))
							$errors[] = $this->l('Произошла ошибка во время загрузки изображений');
						elseif (!ImageManager::resize($tmpName, $new_path.$edit_annonce.'.'.$image->image_format))
							$errors[] = $this->l('Произошла ошибка при копировании изображения.');
						elseif ($method == 'auto')
						{
							$imagesTypes = ImageType::getImagesTypes('products');
							foreach ($imagesTypes as $k => $image_type)
							{
								if (!ImageManager::resize($tmpName, $new_path.$edit_annonce.'-'.stripslashes($image_type['name']).'.'.$image->image_format, $image_type['width'], $image_type['height'], $image->image_format))
									$errors[] = $this->l('Произошла ошибка при копировании изображения:').' '.stripslashes($image_type['name']);
							}
						}
						@unlink($tmpName);
						$this->_html .= $this->displayConfirmation('Картинка для анонса обновлена');
					}
				}
		}
		
		if ( Tools::isSubmit('submitEditImage') )
		{
		$edit_image = $_GET['editImage'];
		if( Db::getInstance()->execute('
				UPDATE '._DB_PREFIX_.'wnnews SET `caption` = \''.$_POST['caption'].'\', `id_annonce` = \''.$_POST['annonce'].'\' WHERE `id_image` = '.$edit_image.'') )
				{
					
					/* Upload image */
					if( !count($errors) && !empty($_FILES['_image']['tmp_name']) )
					{
					
						$imagesTypes = ImageType::getImagesTypes('products');
						foreach ($imagesTypes as $k => $image_type)
							{
								@unlink( dirname(__FILE__).'/images/'.$edit_image.'-'.$image_type['name'].'.jpg' );
							}
						@unlink( dirname(__FILE__).'/images/'.$edit_image.'.jpg' );
					
						$image = new Image($edit_image);
						$method = 'auto';

						if (!$new_path = dirname(__FILE__).'/images/')
							$errors[] = $this->l('Произошла ошибка при создании новой папки');
						if (!($tmpName = tempnam(_PS_TMP_IMG_DIR_, 'PS')) || !move_uploaded_file($_FILES['_image']['tmp_name'], $tmpName))
							$errors[] = $this->l('Произошла ошибка во время загрузки изображений');
						elseif (!ImageManager::resize($tmpName, $new_path.$edit_image.'.'.$image->image_format))
							$errors[] = $this->l('Произошла ошибка при копировании изображения.');
						elseif ($method == 'auto')
						{
							$imagesTypes = ImageType::getImagesTypes('products');
							foreach ($imagesTypes as $k => $image_type)
							{
								if (!ImageManager::resize($tmpName, $new_path.$edit_image.'-'.stripslashes($image_type['name']).'.'.$image->image_format, $image_type['width'], $image_type['height'], $image->image_format))
									$errors[] = $this->l('Произошла ошибка при копировании изображения:').' '.stripslashes($image_type['name']);
							}
						}
						@unlink($tmpName);
						$this->_html .= $this->displayConfirmation('Обновление прошло успешно!');
					}
				}
		}
		if (version_compare(_PS_VERSION_, '1.4.0.0') >= 0)
			$this->_html .= '
			<script type="text/javascript">	
				var iso = \''.(file_exists(_PS_ROOT_DIR_.'/js/tiny_mce/langs/'.$iso.'.js') ? $iso : 'en').'\' ;
				var pathCSS = \''._THEME_CSS_DIR_.'\' ;
				var ad = \''.dirname($_SERVER['PHP_SELF']).'\' ;
			</script>
			<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tinymce.inc.js"></script>
			<script language="javascript" type="text/javascript">
				id_language = Number('.$id_lang_default.');
				tinySetup();
			</script>';
		else
		{
			$this->_html .= '
			<script type="text/javascript" src="'.__PS_BASE_URI__.'js/tinymce/jscripts/tiny_mce/tiny_mce.js"></script>
			<script type="text/javascript">
				tinyMCE.init({
					mode : "textareas",
					theme : "advanced",
					plugins : "safari,pagebreak,style,layer,table,advimage,advlink,inlinepopups,media,searchreplace,contextmenu,paste,directionality,fullscreen",
					theme_advanced_buttons1 : "newdocument,|,bold,italic,underline,strikethrough,|,justifyleft,justifycenter,justifyright,justifyfull,styleselect,formatselect,fontselect,fontsizeselect",
					theme_advanced_buttons2 : "cut,copy,paste,pastetext,pasteword,|,search,replace,|,bullist,numlist,|,outdent,indent,blockquote,|,undo,redo,|,link,unlink,anchor,image,cleanup,help,code,,|,forecolor,backcolor",
					theme_advanced_buttons3 : "tablecontrols,|,hr,removeformat,visualaid,|,sub,sup,|,charmap,media,|,ltr,rtl,|,fullscreen",
					theme_advanced_buttons4 : "insertlayer,moveforward,movebackward,absolute,|,styleprops,|,cite,abbr,acronym,del,ins,attribs,|,pagebreak",
					theme_advanced_toolbar_location : "top",
					theme_advanced_toolbar_align : "left",
					theme_advanced_statusbar_location : "bottom",
					theme_advanced_resizing : false,
					content_css : "'.__PS_BASE_URI__.'themes/'._THEME_NAME_.'/css/global.css",
					document_base_url : "'.__PS_BASE_URI__.'",
					width: "600",
					height: "auto",
					font_size_style_values : "8pt, 10pt, 12pt, 14pt, 18pt, 24pt, 36pt",
					template_external_list_url : "lists/template_list.js",
					external_link_list_url : "lists/link_list.js",
					external_image_list_url : "lists/image_list.js",
					media_external_list_url : "lists/media_list.js",
					elements : "nourlconvert",
					entity_encoding: "raw",
					convert_urls : false,
					language : "'.(file_exists(_PS_ROOT_DIR_.'/js/tinymce/jscripts/tiny_mce/langs/'.$iso.'.js') ? $iso : 'en').'"
				});
				id_language = Number('.$id_lang_default.');
			</script>';
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
		if( !isset($_GET['id_annonce']) && !isset($_GET['editannonce']) )
			$this->newannonceForm();
			
		if( isset($_GET['editannonce']) )
			$this->editannonceForm();
			
		if( isset($_GET['editImage']) )
			$this->editImageForm();
		
		if( !isset($_GET['editannonce'])  && !isset($_GET['editImage']) )
			$this->addImageForm();
		
		if( !isset($_GET['id_annonce']) && !isset($_GET['editannonce']) )
			$this->annoncesList();
			
		if( !isset($_GET['editannonce']) && !isset($_GET['editImage']) )	
			$this->imagesList();
	}
	
	private function _adminHeader()
	{
		$this->context->controller->addCSS(($this->_path).'css/admin.css', 'all');
	}
	
	/* Edit form */
	private function editannonceForm()
	{
		
		$this_url = '?controller=adminmodules&configure='.$this->name.'&token='.Tools::getValue('token').'&tab_module='.$this->tab.'&module_name='.$this->name;
		$this->_html .= '
		<a href="'.$this_url.'" title="'.$this->l('Вернуться назад').'">
			<img src="'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/img/back.png" alt="'.$this->l('Вернуться назад').'" /></a>
		<br />
		<br />';
	
		/* Add banner */
		$this->_html .= '
		<fieldset>
			<legend><img src="../img/admin/cog.gif" alt="" class="middle" /> '.$this->l('Редактировать анонс').'</legend>';
		/* Begin form */
		$this->_html .= '
			<form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post" enctype="multipart/form-data">';
		
		if( !isset( $_GET['edit'] ) || Tools::isSubmit('submitNewImage') )
		{
		$annonce_edit = $this->getEditannonce();
		foreach($annonce_edit AS $annonce_to_edit ) {
		$title = $annonce_to_edit['title'];
		$short_description = $annonce_to_edit['short_description'];
		$description = $annonce_to_edit['description'];
		}

			/* name */
			$this->_html .= '
			<label>'.$this->l('Название статьи:').'</label>
			<div class="margin-form">
				<input type="text" name="name" id="name" size="60" value="'.$title.'" /> *
			</div>';
			/* Short description */
			$this->_html .= '
			<label>'.$this->l('Краткое описание:').'</label>
			<div class="margin-form">
				<textarea id="short_description" class="rte" name="short_description" style="width: 350px; height: 70px;">'.$short_description.'</textarea>
			</div>';
			
			/* Image field */
			$this->_html .= '
				<label>'.$this->l('Картинка для анонса:').'<br><img src="'.$this->_getannonceImage($_GET['editannonce'], 'small_default').'" /></label>
				<div class="margin-form">
					<input type="file" name="annonce_image" id="annonce_image" size="40" value="" />
				</div>';
			/* Add */
			$this->_html .= '
			<div class="margin-form">
				<input type="submit" class="button" name="submitEditannonce" value="'.$this->l('Обновить').'" />
			</div>';
		}
		
		/* End form */
		$this->_html .= '</form>';
		/* End fieldset */
		$this->_html .= '</fieldset>';
		
		$this->_html .= '<br /><br />';
	}
	
	private function editImageForm()
	{
	$this_url = '?controller=adminmodules&configure='.$this->name.'&token='.Tools::getValue('token').'&tab_module='.$this->tab.'&module_name='.$this->name;
			$this->_html .= '
			<a href="'.$this_url.'" title="'.$this->l('Вернуться назад').'">
				<img src="'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/img/back.png" alt="'.$this->l('Вернуться назад').'" /></a>
			<br />
			<br />';
	/* Edit image */
		$edit_image = $_GET['editImage'];
		$this->_html .= '
		<fieldset>
			<legend><img src="../img/admin/cog.gif" alt="" class="middle" /> '.$this->l('Обновить статью').'</legend>';
		/* Begin form */
		$this->_html .= '
			<form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post" enctype="multipart/form-data">';
		
		if( !isset( $_GET['edit'] ) || Tools::isSubmit('submitNewannonce') )
		{
		$pic_edit = $this->getEditPic();
		foreach($pic_edit AS $pic_to_edit ) {
		$pic_id_annonce = $pic_to_edit['id_annonce'];
		$pic_caption = $pic_to_edit['caption'];
		}
		
			/* Image field */
			$this->_html .= '
			<table>
			<tr>
			<td>
			<img src="'.$this->_getImageLink($edit_image, 'home_default').'" />
			</td>
			<td>
				<label>'.$this->l('Статьи:').'</label>
				
					<input type="file" name="_image" id="_image" size="40" value="" /> 
				<br><br>';
			/* annonce */
				$this->_html .= '
				<label>'.$this->l('Анонсы:').'</label>
				
					<select name="annonce" id="annonce">
						<option value="0">Без анонса</option>';
						
				$annonces = $this->getannonces();
				foreach( $annonces AS $annonce )
				{
					if ($annonce['id_annonce'] == $pic_id_annonce) { $select = 'selected '; } else { $select = ''; }
					$this->_html .= '<option '.$select.'value="'.$annonce['id_annonce'].'">'.$annonce['title'].'</option>';
				}
						
				$this->_html .= '</select>
				<br><br>';
			
			/* Caption */
			$this->_html .= '
			<label>'.$this->l('Полное описание:').'</label>
			<div class="margin-form">
				<textarea type="text" class="rte" name="caption" id="caption" style="width: 350px; height: 100px;" >'.$pic_caption.'</textarea>
			<br><br>';
			
			/* Add */
			
			$this->_html .= '
			
				<input type="submit" class="button" name="submitEditImage" value="'.$this->l('Обновить').'" />
			<br>
			</td></tr></table>';
		}
		
		/* End form */
		$this->_html .= '</form>';
		/* End fieldset */
		$this->_html .= '</fieldset>';
		
		$this->_html .= '<br /><br />';
	}
	
	/* Add form */
	private function newannonceForm()
	{
		/* Add banner */
		$this->_html .= '
		<fieldset>
			<legend><img src="../img/admin/cog.gif" alt="" class="middle" /> '.$this->l('Новый анонс').'</legend>';
		/* Begin form */
		$this->_html .= '
			<form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post" enctype="multipart/form-data">';
		
		if( !isset( $_GET['edit'] ) || Tools::isSubmit('submitNewImage') )
		{
			/* name */
			$this->_html .= '
			<label>'.$this->l('Название статьи:').'</label>
			<div class="margin-form">
				<input type="text" name="name" id="name" size="60" value="" /> *
			</div>';
			/* Short description */
			$this->_html .= '
			<label>'.$this->l('Краткое описание:').'</label>
			<div class="margin-form">
				<textarea id="short_description" class="rte" name="short_description" style="width: 350px; height: 70px;"></textarea>
			</div>';
			/* Description */
			
			/* Image field */
			$this->_html .= '
				<label>'.$this->l('Картинка для анонса:').'</label>
				<div class="margin-form">
					<input type="file" name="annonce_image" id="annonce_image" size="40" value="" /> *
				</div>';
			/* Add */
			$this->_html .= '
			<div class="margin-form">
				<input type="submit" class="button" name="submitNewannonce" value="'.$this->l('Добавить').'" />
			</div>';
		}
		
		/* End form */
		$this->_html .= '</form>';
		/* End fieldset */
		$this->_html .= '<div class="wn-form"><ul>В поле "Краткое описание" можно вставлять статью новостей полностью, она обрежется до нужного размера автоматически</ul></div></fieldset>';
		
		$this->_html .= '<br /><br />';
	}
	
	/* Add form */
	private function addImageForm()
	{
		/* Вернуться назад */
		if( isset($_GET['id_annonce']) )
		{
			$this_url = '?controller=adminmodules&configure='.$this->name.'&token='.Tools::getValue('token').'&tab_module='.$this->tab.'&module_name='.$this->name;
			$this->_html .= '
			<a href="'.$this_url.'" title="'.$this->l('Вернуться назад').'">
				<img src="'._PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/img/back.png" alt="'.$this->l('Вернуться назад').'" /></a>
			<br />
			<br />';
		}
	
		
	
		/* Add image */
		$this->_html .= '
		<fieldset>
			<legend><img src="../img/admin/cog.gif" alt="" class="middle" /> '.$this->l('Новая статья').'</legend>';
		/* Begin form */
		$this->_html .= '
			<form action="'.Tools::safeOutput($_SERVER['REQUEST_URI']).'" method="post" enctype="multipart/form-data">';
		
		if( !isset( $_GET['edit'] ) || Tools::isSubmit('submitNewannonce') )
		{
			/* Image field */
			$this->_html .= '
				<label>'.$this->l('Картинка для статьи:').'</label>
				<div class="margin-form">
					<input type="file" name="_image" id="_image" size="40" value="" /> *
				</div>';
			/* annonce */
			if( !isset($_GET['id_annonce']) )
			{
				$this->_html .= '
				<label>'.$this->l('Анонсы:').'</label>
				<div class="margin-form">
					<select name="annonce" id="annonce">
						<option value="0">Без анонса</option>';
						
				$annonces = $this->getannonces();
				foreach( $annonces AS $annonce )
					$this->_html .= '<option value="'.$annonce['id_annonce'].'">'.$annonce['title'].'</option>';
						
				$this->_html .= '</select>
				</div>';
			}
			else
			{
				$this->_html .= '<input type="hidden" name="annonce" id="annonce" value="'.$_GET['id_annonce'].'" />';
			}
			
			/* Caption */
			$this->_html .= '
			<label>'.$this->l('Статья целиком:').'</label>
			<div class="margin-form">
				<textarea type="text" class="rte" name="caption" id="caption" style="width: 350px; height: 100px; value=""></textarea>
			</div>';
			
			/* Add */
			$this->_html .= '
			<div class="margin-form">
				<input type="submit" class="button" name="submitNewImage" value="'.$this->l('Добавить').'" />
			</div>';
		}
		
		/* End form */
		$this->_html .= '</form>';
		/* End fieldset */
		$this->_html .= '<div class="wn-form"><p>Опциию "Без анонса" применять для расположения статей на главной странице новостей, в этом случае не заполняйте поля в форме "Анонс новостей" в блоке выше  </p></div></fieldset>';
		
		$this->_html .= '<br /><br />';
	}
	
	/* annonces list */
	private function annoncesList()
	{
		/* Add banner */
		$this->_html .= '
		<fieldset>
			<legend><img src="../img/admin/cog.gif" alt="" class="middle" /> '.$this->l('Анонсы').'</legend>
			<ul class="annonce_list">';
		
		$this_url = '?controller=adminmodules&configure='.$this->name.'&token='.Tools::getValue('token').'&tab_module='.$this->tab.'&module_name='.$this->name;
		$annonces = $this->getannonces();
		foreach( $annonces AS $annonce )
		{
			$this->_html .= '<li>
			<p class="annonce_id">'.$annonce['id_annonce'].'</p>
			<p class="annonce_image"><img src="'.$this->_getannonceImage($annonce['id_annonce'], 'small_default').'" /></p>
			<a class="annonce_link" href="'.$this_url.'&id_annonce='.$annonce['id_annonce'].'">'.$annonce['title'].'</a>
			<a class="annonce_edit" href="'.$this_url.'&editannonce='.$annonce['id_annonce'].'">
				<img src="'._PS_BASE_URL_.__PS_BASE_URI__.'img/admin/edit.gif" /></a>
			<a class="annonce_delete" href="'.$this_url.'&deleteannonce='.$annonce['id_annonce'].'">
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
			<legend><img src="../img/admin/cog.gif" alt="" class="middle" /> '.$this->l('Статьи').'</legend>
			<ul class="image_list">';
		
		$this_url = '?controller=adminmodules&configure='.$this->name.'&token='.Tools::getValue('token').'&tab_module='.$this->tab.'&module_name='.$this->name;
		$id_annonce = ( isset($_GET['id_annonce']) ? $_GET['id_annonce'] : 0 );
		$images = $this->getImages( $id_annonce );
		
		foreach( $images AS $image )
		{
			$this->_html .= '<li>
			<p class="image_id">'.$image['id_image'].'</p>
			<p class="image_small"><img src="'.$this->_getImageLink($image['id_image'], 'small_default').'" /></p>
			<p class="image_caption">'.$image['caption'].'</p>
			<a class="image_edit" href="'.$this_url.(isset($_GET['id_annonce']) ? '&id_annonce='.$_GET['id_annonce'] : '').'&editImage='.$image['id_image'].'">
				<img src="'._PS_BASE_URL_.__PS_BASE_URI__.'img/admin/edit.gif" /></a>
			<a class="image_delete" href="'.$this_url.(isset($_GET['id_annonce']) ? '&id_annonce='.$_GET['id_annonce'] : '').'&deleteImage='.$image['id_image'].'">
				<img src="'._PS_BASE_URL_.__PS_BASE_URI__.'img/admin/delete.gif" /></a>
			</li>';
		}
		
		/* End fieldset */
		$this->_html .= '
			</ul>
		</fieldset>';
		
		$this->_html .= '<br /><br />';
	}
	
	public function getNameannonces()
	{
	$id_annonce = $_GET['id_annonce'];
	return Db::getInstance()->ExecuteS('SELECT * FROM `'._DB_PREFIX_.'wnnews_annonce` WHERE `id_annonce` = '.$id_annonce.'');
	}
	
	/* Get annonce image URL */
	private function _getannonceImage($id, $type)
	{
		return _PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/images/c/'.$id.'-'.$type.'.jpg';
	}
	
	/* Get all annonce */
	public function getannonces()
	{
		return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'wnnews_annonce`ORDER BY `id_annonce` DESC');
	}
	
	private function getEditannonce()
	{
		$edit_annonce = $_GET['editannonce'];
		return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'wnnews_annonce` WHERE `id_annonce` = '.$edit_annonce);
	}
	
	private function getEditPic()
	{
		$edit_annonce = $_GET['id_annonce'];
		$edit_image = $_GET['editImage'];
		return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'wnnews` WHERE `id_image` = '.$edit_image.'');	
	}
	
	/* Get all images in selected annonce */
	public function getImages( $id_annonce = 0 )
	{
		return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'wnnews` WHERE `id_annonce`='.$id_annonce.' ORDER BY `id_image` DESC');
	}
	
	/* Get image URL */
	private function _getImageLink($id, $type)
	{
		return _PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name.'/images/'.$id.'-'.$type.'.jpg';
	}
	
	/* Delete annonce */
	private function _deleteannonce( $id_annonce )
	{
		$images = $this->getImages( $id_annonce );
		foreach( $images AS $image )
		{
			$this->_deleteImagesByID( $image['id_image'] );
		}
		
		$imagesTypes = ImageType::getImagesTypes('products');
		foreach ($imagesTypes as $k => $image_type)
		{
			@unlink( dirname(__FILE__).'/images/c/'.$id_annonce.'-'.$image_type['name'].'.jpg' );
		}
		@unlink( dirname(__FILE__).'/images/c/'.$id_annonce.'.jpg' );
		
		return Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'wnnews_annonce` WHERE `id_annonce`='.$id_annonce);
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
		
		@Db::getInstance()->execute('DELETE FROM `'._DB_PREFIX_.'wnnews` WHERE `id_image`='.$id_image);
		
		return true;
	}
	
	/* Get last image in selected annonce */
	private function _getLastImage()
	{
		return Db::getInstance()->executeS('SELECT * FROM `'._DB_PREFIX_.'wnnews` ORDER BY `id_image` DESC LIMIT 0,3');
	}
	
	public function hookLeftColumn($params)
	{		
		$this->smarty->assign(array(
		    
			'news_path' => _PS_BASE_URL_.__PS_BASE_URI__.'modules/'.$this->name,
			'news_dir' => _PS_BASE_URL_.__PS_BASE_URI__.'index.php?fc=module&module='.$this->name.'&controller=news',
			'images' => $this->_getLastImage()
		));
		
		return $this->display(__FILE__, 'wnnews.tpl');
	}
	
	public function hookRightColumn($params)
	{
		return $this->hookLeftColumn($params);
	}
	
	public function hookHeader()
	{
		$this->context->controller->addJS(($this->_path).'js/slimbox2.js');
		$this->context->controller->addCSS(($this->_path).'css/slimbox2.css', 'all');
		
		$this->context->controller->addCSS(($this->_path).'css/wnnews.css', 'all');
	}
}