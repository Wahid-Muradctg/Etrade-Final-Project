<?php

function isActiveRoute($uri, $activeClass = 'active'){
    if(!$uri){
        return null;
    }
    return request()->routeIs($uri) ? $activeClass : '';
}