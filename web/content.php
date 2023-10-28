<?php

/**
 * Returns requested URL with '/' at the end.
 * */
function getContentUrl() {
    $uri = $_SERVER['REQUEST_URI'];
    if(substr($uri, -1) != '/') {
        $uri.='/';
    }
    return $uri;
}

/**
 * Selects page content by requested URL.
 * */
function SelectContent($url) {
    include ROOT_VIEW.$url.'content.htm';
}

function ApplyContent() {
    SelectContent(getContentUrl());
}

/**
 * Returns page title by requested URL.
 * */
function getPageTitle() {
    $title = ucfirst(basename(getContentUrl()));
    if ($title == '') {
        $title = 'WebPad';
    } else {
        $title = 'WebPad - '.$title;
    }
    return $title;
}

?>
