<?php

class Tx_D3Evgtools_ViewHelpers_FillSliderViewHelper extends Tx_Fluid_Core_ViewHelper_AbstractViewHelper {

	/**
	 * renders <f:then> child if $condition is true, otherwise renders <f:else> child.
	 *
	 * @param int $count
	 * @param int $total
	 * @param int $modulo
	 * @return boolean
	 * @api
	 */
	public function render($count, $total, $modulo) {
		if($total % $modulo <= $count &&  $count < $modulo){
			return true;
			
		}
		return false;
	}
}
?>
