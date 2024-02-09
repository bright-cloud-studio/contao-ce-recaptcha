<?php

/**
 * @copyright  Bright Cliud Studio
 * @author     Bright Cloud Studio
 * @package    Contao CE Recaptcha
 * @license    LGPL-3.0+
 * @see	       https://github.com/bright-cloud-studio/contao-ce-recaptcha
 */

// Set up a pallette for our custom Form Element
$GLOBALS['TL_DCA']['tl_form_field']['palettes']['recaptcha'] = '{type_legend},type;{recaptcha_legend},site_key;{expert_legend:hide},class;{template_legend:hide},customTpl;{invisible_legend:hide},invisible';


// Get the original form dca
$dc = &$GLOBALS['TL_DCA']['tl_form_field'];

// create a new array with our new fields
$arrFields = array(
    'site_key'                => array(
        'label'                => &$GLOBALS['TL_LANG']['tl_form_field']['site_key'],
        'inputType'            => 'text',
        'eval'                 => array('mandatory'=>true, 'maxlength'=>255, 'feEditable'=>true, 'feViewable'=>true, 'feGroup'=>'personal', 'tl_class'=>'w50'),
        'sql'                  => "varchar(255) NOT NULL default ''"
    )
);

// smash-um-up
$dc['fields'] = array_merge($dc['fields'], $arrFields);

