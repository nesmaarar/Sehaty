<?php
session_start();

include 'config.php';

if(isset($_POST['submit'])){
  $name =  $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $password = $_POST['password'];
  $re_password = $_POST['re_password'];

  $sql ="SELECT * FROM `patients` WHERE email = '$email' and password = '$password'";
  $select = $conn->query($sql);

  if($select->num_rows == 0 ){
    $conn->query("INSERT INTO `patients`(name, email, phone, password) VALUES('$name', '$email', '$phone' , '$password')");
    $sql ="SELECT * FROM `patients` WHERE email = '$email' and password ='$password' ";
    $select = $conn->query($sql);
    $row = $select->fetch_assoc();
    // $_SESSION["name"] = $row["name"];
    $_SESSION["id"] = $row["id"];
    header('location:login.php');
  }
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
    <link rel="stylesheet" href="css/style-si.css">
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
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;margin-left: 410px; font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="ContactUs.php">تواصل معنا</a>
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
                  <a class="nav-link active" style="color: #0089D9; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px; " aria-current="page" href="index.php">الرئيسية</a>
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



<div class="shadow bg-body sign_up rounded-3">
    <p class="sec1-t1">حساب جديد</p>
    <form action="<?php echo $_SERVER["PHP_SELF"]?>" method="POST">
        <p class="sec1-l1">الاسم الكامل</p>
        <input name="name" type="text" class="form-control rounded-3" id="formGroupExampleInput" placeholder=" أحمد علي" style="text-align: right;width: 300px;margin-left: 37px;">
        <p class="sec1-l1" style="margin-top: 10px;">البريد الالكتروني</p>
        <input name="email" type="email" class="form-control rounded-3" placeholder="example@gmail.com" style="text-align: left;width: 300px;margin-left: 37px;">
        <p class="sec1-l1" style="margin-top: 10px;">رقم الجوال</p>
        <input  type="text" name="phone" class="form-control rounded-3" placeholder="+970 9999999" style="text-align: left;width: 300px;margin-left: 37px;">
        <p class="sec1-l1" style="margin-top: 10px;">كلمة المرور</p>
        <input name="password" type="password" class="form-control rounded-3" placeholder="*******" style="text-align:right;width: 300px;margin-left: 37px;">
        <p class="sec1-l1" style="margin-top: 10px;">تأكيد كلمة المرور</p>
        <input name="re_password" type="password" class="form-control rounded-3" placeholder="*******" style="text-align:right;width: 300px;margin-left: 37px;">
        <p class="sec1-t2">لقد قرأت و أوافق على <a class="terms" href="terms.html"> شروط  الاستخدام </a></p>
        <input type="submit" class="btn rounded-3 create btn-primary" value="انشاء حساب جديد" name="submit"></input>

        
    </form>
</div>
</header>
</body>
</html>