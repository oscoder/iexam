<?php
//gw_list/?json={"op_type":1100,"p_ver":123,"p_type":"1","c_ver":"123","user_id":"1231223","province":"0","p":"p2"}
class Gw_list extends MY_Controller
{
    public $dt;
    public $size;
    public $config;
    public function __construct()
    {
        parent::__construct();
        $config=$this->config->item("exam");
        $this->config=$config;
        $this->load->model('gw/Model_gw163');
    }

    public function index()
    {
        $page=substr(trim($this->json->p),1);
        $arr=$this->Model_gw163->getSelectSize($page,$this->config['size']);
        $array=array();
        $array['province']=0;
        $array['pre_p']=$arr['pre_p'];
        $array['p']=$arr['p'];
        $array['next_p']=$arr['next_p'];
        $array['info']=$arr['list'];
        $this->returnJson($array);
    }
}
?>