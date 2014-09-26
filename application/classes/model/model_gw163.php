<?php
class Model_gw163 extends CI_Model
{
    public $dbExam;
	public function __construct()
	{
            parent::__construct();
            $this->dbExam = $this->load->database('exam', TRUE);
            $this->load->library('Mem',array('gw'));
            $this->index();
	}
	public function selectList163()
	{
	   $sql="SELECT title,content,state,insert_dt from exam_info where state=1 order by audit_dt ";
       $query = $this->dbExam->query($sql);
       $arr = $query->result_array();
       $array=array_chunk($arr,20);
       return $array;
    }
    public function selectDetailInfo($dt)
    {
        $sql="SELECT title,content,state,insert_dt from exam_info where insert_dt =$dt LIMIT 1 ";
        $query = $this->dbExam->query($sql);
        $arr = $query->row_array();
        $arr['content']=preg_replace("'([\r\n])[\s]+'", "", $arr['content']);
        return $arr;
    }
    public function index()
    {
        //读取缓存
        if (!$this->mem->exists("gz163"))
        {
            $arr=$this->selectList163();
            $this->mem->set("gz163", $arr);
        }
    }
    public function getSelectSize($page,$size)
    {
        //查询出所有数据
        $arrs= $this->mem->get("gz163");
        //一共有多少页
        $pages=count($arrs);
        //查询出本页中的数据
        $arr_page=$arrs[$page];
        //本页数据个数
        $page_size=count($arr_page)-1;
        for($i=$page_size;$i>=0;$i--)
        {
            unset($arr_page[$i]['content']);
            if($arr_page[$i]['state']==1)
                $arr[]=$arr_page[$i];
        }
        $data['list']=$arr;
        //上一页
        if($pages-$page==1)
            $data['pre_p']="p".$page;
        else
            $data['pre_p']="p".($page+1);
        //当前页
        $data['p']="p".$page;
        //下一页
        if($page>0)
            $data['next_p']="p".($page-1);
        else
            $data['next_p']="p0";
        return $data;
    }
}