<?php
    function checkInput($value, $type = 'email'){
        switch($type){
            case 'username':
                $pattern = '#^[a-z][a-z0-9_\.\S]{3,31}$#';
                break;
            case 'password':
                $pattern = '#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,10}$#';
                break;
            case 'confirmPW':
                $pattern = '#^(?=.*\d)(?=.*[A-Z])(?=.*\W).{8,10}$#';
                break;
            case 'displayName':
                $pattern = '#^[a-z][a-z0-9_\.\s]{3,31}$#';
                break;
            case 'email':
                $pattern = '#^[a-z][a-z0-9_\.]{4,31}@[a-z0-9]{2,}(\.[a-z0-9]{2,10}){1,2}$#';
                break;    
        }
        $flag = preg_match($pattern,$value);
        return $flag;
    }
?>
