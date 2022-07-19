
<?php
include 'config.php';
session_start();

if(!isset($_SESSION["id"])){
  header('location:index.php');
};

// echo $id_user;
if(isset($_POST['send'])){

    $id_doctor = $_SESSION["id_doctor"];
    $id_user = $_SESSION["id"];
    $time = $_POST['time'];

    echo $id_doctor,$id_user,$time;
    $conn->query("INSERT INTO reservations (`doctors_id`, `patients_id`, `time`) VALUES('$id_doctor','$id_user','$time')");
// //     // $sql ="SELECT * FROM `patients` WHERE email = '$email' and password ='$password' ";
// //     // $select = $conn->query($sql);
// //     // $row = $select->fetch_assoc();
// //     // $_SESSION["name"] = $row["name"];
// //     // $_SESSION["id"] = $row["id"];
    header('location:hjozti.php');
  }


?>
