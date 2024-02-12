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
            // if this field has the 'recaptcha' type then set our flag to true
            if($field->type == 'recaptcha') {
                $recaptcha = true;
            }
        }
        
        // if we found a 'recaptcha' type element
        if($recaptcha) {
            
            // Loop through the fields again so we can find the submit button
            foreach($fields as $index => $field) {
                if($field->type == 'submit') {
                    //$field['data-callback'] = 'onSubmit';
                    $field->html = "<div>BLEEP</div>";
                    //print_r($field);
                    //die();
                }
            }
            
        }

        return $fields;
    }
    
    
    
    
    
    
    
    
    
    
        public function onPrepareFormData($submittedData, $labels, $fields, $form)
    {

        $recaptcha = false;
        
        // Loop through the form fields, see if this form has our reCAPTCHA Form ELement
        foreach($fields as $index => $field) {
            // if this field has the 'recaptcha' type then set our flag to true
            if($field->type == 'recaptcha') {
                $recaptcha = true;
            }
        }
        
        // if we found a 'recaptcha' type element
        if($recaptcha) {
            
            // Loop through the fields again so we can find the submit button
            foreach($fields as $index => $field) {
                if($field->type == 'submit') {
                    //$field['data-callback'] = 'onSubmit';
                    $field->html = "<div>BLEEP</div>";
                    //print_r($field);
                    //die();
                }
            }
            
        }

        return $fields;
    }
    
    
}
