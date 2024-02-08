<?php

/**
 * @copyright  Bright Cliud Studio
 * @author     Bright Cloud Studio
 * @package    Contao CE reCAPTCHA
 * @license    LGPL-3.0+
 * @see	       https://github.com/bright-cloud-studio/contao-ce-recaptcha
 */
  
   array_insert($GLOBALS['TL_CTE']['recaptcha'], -1, array
    (
        'recaptcha_v2' => 'Bcs\GlideBundle\ContentReCaptchaV2',
    ));

?>
