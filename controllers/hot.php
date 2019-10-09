<?php
Class Hot extends Theme{
    public static $page_data = array('title' => 'HOT OR NOT');
    public static $partial = 'hot';
    public static function init_data(){
        global $config, $db;
        parent::init_data();
        if (isset(self::$page_data['title']) && self::$page_data['title'] !== '') {
            parent::$data['title'] = ucfirst(__('Find Matches')) . ' . ' . $config->site_name;
        }
        parent::$data['name'] = self::$partial;
        self::LoadMatches();
        parent::$data['matches'] = self::Matches();
        parent::$data['matches_img'] = self::Matches_img();
    }
    public static function show($partial = ''){
        self::init_data();
        parent::show(self::$partial);
    }
    public static function LoadMatches() {
        global $_AJAX, $_CONTROLLERS;
        $data            = '';
        $ajax_class      = realpath($_CONTROLLERS . 'aj.php');
        $ajax_class_file = realpath($_AJAX . 'loadmore.php');
        if (file_exists($ajax_class_file)) {
            require_once $ajax_class;
            require_once $ajax_class_file;
            $_POST['page'] = 1;
            $loadmore      = new Loadmore();
            $match_users   = $loadmore->match_users('hot');
            parent::$data['matches_data'] = $match_users;
        }
        return $data;
    }
    public static function Matches() {
        $data = '';
        if (isset(parent::$data['matches_data']['html'])) {
            $data = parent::$data['matches_data']['html'];
        }
        return $data;
    }
    public static function Matches_img() {
        $data = '';
        if (isset(parent::$data['matches_data']['html_imgs'])) {
            $data = parent::$data['matches_data']['html_imgs'];
        }
        return $data;
    }
}