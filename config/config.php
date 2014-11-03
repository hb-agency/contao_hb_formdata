<?php

/**
 * Copyright (C) 2014 HB Agency
 * 
 * @author		Blair Winans <bwinans@hbagency.com>
 * @author		Adam Fisher <afisher@hbagency.com>
 * @link		http://www.hbagency.com
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */


/**
 * Hooks
 */
$GLOBALS['TL_HOOKS']['processFormData'][]	= array('\HBAgency\Hooks\ProcessFormData\StoreFormDataDynamically', 'run');


/**
 * Backend modules
 */
$GLOBALS['BE_MOD']['content']['form']['tables'][] = 'tl_form_submission';
$GLOBALS['BE_MOD']['content']['form']['tables'][] = 'tl_form_submission_data';
