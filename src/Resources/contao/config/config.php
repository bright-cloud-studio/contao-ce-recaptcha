<?php
 
/**
* @copyright  Bright Cliud Studio
* @author     Bright Cloud Studio
* @package    Contao CE Recaptcha
* @license    LGPL-3.0+
* @see	       https://github.com/bright-cloud-studio/contao-ce-recaptcha
*/

use Bcs\RecaptchaBundle\FormRecaptcha;

array_insert($GLOBALS['TL_FFL']['recaptcha'], -1, FormRecaptcha::class);

/* Hooks */
$GLOBALS['TL_HOOKS']['compileFormFields'][]      = array('Bcs\Hooks', 'onCompileFormFields');
?>
