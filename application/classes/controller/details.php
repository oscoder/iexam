<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: oscoder
 * Date: 9/12/14
 * Time: 14:23
 */

class Controller_Details extends Controller_Base {

    private $detailModel;

    public function before() {
        parent::before();
        $this->detailModel = ORM::factory('detail');
    }

    public function action_index() {

        $uuid = trim($this->json->uuid);

        $arr = $this->detailModel->selectDetailInfo($uuid);
        $this->returnJson($arr);
    }
} 