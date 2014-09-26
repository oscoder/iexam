<?php
//gw_fb/?json={"op_type":1104,"p_ver":123,"p_type":"1","c_ver":"123","user_id":"1231223","content":"sdfsf"}
class Gw_fb extends MY_Controller
{
    public $content;
    public function __construct()
    {
        parent::__construct();
        $this->load->model('gw/Model_gwfb');
    }
    public function index()
    {
        $this->content=$this->json->content;
        $data=array("content"=>$this->content);
        $arr=$this->Model_gwfb->insert($data);
        $this->returnJson(array());
    }
}
?>