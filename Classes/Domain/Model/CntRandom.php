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
class Tx_D3Evgtools_Domain_Model_CntRandom extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Anzahl der Zufallsinhalte
	 *
	 * @var string
	 */
	protected $count;

	/**
	 * randomContents
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_RandomContent>
	 * @lazy
	 */
	protected $randomContents;

	/**
	 * randomPages
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_RandomPage>
	 * @lazy
	 */
	protected $randomPages;

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
		$this->randomContents = new Tx_Extbase_Persistence_ObjectStorage();
		
		$this->randomPages = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Adds a RandomContent
	 *
	 * @param Tx_D3Evgtools_Domain_Model_RandomContent $randomContent
	 * @return void
	 */
	public function addRandomContent(Tx_D3Evgtools_Domain_Model_RandomContent $randomContent) {
		$this->randomContents->attach($randomContent);
	}

	/**
	 * Removes a RandomContent
	 *
	 * @param Tx_D3Evgtools_Domain_Model_RandomContent $randomContentToRemove The RandomContent to be removed
	 * @return void
	 */
	public function removeRandomContent(Tx_D3Evgtools_Domain_Model_RandomContent $randomContentToRemove) {
		$this->randomContents->detach($randomContentToRemove);
	}

	/**
	 * Returns the randomContents
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_RandomContent> $randomContents
	 */
	public function getRandomContents() {
		return $this->randomContents;
	}

	/**
	 * Sets the randomContents
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_RandomContent> $randomContents
	 * @return void
	 */
	public function setRandomContents(Tx_Extbase_Persistence_ObjectStorage $randomContents) {
		$this->randomContents = $randomContents;
	}

	/**
	 * Returns the count
	 *
	 * @return string $count
	 */
	public function getCount() {
		return $this->count;
	}

	/**
	 * Sets the count
	 *
	 * @param string $count
	 * @return void
	 */
	public function setCount($count) {
		$this->count = $count;
	}

	/**
	 * Adds a RandomPage
	 *
	 * @param Tx_D3Evgtools_Domain_Model_RandomPage $randomPage
	 * @return void
	 */
	public function addRandomPage(Tx_D3Evgtools_Domain_Model_RandomPage $randomPage) {
		$this->randomPages->attach($randomPage);
	}

	/**
	 * Removes a RandomPage
	 *
	 * @param Tx_D3Evgtools_Domain_Model_RandomPage $randomPageToRemove The RandomPage to be removed
	 * @return void
	 */
	public function removeRandomPage(Tx_D3Evgtools_Domain_Model_RandomPage $randomPageToRemove) {
		$this->randomPages->detach($randomPageToRemove);
	}

	/**
	 * Returns the randomPages
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_RandomPage> $randomPages
	 */
	public function getRandomPages() {
		return $this->randomPages;
	}

	/**
	 * Sets the randomPages
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_RandomPage> $randomPages
	 * @return void
	 */
	public function setRandomPages(Tx_Extbase_Persistence_ObjectStorage $randomPages) {
		$this->randomPages = $randomPages;
	}

}
?>