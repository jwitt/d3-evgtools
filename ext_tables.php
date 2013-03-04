<?php
if (!defined('TYPO3_MODE')) {
	die ('Access denied.');
}

Tx_Extbase_Utility_Extension::registerPlugin(
	$_EXTKEY,
	'Pi1',
	'd3_evgtools'
);

t3lib_extMgm::addStaticFile($_EXTKEY, 'Configuration/TypoScript', 'EVG Tools');

t3lib_extMgm::addLLrefForTCAdescr('tx_d3evgtools_domain_model_bookslider', 'EXT:d3_evgtools/Resources/Private/Language/locallang_csh_tx_d3evgtools_domain_model_bookslider.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_d3evgtools_domain_model_bookslider');
$TCA['tx_d3evgtools_domain_model_bookslider'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_bookslider',
		'label' => 'image',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'image,link,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/BookSlider.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_d3evgtools_domain_model_bookslider.gif'
	),
);

$tmp_d3_evgtools_columns = array(

	'book_sliders' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntbookslider.book_sliders',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_d3evgtools_domain_model_bookslider',
			'foreign_field' => 'cntbookslider',
			'maxitems'      => 999,
			'appearance' => array(
				'collapseAll' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),
	),
);

t3lib_extMgm::addTCAcolumns('tt_content',$tmp_d3_evgtools_columns);

$TCA['tt_content']['columns'][$TCA['tt_content']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tt_content.tx_extbase_type.Tx_D3Evgtools_CntBookSlider','Tx_D3Evgtools_CntBookSlider');

$TCA['tt_content']['types']['Tx_D3Evgtools_CntBookSlider']['showitem'] = $TCA['tt_content']['types']['1']['showitem'];
$TCA['tt_content']['types']['Tx_D3Evgtools_CntBookSlider']['showitem'] .= ',hidden,header,colPos,--div--;LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntbookslider,';
$TCA['tt_content']['types']['Tx_D3Evgtools_CntBookSlider']['showitem'] .= 'book_sliders';

$tmp_d3_evgtools_columns = array(

	'content_sliders' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntcntslider.content_sliders',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_d3evgtools_domain_model_contentslider',
			'foreign_field' => 'cntcntslider',
			'maxitems'      => 999,
			'appearance' => array(
				'collapseAll' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),
	),
);

t3lib_extMgm::addTCAcolumns('tt_content',$tmp_d3_evgtools_columns);

$TCA['tt_content']['columns'][$TCA['tt_content']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tt_content.tx_extbase_type.Tx_D3Evgtools_CntCntSlider','Tx_D3Evgtools_CntCntSlider');

$TCA['tt_content']['types']['Tx_D3Evgtools_CntCntSlider']['showitem'] = $TCA['tt_content']['types']['1']['showitem'];
$TCA['tt_content']['types']['Tx_D3Evgtools_CntCntSlider']['showitem'] .= ',hidden,colPos,--div--;LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntcntslider,';
$TCA['tt_content']['types']['Tx_D3Evgtools_CntCntSlider']['showitem'] .= 'content_sliders';

t3lib_extMgm::addLLrefForTCAdescr('tx_d3evgtools_domain_model_contentslider', 'EXT:d3_evgtools/Resources/Private/Language/locallang_csh_tx_d3evgtools_domain_model_contentslider.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_d3evgtools_domain_model_contentslider');
$TCA['tx_d3evgtools_domain_model_contentslider'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_contentslider',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,content,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/ContentSlider.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_d3evgtools_domain_model_contentslider.gif'
	),
);

$tmp_d3_evgtools_columns = array(

	'count' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntrandom.count',
		'config' => array(
			'type' => 'input',
			'size' => 30,
			'eval' => 'trim'
		),
	),
	'random_contents' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntrandom.random_contents',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_d3evgtools_domain_model_randomcontent',
			'foreign_field' => 'cntrandom',
			'maxitems'      => 9999,
			'appearance' => array(
				'collapseAll' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),
	),
	'random_pages' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntrandom.random_pages',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_d3evgtools_domain_model_randompage',
			'foreign_field' => 'cntrandom',
			'maxitems'      => 1,
			'appearance' => array(
				'collapseAll' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),
	),
);

t3lib_extMgm::addTCAcolumns('tt_content',$tmp_d3_evgtools_columns);

$TCA['tt_content']['columns'][$TCA['tt_content']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tt_content.tx_extbase_type.Tx_D3Evgtools_CntRandom','Tx_D3Evgtools_CntRandom');

$TCA['tt_content']['types']['Tx_D3Evgtools_CntRandom']['showitem'] = $TCA['tt_content']['types']['1']['showitem'];
$TCA['tt_content']['types']['Tx_D3Evgtools_CntRandom']['showitem'] .= ',hidden,colPos,--div--;LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntrandom,';
$TCA['tt_content']['types']['Tx_D3Evgtools_CntRandom']['showitem'] .= 'count, random_contents, random_pages';

t3lib_extMgm::addLLrefForTCAdescr('tx_d3evgtools_domain_model_randomcontent', 'EXT:d3_evgtools/Resources/Private/Language/locallang_csh_tx_d3evgtools_domain_model_randomcontent.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_d3evgtools_domain_model_randomcontent');
$TCA['tx_d3evgtools_domain_model_randomcontent'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_randomcontent',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,content,colpos,page,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/RandomContent.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_d3evgtools_domain_model_randomcontent.gif'
	),
);

