<?php

// 生成 CSS 链接
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}