<?php
defined('TYPO3_MODE') || die('Access denied.');

call_user_func(
	static function()
	{
		
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimporter_domain_model_event',
			'EXT:verowa_importer/Resources/Private/Language/locallang_csh_tx_verowaimporter_domain_model_event.xlf'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
			'tx_verowaimporter_domain_model_event'
		);
		
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimporter_domain_model_person',
			'EXT:verowa_importer/Resources/Private/Language/locallang_csh_tx_verowaimporter_domain_model_person.xlf'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
			'tx_verowaimporter_domain_model_person'
		);
		
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::addLLrefForTCAdescr(
			'tx_verowaimporter_domain_model_room',
			'EXT:verowa_importer/Resources/Private/Language/locallang_csh_tx_verowaimporter_domain_model_room.xlf'
		);
		\TYPO3\CMS\Core\Utility\ExtensionManagementUtility::allowTableOnStandardPages(
			'tx_verowaimporter_domain_model_room'
		);
		
	}
);
