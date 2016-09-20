<?php

class WnnewsNewsModuleFrontController extends ModuleFrontController
{
	/**
	 * @see FrontController::initContent()
	 */
	public function initContent()
	{
		parent::initContent();
		
		$wnnews = new wnnews;
		
		$this->context->smarty->assign(array(
			'news_url' => $this->context->link->getModuleLink('wnnews', 'news?'),
			'news_dir' => _PS_BASE_URL_.__PS_BASE_URI__.'modules/wnnews/',
			
		));
		
		/* List annonces */
		if( !isset( $_GET['id_annonce'] ) )
			$this->context->smarty->assign('annonces', $wnnews->getannonces());
			
		/* List images */
		$this->context->smarty->assign('images', $wnnews->getImages( (isset($_GET['id_annonce']) ? $_GET['id_annonce'] : 0 ) ));
		
		if( isset( $_GET['id_annonce'] ) )
			$this->context->smarty->assign('backhome', true);

		$this->setTemplate('news.tpl');
	}
	
	public function countImages( $id_annonce )
	{
		return count( wnnews::getImages( $id_annonce ) );
	}
}