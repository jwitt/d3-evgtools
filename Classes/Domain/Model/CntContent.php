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
class Tx_D3Evgtools_Domain_Model_CntContent extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * contentContent
	 *
	 * @var Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_ContentContent>
	 */
	protected $contentContent;

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
		$this->contentContent = new Tx_Extbase_Persistence_ObjectStorage();
	}

	/**
	 * Adds a ContentContent
	 *
	 * @param Tx_D3Evgtools_Domain_Model_ContentContent $contentContent
	 * @return void
	 */
	public function addContentContent(Tx_D3Evgtools_Domain_Model_ContentContent $contentContent) {
		$this->contentContent->attach($contentContent);
	}

	/**
	 * Removes a ContentContent
	 *
	 * @param Tx_D3Evgtools_Domain_Model_ContentContent $contentContentToRemove The ContentContent to be removed
	 * @return void
	 */
	public function removeContentContent(Tx_D3Evgtools_Domain_Model_ContentContent $contentContentToRemove) {
		$this->contentContent->detach($contentContentToRemove);
	}

	/**
	 * Returns the contentContent
	 *
	 * @return Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_ContentContent> $contentContent
	 */
	public function getContentContent() {
		return $this->contentContent;
	}

	/**
	 * Sets the contentContent
	 *
	 * @param Tx_Extbase_Persistence_ObjectStorage<Tx_D3Evgtools_Domain_Model_ContentContent> $contentContent
	 * @return void
	 */
	public function setContentContent(Tx_Extbase_Persistence_ObjectStorage $contentContent) {
		$this->contentContent = $contentContent;
	}

}
?>