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
class Tx_D3Evgtools_Controller_BookSliderController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * bookSliderRepository
	 *
	 * @var Tx_D3Evgtools_Domain_Repository_BookSliderRepository
	 */
	protected $bookSliderRepository;

	/**
	 * injectBookSliderRepository
	 *
	 * @param Tx_D3Evgtools_Domain_Repository_BookSliderRepository $bookSliderRepository
	 * @return void
	 */
	public function injectBookSliderRepository(Tx_D3Evgtools_Domain_Repository_BookSliderRepository $bookSliderRepository) {
		$this->bookSliderRepository = $bookSliderRepository;
	}

	/**
	 * action showBookSlider
	 *
	 * @return void
	 */
	public function showBookSliderAction() {
		//xdebug_break();
		$cObjData = $this->configurationManager->getContentObject();
		$contents =  $this->bookSliderRepository->findByContentUid((int)$cObjData->data['uid']);
		//foreach($contents as $content){
			$this->view->assign('contents', $contents);
		//}

			//return;
	}

}
?>