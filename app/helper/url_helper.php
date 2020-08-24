<?php
// Simple page redirect

function redirect($url)
{
    echo '<script language="javascript">window.location.href ="'.URLROOT.'/'.$url.'"</script>';
}

function setIndex($page)
{
    $_SESSION['page'] = $page;
}