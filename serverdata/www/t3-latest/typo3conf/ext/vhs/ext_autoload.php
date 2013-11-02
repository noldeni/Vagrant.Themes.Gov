<?php

$extensionClassesPath = t3lib_extMgm::extPath('vhs') . 'Classes/';
$testClassesPath = t3lib_extMgm::extPath('vhs') . 'Tests/';
return array(
	'tx_vhs_asset' => $extensionClassesPath . 'Asset.php',
	'tx_vhs_service_assetservice' => $extensionClassesPath . 'Service/AssetService.php',
	'tx_vhs_service_pageselectservice' => $extensionClassesPath . 'Service/PageSelectService.php',
    'tx_vhs_tests_fixtures_domain_model_foo' => $testClassesPath . 'Fixtures/Domain/Model/Foo.php',
	'tx_vhs_viewhelpers_assetviewhelper' => $extensionClassesPath . 'ViewHelpers/AssetViewHelper.php',
	'tx_vhs_viewhelpers_callviewhelper' => $extensionClassesPath . 'ViewHelpers/CallViewHelper.php',
	'tx_vhs_viewhelpers_caseviewhelper' => $extensionClassesPath . 'ViewHelpers/CaseViewHelper.php',
	'tx_vhs_viewhelpers_conditionviewhelper' => $extensionClassesPath . 'ViewHelpers/ConditionViewHelper.php',
	'tx_vhs_viewhelpers_lviewhelper' => $extensionClassesPath . 'ViewHelpers/LViewHelper.php',
	'tx_vhs_viewhelpers_switchviewhelper' => $extensionClassesPath . 'ViewHelpers/SwitchViewHelper.php',
	'tx_vhs_viewhelpers_tryviewhelper' => $extensionClassesPath . 'ViewHelpers/TryViewHelper.php',
	'tx_vhs_viewhelpers_asset_abstractassetviewhelper' => $extensionClassesPath . 'ViewHelpers/Asset/AbstractAssetViewHelper.php',
	'tx_vhs_viewhelpers_asset_assetinterface' => $extensionClassesPath . 'ViewHelpers/Asset/AssetInterface.php',
	'tx_vhs_viewhelpers_asset_prefetchtviewhelper' => $extensionClassesPath . 'ViewHelpers/Asset/PrefetchViewHelper.php',
	'tx_vhs_viewhelpers_asset_scriptviewhelper' => $extensionClassesPath . 'ViewHelpers/Asset/ScriptViewHelper.php',
	'tx_vhs_viewhelpers_asset_styleviewhelper' => $extensionClassesPath . 'ViewHelpers/Asset/StyleViewHelper.php',
	'tx_vhs_viewhelpers_asset_compilable_abstractassetcompilerviewhelper' => $extensionClassesPath . 'ViewHelpers/Asset/Compilable/AbstractAssetCompilerViewHelper.php',
	'tx_vhs_viewhelpers_asset_compilable_abstractcompilableassetviewhelper' => $extensionClassesPath . 'ViewHelpers/Asset/Compilable/AbstractCompilableAssetViewHelper.php',
	'tx_vhs_viewhelpers_asset_compilable_assetcompilerinterface' => $extensionClassesPath . 'ViewHelpers/Asset/Compilable/AssetCompilerInterface.php',
	'tx_vhs_viewhelpers_asset_compilable_compilableassetinterface' => $extensionClassesPath . 'ViewHelpers/Asset/Compilable/CompilableAssetInterface.php',
	'tx_vhs_viewhelpers_condition_abstractclientinformationviewhelper' => $extensionClassesPath . 'ViewHelpers/Condition/AbstractClientInformationViewHelper.php',
	'tx_vhs_viewhelpers_condition_backendviewhelper' => $extensionClassesPath . 'ViewHelpers/Condition/BackendViewHelper.php',
	'tx_vhs_viewhelpers_condition_browserviewhelper' => $extensionClassesPath . 'ViewHelpers/Condition/BrowserViewHelper.php',
	'tx_vhs_viewhelpers_condition_cliviewhelper' => $extensionClassesPath . 'ViewHelpers/Condition/CliViewHelper.php',
	'tx_vhs_viewhelpers_condition_extendviewhelper' => $extensionClassesPath . 'ViewHelpers/Condition/ExtendViewHelper.php',
	'tx_vhs_viewhelpers_condition_frontendviewhelper' => $extensionClassesPath . 'ViewHelpers/Condition/FrontendViewHelper.php',
	'tx_vhs_viewhelpers_condition_ismobileviewhelper' => $extensionClassesPath . 'ViewHelpers/Condition/IsMobileViewHelper.php',
	'tx_vhs_viewhelpers_condition_systemviewhelper' => $extensionClassesPath . 'ViewHelpers/Condition/SystemViewHelper.php',
	'tx_vhs_viewhelpers_content_abstractcontentviewhelper' => $extensionClassesPath . 'ViewHelpers/Content/AbstractContentViewHelper.php',
	'tx_vhs_viewhelpers_content_getviewhelper' => $extensionClassesPath . 'ViewHelpers/Content/GetViewHelper.php',
	'tx_vhs_viewhelpers_content_renderviewhelper' => $extensionClassesPath . 'ViewHelpers/Content/RenderViewHelper.php',
	'tx_vhs_viewhelpers_content_random_getviewhelper' => $extensionClassesPath . 'ViewHelpers/Content/Random/GetViewHelper.php',
	'tx_vhs_viewhelpers_content_random_renderviewhelper' => $extensionClassesPath . 'ViewHelpers/Content/Random/RenderViewHelper.php',
	'tx_vhs_viewhelpers_extension_abstractextensionviewhelper' => $extensionClassesPath . 'ViewHelpers/Extension/AbstractExtensionViewHelper.php',
	'tx_vhs_viewhelpers_extension_iconviewhelper' => $extensionClassesPath . 'ViewHelpers/Extension/IconViewHelper.php',
	'tx_vhs_viewhelpers_extension_loadedviewhelper' => $extensionClassesPath . 'ViewHelpers/Extension/LoadedViewHelper.php',
	'tx_vhs_viewhelpers_extension_path_absoluteviewhelper' => $extensionClassesPath . 'ViewHelpers/Extension/Path/AbsoluteViewHelper.php',
	'tx_vhs_viewhelpers_extension_path_relativeviewhelper' => $extensionClassesPath . 'ViewHelpers/Extension/Path/RelativeViewHelper.php',
	'tx_vhs_viewhelpers_extension_path_resourcesviewhelper' => $extensionClassesPath . 'ViewHelpers/Extension/Path/ResourcesViewHelper.php',
	'tx_vhs_viewhelpers_extension_path_siterelativeviewhelper' => $extensionClassesPath . 'ViewHelpers/Extension/Path/SiteRelativeViewHelper.php',
	'tx_vhs_viewhelpers_form_hasvalidatorviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/HasValidatorViewHelper.php',
	'tx_vhs_viewhelpers_form_requiredviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/RequiredViewHelper.php',
	'tx_vhs_viewhelpers_form_selectviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/SelectViewHelper.php',
	'tx_vhs_viewhelpers_form_select_optgroupviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/Select/OptgroupViewHelper.php',
	'tx_vhs_viewhelpers_form_select_optionviewhelper' => $extensionClassesPath . 'ViewHelpers/Form/Select/OptionViewHelper.php',
	'tx_vhs_viewhelpers_format_appendviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/AppendViewHelper.php',
	'tx_vhs_viewhelpers_format_caseviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/CaseViewHelper.php',
	'tx_vhs_viewhelpers_format_dateviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/DateViewHelper.php',
	'tx_vhs_viewhelpers_format_eliminateviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/EliminateViewHelper.php',
	'tx_vhs_viewhelpers_format_hideviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/HideViewHelper.php',
	'tx_vhs_viewhelpers_format_markdownviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/MarkdownViewHelper.php',
	'tx_vhs_viewhelpers_format_plaintextviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/PlaintextViewHelper.php',
	'tx_vhs_viewhelpers_format_prependviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/PrependViewHelper.php',
	'tx_vhs_viewhelpers_format_replaceviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/ReplaceViewHelper.php',
	'tx_vhs_viewhelpers_format_substringviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/SubstringViewHelper.php',
	'tx_vhs_viewhelpers_format_tidyviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/TidyViewHelper.php',
	'tx_vhs_viewhelpers_format_trimviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/TrimViewHelper.php',
	'tx_vhs_viewhelpers_format_json_decodeviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/Json/DecodeViewHelper.php',
	'tx_vhs_viewhelpers_format_json_encodeviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/Json/EncodeViewHelper.php',
	'tx_vhs_viewhelpers_format_placeholder_imageviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/Placeholder/ImageViewHelper.php',
	'tx_vhs_viewhelpers_format_placeholder_lipsumviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/Placeholder/LipsumViewHelper.php',
	'tx_vhs_viewhelpers_format_url_decodeviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/Url/DecodeViewHelper.php',
	'tx_vhs_viewhelpers_format_url_encodeviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/Url/EncodeViewHelper.php',
	'tx_vhs_viewhelpers_format_url_sanitizestringviewhelper' => $extensionClassesPath . 'ViewHelpers/Format/Url/SanitizeStringViewHelper.php',
	'tx_vhs_viewhelpers_if_client_abstractclientinformationviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Client/AbstractClientInformationViewHelper.php',
	'tx_vhs_viewhelpers_if_client_isbrowserviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Client/IsBrowserViewHelper.php',
	'tx_vhs_viewhelpers_if_client_ismobileviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Client/IsMobileViewHelper.php',
	'tx_vhs_viewhelpers_if_client_issystemviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Client/IsSystemViewHelper.php',
	'tx_vhs_viewhelpers_if_condition_extendviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Condition/ExtendViewHelper.php',
	'tx_vhs_viewhelpers_if_context_isbackendviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Context/IsBackendViewHelper.php',
	'tx_vhs_viewhelpers_if_context_iscliviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Context/IsCliViewHelper.php',
	'tx_vhs_viewhelpers_if_context_isfrontendviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Context/IsFrontendViewHelper.php',
	'tx_vhs_viewhelpers_if_form_hasvalidatorviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Form/HasValidatorViewHelper.php',
	'tx_vhs_viewhelpers_if_form_isrequiredviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Form/IsRequiredViewHelper.php',
	'tx_vhs_viewhelpers_if_iterator_containsviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Iterator/ContainsViewHelper.php',
	'tx_vhs_viewhelpers_if_page_hassubpagesviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Page/HasSubpagesViewHelper.php',
	'tx_vhs_viewhelpers_if_page_ischildpageviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Page/IsChildPageViewHelper.php',
	'tx_vhs_viewhelpers_if_string_containsviewhelper' => $extensionClassesPath . 'ViewHelpers/If/String/ContainsViewHelper.php',
	'tx_vhs_viewhelpers_if_string_islowercaseviewhelper' => $extensionClassesPath . 'ViewHelpers/If/String/IsLowercaseViewHelper.php',
	'tx_vhs_viewhelpers_if_string_isnumericviewhelper' => $extensionClassesPath . 'ViewHelpers/If/String/IsNumericViewHelper.php',
	'tx_vhs_viewhelpers_if_string_isuppercaseviewhelper' => $extensionClassesPath . 'ViewHelpers/If/String/IsUppercaseViewHelper.php',
	'tx_vhs_viewhelpers_if_string_pregviewhelper' => $extensionClassesPath . 'ViewHelpers/If/String/PregViewHelper.php',
	'tx_vhs_viewhelpers_if_type_isarrayviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Type/IsArrayViewHelper.php',
	'tx_vhs_viewhelpers_if_type_isdomainobjectviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Type/IsDomainObjectViewHelper.php',
	'tx_vhs_viewhelpers_if_type_isfloatviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Type/IsFloatViewHelper.php',
	'tx_vhs_viewhelpers_if_type_isinstanceofviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Type/IsInstanceOfViewHelper.php',
	'tx_vhs_viewhelpers_if_type_isintegerviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Type/IsIntegerViewHelper.php',
	'tx_vhs_viewhelpers_if_type_isobjectviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Type/IsObjectViewHelper.php',
	'tx_vhs_viewhelpers_if_type_isqueryresultviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Type/IsQueryResultViewHelper.php',
	'tx_vhs_viewhelpers_if_type_isstringviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Type/IsStringViewHelper.php',
	'tx_vhs_viewhelpers_if_type_istraversableviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Type/IsTraversableViewHelper.php',
	'tx_vhs_viewhelpers_if_var_isnullviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Var/IsNullViewHelper.php',
	'tx_vhs_viewhelpers_if_var_issetviewhelper' => $extensionClassesPath . 'ViewHelpers/If/Var/IssetViewHelper.php',
	'tx_vhs_viewhelpers_if_conditionviewhelper' => $extensionClassesPath . 'ViewHelpers/If/ConditionViewHelper.php',
	'tx_vhs_viewhelpers_iterator_abstractiteratorviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/AbstractIteratorViewHelper.php',
	'tx_vhs_viewhelpers_iterator_containsviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/ContainsViewHelper.php',
	'tx_vhs_viewhelpers_iterator_explodeviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/ExplodeViewHelper.php',
	'tx_vhs_viewhelpers_iterator_extractviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/ExtractViewHelper.php',
	'tx_vhs_viewhelpers_iterator_firstviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/FirstViewHelper.php',
	'tx_vhs_viewhelpers_iterator_implodeviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/ImplodeViewHelper.php',
	'tx_vhs_viewhelpers_iterator_indexofviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/IndexOfViewHelper.php',
	'tx_vhs_viewhelpers_iterator_lastviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/LastViewHelper.php',
	'tx_vhs_viewhelpers_iterator_loopviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/LoopViewHelper.php',
	'tx_vhs_viewhelpers_iterator_mergeviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/MergeViewHelper.php',
	'tx_vhs_viewhelpers_iterator_nextviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/NextViewHelper.php',
	'tx_vhs_viewhelpers_iterator_popviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/PopViewHelper.php',
	'tx_vhs_viewhelpers_iterator_previousviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/PreviousViewHelper.php',
	'tx_vhs_viewhelpers_iterator_reverseviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/ReverseViewHelper.php',
	'tx_vhs_viewhelpers_iterator_shiftviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/ShiftViewHelper.php',
	'tx_vhs_viewhelpers_iterator_sliceviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/SliceViewHelper.php',
	'tx_vhs_viewhelpers_iterator_sortviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/SortViewHelper.php',
	'tx_vhs_viewhelpers_iterator_valuesviewhelper' => $extensionClassesPath . 'ViewHelpers/Iterator/ValuesViewHelper.php',
	'tx_vhs_viewhelpers_math_abstractmultiplemathviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/AbstractMultipleMathViewHelper.php',
	'tx_vhs_viewhelpers_math_abstractsinglemathviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/AbstractSingleMathViewHelper.php',
	'tx_vhs_viewhelpers_math_averageviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/AverageViewHelper.php',
	'tx_vhs_viewhelpers_math_ceilviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/CeilViewHelper.php',
	'tx_vhs_viewhelpers_math_cubeviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/CubeViewHelper.php',
	'tx_vhs_viewhelpers_math_cubicrootviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/CubicRootViewHelper.php',
	'tx_vhs_viewhelpers_math_divisionviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/DivisionViewHelper.php',
	'tx_vhs_viewhelpers_math_floorviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/FloorViewHelper.php',
	'tx_vhs_viewhelpers_math_maximumviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/MaximumViewHelper.php',
	'tx_vhs_viewhelpers_math_medianviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/MedianViewHelper.php',
	'tx_vhs_viewhelpers_math_minimumviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/MinimumViewHelper.php',
	'tx_vhs_viewhelpers_math_moduloviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/ModuloViewHelper.php',
	'tx_vhs_viewhelpers_math_powerviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/PowerViewHelper.php',
	'tx_vhs_viewhelpers_math_productviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/ProductViewHelper.php',
	'tx_vhs_viewhelpers_math_rangeviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/RangeViewHelper.php',
	'tx_vhs_viewhelpers_math_roundviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/RoundViewHelper.php',
	'tx_vhs_viewhelpers_math_squarerootviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/SquareRootViewHelper.php',
	'tx_vhs_viewhelpers_math_squareviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/SquareViewHelper.php',
	'tx_vhs_viewhelpers_math_subtractviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/SubtractViewHelper.php',
	'tx_vhs_viewhelpers_math_sumviewhelper' => $extensionClassesPath . 'ViewHelpers/Math/SumViewHelper.php',
	'tx_vhs_viewhelpers_media_abstractmediatagviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/AbstractMediaTagViewHelper.php',
	'tx_vhs_viewhelpers_media_abstractmediaviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/AbstractMediaViewHelper.php',
	'tx_vhs_viewhelpers_media_existsviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/ExistsViewHelper.php',
	'tx_vhs_viewhelpers_media_extensionviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/ExtensionViewHelper.php',
	'tx_vhs_viewhelpers_media_filesviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/FilesViewHelper.php',
	'tx_vhs_viewhelpers_media_imageviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/ImageViewHelper.php',
	'tx_vhs_viewhelpers_media_sizeviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/SizeViewHelper.php',
	'tx_vhs_viewhelpers_media_spotifyviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/SpotifyViewHelper.php',
	'tx_vhs_viewhelpers_media_videoviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/VideoViewHelper.php',
	'tx_vhs_viewhelpers_media_vimeoviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/VimeoViewHelper.php',
	'tx_vhs_viewhelpers_media_youtubeviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/YoutubeViewHelper.php',
	'tx_vhs_viewhelpers_media_image_abstractimageinfoviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/Image/AbstractImageInfoViewHelper.php',
	'tx_vhs_viewhelpers_media_image_abstractimageviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/Image/AbstractImageViewHelper.php',
	'tx_vhs_viewhelpers_media_image_heightviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/Image/HeightViewHelper.php',
	'tx_vhs_viewhelpers_media_image_mimetypeviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/Image/MimetypeViewHelper.php',
	'tx_vhs_viewhelpers_media_image_widthviewhelper' => $extensionClassesPath . 'ViewHelpers/Media/Image/WidthViewHelper.php',
	'tx_vhs_viewhelpers_once_abstractonceviewhelper' => $extensionClassesPath . 'ViewHelpers/Once/AbstractOnceViewHelper.php',
	'tx_vhs_viewhelpers_once_cookieviewhelper' => $extensionClassesPath . 'ViewHelpers/Once/CookieViewHelper.php',
	'tx_vhs_viewhelpers_once_instanceviewhelper' => $extensionClassesPath . 'ViewHelpers/Once/InstanceViewHelper.php',
	'tx_vhs_viewhelpers_once_sessionviewhelper' => $extensionClassesPath . 'ViewHelpers/Once/SessionViewHelper.php',
	'tx_vhs_viewhelpers_once_standardviewhelper' => $extensionClassesPath . 'ViewHelpers/Once/StandardViewHelper.php',
	'tx_vhs_viewhelpers_page_absoluteurlviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/AbsoluteUrlViewHelper.php',
	'tx_vhs_viewhelpers_page_breadcrumbviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/BreadCrumbViewHelper.php',
	'tx_vhs_viewhelpers_page_footerviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/FooterViewHelper.php',
	'tx_vhs_viewhelpers_page_headerviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/HeaderViewHelper.php',
	'tx_vhs_viewhelpers_page_languagemenuviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/LanguageMenuViewHelper.php',
	'tx_vhs_viewhelpers_page_menuviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/MenuViewHelper.php',
	'tx_vhs_viewhelpers_page_siteurlviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/SiteUrlViewHelper.php',
	'tx_vhs_viewhelpers_page_content_footerviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/Content/FooterViewHelper.php',
	'tx_vhs_viewhelpers_page_content_getviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/Content/GetViewHelper.php',
	'tx_vhs_viewhelpers_page_content_renderviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/Content/RenderViewHelper.php',
	'tx_vhs_viewhelpers_page_header_linkviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/Header/LinkViewHelper.php',
	'tx_vhs_viewhelpers_page_header_metaviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/Header/MetaViewHelper.php',
	'tx_vhs_viewhelpers_page_header_titleviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/Header/TitleViewHelper.php',
	'tx_vhs_viewhelpers_page_menu_abstractmenuviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/Menu/AbstractMenuViewHelper.php',
	'tx_vhs_viewhelpers_page_menu_directoryviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/Menu/DirectoryViewHelper.php',
	'tx_vhs_viewhelpers_page_menu_listviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/Menu/ListViewHelper.php',
	'tx_vhs_viewhelpers_page_menu_deferredviewhelper' => $extensionClassesPath . 'ViewHelpers/Page/Menu/DeferredViewHelper.php',
	'tx_vhs_viewhelpers_random_numberviewhelper' => $extensionClassesPath . 'ViewHelpers/Random/NumberViewHelper.php',
	'tx_vhs_viewhelpers_random_stringviewhelper' => $extensionClassesPath . 'ViewHelpers/Random/StringViewHelper.php',
	'tx_vhs_viewhelpers_render_abstractrenderviewhelper' => $extensionClassesPath . 'ViewHelpers/Render/AbstractRenderViewHelper.php',
	'tx_vhs_viewhelpers_render_cacheviewhelper' => $extensionClassesPath . 'ViewHelpers/Render/CacheViewHelper.php',
	'tx_vhs_viewhelpers_render_inlineviewhelper' => $extensionClassesPath . 'ViewHelpers/Render/InlineViewHelper.php',
	'tx_vhs_viewhelpers_render_requestviewhelper' => $extensionClassesPath . 'ViewHelpers/Render/RequestViewHelper.php',
	'tx_vhs_viewhelpers_render_templateviewhelper' => $extensionClassesPath . 'ViewHelpers/Render/TemplateViewHelper.php',
	'tx_vhs_viewhelpers_security_abstractsecurityviewhelper' => $extensionClassesPath . 'ViewHelpers/Security/AbstractSecurityViewHelper.php',
	'tx_vhs_viewhelpers_security_allowviewhelper' => $extensionClassesPath . 'ViewHelpers/Security/AllowViewHelper.php',
	'tx_vhs_viewhelpers_security_denyviewhelper' => $extensionClassesPath . 'ViewHelpers/Security/DenyViewHelper.php',
	'tx_vhs_viewhelpers_site_nameviewhelper' => $extensionClassesPath . 'ViewHelpers/Site/NameViewHelper.php',
	'tx_vhs_viewhelpers_site_urlviewhelper' => $extensionClassesPath . 'ViewHelpers/Site/UrlViewHelper.php',
	'tx_vhs_viewhelpers_system_datetimeviewhelper' => $extensionClassesPath . 'ViewHelpers/System/DateTimeViewHelper.php',
	'tx_vhs_viewhelpers_system_timestampviewhelper' => $extensionClassesPath . 'ViewHelpers/System/TimestampViewHelper.php',
	'tx_vhs_viewhelpers_uri_imageviewhelper' => $extensionClassesPath . 'ViewHelpers/Uri/ImageViewHelper.php',
	'tx_vhs_viewhelpers_var_getviewhelper' => $extensionClassesPath . 'ViewHelpers/Var/GetViewHelper.php',
	'tx_vhs_viewhelpers_var_issetviewhelper' => $extensionClassesPath . 'ViewHelpers/Var/IssetViewHelper.php',
	'tx_vhs_viewhelpers_var_setviewhelper' => $extensionClassesPath . 'ViewHelpers/Var/SetViewHelper.php',
	'tx_vhs_viewhelpers_var_typoscriptviewhelper' => $extensionClassesPath . 'ViewHelpers/Var/TyposcriptViewHelper.php',
	'tx_vhs_viewhelpers_var_unsetviewhelper' => $extensionClassesPath . 'ViewHelpers/Var/UnsetViewHelper.php',
);
?>
