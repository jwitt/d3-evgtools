<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::configurePlugin(
	$_EXTKEY,
	'Pi1',
	array(
		'BookSlider' => 'showBookSlider',
		'ContentSlider' => 'showContentSlider',
		'RandomContent' => 'showRandomContent',
		'RandomPage' => 'showRandomPage',
		'Content' => '',
		'AccordionContent' => 'showAccordion',
		'ContentContent' => 'showContent',
		'MagazineSlider' => 'showMagazineSlider',
		
	),
	// non-cacheable actions
	array(
		'BookSlider' => '',
		'ContentSlider' => '',
		'RandomContent' => '',
		'RandomPage' => '',
		'Content' => '',
		'AccordionContent' => '',
		'ContentContent' => '',
		'MagazineSlider' => '',
		
	)
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder

$_EXTCONF = unserialize($_EXTCONF);	// unserializing the configuration so we can use it here:
if ($_EXTCONF['setPageTSconfig'])	{
	t3lib_extMgm::addPageTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:d3_evgtools/Configuration/TypoScript/pageTsConfig.ts">');
}

if ($_EXTCONF['setUserTSconfig']) {
	t3lib_extMgm::addUserTSConfig('<INCLUDE_TYPOSCRIPT: source="FILE:EXT:d3_evgtools/Configuration/TypoScript/pageTsConfig.ts">');
}
?>