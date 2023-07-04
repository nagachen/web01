<?php
include_once "DB.php";
class Ad extends DB
{
    public $header = '動態文字廣告';
    protected $add_header = '新增動態文字廣告';
    public function __construct()
    {

        parent::__construct('ad');
    }
    public function add_form()
    {
        
        $this->modal("
    <tr>
        <td>$this->add_header</td>
        <td><input type='text' name='text'></td>
    </tr>
","./api/add.php");
    }
    public function list(){
        $this->view("./view/ad.php");
    }
    function show(){
        $rows=$this->all(['sh'=>1]);
        $str=join('&nbsp;&nbsp;',array_column($rows,'text'));
        // dd($rows);
        return $str;
    }
}
?>