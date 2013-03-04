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
class Tx_D3Evgtools_Domain_Model_CntMagazineSlider extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * magazineSliders
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_MagazineSlider>
	 */
	protected $magazineSliders;

	/**
	 * __construct
	 *
	 * @return void
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all Tx_Extbase_Persistence_ObjectStorage properties.
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		/**
		 * Do not modify this method!
		 * It will be rewritten on each save in the extension builder
		 * You may modify the constructor of this class instead
		 */
		$this->magazineSliders = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Adds a MagazineSlider
	 *
	 * @param Tx_D3Evgtools_Domain_Model_MagazineSlider $magazineSlider
	 * @return void
	 */
	public function addMagazineSlider(Tx_D3Evgtools_Domain_Model_MagazineSlider $magazineSlider) {
		$this->magazineSliders->attach($magazineSlider);
	}

	/**
	 * Removes a MagazineSlider
	 *
	 * @param Tx_D3Evgtools_Domain_Model_MagazineSlider $magazineSliderToRemove The MagazineSlider to be removed
	 * @return void
	 */
	public function removeMagazineSlider(Tx_D3Evgtools_Domain_Model_MagazineSlider $magazineSliderToRemove) {
		$this->magazineSliders->detach($magazineSliderToRemove);
	}

	/**
	 * Returns the magazineSliders
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_MagazineSlider> $magazineSliders
	 */
	public function getMagazineSliders() {
		return $this->magazineSliders;
	}

	/**
	 * Sets the magazineSliders
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_MagazineSlider> $magazineSliders
	 * @return void
	 */
	public function setMagazineSliders(Tx_Extbase_Persistence_ObjectStorage $magazineSliders) {
		$this->magazineSliders = $magazineSliders;
	}

}
?>