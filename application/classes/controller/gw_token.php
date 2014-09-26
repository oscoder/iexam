<?php
//gw_token/?json={"op_type":1101,"p_ver":123,"p_type":"1","c_ver":"123","user_id":"1231223","province":"0"}
class Gw_token extends MY_Controller
{
    public $dt;

    public function __construct()
    {
        parent::__construct();
        $this->load->model('gw/Model_gwtoken');
    }
    public function index()
    {
        $config=$this->config->item("exam");
        $province=$this->json->province;
        //配置表中配置array(0=>array('table'=>'exam_info','mem'=>'gw163'))
        $arr=$this->Model_gwtoken->selectToken(array('table'=>'exam_info','mem'=>'gz163'),$config['size']);
        echo json_encode($arr);
    }
}
?>