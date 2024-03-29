<?php

namespace Bcs;

class Handler
{
    protected static $arrUserOptions = array();



    public function onPrepareFormData(&$submittedData, $labels, $fields, $form)
    {
        echo "Hook 'onPrepareFormData' triggered!";
        die();
    }




    
    public function onCompileFormFields($fields, $formId, $form)
    {
        
        echo "Hook 'onCompileFormFields' triggered!";
        die();
        
        if($formData['formID'] == 'directory_submission') {
            echo "Form Found!";
            die();
        }
    }
}
