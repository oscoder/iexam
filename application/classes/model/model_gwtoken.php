<?php
class Model_gwtoken extends CI_Model
{
    public $dbExam;
	public function __construct()
	{
            parent::__construct();
            $this->load->library('Mem',array('gw'));
	}
    public function index()
    {
        //读取缓存
//        if (!$this->mem->exists("gz163"))
//        {
//            $this->insertMem();
//            $this->mem->set("gz163", $arr);
//            $this->mem->set("gz163_token",count($arr));
//        }
    }
    public function selectToken($arr,$size)
    {
        if(!$this->mem->exists("gz163")) {
            $this->insertMem($arr);
        }
        $arr=$this->mem->get("gz163");
        $count=count($arr);
        $data['p']="p".($count-1);
        $data['un_size']=count($arr[$count-1])%$size;
        $data['p_size']=$size;
        return $data;
    }
    public function insertMem($arr)
    {
        $this->dbExam = $this->load->database('exam', TRUE);
        $sql="SELECT title,content,state,insert_dt from ".$arr['table']." where state=1 order by audit_dt  ";
        $query = $this->dbExam->query($sql);
        $arr = $query->result_array();
        $array=array_chunk($arr,20);
        $this->mem->set("gz163", $array);
        return ;
    }
}