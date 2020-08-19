<?php

function input($inputName)
{
 return trim(strip_tags(htmlspecialchars($inputName, ENT_QUOTES, 'UTF-8')));
}