<?php
//客户端进入记录用户信息
//gw_down/?json={"op_type":1014,"p_ver":123,"p_type":"1","c_ver":"123","filename":"123","user_id":12121}
class Gw_down extends MY_Controller
{
    public $path;
    public $filename;
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('download');
    }
    public function index()
    {
        $this->filename=$this->json->filename;
        $this->selectPath();
    }
    //查找文件路径信息
    public function selectPath()
    {
        $arr=$this->config->item('gwpath');
        $name=$this->json->filename;
        $souce=$arr['apk'].$this->filename.".apk";
        $data=file_get_contents($souce);
        force_download($this->filename.".apk", $data);

    }

}
?>