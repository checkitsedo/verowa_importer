<?php
defined('TYPO3_MODE') || die();

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VerowaImporter',
    'Eventlist',
    'LLL:EXT:verowa_importer/Resources/Private/Language/locallang.xlf:plugin.eventlist.title',
    'EXT:verowa_importer/Resources/Public/Icons/user_plugin_eventlist.svg'
);

\TYPO3\CMS\Extbase\Utility\ExtensionUtility::registerPlugin(
    'VerowaImporter',
    'Eventdetails',
    'LLL:EXT:verowa_importer/Resources/Private/Language/locallang.xlf:plugin.eventdetails.title',
    'EXT:verowa_importer/Resources/Public/Icons/user_plugin_eventdetails.svg'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['verowaimporter_eventlist'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'verowaimporter_eventlist',
    'FILE:EXT:verowa_importer/Configuration/FlexForms/PluginEventlist.xml'
);

$GLOBALS['TCA']['tt_content']['types']['list']['subtypes_addlist']['verowaimporter_eventdetails'] = 'pi_flexform';
\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPiFlexFormValue(
    'verowaimporter_eventdetails',
    'FILE:EXT:verowa_importer/Configuration/FlexForms/PluginEventdetails.xml'
);
