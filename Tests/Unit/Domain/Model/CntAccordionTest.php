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
 * Test case for class Tx_D3Evgtools_Domain_Model_CntAccordion.
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
class Tx_D3Evgtools_Domain_Model_CntAccordionTest extends Tx_Extbase_Tests_Unit_BaseTestCase {
	/**
	 * @var Tx_D3Evgtools_Domain_Model_CntAccordion
	 */
	protected $fixture;

	public function setUp() {
		$this->fixture = new Tx_D3Evgtools_Domain_Model_CntAccordion();
	}

	public function tearDown() {
		unset($this->fixture);
	}

	/**
	 * @test
	 */
	public function getActiveTabReturnsInitialValueForInteger() { 
		$this->assertSame(
			0,
			$this->fixture->getActiveTab()
		);
	}

	/**
	 * @test
	 */
	public function setActiveTabForIntegerSetsActiveTab() { 
		$this->fixture->setActiveTab(12);

		$this->assertSame(
			12,
			$this->fixture->getActiveTab()
		);
	}
	
	/**
	 * @test
	 */
	public function getAccordionContentsReturnsInitialValueForObjectStorageContainingTx_D3Evgtools_Domain_Model_AccordionContent() { 
		$newObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->fixture->getAccordionContents()
		);
	}

	/**
	 * @test
	 */
	public function setAccordionContentsForObjectStorageContainingTx_D3Evgtools_Domain_Model_AccordionContentSetsAccordionContents() { 
		$accordionContent = new Tx_D3Evgtools_Domain_Model_AccordionContent();
		$objectStorageHoldingExactlyOneAccordionContents = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneAccordionContents->attach($accordionContent);
		$this->fixture->setAccordionContents($objectStorageHoldingExactlyOneAccordionContents);

		$this->assertSame(
			$objectStorageHoldingExactlyOneAccordionContents,
			$this->fixture->getAccordionContents()
		);
	}
	
	/**
	 * @test
	 */
	public function addAccordionContentToObjectStorageHoldingAccordionContents() {
		$accordionContent = new Tx_D3Evgtools_Domain_Model_AccordionContent();
		$objectStorageHoldingExactlyOneAccordionContent = new Tx_Extbase_Persistence_ObjectStorage();
		$objectStorageHoldingExactlyOneAccordionContent->attach($accordionContent);
		$this->fixture->addAccordionContent($accordionContent);

		$this->assertEquals(
			$objectStorageHoldingExactlyOneAccordionContent,
			$this->fixture->getAccordionContents()
		);
	}

	/**
	 * @test
	 */
	public function removeAccordionContentFromObjectStorageHoldingAccordionContents() {
		$accordionContent = new Tx_D3Evgtools_Domain_Model_AccordionContent();
		$localObjectStorage = new Tx_Extbase_Persistence_ObjectStorage();
		$localObjectStorage->attach($accordionContent);
		$localObjectStorage->detach($accordionContent);
		$this->fixture->addAccordionContent($accordionContent);
		$this->fixture->removeAccordionContent($accordionContent);

		$this->assertEquals(
			$localObjectStorage,
			$this->fixture->getAccordionContents()
		);
	}
	
}
?>