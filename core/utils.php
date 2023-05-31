<?php
    function assets($path = "") {
        $url = App::getPath() . "/resources/assets/{$path}";
        $url = preg_replace('#/+#', '/', $url);
        return $url;
    }
    function url($path = "") {
        $url = App::getBaseUrl() . $path;
        $url = preg_replace('#/+#', '/', $url);
        return $url;
    }
?>