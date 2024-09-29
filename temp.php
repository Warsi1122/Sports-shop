<?php
session_start();
include 'admin/connection.php'; 
    $db = new DB();
if(isset($_POST["action"]) && $_POST["action"]=="submit_data")
{
  $f_name = $_POST['f_name'];
  $l_name = $_POST['l_name'];
  $email = $_POST['email'];
  $country = $_POST['country'];
  $streetaddress = $_POST['streetaddress'];
  $town = $_POST['town'];
  $phone = $_POST['phone'];
  $ordernote = $_POST['ordernote'];
  $user_id = $_SESSION['id'];
  $qry = $db->qry("SELECT * FROM cart ORDER BY id DESC");
  while ($row = $qry->fetch_object() ) {
    $user_id = $row->user_id;
    $pid = $row->pid;
    $quantity = $row->quantity;
    $qry1 = ("INSERT INTO orders(user_id,pid,quantity) VALUES ('".$user_id."','".$pid."','".$quantity."')");
      $db->qry($qry1);
  }
      $qry2 = ("DELETE FROM cart");
      $db->qry($qry2);

      $qry3 = ("INSERT INTO shipping(f_name,l_name,email,country,streetaddress,town,phone,ordernote,user_id) VALUES ('".$f_name."','".$l_name."','".$email."','".$country."','".$streetaddress."','".$town."','".$phone."','".$ordernote."','".$user_id."')");
        if($db->qry($qry3))
        {
          $return = array("Error"=>"false","msg"=>"Your Order Placed successfully");

        }
        else
        {
          $return = array("Error"=>"true","msg"=>"Error in processing");
        }
        
        echo json_encode($return); exit;
  
}

?>