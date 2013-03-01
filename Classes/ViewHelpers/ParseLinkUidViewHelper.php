<?php

class Tx_D3Evgtools_ViewHelpers_ParseLinkUidViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * renders <f:then> child if $condition is true, otherwise renders <f:else> child.
	 *
	 * @param string $link
	 * @return string the rendered string
	 * @api
	 */
	public function render($link) {
		return (int)$link;
	}
}
?>
