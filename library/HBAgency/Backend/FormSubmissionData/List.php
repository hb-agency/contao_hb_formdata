<?php

/**
 * Copyright (C) 2014 HB Agency
 * 
 * @author		Blair Winans <bwinans@hbagency.com>
 * @author		Adam Fisher <afisher@hbagency.com>
 * @link		http://www.hbagency.com
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace HBAgency\Backend\FormSubmissionData;


class List extends \Backend
{
	
	/**
	 * Label callback for tl_form_submission_data
	 *
	 * @access		public
	 * @param		array
	 * @return		string
	 */
	public function labelCallback($arrRow)
	{
		$varValue = unserialize($arrRow['value']);
		
		if (is_array($varValue))
		{
			$varValue = implode(',', $varValue);
		}
		
		return $arrRow['label'] . ': ' . $varValue;
	}
}
