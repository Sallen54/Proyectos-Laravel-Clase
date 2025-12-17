<?php

function setActivo($nombreRuta)
{
    return request()->routeIs($nombreRuta) ? 'activo' : '';
}

function fechaActual($formato = 'd/m/Y')
{
    return now()->format($formato);
}
