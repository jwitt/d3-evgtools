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
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class Tx_D3Evgtools_Domain_Model_CntMagazinSlider.
 *
 * @version $Id$
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @package TYPO3
 * @subpackage EVG Tools
 *
 * @author Jens Witt <jens.witt@digitalhoch3.de>
 */
class Tx_D3Evgtools_Domain_Model_CntMagazinSliderTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_D3Evgtools_Domain_Model_CntMagazinSlider
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_D3Evgtools_Domain_Model_CntMagazinSlider();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getMagazineSlidersReturnsInitialValueForObjectStorageContainingTx_D3Evgtools_Domain_Model_MagazineSlider() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getMagazineSliders()
		);
	}

	/**
	 * @test
	 */
	public function setMagazineSlidersForObjectStorageContainingTx_D3Evgtools_Domain_Model_MagazineSliderSetsMagazineSliders() { 
		$magazineSlider = new Tx_D3Evgtools_Domain_Model_MagazineSlider();
		$objectStorageHoldingExactlyOneMagazineSliders = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneMagazineSliders->attach($magazineSlider);
		$this->fixture->setMagazineSliders($objectStorageHoldingExactlyOneMagazineSliders);

		$this->assertSame(
			$objectStorageHoldingExactlyOneMagazineSliders,
			$this->fixture->getMagazineSliders()
		);
	}
	
	/**
	 * @test
	 */
	public function addMagazineSliderToObjectStorageHoldingMagazineSliders() {
		$magazineSlider = new Tx_D3Evgtools_Domain_Model_MagazineSlider();
		$objectStorageHoldingExactlyOneMagazineSlider = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneMagazineSlider->attach($magazineSlider);
		$this->fixture->addMagazineSlider($magazineSlider);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneMagazineSlider,
			$this->fixture->getMagazineSliders()
		);
	}

	/**
	 * @test
	 */
	public function removeMagazineSliderFromObjectStorageHoldingMagazineSliders() {
		$magazineSlider = new Tx_D3Evgtools_Domain_Model_MagazineSlider();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($magazineSlider);
		$localObjectStorage->detach($magazineSlider);
		$this->fixture->addMagazineSlider($magazineSlider);
		$this->fixture->removeMagazineSlider($magazineSlider);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getMagazineSliders()
		);
	}
	
}
?>