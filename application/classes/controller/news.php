<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: oscoder
 * Date: 9/6/14
 * Time: 17:41
 */

class Controller_News extends Controller_Base {

    public $dt;
    public $size;
    public $config;
    private $listModel;

    public function before() {
        parent::before();
        $this->listModel = ORM::factory('news');
    }

    public function action_index() {

        $page = trim($this->json->p); //-1 means newest page, other such as 1, 2 news the corresponding page.

        $arr = $this->listModel->getSelectSize($page, 5); //default value to 20 means 20 items one page.
        $array['info'] = $arr['list'];
        $this->returnJson($array);
    }
}
?>