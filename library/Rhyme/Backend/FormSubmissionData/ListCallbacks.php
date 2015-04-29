<?php

/**
 * Copyright (C) 2015 Rhyme Digital
 * 
 * @author		Blair Winans <blair@rhyme.digital>
 * @author		Adam Fisher <adam@rhyme.digital>
 * @link		http://rhyme.digital
 * @license		http://www.gnu.org/licenses/lgpl-3.0.html LGPL
 */

namespace Rhyme\Backend\FormSubmissionData;


class ListCallbacks extends \Backend
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
			$varValue = array_map('deserialize', implode(',', $varValue));
		}
		
		return $arrRow['label'] . ': ' . ($varValue === false ? $arrRow['value'] : $varValue);
	}
}
