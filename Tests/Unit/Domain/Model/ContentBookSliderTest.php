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
 * Test case for class Tx_D3Evgtools_Domain_Model_ContentBookSlider.
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
class Tx_D3Evgtools_Domain_Model_ContentBookSliderTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_D3Evgtools_Domain_Model_ContentBookSlider
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_D3Evgtools_Domain_Model_ContentBookSlider();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getBookSlidersReturnsInitialValueForObjectStorageContainingTx_D3Evgtools_Domain_Model_BookSlider() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getBookSliders()
		);
	}

	/**
	 * @test
	 */
	public function setBookSlidersForObjectStorageContainingTx_D3Evgtools_Domain_Model_BookSliderSetsBookSliders() { 
		$bookSlider = new Tx_D3Evgtools_Domain_Model_BookSlider();
		$objectStorageHoldingExactlyOneBookSliders = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneBookSliders->attach($bookSlider);
		$this->fixture->setBookSliders($objectStorageHoldingExactlyOneBookSliders);

		$this->assertSame(
			$objectStorageHoldingExactlyOneBookSliders,
			$this->fixture->getBookSliders()
		);
	}
	
	/**
	 * @test
	 */
	public function addBookSliderToObjectStorageHoldingBookSliders() {
		$bookSlider = new Tx_D3Evgtools_Domain_Model_BookSlider();
		$objectStorageHoldingExactlyOneBookSlider = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneBookSlider->attach($bookSlider);
		$this->fixture->addBookSlider($bookSlider);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneBookSlider,
			$this->fixture->getBookSliders()
		);
	}

	/**
	 * @test
	 */
	public function removeBookSliderFromObjectStorageHoldingBookSliders() {
		$bookSlider = new Tx_D3Evgtools_Domain_Model_BookSlider();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($bookSlider);
		$localObjectStorage->detach($bookSlider);
		$this->fixture->addBookSlider($bookSlider);
		$this->fixture->removeBookSlider($bookSlider);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getBookSliders()
		);
	}
	
}
?>