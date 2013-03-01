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
class Tx_D3Evgtools_Domain_Model_Abstract extends Tx_Extbase_DomainObject_AbstractEntity {

	/**
	 * Sorting
	 *
	 * @var int
	 */
	protected $sorting;

	/**
	 * contentUid
	 *
	 * @var int
	 */
	protected $contentUid;
	
	/**
	 * Returns the sorting
	 *
	 * @return int $sorting
	 */
	public function getSorting() {
		return $this->sorting;
	}

	/**
	 * Sets the sorting
	 *
	 * @param int $sorting
	 * @return void
	 */
	public function setSorting($sorting) {
		$this->sorting = $sorting;
	}
	
	/**
	 * Returns the 
	 *
	 * @return int $sliderContentUid
	 */
	public function getContentUid() {
		return $this->ContentUid;
	}

	
	/**
	 * Sets the ContentUid
	 *
	 * @param int $contentUid
	 * @return void
	 */
	public function setContentUid($contentUid) {
		$this->contentUid = $contentUid;
	}
	

}
?>