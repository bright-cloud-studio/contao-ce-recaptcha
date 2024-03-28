<?php

namespace Bcs;

class Handler
{
    protected static $arrUserOptions = array();
    
    public function onCompileFormFields($submittedData, $formData, $files, $labels, $form)
    {
        
        echo "Hook 'onCompileFormFields' triggered!";
        die();
        
        if($formData['formID'] == 'directory_submission') {
            echo "Form Found!";
            die();
        }
    }
}
