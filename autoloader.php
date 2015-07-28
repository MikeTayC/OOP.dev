<?php
function __autoload($className)
{
    $fileName = 'classes/' . $className . '.php';
    include_once($fileName);
}

