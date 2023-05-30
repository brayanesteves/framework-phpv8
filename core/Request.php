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

        public static function getURL() {
            $path_origin = self::$script_filename;
            $path_main   = self::$document_root . self::$php_self;
            $request_url = str_replace($path_origin, '', $path_main);
            return empty($request_url) ? '/' : $request_url;
        }

        public static function getPublicURL() {
            $path_origin = self::$script_filename;
            $request_uri = self::$request_uri;
            $path_main   = self::$document_root . self::$php_self;
            $request_url = str_replace($path_origin, '', $path_main);
            $public_path = str_replace($request_url, '', $request_uri);
            return $public_path;
        }

        public static function validate($routes) {
            foreach($routes as $route) {
                $regex_route = preg_replace_callback(
                    '/{([^}]+)}/',
                    function($matches) {
                        return "(?P<" . $matches[1] . ">[^/]+)";
                    },
                    $route['path']
                );
                $regex_route = str_replace("/", "\/", $regex_route);
                $regex_route = '/' . $regex_route . '$/';
                echo $regex_route;
            }
        }

    }
?>