<?php
    switch ($_SERVER['SERVER_NAME']) {

        case 'triathalon.test':
            include(__DIR__.'/config.local.php');
            break;

        default:
            include('config.production.php');
            break;
    }

    define('PERCH_LICENSE_KEY', 'R31707-REL647-PEQ328-UKU076-YLV013');
    define('PERCH_EMAIL_FROM', 'phil@amillionmonkeys.co.uk');
    define('PERCH_EMAIL_FROM_NAME', 'Phil Smith');

    define('PERCH_LOGINPATH', '/admin');
    define('PERCH_PATH', str_replace(DIRECTORY_SEPARATOR.'config', '', __DIR__));
    define('PERCH_CORE', PERCH_PATH.DIRECTORY_SEPARATOR.'core');

    define('PERCH_RESFILEPATH', PERCH_PATH . DIRECTORY_SEPARATOR . 'resources');
    define('PERCH_RESPATH', PERCH_LOGINPATH . '/resources');
    
    define('PERCH_HTML5', true);
    define('PERCH_TZ', 'UTC');

    define('PERCH_DEFAULT_BUCKET', 'images');
