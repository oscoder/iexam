<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_News extends ORM {
    public function __construct() {
        parent::__construct();
    }

    public function getSelectSize($page, $size)
    {
        $newses = $this->count_all();
        $pages = $newses / $size + (($newses % $size) > 0 ? 1 : 0);

        $arr_pages = null;
        if ($page == -1) {
            $arr_pages = $this->where('id', 'BETWEEN', array(((($newses / $size) - 1) * $size) + 1, $newses))->find_all()->as_array();
        } else {
            $arr_pages = $this->where('id', 'BETWEEN', array((($page * $size) - $size) + 1, ($page * $size)))->find_all()->as_array();
        }
        $arr = array();
        $page_size = count($arr_pages) - 1;
        for($i = $page_size; $i >= 0; $i--) {
            if($arr_pages[$i]->isdel == 0)
                $arr[] = $arr_pages[$i]->as_array();
        }
        $data['list'] = $arr;
        return $data;
    }
} 