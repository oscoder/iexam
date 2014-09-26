<?php defined('SYSPATH') or die('No direct script access.');
/**
 * Created by PhpStorm.
 * User: oscoder
 * Date: 9/12/14
 * Time: 15:00
 */

class Controller_Parse163gz extends Controller {

    private $replace;
    public function before() {
        parent::before();
//        $this->replace = $this->
    }
    public function action_index()
    {
        $content = $this->readURL("http://www.163gz.com/gzzp8/zkxx/index.shtml");
        $subUrlsHtml = $this->cutHtml($content,array('<span class="style331">'),array('</span>'));
        $webUrls = $this->getUrls($subUrlsHtml);
        $reUrls = $this->reverseUrls($webUrls);
        $this->getUrlContents($reUrls);
    }

    public function cutHtml($content, $start, $end) {
        //剥掉开始位置
        foreach($start as $eachStart) {
            $strLen = strlen($eachStart);
            $firstlen = strpos($content, $eachStart);
            $content = substr($content, $firstlen + $strLen);
        }
        //剥掉结束位置
        foreach($end as $eachEnd) {
            $endlen = strpos($content, $eachEnd);
            $content = substr($content, 0, $endlen);
        }
        return $content;
    }

    //获取所有链接
    public function getUrls($content) {
        preg_match_all("/<a[^<>]*href=\"([^\"]+)\"[^<>]*>([^<>]+)<\/a>/i", $content, $match);
        return $match;
    }

    //获取内容
    public function getUrlContents($urls) {
        $search=$this->replace;
        foreach($urls as $eachUrl) {
            $txt=$this->readURL($eachUrl['url']);
            $title=$eachUrl['title'];
            //截取BODY内容
            $txt=$this->cutHtml($txt,array('<!--Content Start-->'),array('<!--Content End-->'));
            //转码UTF8
            $content['title']=iconv('GB2312', 'UTF-8//IGNORE',$title);
            $text = $txt;//iconv('GB2312', 'UTF-8',$txt);
            $content['txt']=$this->preReplay('', $text);
            $content['txt']=$this->replaceStr('', $content['txt']);
            $content['time']=$this->getMicTime();
            $this->insertDt($content);
        }
    }

    //获取微秒时间
    public function getMicTime() {
        $times=explode(' ',microtime());
        $time=$times[1].substr($times[0],3);
        return $time;
    }

    //插入数据库
    public function insertDt($content) {
        /* $data=array(
             'title'=>$content['title'],
             'content'=>$content['txt'],
             'insert_dt'=>$content['time']
         );*/
        echo implode(" ", $content);
        //$sql="insert into exam_info (title,content,insert_dt) values ('".$content['title']."','".addslashes($content['txt'])."','".$content['time']."') ON DUPLICATE KEY UPDATE  insert_dt=insert_dt ";
        ///\$this->dbExam->query($sql);
    }

    //字符串替换
    public function replaceStr($search,$str) {
        return str_replace('\r\n','',$str);
    }

    //字符串正则替换
    public function preReplay($search,$str) {
        return preg_replace(array('/(\<font|font)[^\>]+\>|<\/font>/i','/rgb([^\)])+\);/','/bg[^\>]+/',"'([\r\n])[\s]+'"),array('','','',''),$str);
    }

    //便利所有的URL和标题
    public function reverseUrls($urls) {
//        print_r($urls);exit;
        $arrUrl=array();
        $count=count($urls[1]);
        $j=0;
        for($i=$count;$i>=0;$i--) {
            if(!empty($urls[1][$i])&&!empty($urls[2][$i])) {
                $arrUrl[$j]['url']=$urls[1][$i];
                $titile=trim($urls[2][$i]);
                $arrUrl[$j]['title']=substr($titile,8);
                $arrUrl[$j]['time']=substr($titile,0,5);
                $j++;
            }
        }
        return $arrUrl;
    }

    //分割字符
    public function explodeStr($separator,$string) {
        return explode($separator, $string);
    }

    public function readURL($url) {

//        $request = Request::factory($url)
//            ->method(Request::GET);
//        $request->get_client()->options(array(
//            CURLOPT_RETURNTRANSFER => TRUE,
//            CURLOPT_SSL_VERIFYPEER => TRUE,
//        ));
//        echo $request->body();
        return file_get_contents($url);
    }
}
?>