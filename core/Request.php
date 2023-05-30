<?php
    class Request {

        private static $php_self        = "";
        private static $request_uri     = "";
        private static $script_filename = "";
        private static $document_root   = "";

        function __construct() {
            self::$php_self        = $_SERVER['PHP_SELF'];        // Root project
            self::$request_uri     = $_SERVER['REQUEST_URI'];     // Root without filename 'index.php'
            self::$script_filename = $_SERVER['SCRIPT_FILENAME']; // Directory project
            self::$document_root   = $_SERVER['DOCUMENT_ROOT'];
        }
    }
?>