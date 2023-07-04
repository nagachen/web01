<?php 
include_once "DB.php";
class Bottom extends DB
{
    public $header = "頁尾版權";

    public function __construct()
    {
        parent::__construct('bottom');
    }
    function list(){
        return $this->view("./view/bottom.php");
    }
    function show(){
        return $this->find(1)['bottom'];
    }
}
?>