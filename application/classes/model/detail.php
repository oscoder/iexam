<?php defined('SYSPATH') or die('No direct access allowed.');
/**
 * Created by PhpStorm.
 * User: oscoder
 * Date: 9/12/14
 * Time: 14:24
 */

class Model_Detail extends ORM {
    public function __construct() {
        parent::__construct();
    }

    public function selectDetailInfo($uuid) {
        $arr = $this->where('uuid', '=', $uuid)->find()->as_array();
        return $arr;
    }
}