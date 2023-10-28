<!--
    Copyright (C) 1996-2023 Mikhail.Malakhov <malakhv@gmail.com>

    This file is a part of WebHome project.

    Confidential and Proprietary. All Rights Reserved.

    Unauthorized copying of this file, via any medium is strictly
    prohibited.
-->

<?php

    define(DEBUG, FALSE);

    define('LANG', 'en');
    define('THEME', 'simple');

    define('ROOT_DIR', $_SERVER['DOCUMENT_ROOT']);
    define('ROOT_VIEW', ROOT_DIR.'/view'.'/'.LANG);
    define('ROOT_LAYOUT', ROOT_DIR.'/web/layout');
    define('ROOT_FILES', './files');

    if (DEBUG) {
        echo 'ROOT_DIR='.ROOT_DIR.PHP_EOL;
        echo 'ROOT_VIEW='.ROOT_VIEW.PHP_EOL;
        echo 'ROOT_LAYOUT='.ROOT_LAYOUT.PHP_EOL;
        echo 'ROOT_FILES='.ROOT_FILES.PHP_EOL;
        echo 'LANG='.LANG.PHP_EOL;
    }

    /**
     * Returns full current requester URL.
     * */
    function GetCurrentUrl() {
        // Http or Https?
        if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')
            $url = "https://";
        else
            $url = "http://";
        // Append the host(domain name, ip) to the URL
        $url.= $_SERVER['HTTP_HOST'];
        // Append the requested resource location to the URL
        $url.= $_SERVER['REQUEST_URI'];

        if(substr($url, -1) != '/') {
            $url.='/';
        }
        return $url;
    }

    include ROOT_DIR.'/web/layout.php';
    include ROOT_DIR.'/web/content.php';
?>
