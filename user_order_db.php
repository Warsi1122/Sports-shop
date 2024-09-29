<?php
session_start();
//include 'admin/connection.php'; 
    $db = new DB();

if(isset($_POST["action"]) && $_POST["action"]=="delete_data")
{

  $id=$_POST['id'];
  $qry = ("DELETE FROM orders WHERE id='".$id."'");


    if($db->qry($qry))
    {
      $return = array("Error"=>"false","msg"=>"Data deleted successfully");

    }
    else
    {
      $return = array("Error"=>"true","msg"=>"Error in processing");
    }
    
    echo json_encode($return); exit;
}

?>