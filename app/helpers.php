<?php

// 生成 CSS 链接
function route_class()
{
    return str_replace('.', '-', Route::currentRouteName());
}

// 摘录关键词
function make_excerpt($value, $length = 200){

    // 正则匹配 摘录内容，并去除空格
    $excerpt = trim(preg_replace('/\r\n|\r|\n+/', ' ', strip_tags($value)));

    return Str::limit($excerpt, $length);// 内容截取
}
