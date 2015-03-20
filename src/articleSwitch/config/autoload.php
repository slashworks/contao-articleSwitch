<?php

/**
 * Contao Open Source CMS
 *
 * Copyright (c) 2005-2015 Leo Feyer
 *
 * @package ArticleSwitch
 * @link    https://contao.org
 * @license http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Register the namespaces
 */
ClassLoader::addNamespaces(array
(
	'slashworks',
));


/**
 * Register the classes
 */
ClassLoader::addClasses(array
(
	// Classes
	'slashworks\DcaArticleSwitcherClass' => 'system/modules/articleSwitch/classes/backend/DcaArticleSwitcherClass.php',

	// Models
	'slashworks\ArticleSwitchModel'      => 'system/modules/articleSwitch/models/ArticleSwitchModel.php',
));


/**
 * Register the templates
 */
TemplateLoader::addFiles(array
(
	'be_articleSwitch' => 'system/modules/articleSwitch/templates/backend',
));
