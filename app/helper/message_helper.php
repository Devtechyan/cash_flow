<?php


function setMessage($name,$description)
{
    if(session_id() == ''){
        //session has not started
        session_start();
    }
    
    $_SESSION[$name] = $description; 
}

function unsetMessage($name)
{
    unset($_SESSION[$name]); 
}

?>