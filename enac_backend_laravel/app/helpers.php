<?php

function setActivate($routeName){
    return request()->routeIs($routeName) ? 'active' : '';
}