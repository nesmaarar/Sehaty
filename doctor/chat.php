
<?php
include '../config.php';
session_start();




// echo $id_user;
if(isset($_POST['send'])){
    $id_doctor =$_SESSION["id_doctor"];
    $id_user = $_SESSION["id"];


$msg = $_POST['msg'];

    // echo $id_doctor,$id_user,$time;
    $conn->query("INSERT INTO msg (`doctors_id`, `patients_id`, `msg`) VALUES('$id_doctor','$id_user','$msg')");
// //     // $sql ="SELECT * FROM `patients` WHERE email = '$email' and password ='$password' ";
// //     // $select = $conn->query($sql);
// //     // $row = $select->fetch_assoc();
// //     // $_SESSION["name"] = $row["name"];
// //     // $_SESSION["id"] = $row["id"];
  }


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
    <link rel="stylesheet" href="css/style1.css">
    <link rel="stylesheet" href="CSS/style-h.css">
    <link rel="stylesheet" href="css/style-ch.css">
    <title>Document</title>
</head>
<body>
    <header class="sec1" style="height: 200vh;">

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
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="noti.php">الاشعارات</a>
                    <p class="sec1-ul3 rounded-pill">1</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="chat.php">الرسائل</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" style="color: #0089D9; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px; " aria-current="page" href="index.php">صفحتي</a>
                  <div class="sec1-ul1"></div>
                </li>
              
                
            </ul>
            <div class="search-bar">
                <input type="search" class="search" placeholder="ابحث هنا">
                <div class="sec1-ul2"></div>
                <a href=""><i class="fa-regular fa-magnifying-glass sec1-ic1"></i></a>
            </div>
        </div>
    </div>
</nav>

    <p class="sec1-t1">الرسائل</p>
    <p class="sec1-t2">هنا توجد الرسائل والمحادثات الخاصة بك</p>

    <div class="all rounded-3 shadow bg-body rounded-3">
        <div class="left rounded-4 shadow bg-body rounded-3">
            <img src="IMG/sec4-img2-s4.svg" class="sec1-img1-1  rounded-pill" alt="">
            <div class="dotg1 rounded-pill"></div>
            <p class="sec1-t4-1">د. فضل نعيم </p>
            <div class="sec1-line1"></div>

            <?php

$sql ="SELECT * FROM `msg`";

$mysql = $conn->query($sql);

if($mysql->num_rows > 0){
  while($row = $mysql->fetch_assoc()) {
?>




    <img src="IMG/chat-per1.svg" class="sec1-per1 sec1-per rounded-pill" alt="">
    <p class="sec1-per1-t "> <?= $row['msg'] ?><br> </p>

 <?php

  }}
  ?>
<!-- 
<img src="IMG/sec4-img2-s4.svg" class="sec1-per3-2 sec1-per rounded-pill" alt="">
<p class="sec1-per3-t-2 shadow bg-body">بامكانك الحجز  والتوجه للمستشفى</p>

            
            
            
            <img src="IMG/chat-per1.svg" class="sec1-per2 sec1-per rounded-pill" alt="">
            <img src="IMG/chat-img2.png" class="sec1-img2" alt="">
            <img src="IMG/chat-per1.svg" class="sec1-per3 sec1-per rounded-pill" alt="">
            <p class="sec1-per3-t">حسناً متى يمكنني القدوم <br>للمشفى</p>



            <img src="IMG/sec4-img2-s4.svg" class="sec1-per1-2 sec1-per rounded-pill" alt="">
            <img src="IMG/chat-img3-1.svg" class="sec1-img2-2" alt="">



            <img src="IMG/sec4-img2-s4.svg" class="sec1-per2-2 sec1-per rounded-pill" alt="">
            <p class="sec1-per1-t-2 shadow bg-body">انا متواجد في المستشفى اليوم <br>من الساعة الثالثة مساءً</p>
            
            
            
            <img src="IMG/sec4-img2-s4.svg" class="sec1-per3-2 sec1-per rounded-pill" alt="">
            <p class="sec1-per3-t-2 shadow bg-body">بامكانك الحجز  والتوجه للمستشفى</p> -->

            <form method='post' action="<?= $_SERVER["PHP_SELF"]?>" >
            <input type="text" name='msg' class="form-control sec1-input rounded-3" placeholder="ارسل رسالة">
            <input type="submit" name='send' value="" class="sec1-input1 rounded-3">
            </form>
            <img src="IMG/send.svg" class="send" alt="">
            <img src="IMG/mic.svg" class="mic" alt="">
            <img src="IMG/pen.svg" class="pen" alt="">
        </div>
        <p class="sec1-t3">أحدث الرسائل</p>
        <div class="sec1-row1 rounded-4">
            <img src="IMG/chat-per1.svg" class="sec1-img1 rounded-pill" alt="">
            <div class="dotg rounded-pill"></div>
            <p class="sec1-t4">أحمد علي</p>
            <p class="sec1-t5">بامكانك الحجز  والتوجه للمستشفى</p>
        </div>

    </div>
    </header>





</body></html>