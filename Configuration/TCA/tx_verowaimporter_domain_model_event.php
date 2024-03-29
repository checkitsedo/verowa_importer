<?php
return [
	'ctrl' => [
		'title' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event',
		'label' => 'event_id',
		'tstamp' => 'tstamp',
		'crdate' => 'crdate',
		'cruser_id' => 'cruser_id',
		'sortby' => 'sorting',
		'versioningWS' => true,
		'languageField' => 'sys_language_uid',
		'transOrigPointerField' => 'l10n_parent',
		'transOrigDiffSourceField' => 'l10n_diffsource',
		'delete' => 'deleted',
		'enablecolumns' => [
			'disabled' => 'hidden',
			'starttime' => 'starttime',
			'endtime' => 'endtime',
		],
		'searchFields' => 'event_id,title,short_desc,long_desc,childcare_id,subs_person_id,baptism_offer_id,date_text,image_url,rooms',
		'iconfile' => 'EXT:verowa_importer/Resources/Public/Icons/tx_verowaimporter_domain_model_event.gif'
	],
	'external' => [
		'general' => [
			0 => [
				'connector' => 'json',
				'parameters' => [
					'uri' => 'https://api.verowa.ch/geteventdetails/stjosef-zuerich/1ad89c27e1a89ef6aa34f34e4adf7448/0',
					'encoding' => 'utf-8',
					'headers' => [
						'User-Agent' => 'Mozilla/5.0 (Macintosh; Intel Mac OS X 10.15; rv:75.0) Gecko/20100101 Firefox/75.0',
						'Accept' => 'application/json'
					],
				],
				'data' => 'array',
				'arrayPath' => 'events',
				'referenceUid' => 'event_id',
				'group' => 'stjosef',
				'priority' => 10,
				'description' => 'Import of all events from Verowa'
			],
		],
	],
	'types' => [
		'1' => ['showitem' => 'sys_language_uid, l10n_parent, l10n_diffsource, hidden, event_id, date_from, date_to, title, hide_time, short_desc, long_desc, childcare_id, subs_date, subs_person_id, baptism_offer_id, date_text, image_url, organizer, rooms, --div--;LLL:EXT:frontend/Resources/Private/Language/locallang_ttc.xlf:tabs.access, starttime, endtime'],
	],
	'columns' => [
		'sys_language_uid' => [
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.language',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'special' => 'languages',
				'items' => [
					[
						'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.allLanguages',
						-1,
						'flags-multiple'
					],
				],
				'default' => 0,
			],
		],
		'l10n_parent' => [
			'displayCond' => 'FIELD:sys_language_uid:>:0',
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.l18n_parent',
			'config' => [
				'type' => 'select',
				'renderType' => 'selectSingle',
				'default' => 0,
				'items' => [
					['', 0],
				],
				'foreign_table' => 'tx_verowaimporter_domain_model_event',
				'foreign_table_where' => 'AND {#tx_verowaimporter_domain_model_event}.{#pid}=###CURRENT_PID### AND {#tx_verowaimporter_domain_model_event}.{#sys_language_uid} IN (-1,0)',
			],
		],
		'l10n_diffsource' => [
			'config' => [
				'type' => 'passthrough',
			],
		],
		'hidden' => [
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.visible',
			'config' => [
				'type' => 'check',
				'renderType' => 'checkboxToggle',
				'items' => [
					[
						0 => '',
						1 => '',
						'invertStateDisplay' => true
					],
				],
			],
		],
		'starttime' => [
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.starttime',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'eval' => 'datetime,int',
				'default' => 0,
				'behaviour' => [
					'allowLanguageSynchronization' => true
				],
			],
		],
		'endtime' => [
			'exclude' => true,
			'label' => 'LLL:EXT:core/Resources/Private/Language/locallang_general.xlf:LGL.endtime',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'eval' => 'datetime,int',
				'default' => 0,
				'range' => [
					'upper' => mktime(0, 0, 0, 1, 1, 2038)
				],
				'behaviour' => [
					'allowLanguageSynchronization' => true
				],
			],
		],

		'event_id' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.event_id',
			'config' => [
				'type' => 'input',
			],
			'external' => [
				0 => [
					'field' => 'event_id'
				],
			],
		],
		'date_from' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.date_from',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'eval' => 'datetime',
			],
			'external' => [
				0 => [
					'field' => 'date_from',
					'transformations' => [
						10 => [
							'userFunction' => [
								'class' => \Cobweb\ExternalImport\Transformation\DateTimeTransformation::class,
								'method' => 'parseDate',
								'parameters' => [
									'enforceTimeZone' => true
								],
							],
						],
					],
				],
			],
		],
		'date_to' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.date_to',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'eval' => 'datetime',
			],
			'external' => [
				0 => [
					'field' => 'date_to',
					'transformations' => [
						10 => [
							'userFunction' => [
								'class' => \Cobweb\ExternalImport\Transformation\DateTimeTransformation::class,
								'method' => 'parseDate',
								'parameters' => [
									'enforceTimeZone' => true
								],
							],
						],
					],
				],
			],
		],
		'date_text' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.date_text',
			'config' => [
				'type' => 'input',
				'size' => 50,
				'max' => 255,
				'eval' => 'trim',
			],
			'external' => [
				0 => [
					'field' => 'date_text'
				],
			],
		],
		'hide_time' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.hide_time',
			'config' => [
				'type' => 'check',
				'renderType' => 'checkboxToggle',
				'items' => [
					[
						0 => '',
						1 => '',
					],
				],
				'default' => 0,
			],
			'external' => [
				0 => [
					'field' => 'hide_time'
				],
			],
		],
		'title' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.title',
			'config' => [
				'type' => 'input',
				'size' => 50,
				'max' => 255,
				'eval' => 'trim',
			],
			'external' => [
				0 => [
					'field' => 'title'
				],
			],
		],
		'topic' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.topic',
			'config' => [
				'type' => 'input',
				'size' => 50,
				'max' => 255,
				'eval' => 'trim',
			],
			'external' => [
				0 => [
					'field' => 'topic'
				],
			],
		],
		'short_desc' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.short_desc',
			'config' => [
				'type' => 'text',
			], 
			'external' => [
				0 => [
					'field' => 'short_desc'
				],
			],
		],
		'long_desc' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.long_desc',
			'config' => [
				'type' => 'text',
				'enableRichtext' => true,
				'richtextConfiguration' => 'default',
				'fieldControl' => [
					'fullScreenRichtext' => [
						'disabled' => false,
					],
				],
				'cols' => 40,
				'rows' => 15,
				'eval' => 'trim',
			],
			'external' => [
				0 => [
					'field' => 'long_desc'
				],
			],
		],
		'organizer' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.organizer',
			'config' => [
				'type' => 'group',
				'allowed' => 'tx_verowaimporter_domain_model_person',
				'foreign_table' => 'tx_verowaimporter_domain_model_person',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
				'default' => 0,
				'fieldControl' => [
					'addRecord' => [
						'disabled' => false,
					],
				],
			],
		],
		'coorganizers' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.coorganizers',
			'config' => [
				'type' => 'group',
				'allowed' => 'tx_verowaimporter_domain_model_person',
				'foreign_table' => 'tx_verowaimporter_domain_model_person',
				'size' => 5,
				'minitems' => 0,
				'maxitems' => 100,
				'default' => 0,
				'MM' => 'tx_verowaimporter_event_person_mm',
				'behaviour' => [
					'allowLanguageSynchronization' => true,
				],
				'fieldControl' => [
					'addRecord' => [
						'disabled' => false,
					],
				],
			],
		],
		'further_coorganizer' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.further_coorganizer',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'further_coorganizer'
				],
			],
		],
		'catering' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.catering',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'catering'
				],
			],
		],
		'with_sacrament' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.with_sacrament',
			'config' => [
				'type' => 'check',
				'renderType' => 'checkboxToggle',
				'items' => [
					[
						0 => '',
						1 => '',
					],
				],
				'default' => 0,
			],
			'external' => [
				0 => [
					'field' => 'with_sacrament'
				],
			],
		],
		'childcare_id' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.childcare_id',
			'config' => [
				'type' => 'input',
				'size' => 50,
				'max' => 255,
				'eval' => 'trim',
			],
			'external' => [
				0 => [
					'field' => 'childcare_id'
				],
			],
		],
		'childcare_text' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.childcare_text',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'childcare_text'
				],
			],
		],
		'childcare_person' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.childcare_person',
			'config' => [
				'type' => 'group',
				'allowed' => 'tx_verowaimporter_domain_model_person',
				'foreign_table' => 'tx_verowaimporter_domain_model_person',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
				'default' => 0,
				'fieldControl' => [
					'addRecord' => [
						'disabled' => false,
					],
				],
			],
		],
		'additional_text1' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.additional_text1',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'additional_text1'
				],
			],
		],
		'additional_text1_label' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.additional_text1_label',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'additional_text1_label'
				],
			],
		],
		'additional_text2' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.additional_text2',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'additional_text2'
				],
			],
		],
		'additional_text2_label' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.additional_text2_label',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'additional_text2_label'
				],
			],
		],
		'additional_text4' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.additional_text4',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'additional_text4'
				],
			],
		],
		'additional_text4_label' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.additional_text4_label',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'additional_text4_label'
				],
			],
		],
		'subs_module_active' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.subs_module_active',
			'config' => [
				'type' => 'check',
				'renderType' => 'checkboxToggle',
				'items' => [
					[
						0 => '',
						1 => '',
					],
				],
				'default' => 0,
			],
			'external' => [
				0 => [
					'field' => 'subs_module_active'
				],
			],
		],
		'subs_date' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.subs_date',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputDateTime',
				'eval' => 'datetime',
			],
			'external' => [
				0 => [
					'field' => 'subs_date',
					'transformations' => [
						10 => [
							'userFunction' => [
								'class' => \Cobweb\ExternalImport\Transformation\DateTimeTransformation::class,
								'method' => 'parseDate',
								'parameters' => [
									'enforceTimeZone' => true
								],
							],
						],
					],
				],
			],
		],
		'subs_text' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.subs_text',
			'config' => [
				'type' => 'text',
			],
			'external' => [
				0 => [
					'field' => 'subs_text'
				],
			],
		],
		'subs_person_id' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.subs_person_id',
			'config' => [
				'type' => 'group',
				'allowed' => 'tx_verowaimporter_domain_model_person',
				'foreign_table' => 'tx_verowaimporter_domain_model_person',
				'size' => 1,
				'minitems' => 0,
				'maxitems' => 1,
				'default' => 0,
				'fieldControl' => [
					'addRecord' => [
						'disabled' => false,
					],
				],
			],
		],
		'datetime_text' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.datetime_text',
			'config' => [
				'type' => 'input',
				'size' => 50,
				'max' => 255,
				'eval' => 'trim',
			],
			'external' => [
				0 => [
					'field' => 'datetime_text'
				],
			],
		],
		'rooms' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.rooms',
			'config' => [
				'type' => 'group',
				'allowed' => 'tx_verowaimporter_domain_model_room',
				'foreign_table' => 'tx_verowaimporter_domain_model_room',
				'size' => 5,
				'minitems' => 0,
				'maxitems' => 100,
				'default' => 0,
				'MM' => 'tx_verowaimporter_event_room_mm',
				'behaviour' => [
					'allowLanguageSynchronization' => true,
				],
				'fieldControl' => [
					'addRecord' => [
						'disabled' => false,
					],
				],
			],
		],
		'image_url' => [
			'exclude' => true,
			'label' => 'LLL:EXT:verowa_importer/Resources/Private/Language/locallang_db.xlf:tx_verowaimporter_domain_model_event.image_url',
			'config' => [
				'type' => 'input',
				'renderType' => 'inputLink',
				'size' => 50,
				'max' => 255,
				'eval' => 'trim',
				'fieldControl' => [
					'linkPopup' => [
						'options' => [
							'blindLinkFields' => 'class, params, target, title',
							'blindLinkOptions' => 'file, folder, mail, page, spec, telephone',
						],
					],
				],
			],
			'external' => [
				0 => [
					'field' => 'image_url'
				],
			],
		],
  ],
];
