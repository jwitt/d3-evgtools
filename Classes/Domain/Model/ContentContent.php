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
class Tx_D3Evgtools_Domain_Model_ContentContent extends Tx_D3Evgtools_Domain_Model_Abstract {

	/**
	 * pageUid
	 *
	 * @var int
	 */
	protected $pageUid;

	/**
	 * page
	 *
	 * @var string
	 */
	protected $page;

	/**
	 * colPos
	 *
	 * @var integer
	 */
	protected $colPos;

	/**
	 * Returns the page
	 *
	 * @return string $page
	 */
	public function getPage() {
		return $this->page;
	}

	/**
	 * Sets the page
	 *
	 * @param string $page
	 * @return void
	 */
	public function setPage($page) {
		$this->page = $page;
	}

	/**
	 * Returns the
	 *
	 * @return int $pageUid
	 */
	public function getPageUid() {
		return $this->pageUid;
	}

	/**
	 * Sets the PageUid
	 *
	 * @param int $pageUid
	 * @return void
	 */
	public function setPageUid($pageUid) {
		$this->pageUid = $pageUid;
	}

	/**
	 * Returns the colPos
	 *
	 * @return integer $colPos
	 */
	public function getColPos() {
		return $this->colPos;
	}

	/**
	 * Sets the colPos
	 *
	 * @param integer $colPos
	 * @return void
	 */
	public function setColPos($colPos) {
		$this->colPos = $colPos;
	}

}
?>