<?php

namespace Bcs;

use Contao\Database;

class Hooks
{

    public function onCompileFormFields($fields, $formId, $form)
    {

        $recaptcha = false;
        
        // Loop through the form fields, see if this form has our reCAPTCHA Form ELement
        foreach($fields as $index => $field) {
            if($field->type == 'recaptcha') {
                $recaptcha = true;
            }
        }
        
        if($recaptcha) {
            echo "This form is using reCAPTCHA";
            die();
        }

        return $fields;
    }
}
