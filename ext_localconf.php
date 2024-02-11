<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
	static function()
	{
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'VerowaImporter',
			'Eventlist',
			[
				\Checkitsedo\VerowaImporter\Controller\EventController::class => 'list'
			],
			// non-cacheable actions
			[
				\Checkitsedo\VerowaImporter\Controller\EventController::class => 'list',
			]
		);
		
		\TYPO3\CMS\Extbase\Utility\ExtensionUtility::configurePlugin(
			'VerowaImporter',
			'Eventdetails',
			[
				\Checkitsedo\VerowaImporter\Controller\EventController::class => 'show'
			],
			// non-cacheable actions
			[
				\Checkitsedo\VerowaImporter\Controller\EventController::class => '',
			]
		);

    \TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
      '<INCLUDE_TYPOSCRIPT: source="FILE:EXT:verowa_importer/Configuration/TsConfig/Page/Mod/Wizards/NewContentElement.tsconfig">'
    );
		
		$icons = [
      'verowa_importer-plugin-eventlist' => 'EXT:verowa_importer/Resources/Public/Icons/user_plugin_eventlist.svg',
			'verowa_importer-plugin-eventdetails' => 'EXT:verowa_importer/Resources/Public/Icons/user_plugin_eventdetails.svg',
    ];
		
		$iconRegistry = \TYPO3\CMS\Core\Utility\GeneralUtility::makeInstance(\TYPO3\CMS\Core\Imaging\IconRegistry::class);
		foreach ($icons as $identifier => $path) {
      $iconRegistry->registerIcon(
        $identifier,
        \TYPO3\CMS\Core\Imaging\IconProvider\SvgIconProvider::class,
        ['source' => $path]
      );
    };
		
		// wizards
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addPageTSConfig(
			'mod {
				wizards.newContentElement.wizardItems.plugins {
					elements {
						eventlist {
							iconIdentifier = verowa_importer-plugin-eventlist
							title = LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowa_importer_eventlist.name
							description = LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowa_importer_eventlist.description
							tt_content_defValues {
								CType = list
								list_type = verowaimporter_eventlist
							}
						}
						eventdetails {
							iconIdentifier = verowa_importer-plugin-eventdetails
							title = LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowa_importer_eventdetails.name
							description = LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowa_importer_eventdetails.description
							tt_content_defValues {
								CType = list
								list_type = verowaimporter_eventdetails
							}
						}
					}
					show = *
				}
			}'
		);
	}
);
