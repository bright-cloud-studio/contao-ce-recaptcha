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
//array_insert($GLOBALS['TL_FFL']['recaptcha'], -1, FormRecaptcha::class);
$GLOBALS['TL_FFL']['recaptcha'] = 'Bcs\RecaptchaBundle\FormRecaptcha';



// Setup our background content element
//array_insert($GLOBALS['TL_CTE']['miscellaneous'], 0, [
//    'backgroundrecaptcha' => Bcs\ElementRecaptcha::class,
//]);

$GLOBALS['TL_CTE']['miscellaneous']['recaptcha'] = array(
	'backgroundrecaptcha' => Bcs\ElementRecaptcha::class
);
