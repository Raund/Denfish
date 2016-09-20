<?php
/**
 * @since 1.5.0
 */
 
/**
 * @Module by azCies please contact azcies@gmail.com
 */
 
class AzGalleryGalleryModuleFrontController extends ModuleFrontController
{
	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		parent::initContent();
		
		$azgallery = new AzGallery;
		
		$this->context->smarty->assign(array(
			'gallery_url' => _PS_BASE_URL_.__PS_BASE_URI__.'index.php?fc=module&module=azgallery&controller=gallery',
			'gallery_dir' => _PS_BASE_URL_.__PS_BASE_URI__.'modules/azgallery/',
			'gallery' => new AzGalleryGalleryModuleFrontController
		));
		
		/* List albums */
		if( !isset( $_GET['id_album'] ) )
			$this->context->smarty->assign('albums', $azgallery->getAlbums());
			
		/* List images */
		$this->context->smarty->assign('images', $azgallery->getImages( (isset($_GET['id_album']) ? $_GET['id_album'] : 0 ) ));
		
		if( isset( $_GET['id_album'] ) )
			$this->context->smarty->assign('backhome', true);

		$this->setTemplate('gallery.tpl');
	}
	
	public function countImages( $id_album )
	{
		return count( AzGallery::getImages( $id_album ) );
	}
}