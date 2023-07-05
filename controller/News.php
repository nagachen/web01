<?php
include_once "DB.php";
class News extends DB
{
    public $header = "最新消息資料";
    protected $add_header = "新增最新消息資料";


    public function __construct()
    {
        parent::__construct('news');
    }
    public function add_form()
    {
        $this->modal("
        <tr>
            <td>
                最新消息資料:
            </td>
            <td>
                <textarea name='text' style='width:400px;height:200px'></textarea>
            </td>
        </tr>
    ","./api/add.php");
    }
    public function list(){
        $this->view("./view/news.php");
    }
    public function num(){
        return $this->count(['sh'=>1]);
    }
    function more(){
        if($this->num()>5){
            echo "<a href='?do=news' style='float:right'>More...</a>";
        }
    }
    function show(){
        $rows=$this->all(['sh'=>1],' limit 5');
        echo "<ol class='ssaa'>";
        foreach($rows as $row){
            echo "<li>";
            echo mb_substr($row['text'],0,10);
            echo "<span class='all' style='display:none'>";
            echo $row['text'];
            echo "</span>";
            echo "</li>";
        }
        echo "</ol>";
    }
    function moreNews(){
        $rows=$this->paginate(5,['sh'=>1]);
        $start=$this->links['start']+1;
        echo "<ol class='ssaa' start='$start'>";
        foreach($rows as $row){
            echo "<li>";
            echo mb_substr($row['text'],0,20);
            echo "<span class='all' style='display:none'>";
            echo $row['text'];
            echo "</span>";
            echo "</li>";
        }
        echo "</ol>";
    }
}
?>