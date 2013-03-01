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
 * Test case for class Tx_D3Evgtools_Domain_Model_ContentContentSlider.
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
class Tx_D3Evgtools_Domain_Model_ContentContentSliderTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_D3Evgtools_Domain_Model_ContentContentSlider
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_D3Evgtools_Domain_Model_ContentContentSlider();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getContentSlidersReturnsInitialValueForObjectStorageContainingTx_D3Evgtools_Domain_Model_ContentSlider() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getContentSliders()
		);
	}

	/**
	 * @test
	 */
	public function setContentSlidersForObjectStorageContainingTx_D3Evgtools_Domain_Model_ContentSliderSetsContentSliders() { 
		$contentSlider = new Tx_D3Evgtools_Domain_Model_ContentSlider();
		$objectStorageHoldingExactlyOneContentSliders = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneContentSliders->attach($contentSlider);
		$this->fixture->setContentSliders($objectStorageHoldingExactlyOneContentSliders);

		$this->assertSame(
			$objectStorageHoldingExactlyOneContentSliders,
			$this->fixture->getContentSliders()
		);
	}
	
	/**
	 * @test
	 */
	public function addContentSliderToObjectStorageHoldingContentSliders() {
		$contentSlider = new Tx_D3Evgtools_Domain_Model_ContentSlider();
		$objectStorageHoldingExactlyOneContentSlider = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneContentSlider->attach($contentSlider);
		$this->fixture->addContentSlider($contentSlider);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneContentSlider,
			$this->fixture->getContentSliders()
		);
	}

	/**
	 * @test
	 */
	public function removeContentSliderFromObjectStorageHoldingContentSliders() {
		$contentSlider = new Tx_D3Evgtools_Domain_Model_ContentSlider();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($contentSlider);
		$localObjectStorage->detach($contentSlider);
		$this->fixture->addContentSlider($contentSlider);
		$this->fixture->removeContentSlider($contentSlider);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getContentSliders()
		);
	}
	
}
?>