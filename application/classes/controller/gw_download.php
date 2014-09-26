<?php
ob_start();
class Gw_download extends CI_Controller
{
    public $dt;
    public function __construct()
    {
        parent::__construct();
//        $this->dbExam = $this->load->database('exam', TRUE);
    }
    public function index()
    {
        $url="http://oscoder.meibu.net/webServers/filesever/gw/apk/iExam_v0.1.0_beta1.apk";
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
        if(strpos($userAgent,"iPhone") || strpos($userAgent,"iPad") || strpos($userAgent,"iPod") || strpos($userAgent,"iOS")){
            //iPhone
            header("location:" . $url);
        }else if(strpos($userAgent,"Android")){
            //Android
            header("location:" . $url);
        }else{
//            $url = 'android   download';
            header("location:" . $url);
        }
        echo $url;exit;
//        $sql="select * from exam_version where phone_type=".$this->json->p_type." ";
//        $query =$this->dbExam->query($sql);
//        $arr=$query->result_array();
    }
}
?>