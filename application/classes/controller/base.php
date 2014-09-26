<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Base extends Controller {
    public $json;
    public $arr = array();

    public function before() {
        parent::before();
        $json = isset($_GET['json']) ? $_GET['json'] : $_POST['json'];
        $this->json = json_decode($json);
    }

    public function returnJson($arr) {
        echo json_encode($arr);
    }
    //获取微秒时间
    public function getMicTime() {
        $times = explode(' ',microtime());
        $time=$times[1].substr($times[0],3);
        return $time;
    }

    public function replaceStr($search,$str) {
        return str_replace($search,'',$str);
    }
} 