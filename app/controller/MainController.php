<?php
    class MainController {
        public function index() {
            return view('index');
        }

        public function show($id) {
            return $id;
        }
    }
?>