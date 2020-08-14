<?php
// Simple page redirect

function redirect($page)
{
 header('location: ' . URLROOT . '/' . $page);
}

function setIndex($page)
{
    $_SESSION['page'] = $page;
}