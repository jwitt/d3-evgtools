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
 * Test case for class Tx_D3Evgtools_Domain_Model_ContentRandom.
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
class Tx_D3Evgtools_Domain_Model_ContentRandomTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_D3Evgtools_Domain_Model_ContentRandom
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_D3Evgtools_Domain_Model_ContentRandom();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getCountReturnsInitialValueForString() { }

	/**
	 * @test
	 */
	public function setCountForStringSetsCount() { 
		$this->fixture->setCount('Conceived at T3CON10');

		$this->assertSame(
			'Conceived at T3CON10',
			$this->fixture->getCount()
		);
	}
	
	/**
	 * @test
	 */
	public function getRandomContentsReturnsInitialValueForObjectStorageContainingTx_D3Evgtools_Domain_Model_RandomContent() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getRandomContents()
		);
	}

	/**
	 * @test
	 */
	public function setRandomContentsForObjectStorageContainingTx_D3Evgtools_Domain_Model_RandomContentSetsRandomContents() { 
		$randomContent = new Tx_D3Evgtools_Domain_Model_RandomContent();
		$objectStorageHoldingExactlyOneRandomContents = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneRandomContents->attach($randomContent);
		$this->fixture->setRandomContents($objectStorageHoldingExactlyOneRandomContents);

		$this->assertSame(
			$objectStorageHoldingExactlyOneRandomContents,
			$this->fixture->getRandomContents()
		);
	}
	
	/**
	 * @test
	 */
	public function addRandomContentToObjectStorageHoldingRandomContents() {
		$randomContent = new Tx_D3Evgtools_Domain_Model_RandomContent();
		$objectStorageHoldingExactlyOneRandomContent = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneRandomContent->attach($randomContent);
		$this->fixture->addRandomContent($randomContent);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneRandomContent,
			$this->fixture->getRandomContents()
		);
	}

	/**
	 * @test
	 */
	public function removeRandomContentFromObjectStorageHoldingRandomContents() {
		$randomContent = new Tx_D3Evgtools_Domain_Model_RandomContent();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($randomContent);
		$localObjectStorage->detach($randomContent);
		$this->fixture->addRandomContent($randomContent);
		$this->fixture->removeRandomContent($randomContent);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getRandomContents()
		);
	}
	
	/**
	 * @test
	 */
	public function getRandomPagesReturnsInitialValueForObjectStorageContainingTx_D3Evgtools_Domain_Model_RandomPage() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getRandomPages()
		);
	}

	/**
	 * @test
	 */
	public function setRandomPagesForObjectStorageContainingTx_D3Evgtools_Domain_Model_RandomPageSetsRandomPages() { 
		$randomPage = new Tx_D3Evgtools_Domain_Model_RandomPage();
		$objectStorageHoldingExactlyOneRandomPages = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneRandomPages->attach($randomPage);
		$this->fixture->setRandomPages($objectStorageHoldingExactlyOneRandomPages);

		$this->assertSame(
			$objectStorageHoldingExactlyOneRandomPages,
			$this->fixture->getRandomPages()
		);
	}
	
	/**
	 * @test
	 */
	public function addRandomPageToObjectStorageHoldingRandomPages() {
		$randomPage = new Tx_D3Evgtools_Domain_Model_RandomPage();
		$objectStorageHoldingExactlyOneRandomPage = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneRandomPage->attach($randomPage);
		$this->fixture->addRandomPage($randomPage);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneRandomPage,
			$this->fixture->getRandomPages()
		);
	}

	/**
	 * @test
	 */
	public function removeRandomPageFromObjectStorageHoldingRandomPages() {
		$randomPage = new Tx_D3Evgtools_Domain_Model_RandomPage();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($randomPage);
		$localObjectStorage->detach($randomPage);
		$this->fixture->addRandomPage($randomPage);
		$this->fixture->removeRandomPage($randomPage);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getRandomPages()
		);
	}
	
}
?>