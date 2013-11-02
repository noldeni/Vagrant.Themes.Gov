<?php
return array(
	'BE' => array(
		'debug' => '1',
		'disable_exec_function' => 0,
		'installToolPassword' => 'bacb98acf97e0b6112b1d1b650b84971',
		'loginSecurityLevel' => 'rsa',
		'versionNumberInFilename' => '0',
	),
	'DB' => array(
		'database' => 't3-latest',
		'extTablesDefinitionScript' => 'extTables.php',
		'host' => 'localhost',
		'username' => 'root',
	),
	'EXT' => array(
		'extConf' => array(
			'basictemplate' => 'a:1:{s:9:"addPageTS";s:1:"1";}',
			'be_acl' => 'a:2:{s:26:"disableOldPermissionSystem";s:1:"0";s:20:"enableFilterSelector";s:1:"1";}',
			'beskin' => 'a:6:{s:13:"logintemplate";s:31:"EXT:t3skin/templates/login.html";s:13:"loginLogoPath";s:0:"";s:4:"logo";s:28:"typo3/gfx/typo3logo_mini.png";s:7:"cssFile";s:34:"EXT:beskin/stylesheets/changes.css";s:11:"replaceLogo";s:6:"append";s:4:"html";s:93:"<h1 style="color:orange;float:right;padding-left:20px;">LOCAL TESTSYSTEM %TYPO3_version%</h1>";}',
			'browser' => 'a:13:{s:13:"browserEngine";s:31:"Engine 4.x (alpha): recommended";s:22:"browserEngineIndicator";s:17:"Off (recommended)";s:17:"external_links_01";s:1:"0";s:8:"LLstatic";s:7:"English";s:17:"external_links_02";s:1:"0";s:8:"drs_mode";s:18:"Don\'t log anything";s:17:"external_links_03";s:1:"0";s:10:"checked_3.";a:1:{s:2:"9.";a:1:{i:14;s:36:"I didn\'t (frontend label is visible)";}}s:12:"updateWizard";s:1:"0";s:18:"updateWizardEnable";s:1:"0";s:9:"currentIP";s:1:"0";s:22:"updateWizardAllowedIPs";s:20:"127.0.0.1, 127.0.0.2";s:17:"external_links_04";s:1:"0";}',
			'browser_manual_en' => 'a:0:{}',
			'cal' => 'a:22:{s:13:"noTabDividers";s:1:"0";s:21:"hideLocationTextfield";s:1:"0";s:22:"hideOrganizerTextfield";s:1:"0";s:20:"useLocationStructure";s:15:"tx_cal_location";s:21:"useOrganizerStructure";s:16:"tx_cal_organizer";s:11:"todoSubtype";s:5:"event";s:16:"categoryTVHeight";s:3:"280";s:11:"treeOrderBy";s:3:"uid";s:9:"showTimes";s:1:"1";s:10:"newRecurUI";s:1:"1";s:9:"useTeaser";s:1:"0";s:17:"useRecordSelector";s:1:"0";s:20:"useNewRecurringModel";s:1:"1";s:20:"hideDeviationRecords";s:1:"1";s:15:"recurrenceStart";s:8:"20000101";s:13:"recurrenceEnd";s:8:"20201231";s:13:"updateMessage";s:1:"0";s:18:"useInternalCaching";s:1:"1";s:11:"cachingMode";s:6:"normal";s:13:"cacheLifetime";s:1:"0";s:13:"cachingEngine";s:8:"internal";s:30:"enableRealURLAutoConfiguration";s:1:"1";}',
			'cc_devlog' => 'a:0:{}',
			'contextswitcher' => 'a:1:{s:7:"context";s:10:"production";}',
			'coreupdate' => 'a:3:{s:24:"enableWarningForAllUsers";s:1:"0";s:17:"notificationSound";s:70:"EXT:coreupdate/Resources/Public/Sounds/Fire_pager-jason-1283464858.mp3";s:19:"enableBackendModule";s:1:"1";}',
			'dce' => 'a:4:{s:15:"enableDceModule";s:1:"1";s:21:"disableAutoClearCache";s:1:"0";s:17:"disableCodemirror";s:1:"0";s:24:"disablePreviewAutoUpdate";s:1:"0";}',
			'devlog' => 'a:12:{s:10:"maxLogRuns";s:2:"15";s:14:"entriesPerPage";s:2:"25";s:7:"maxRows";s:4:"1000";s:8:"optimize";s:1:"0";s:8:"dumpSize";s:7:"1000000";s:11:"minLogLevel";s:2:"-1";s:11:"excludeKeys";s:0:"";s:14:"highlightStyle";s:60:"padding: 2px; background-color: #fc3; border: 1px solid #666";s:16:"refreshFrequency";s:1:"2";s:13:"prototypePath";s:0:"";s:11:"autoCleanup";s:1:"0";s:8:"__meta__";N;}',
			'dyncss' => 'a:2:{s:5:"state";s:0:"";s:15:"enableDebugMode";s:1:"1";}',
			'dyncss_less' => 'a:0:{}',
			'dyncss_phpsass' => 'a:0:{}',
			'dyncss_test' => 'a:1:{s:9:"baseColor";s:7:"#0ff000";}',
			'easylogin' => 'a:5:{s:17:"usersAndPasswords";s:14:"admin|password";s:13:"use_devIPmask";s:1:"0";s:13:"iconPlacement";s:3:"top";s:11:"toolbarType";s:3:"top";s:12:"showUsername";s:4:"both";}',
			'extbase' => 'a:0:{}',
			'extdeveval' => 'a:0:{}',
			'extension_builder' => 'a:3:{s:15:"enableRoundtrip";s:0:"";s:15:"backupExtension";s:1:"1";s:9:"backupDir";s:35:"uploads/tx_extensionbuilder/backups";}',
			'extension_uploader' => 'a:0:{}',
			'fed' => 'a:9:{s:29:"enableBackendRecordController";s:1:"0";s:24:"enableFluidPageTemplates";s:1:"0";s:42:"enableFluidPageTemplateVariableInheritance";s:1:"0";s:31:"enableFallbackFluidPageTemplate";s:1:"0";s:18:"enableSolrFeatures";s:1:"0";s:21:"enableFrontendPlugins";s:1:"0";s:30:"enableIntegratedBackendLayouts";s:1:"0";s:28:"increaseExtbaseCacheLifetime";s:1:"0";s:35:"disableAutomaticTypoScriptInclusion";s:1:"0";}',
			'fire_devlog' => 'a:3:{s:13:"enableLogging";s:1:"1";s:15:"enableBELogging";s:1:"0";s:7:"iprange";s:0:"";}',
			'fluid' => 'a:0:{}',
			'fluid_css' => 'a:0:{}',
			'fluidcontent' => 'a:1:{s:9:"removeTab";s:1:"1";}',
			'fluidcontent_bootstrap' => 'a:0:{}',
			'fluidpages' => 'a:1:{s:8:"doktypes";s:0:"";}',
			'fluidpages_bootstrap' => 'a:0:{}',
			'flux' => 'a:3:{s:9:"debugMode";s:1:"0";s:7:"compact";s:1:"0";s:20:"rewriteLanguageFiles";s:1:"0";}',
			'gridelements' => 'a:1:{s:20:"additionalStylesheet";s:0:"";}',
			'kickstarter' => 'a:0:{}',
			'less' => 'a:1:{s:7:"version";s:5:"0.3.3";}',
			'loginprotection' => 'a:0:{}',
			'lwdevlogtoolbar' => 'a:0:{}',
			'naw_single_signon' => 'a:5:{s:17:"SSLPrivateKeyFile";s:20:"/path/to/private.key";s:13:"SSLPassphrase";s:0:"";s:15:"externalOpenssl";s:1:"0";s:15:"maxUsersPerPage";s:2:"15";s:13:"enable_fields";s:18:"name,address,email";}',
			'news' => 'a:11:{s:29:"removeListActionFromFlexforms";s:1:"2";s:20:"pageModuleFieldsNews";s:313:"LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_simple=title,datetime;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_advanced=title,datetime,teaser,category;LLL:EXT:news/Resources/Private/Language/locallang_be.xml:pagemodule_complex=title,datetime,teaser,category,archive;";s:24:"pageModuleFieldsCategory";s:17:"title,description";s:6:"tagPid";s:1:"1";s:13:"prependAtCopy";s:1:"1";s:19:"categoryRestriction";s:4:"none";s:22:"contentElementRelation";s:1:"1";s:13:"manualSorting";s:1:"0";s:11:"archiveDate";s:4:"date";s:12:"showImporter";s:1:"0";s:24:"showAdministrationModule";s:1:"1";}',
			'opendocs' => 'a:0:{}',
			'phpstorm' => 'a:0:{}',
			'phpunit' => 'a:6:{s:17:"excludeextensions";s:8:"lib, div";s:10:"phpunitlib";s:0:"";s:13:"selenium_host";s:9:"localhost";s:13:"selenium_port";s:4:"4444";s:16:"selenium_browser";s:8:"*firefox";s:19:"selenium_browserurl";s:0:"";}',
			'piwik' => 'a:1:{s:20:"showFaultyConfigHelp";s:1:"1";}',
			'piwikintegration' => 'a:6:{s:12:"emMakeHeader";s:0:"";s:19:"databaseTablePrefix";s:0:"";s:21:"enableIndependentMode";s:1:"0";s:19:"enableSchedulerTask";s:1:"0";s:21:"enableSchedulerLoging";s:1:"0";s:19:"piwikDownloadSource";s:0:"";}',
			'plupload' => 'a:0:{}',
			'powermail' => 'a:13:{s:10:"usePreview";s:1:"1";s:12:"cssSelection";s:1:"1";s:14:"feusersPrefill";s:70:"name, address, telephone, fax, email, zip, city, country, www, company";s:12:"disableIPlog";s:1:"0";s:20:"disableBackendModule";s:1:"0";s:16:"disableStartStop";s:1:"0";s:7:"useIRRE";s:1:"1";s:12:"fileToolPath";s:9:"/usr/bin/";s:12:"disableIpLog";s:1:"0";s:24:"disablePluginInformation";s:1:"0";s:13:"enableCaching";s:1:"0";s:15:"l10n_mode_merge";s:1:"0";s:29:"replaceIrreWithElementBrowser";s:1:"0";}',
			'powermail2document' => 'a:2:{s:8:"emDonate";s:0:"";s:11:"pdfRenderer";s:15:"fillFormWithPHP";}',
			'powermail_cond' => 'a:0:{}',
			'realurl' => 'a:5:{s:10:"configFile";s:26:"typo3conf/realurl_conf.php";s:14:"enableAutoConf";s:1:"1";s:14:"autoConfFormat";s:1:"0";s:12:"enableDevLog";s:1:"0";s:19:"enableChashUrlDebug";s:1:"0";}',
			'recycler' => 'a:0:{}',
			'rsaauth' => 'a:1:{s:18:"temporaryDirectory";s:0:"";}',
			'saltedpasswords' => 'a:7:{s:20:"checkConfigurationFE";s:1:"0";s:20:"checkConfigurationBE";s:1:"0";s:3:"FE.";a:5:{s:7:"enabled";s:1:"1";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";s:11:"forceSalted";s:1:"0";s:15:"onlyAuthService";s:1:"0";s:12:"updatePasswd";s:1:"1";}s:3:"BE.";a:5:{s:7:"enabled";s:1:"0";s:21:"saltedPWHashingMethod";s:28:"tx_saltedpasswords_salts_md5";s:11:"forceSalted";s:1:"0";s:15:"onlyAuthService";s:1:"0";s:12:"updatePasswd";s:1:"1";}s:21:"checkConfigurationFE2";s:1:"0";s:21:"checkConfigurationBE2";s:1:"0";s:8:"__meta__";N;}',
			'scheduler' => 'a:4:{s:11:"maxLifetime";s:4:"1440";s:11:"enableBELog";s:1:"1";s:15:"showSampleTasks";s:1:"1";s:11:"useAtdaemon";s:1:"0";}',
			'simulatestatic' => 'a:0:{}',
			'sitemgr' => 'a:2:{s:17:"customerPidPageTS";s:1:"0";s:17:"forceBeUserPrefix";s:1:"1";}',
			'sitemgr_fesettings' => 'a:2:{s:16:"categoriesToShow";s:40:"site constants, site colors, site layout";s:15:"constantsToHide";s:36:"dateFormat,timeFormat,dateTimeFormat";}',
			'sitemgr_template' => 'a:0:{}',
			'skin_drk_newsletter' => 'a:0:{}',
			'skin_ks_bootstrap' => 'a:0:{}',
			'skin_sbs_cd_classic' => 'a:0:{}',
			'skin_sbs_cd_redsys' => 'a:0:{}',
			'sphinx' => 'a:1:{s:7:"version";s:5:"1.2b1";}',
			'static_info_tables' => 'a:3:{s:13:"enableManager";s:1:"0";s:5:"dummy";s:1:"0";s:7:"charset";s:5:"utf-8";}',
			't3jquery' => 'a:14:{s:15:"alwaysIntegrate";s:1:"0";s:17:"integrateToFooter";s:1:"0";s:17:"enableStyleStatic";s:1:"0";s:18:"dontIntegrateOnUID";s:0:"";s:23:"dontIntegrateInRootline";s:0:"";s:13:"jqLibFilename";s:23:"jquery-###VERSION###.js";s:9:"configDir";s:19:"uploads/tx_t3jquery";s:13:"jQueryVersion";s:5:"1.8.x";s:15:"jQueryUiVersion";s:5:"1.9.x";s:18:"jQueryTOOLSVersion";s:5:"1.2.x";s:22:"jQueryBootstrapVersion";s:5:"2.3.x";s:16:"integrateFromCDN";s:1:"1";s:11:"locationCDN";s:6:"jquery";s:13:"updateMessage";s:1:"0";}',
			't3m_cumulus_tagcloud' => 'a:0:{}',
			'templavoila' => 'a:3:{s:7:"enable.";a:3:{s:13:"oldPageModule";s:1:"0";s:19:"selectDataStructure";s:1:"0";s:15:"renderFCEHeader";s:1:"0";}s:9:"staticDS.";a:3:{s:6:"enable";s:1:"0";s:8:"path_fce";s:27:"fileadmin/templates/ds/fce/";s:9:"path_page";s:28:"fileadmin/templates/ds/page/";}s:13:"updateMessage";s:1:"0";}',
			'templavoila_framework' => 'a:2:{s:14:"customSkinPath";s:26:"fileadmin/templates/skins/";s:17:"templateObjectPID";s:1:"5";}',
			'tester3' => 'a:0:{}',
			'theme_bootstrap' => 'a:0:{}',
			'theme_bootstrap_flatly' => 'a:0:{}',
			'theme_bootstrap_readable' => 'a:0:{}',
			'themes' => 'a:0:{}',
			'themes_adapter_templavoilaframework' => 'a:0:{}',
			'themes_adapter_tvframework' => 'a:0:{}',
			'themes_adapter_wordpress' => 'a:0:{}',
			'themes_builder' => 'a:0:{}',
			'themes_fces_basic' => 'a:0:{}',
			'themes_fces_fluidcontent_basic' => 'a:0:{}',
			'themes_settings' => 'a:2:{s:16:"categoriesToShow";s:40:"site constants, site colors, site layout";s:15:"constantsToHide";s:36:"dateFormat,timeFormat,dateTimeFormat";}',
			'tinymce_rte' => 'a:2:{s:10:"loadConfig";s:34:"EXT:tinymce_rte/static/standard.ts";s:18:"pageLoadConfigFile";s:34:"EXT:tinymce_rte/static/pageLoad.ts";}',
			'tt_address' => 'a:2:{s:24:"disableCombinedNameField";s:1:"0";s:21:"backwardsCompatFormat";s:9:"%1$s %3$s";}',
			'tt_news' => 'a:21:{s:13:"useStoragePid";s:1:"1";s:17:"requireCategories";s:1:"0";s:18:"useInternalCaching";s:1:"1";s:11:"cachingMode";s:6:"normal";s:13:"cacheLifetime";s:1:"0";s:13:"cachingEngine";s:8:"internal";s:11:"treeOrderBy";s:3:"uid";s:13:"prependAtCopy";s:1:"1";s:5:"label";s:5:"title";s:9:"label_alt";s:0:"";s:10:"label_alt2";s:0:"";s:15:"label_alt_force";s:1:"0";s:21:"categorySelectedWidth";s:0:"";s:17:"categoryTreeWidth";s:0:"";s:25:"l10n_mode_prefixLangTitle";s:1:"1";s:22:"l10n_mode_imageExclude";s:1:"1";s:20:"hideNewLocalizations";s:1:"0";s:24:"writeCachingInfoToDevlog";s:1:"0";s:23:"writeParseTimesToDevlog";s:1:"0";s:18:"parsetimeThreshold";s:3:"0.1";s:13:"updateMessage";s:1:"0";}',
			'uncache' => 'a:0:{}',
			'user_onepage' => 'a:0:{}',
			'version' => 'a:0:{}',
			'vhs' => 'a:0:{}',
			'view' => 'a:0:{}',
			'voice' => 'a:0:{}',
			'workspaces' => 'a:0:{}',
			'ws_less' => 'a:0:{}',
			'wt_spamshield' => 'a:10:{s:12:"useNameCheck";s:1:"1";s:12:"usehttpCheck";s:1:"3";s:9:"notUnique";s:0:"";s:13:"honeypodCheck";s:1:"1";s:15:"useSessionCheck";s:1:"1";s:16:"SessionStartTime";s:2:"10";s:14:"SessionEndTime";s:3:"600";s:10:"AkismetKey";s:0:"";s:12:"email_notify";s:0:"";s:3:"pid";s:1:"0";}',
		),
		'extListArray' => array(
			'info',
			'perm',
			'func',
			'filelist',
			'extbase',
			'fluid',
			'about',
			'version',
			'tsconfig_help',
			'context_help',
			'extra_page_cm_options',
			'impexp',
			'sys_note',
			'tstemplate',
			'tstemplate_ceditor',
			'tstemplate_info',
			'tstemplate_objbrowser',
			'tstemplate_analyzer',
			'func_wizards',
			'wizard_crpages',
			'wizard_sortpages',
			'lowlevel',
			'install',
			'belog',
			'beuser',
			'aboutmodules',
			'setup',
			'taskcenter',
			'info_pagetsconfig',
			'viewpage',
			'rtehtmlarea',
			'css_styled_content',
			't3skin',
			't3editor',
			'reports',
			'felogin',
			'form',
			'opendocs',
			'recycler',
			'scheduler',
			'simulatestatic',
			'workspaces',
			'easylogin',
			'themes_builder',
			'extdeveval',
			'extension_builder',
			'phpunit',
			'tester3',
			'themes',
			'basictemplate',
			'skin_ks_bootstrap',
			'be_acl',
			'sitemgr',
			'sitemgr_fesettings',
			'sitemgr_template',
			'piwikintegration',
			'piwik',
			'user_onepage',
			'plupload',
			'fluid_css',
			'skin_sbs_cd_classic',
			'skin_sbs_cd_redsys',
			'contextswitcher',
			'news',
			'phpstorm',
			'browser_manual_en',
			'skin_drk_newsletter',
			'vhs',
			'beskin',
			'coreupdate',
			'rsaauth',
			'saltedpasswords',
			'flux',
			'fluidcontent',
			'fluidpages',
			'themes_fces_fluidcontent_basic',
			'themes_adapter_wordpress',
			'theme_bootstrap',
			'dyncss',
			'dyncss_less',
			't3jquery',
			'theme_bootstrap_flatly',
			'theme_bootstrap_readable',
			'sphinx',
			'extension_uploader',
			'realurl',
			'static_info_tables',
			't3m_cumulus_tagcloud',
			'view',
			'cal',
			'themes_adapter_tvframework',
		),
	),
	'EXTCONF' => array(
		'lang' => array(
			'availableLanguages' => array(
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'de',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
				'',
			),
		),
	),
	'FE' => array(
		'loginSecurityLevel' => 'rsa',
		'pageNotFound_handling' => 'user_tet',
	),
	'GFX' => array(
		'gdlib_png' => 1,
		'im' => 1,
		'im_combine_filename' => 'combine',
		'im_imvMaskState' => '1',
		'im_path' => '/usr/bin/',
		'im_path_lzw' => '/usr/bin/',
		'im_version_5' => 'gm',
		'thumbnails_png' => '1',
	),
	'INSTALL' => array(
		'wizardDone' => array(
			'TYPO3\CMS\Install\CoreUpdates\InstallSysExtsUpdate' => '["info","perm","func","filelist","about","cshmanual","feedit","opendocs","recycler","t3editor","reports","scheduler","simulatestatic"]',
			'TYPO3\CMS\Install\Updates\TceformsUpdateWizard' => 'tt_content:image,pages:media,pages_language_overlay:media',
		),
	),
	'MAIL' => array(
		'defaultMailFromAddress' => 'info@kay-strobach.de',
		'defaultMailFromName' => 'TYPO3-DEV',
		'transport' => 'smtp',
		'transport_smtp_encrypt' => 'tls',
		'transport_smtp_password' => '1GguiE@@',
		'transport_smtp_server' => 'vwp10094.webpack.hosteurope.de:587',
		'transport_smtp_username' => 'wp1012975-kay',
	),
	'SYS' => array(
		'compat_version' => '6.0',
		'curlUse' => '1',
		'devIPmask' => '*',
		'enableDeprecationLog' => 'devlog',
		'enable_DLOG' => '1',
		'enable_errorDLOG' => '1',
		'enable_exceptionDLOG' => '1',
		'encryptionKey' => 'f10784b159c4164e631d36b9949cf77946c767e75808312bd0fa7d7aafe6d7cf6fb804f4e93301a424da1993de11caad',
		'lockingMode' => 'flock',
		'setMemoryLimit' => '512',
		'sitename' => 'EXT:Themes',
		't3lib_cs_convMethod' => 'mbstring',
		't3lib_cs_utils' => 'mbstring',
	),
);
?>