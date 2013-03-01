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
class Tx_D3Evgtools_Controller_AccordionContentController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * accordionContentRepository
	 *
	 * @var Tx_D3Evgtools_Domain_Repository_AccordionContentRepository
	 */
	protected $accordionContentRepository;

	/**
	 * injectAccordionContentRepository
	 *
	 * @param Tx_D3Evgtools_Domain_Repository_AccordionContentRepository $accordionContentRepository
	 * @return void
	 */
	public function injectAccordionContentRepository(Tx_D3Evgtools_Domain_Repository_AccordionContentRepository $accordionContentRepository) {
		$this->accordionContentRepository = $accordionContentRepository;
	}

	/**
	 * action showAccordion
	 *
	 * @return void
	 */
	public function showAccordionAction() {
		xdebug_break();
		$cObjData = $this->configurationManager->getContentObject();
		$contents =  $this->accordionContentRepository->findByContentUid((int)$cObjData->data['uid']);
		$contentRepository = $this->objectManager->get('Tx_D3Evgtools_Domain_Repository_ContentRepository');
		foreach($contents as $content){
			$contentArray[] = array('tabId'=>$content->getUid(),'title'=>$content->getTitle(),  'content'=>$contentRepository->findByUid($content->getContent()));
		}
		;
		$this->view->assign('activeTab', $cObjData->data['active_tab']);
		$this->view->assign('contents', $contentArray);
	}

}
?>