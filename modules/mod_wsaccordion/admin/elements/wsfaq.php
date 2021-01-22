<?php

/*
# -------------------------------------------------------------------------
# Custom Field Title for Joomla Backend
# -------------------------------------------------------------------------
# author     WS-Theme.com
# copyright  Copyright (C) 2013 WS-Theme.com. All Rights Reserved.
# @license - http://www.gnu.org/licenses/gpl-3.0.html GNU/GPL
# Websites:  http://www.ws-theme.com
# -------------------------------------------------------------------------
*/

// no direct access
defined('JPATH_BASE') or die;

jimport('joomla.form.formfield');

class JFormFieldWsFaq extends JFormField
{
	protected $type = 'WsFaq';
	

	
	protected function getLabel() 
	{
	   return '';
  }
  
	protected function getInput()
	{
    $html = array();
           
    $question = $this->element['question'];
		$question = $this->translateLabel ? JText::_($question) : $question;     
    $answer = $this->element['answer']; 
		$answer = $this->translateLabel ? JText::_($answer) : $answer;
		
    $html[] = '<div class="ws-faq"><div class="ws-question color">'.$question.'</div><div class="ws-answer">';
    $html[] = $answer;
    $html[] = '</div></div>';

    return implode('',$html);

	}
}
