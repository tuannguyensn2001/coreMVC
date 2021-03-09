<?php

use Core\Illuminate\Support\Facades\Response;

function view($path,$data)
{
    return Response::view($path,$data);
}

function redirect($path)
{
    return Response::redirect($path);
}

function response()
{
    return Response::response();
}



?>
