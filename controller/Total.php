<?php
include_once "DB.php";
class Total extends DB
{
    public $header = "進站人數";

    public function __construct()
    {
        parent::__construct('total');
    }
    function list(){
        return $this->view("./view/total.php");
    }

    /**
     * 前台頁面顯示用的方法
     * 在這裏是顯示目前的網站瀏灠人數
     */
    function show(){
        return $this->find(1)['total'];
    }
}
?>