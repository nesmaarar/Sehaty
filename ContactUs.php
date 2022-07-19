<?php


if (isset($_POST["send"])) {
    header("location:ContactUs1.html");
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
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/style-co.css">
    <title>Document</title>
</head>
<body>
    <header class="sec1" style="height: 100vh;">

    <nav class="navbar navbar-expand-lg">
            <div class="container">
                <a class="navbar-brand" href="#"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
              <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" style="color: #0089D9; margin-right: 38px;margin-left: 410px; font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="ContactUs.php">تواصل معنا</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="about.php">عن الموقع</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="hjozti.php">حجوزاتي</a>
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

<div class="container">
    <div class="row">
      <div class="col">
        <img src="IMG/sec1-img1-a.svg" class="sec1-img1" alt="">
      </div>
      <div class="col">
        <p class="sec1-t1">تواصل معنا</p>
        <form action="" method="post">
            <p class="sec1-t2 sec1-t3">الإسم</p>
            <div class="shadow bg-body rounded">
            <input type="text" class="form-control sec1-in1" style="text-align: right; margin-top: 180px;" required>
        </div>
            <p class="sec1-t2 sec1-t5">الإيميل</p>
            <div class="shadow bg-body rounded">
            <input type="email" class="form-control sec1-in2" id="exampleInputEmail1" aria-describedby="emailHelp" style="text-align: right;margin-top: 80px;" required>
            </div>
            <p class="sec1-t2 sec1-t4">نص المساعدة</p>
            <div class="shadow bg-body rounded">
                <textarea class="form-control sec1-in3" style="text-align: right;height: 180px;margin-top: 50px;" id="exampleFormControlTextarea1" rows="8" required></textarea>
        </div>
        <input type="submit" class="btn btn-primary sec1-sub1" name="send"></input>
        </form>
      </div>
    </div>
  </div>


</header>
</body>
</html>