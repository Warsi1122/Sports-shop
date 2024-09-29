<?php
session_start();
include 'admin/connection.php'; 
    $db = new DB();
 //print_r($_POST);
    //exit;
  $f_name = $db->secure($_POST['f_name']);
  $l_name = $db->secure($_POST['l_name']);
  $email = $db->secure($_POST['email']);
  $country = $db->secure($_POST['country']);
  $streetaddress = $db->secure($_POST['streetaddress']);
  $town = $db->secure($_POST['town']);
  $phone = $db->secure($_POST['phone']);
  $pids = $db->secure($_POST['pids']);
  $total = $db->secure($_POST['total']);
  $ordernote = $db->secure($_POST['ordernote']);
  $user_id = $_SESSION['id'];

  $qry3 = ("INSERT INTO shipping(f_name,l_name,email,country,streetaddress,town,phone,pids,total,ordernote,user_id) VALUES ('".$f_name."','".$l_name."','".$email."','".$country."','".$streetaddress."','".$town."','".$phone."','".$pids."','".$total."','".$ordernote."','".$user_id."')");
   if($db->qry($qry3))
    {
      $return = array("Error"=>"false","msg"=>"Your Order Placed successfully");

    }
    else
    {
      $return = array("Error"=>"true","msg"=>"Error in processing");
    }
    $qry4 = $db->qry("SELECT * FROM shipping ORDER BY id DESC");
    $row1 = $qry4->fetch_object();
    $newid = $row1->id;

    $qry = $db->qry("SELECT * FROM cart ORDER BY id DESC");
    while ($row = $qry->fetch_object() ) {
    $user_id = $row->user_id;
    $pid = $row->pid;
    $quantity = $row->quantity;
    $time_date = date('Y-m-d H:i:s');
    $qry1 = ("INSERT INTO orders(user_id,pid,quantity,shipid,time_date) VALUES ('".$user_id."','".$pid."','".$quantity."','".$newid."','".$time_date."')");
      $db->qry($qry1);
  }
      $qry2 = ("DELETE FROM cart");
      $db->qry($qry2);
      echo json_encode($return); exit;
?>