t3lib_extMgm::addLLrefForTCAdescr('tx_d3evgtools_domain_model_randompage', 'EXT:d3_evgtools/Resources/Private/Language/locallang_csh_tx_d3evgtools_domain_model_randompage.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_d3evgtools_domain_model_randompage');
$TCA['tx_d3evgtools_domain_model_randompage'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_randompage',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,page,colpos,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/RandomPage.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_d3evgtools_domain_model_randompage.gif'
	),
);

$tmp_d3_evgtools_columns = array(

);

t3lib_extMgm::addTCAcolumns('tt_content',$tmp_d3_evgtools_columns);

$TCA['tt_content']['columns'][$TCA['tt_content']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tt_content.tx_extbase_type.Tx_D3Evgtools_Content','Tx_D3Evgtools_Content');

$TCA['tt_content']['types']['Tx_D3Evgtools_Content']['showitem'] = $TCA['tt_content']['types']['1']['showitem'];
$TCA['tt_content']['types']['Tx_D3Evgtools_Content']['showitem'] .= ',hidden,colPos,--div--;LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_content,';
$TCA['tt_content']['types']['Tx_D3Evgtools_Content']['showitem'] .= '';

$tmp_d3_evgtools_columns = array(

	'active_tab' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntaccordion.active_tab',
		'config' => array(
			'type' => 'text',
			'cols' => 40,
			'rows' => 15,
			'eval' => 'trim'
		),
	),
	'accordion_contents' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntaccordion.accordion_contents',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_d3evgtools_domain_model_accordioncontent',
			'foreign_field' => 'cntaccordion',
			'maxitems'      => 1,
			'appearance' => array(
				'collapseAll' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),
	),
);

t3lib_extMgm::addTCAcolumns('tt_content',$tmp_d3_evgtools_columns);

$TCA['tt_content']['columns'][$TCA['tt_content']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tt_content.tx_extbase_type.Tx_D3Evgtools_CntAccordion','Tx_D3Evgtools_CntAccordion');

$TCA['tt_content']['types']['Tx_D3Evgtools_CntAccordion']['showitem'] = $TCA['tt_content']['types']['1']['showitem'];
$TCA['tt_content']['types']['Tx_D3Evgtools_CntAccordion']['showitem'] .= ',hidden,colPos,--div--;LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntaccordion,';
$TCA['tt_content']['types']['Tx_D3Evgtools_CntAccordion']['showitem'] .= 'active_tab, accordion_contents';

t3lib_extMgm::addLLrefForTCAdescr('tx_d3evgtools_domain_model_accordioncontent', 'EXT:d3_evgtools/Resources/Private/Language/locallang_csh_tx_d3evgtools_domain_model_accordioncontent.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_d3evgtools_domain_model_accordioncontent');
$TCA['tx_d3evgtools_domain_model_accordioncontent'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_accordioncontent',
		'label' => 'name',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'name,title,content,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/AccordionContent.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_d3evgtools_domain_model_accordioncontent.gif'
	),
);

$tmp_d3_evgtools_columns = array(

	'content_content' => array(
		'exclude' => 0,
		'label' => 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntcontent.content_content',
		'config' => array(
			'type' => 'inline',
			'foreign_table' => 'tx_d3evgtools_domain_model_contentcontent',
			'foreign_field' => 'cntcontent',
			'maxitems'      => 1,
			'appearance' => array(
				'collapseAll' => 0,
				'levelLinksPosition' => 'top',
				'showSynchronizationLink' => 1,
				'showPossibleLocalizationRecords' => 1,
				'showAllLocalizationLink' => 1
			),
		),
	),
);

t3lib_extMgm::addTCAcolumns('tt_content',$tmp_d3_evgtools_columns);

$TCA['tt_content']['columns'][$TCA['tt_content']['ctrl']['type']]['config']['items'][] = array('LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tt_content.tx_extbase_type.Tx_D3Evgtools_CntContent','Tx_D3Evgtools_CntContent');

$TCA['tt_content']['types']['Tx_D3Evgtools_CntContent']['showitem'] = $TCA['tt_content']['types']['1']['showitem'];
$TCA['tt_content']['types']['Tx_D3Evgtools_CntContent']['showitem'] .= ',hidden,header,layout,section_frame,colPos,--div--;LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_cntcontent,';
$TCA['tt_content']['types']['Tx_D3Evgtools_CntContent']['showitem'] .= 'content_content';

t3lib_extMgm::addLLrefForTCAdescr('tx_d3evgtools_domain_model_contentcontent', 'EXT:d3_evgtools/Resources/Private/Language/locallang_csh_tx_d3evgtools_domain_model_contentcontent.xml');
t3lib_extMgm::allowTableOnStandardPages('tx_d3evgtools_domain_model_contentcontent');
$TCA['tx_d3evgtools_domain_model_contentcontent'] = array(
	'ctrl' => array(
		'title'	=> 'LLL:EXT:d3_evgtools/Resources/Private/Language/locallang_db.xml:tx_d3evgtools_domain_model_contentcontent',
		'label' => 'page',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'dividers2tabs' => TRUE,
		'sortby' => 'sorting',
		'versioningWS' => 2,
		'versioning_followPages' => TRUE,
		'origUid' => 't3_origuid',
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => array(
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		),
		'searchFields' => 'page,col_pos,',
		'dynamicConfigFile' => t3lib_extMgm::extPath($_EXTKEY) . 'Configuration/TCA/ContentContent.php',
		'iconfile' => t3lib_extMgm::extRelPath($_EXTKEY) . 'Resources/Public/Icons/tx_d3evgtools_domain_model_contentcontent.gif'
	),
);

## EXTENSION BUILDER DEFAULTS END TOKEN - Everything BEFORE this line is overwritten with the defaults of the extension builder
?>