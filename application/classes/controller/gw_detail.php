<?php
//gw_detail/?json={"op_type":1101,"p_ver":123,"p_type":"1","c_ver":"123","user_id":"1231223","province":"0","dt":"13743347126897600"}
class Gw_detail extends MY_Controller
{
    public $dt;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('gw/Model_gw163');
        $this->dt=$this->json->dt;


    }
    public function index()
    {
        $arr=$this->Model_gw163->selectDetailInfo($this->dt);
        $array=array();
        $config=$this->config->item("replace");
        //替换字符
//        if(!empty($arr['content']))
//            $arr['content']=$this->replaceStr($config['unhtml'],$arr['content']);
        $array['detail']=$arr;
        $this->returnJson($array);
    }
}
?>