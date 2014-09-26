<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Version extends ORM {

    public function __construct() {
        parent::__construct();
    }

    public function selectVersionInfo($json) {

        $vi = $this->where('os_type', '=', $json->os_type)->find();
        if ($vi->latest_ver > $json->cur_ver) {
            return $vi;
        } else {
            return null;
        }
    }
} 