<?php
session_start();
include 'admin/connection.php'; 
    $db = new DB();
if(isset($_POST["action"]) && $_POST["action"]=="save_data")
{
  $quantity = $_POST['quantity'];
  $user_id = $_SESSION['id'];
  $id = $_POST['id'];

  $qry = ("INSERT INTO cart(user_id,pid,quantity) VALUES ('".$user_id."','".$id."','".$quantity."')");

  if($db->qry($qry))
    {
      $return = array("Error"=>"false","msg"=>"Product added in cart successfully");
    }
    else
    {
      $return = array("Error"=>"true","msg"=>"Error in processing");
    }
    
    echo json_encode($return); exit;

}

if(isset($_POST["action"]) && $_POST["action"]=="delete_data")
{

  $id=$_POST['id'];
  $qry = ("DELETE FROM cart WHERE id='".$id."'");


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