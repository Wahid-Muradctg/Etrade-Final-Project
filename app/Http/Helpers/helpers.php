<?php

function isActiveRoute($uri, $activeClass = 'active'){
    if(!$uri){
        return null;
    }
    return request()->routeIs($uri) ? $activeClass : '';
}


function getImage($src = null){
    if(!$src) return asset('placeholder.png');

    return asset('storage/'. $src);
}