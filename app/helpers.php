<?php


function current_page($uri = "/")
{
    return strstr(request()->path(), $uri);
}

function current_page_pretty($name = '')
{
    $name = str_replace('/', '', current_page());
    return ucfirst($name);
}
