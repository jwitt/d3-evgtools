<?php

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2013 Jens Witt <jens.witt@digitalhoch3.de>
 *  
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 *
 *
 * @package d3_evgtools
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 */
class Tx_D3Evgtools_Controller_ContentContentController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * contentContentRepository
	 *
	 * @var Tx_D3Evgtools_Domain_Repository_ContentContentRepository
	 */
	protected $contentContentRepository;

	/**
	 * injectContentContentRepository
	 *
	 * @param Tx_D3Evgtools_Domain_Repository_ContentContentRepository $contentContentRepository
	 * @return void
	 */
	public function injectContentContentRepository(Tx_D3Evgtools_Domain_Repository_ContentContentRepository $contentContentRepository) {
		$this->contentContentRepository = $contentContentRepository;
	}

	/**
	 * action showContent
	 *
	 * @return void
	 */
	public function showContentAction() {
		//xdebug_break();
		$cObjData = $this->configurationManager->getContentObject();
		$contents =  $this->contentContentRepository->findByContentUid((int)$cObjData->data['uid']);

		$contentRepository = $this->objectManager->get('Tx_D3Evgtools_Domain_Repository_ContentRepository');
		foreach($contents as $content){
			$pid = $content->getPage();
			if($pid){
				$GLOBALS['TSFE']->fe_user->setKey('ses','page',$pid);
				$GLOBALS["TSFE"]->storeSessionData();
				$pid = 0;
			}else{
				$pid = $GLOBALS['TSFE']->fe_user->getKey('ses','page');
				if(!$pid){
					$pid = $this->settings['defaultHomePagePid'];
				}	
			}
			if($pid){
				$pageContents = $contentRepository->findByPidAndColpos($pid,$content->getColpos());
				foreach($pageContents as $c){
				   $contentArray[] = $c;
				}	
			}	
		}
		$this->view->assign('contents', $contentArray);
		$th = substr($this->view->render(),strlen('<div class="tx-d3-evgtools">'));
		return substr($th,0,strlen($th)-strlen('</div>'));
		
		//this->checkLifetimeCookie('mycookiename', 60 * 60 * 24 * 7);
	}

	
	private function checkLifetimeCookie($cookiename, $lifetime) {
		if((isset($_COOKIE[$cookiename]) && isset($_COOKIE['fe_typo_user']) && $_COOKIE[$cookiename] != $_COOKIE['fe_typo_user']) || (isset($_COOKIE[$cookiename]) && !isset($_COOKIE['fe_typo_user']))) {
			setcookie('fe_typo_user', $_COOKIE[$cookiename], 0, '/');
			header('Location: '.$_SERVER['REQUEST_URI']);
		}
		if(!isset($_COOKIE[$cookiename]) && isset($_COOKIE['fe_typo_user'])) {
			$selectFields = 'hash';
			$fromTable    = 'fe_session_data';
			$whereClause  = 'hash = "'.$this->mysqlEscape($_COOKIE['fe_typo_user']).'"';
			$groupBy      = '';
			$orderBy      = '';
			$limit        = '1';
			$ses = $GLOBALS['TYPO3_DB']->exec_SELECTgetRows($selectFields,$fromTable,$whereClause,$groupBy,$orderBy,$limit);
			if(count($ses) == 1) {
				setcookie($cookiename, $_COOKIE['fe_typo_user'], time() + $lifetime, '/');
			}
		}
	}

	private function mysqlEscape($value) {
		return mysql_real_escape_string($value);
	}	
	
	
}
?>