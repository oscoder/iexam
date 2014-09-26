<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: oscoder
 * Date: 9/17/14
 * Time: 19:57
 */

class View_Layout_Login extends View_Baseview {

//    public $page_name = 'login';
    public function __construct() {
        $this->page_name = isset($_GET['page']) ? $_GET['page'] : $this->page_name;
        parent::__construct();

    }
//
//    public function parseForView() {
//        $page = new View_Page(
//            array(
//                'base' => $this->paths['base'],
//                'path' => $this->paths,
//                'name' => $this->page_name,
//                'type' => 'page'
//            )
//        );
//
//        $this->layout_name = $page->get_var('layout');
//
//        $layout = new View_Page(
//            array(
//                'base' => $this->paths['base'],
//                'path' => $this->paths,
//                'name' => $this->layout_name,
//                'type' => 'layout'
//            )
//        );
//
//        $context =
//            array(
//                "page" => $page->get_vars(),
//                "layout" => $layout->get_vars(),
//                "path" => $this->paths,
//                "site" => $this->site
//            );
//
//        $context['createLinkFunction'] = function($value) {
//            return '?page='.$value;
//        };
//
//        $this->template = $layout->get_template();
//        $this->context = $context;
//    }
}