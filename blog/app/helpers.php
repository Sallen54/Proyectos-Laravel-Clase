<?php

function fechaActual($formato = "d/m/Y")
{
    return date($formato);
}

function setActivo($nombreRuta)
{
    return request()->routeIs($nombreRuta) ? 'activo' : '';
}