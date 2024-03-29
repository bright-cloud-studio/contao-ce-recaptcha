<?php
 
/**
* @copyright  Bright Cliud Studio
* @author     Bright Cloud Studio
* @package    Contao CE Recaptcha
* @license    LGPL-3.0+
* @see	       https://github.com/bright-cloud-studio/contao-ce-recaptcha
*/

use Bcs\RecaptchaBundle\FormRecaptcha;

// Setup our Form field
array_insert($GLOBALS['TL_FFL']['recaptcha'], -1, FormRecaptcha::class);

// Setup our background content element
array_insert($GLOBALS['TL_CTE']['miscellaneous'], 0, [
    'backgroundrecaptcha' => Bcs\ElementRecaptcha::class,
]);

/* Hooks */
$GLOBALS['TL_HOOKS']['compileFormFields'][]      = array('Bcs\Handler', 'onCompileFormFields');
$GLOBALS['TL_HOOKS']['prepareFormData'][]      = array('Bcs\Handler', 'onPrepareFormData');
$GLOBALS['TL_HOOKS']['validateFormField'][]      = array('Bcs\Handler', 'onValidateFormFields');
