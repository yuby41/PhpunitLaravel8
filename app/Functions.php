<?php



    if (!class_exists('validate_email')){
        function validate_email($email)
        {
            return App\Helpers\Email::validate($email);
        }
    }
