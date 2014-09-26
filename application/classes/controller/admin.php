<?php  defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: oscoder
 * Date: 9/12/14
 * Time: 16:36
 */

class Controller_Admin extends Controller {

    public function action_index() {

//        $renderer = kostache::factory();
//        $this->response->body($renderer->render(new View_Pages_Admin_Admin()));
        $renderer = Koace::factory(new View_Pages_Admin_Admin());
        $this->response->body($renderer->render());
    }
} 