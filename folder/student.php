<?php
require_once '../controllers/studentController.php';
$objstu=new studentcontroller();
$op="show";
if(isset($_REQUEST['op']))
    $op=$_REQUEST['op'];
    if($op=="show")
    $objstu->show();
    elseif ($op=="new")
        $objstu->new();
    elseif ($op=="save")
        $objstu->save();
    elseif ($op=="edit")
        $objstu->edit();
    elseif($op=="update")
        $objstu->update();
        elseif($op=="insert")
            $objstu->insert();
        elseif($op=="receive")
            $objstu->receive();
            elseif($op=="delete")
                $objstu->delete();
?>