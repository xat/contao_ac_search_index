<?php

/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	'AcSearchIndex'                  => 'system/modules/ac_search_index/AcSearchIndex.php',
	'AcSearchIndexCron'              => 'system/modules/ac_search_index/AcSearchIndexCron.php',
	'AcSearchIndexHelper'            => 'system/modules/ac_search_index/AcSearchIndexHelper.php',
	'ModuleMootoolsAcSearchIndex'    => 'system/modules/ac_search_index/ModuleMootoolsAcSearchIndex.php',
	'ModuleJqueryAcSearchIndex'      => 'system/modules/ac_search_index/ModuleJqueryAcSearchIndex.php',
));

TemplateLoader::addFiles(array
(
	'mod_ac_search_index'    => 'system/modules/ac_search_index/templates',
));