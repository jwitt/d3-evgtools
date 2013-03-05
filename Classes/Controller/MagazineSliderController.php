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
class Tx_D3Evgtools_Controller_MagazineSliderController extends Tx_Extbase_MVC_Controller_ActionController {

	/**
	 * magazineSliderRepository
	 *
	 * @var Tx_D3Evgtools_Domain_Repository_MagazineSliderRepository
	 */
	protected $magazineSliderRepository;

	/**
	 * injectMagazineSliderRepository
	 *
	 * @param Tx_D3Evgtools_Domain_Repository_MagazineSliderRepository $magazineSliderRepository
	 * @return void
	 */
	public function injectMagazineSliderRepository(Tx_D3Evgtools_Domain_Repository_MagazineSliderRepository $magazineSliderRepository) {
		$this->magazineSliderRepository = $magazineSliderRepository;
	}

	/**
	 * action showMagazineSlider
	 *
	 * @return void
	 */
	public function showMagazineSliderAction() {
		//xdebug_break();
		$cObjData = $this->configurationManager->getContentObject();
		$contents =  $this->magazineSliderRepository->findByContentUid((int)$cObjData->data['uid']);
		$images = array();
		for($i=0; $i < count($contents);$i++){
			$image['image'] = $contents[$i]->getImages();
			$image['text'] = $contents[$i]->getText();
			$image['imageLeft'] = $i-1 < 0 ? $contents[count($contents)-1]->getImages() :$contents[$i-1]->getImages();
			$image['imageRight'] = $i >= count($contents)-1? $contents[0]->getImages() : $contents[$i + 1]->getImages();
			$images[] = $image;
			
		}
		$this->view->assign('contents', $images);
		//$this->view->assign('contents', $contents);
	}

}
?>