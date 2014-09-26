<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Version extends Controller_Base {

    private $verModel;

    public function before() {
        parent::before();
        $this->verModel = ORM::factory('version');
    }

    public function action_index() {
        $version = $this->verModel->selectVersionInfo($this->json);
        $array = array();

        if ($version == null) {

            $this->core = -1;
            $array['url']='';
            $array['ver_info']='';
            $array['ver_size']='';
            $array['latest_ver']='';
        } else {

            $array['ver_info']=$version->ver_info;
            $array['ver_size']=$version->ver_size;
            $array['latest_ver']=$version->latest_ver;
            $array['url']=$version->url;
        }

        $this->returnJson($array);
    }
} 