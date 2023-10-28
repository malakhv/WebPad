<?php

function IncludeContent($href) {
    include ROOT_VIEW.'/'.$href;
}

function IncludeLayout($name) {
    include ROOT_LAYOUT.'/'.THEME.'/'.$name;
}

/**
 * Make a page head (html header) with specific title, theme, keywords
 * and description.
 * */
function MakeHtmlHead($title = 'Mikhail Malakhov', $keywords = '', $description = '') {
    echo PHP_EOL;
    echo '<head>'.PHP_EOL;
    echo '  <base href="http://webpad.mikhan.me/">'.PHP_EOL;
    echo '  <meta name="keywords" content="'.$keywords.'" />'.PHP_EOL;
    echo '  <meta name="description" content="'.$description.'" />'.PHP_EOL;
    echo '  <meta http-equiv="content-type" content="text/html; charset=utf-8" />'.PHP_EOL;
    echo '  <link href="./web/layout/'.THEME.'/style.css" rel="stylesheet" type="text/css" media="screen" />'.PHP_EOL;
    echo '  <link href="./web/layout/'.THEME.'/editor.css" rel="stylesheet" type="text/css" media="screen" />'.PHP_EOL;
    echo '  <link rel="icon" href="./web/media/fav-128.png" type="image/png">'.PHP_EOL;
    echo '  <link rel="shortcut icon" href="./web/media/fav-256.png" type="image/png">'.PHP_EOL;
    echo '  <title>'.$title.'</title>'.PHP_EOL;
    echo '</head>'.PHP_EOL;
}

/**
 * Inserts header of page content.
 * */
function InsertPageHeader() {
    IncludeLayout('header.htm');
}

/**
 * Inserts site menu.
 * */
function InsertMenu() {
    IncludeLayout('menu.htm');
}

/**
 * Inserts footer of page content.
 * */
function InsertPageFooter() {
    IncludeLayout('footer.htm');
}

?>
