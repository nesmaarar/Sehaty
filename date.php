<?php
include 'config.php';
session_start();


// $_SESSION["id_doctor"]=$_GET['id'];

// echo $id;
// echo $id_user;
// if(isset($_POST['send'])){

    
//     $id_user = $_SESSION["id"];
//     $time = $_POST['time'];

//     $conn->query("INSERT INTO `reservations`(doctors_id ,	patients_id , time	
//      ) VALUES($id,$id_user,$time)");
//     $sql ="SELECT * FROM `patients` WHERE email = '$email' and password ='$password' ";
//     $select = $conn->query($sql);
//     $row = $select->fetch_assoc();
//     $_SESSION["name"] = $row["name"];
//     $_SESSION["id"] = $row["id"];
//     header('location:hjozti.php');
//   }


 ?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v6.1.1/css/all.css">
    <link href="//db.onlinewebfonts.com/c/dee436f274c410c23fc3de43367ef1ae?family=JannaLT-Regular" rel="stylesheet" type="text/css"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style-h.css">
    <link href="scss/date.css" rel="stylesheet" type="css">
    <link rel="stylesheet" href="css/style-da.css">
    <title>Document</title>
</head>
<body>
    <header class="sec1" style="height: 180vh;">

        <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;margin-left: 410px; font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="ContactUs.php">تواصل معنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="about.php">عن الموقع</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: #0089D9; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="hjozti.php">حجوزاتي</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="Specialties/Specialties.php">التخصصات</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px; " aria-current="page" href="index.php">الرئيسية</a>
                    <div class="sec1-ul1"></div>
                </li>
              
                
            </ul>
            <a href="noti.php" class="sec1-ul1-1 rounded-circle"><i class="fa-light fa-bell "></i></a>
                <style>
                    .sec1-ul1-1{
                        padding-top:7px;
                        color: #00318B;
                        font-size:19px;
                        position: absolute;
                        padding-left: 12px;
                        left:250px;
                        width:45px;
                        height: 45px;
                        background: none;
                        border: #00318B 2px solid;
                    }
                    .sec1-ul1-1:hover{
                        color: white;
                        background-color: #00318B;
                        font-weight: bold;
                    }
                </style>
        </div>
    </div>
</nav>

    <p class="sec1-t1">حجز موعد</p>
    <p class="sec1-t2">هنا يتم تحديد الموعد الخاصة بك .</p>
    
    <div class="shadow bg-body all" style="position: relative;">
        <p class="sec1-t3">اختر الموعد المناسب لك</p>
        <img src="IMG/calendar.svg" class="sec1-img-1" alt="">
        <p class="sec1-t4">الان اختر الوقت المناسب </p>
        <!-- <img src="IMG/calendar2.svg" style="margin-left: 220px;" alt=""> -->
        <div class="date ">
            <form action="yhy.php" method='post'>
                <!-- <input type="date" style="text-align: right;display: block;">
                <input type="time" style="text-align: right;width: 145px;"> -->
                <!-- <p style="display: inline;margin-left: -90px;margin-right: 20px;">صباحا</p>
                <input type="text" name='h1' maxlength="1" class="num1 rounded-3">
                <input type="text" name='h2' maxlength="1" class="num2 rounded-3">
                <p style="margin-left: 5px;margin-right: 5px;font-size: 60px;display: inline;">:</p>
                <input type="text" name='m2' maxlength="1" class="num3 rounded-3">
                <input type="text" name='m2' maxlength="1" class="num4 rounded-3"> -->
                <input type="time" name="time" style='width:30% !important;' class=' form-control' >
                <input type="submit" name='send' class="btn btn-primary rounded-3 sec1-btn-1" value='انتهيت' >
            </form>
        </div>
    
</header>


<!-- JavaScript Bundle with Popper -->

</body>
</html>