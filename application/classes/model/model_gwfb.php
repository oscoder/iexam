<?php
class Model_gwfb extends CI_Model
{
    public $dbExam;

    public function __construct()
    {
        parent::__construct();
        $this->dbExam = $this->load->database('exam', TRUE);
    }

    public function insert($arr)
    {
        $data = array(
            "content" => $arr['content'],
            "insert_dt"=>date("Y-m-d H:i:s")
        );
        $this->dbExam->insert('feedback',$data);
    }
}