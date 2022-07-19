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
    <link rel="stylesheet" href="CSS/style1.css">
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="css/style-noti.css">
    <link rel="stylesheet" href="css/style-ah.css">
    <title>Document</title>
</head>
<body>
    <header class="sec1">

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
                    <a class="nav-link active" style="color: #0089D9; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="noti.php">الاشعارات</a>
                    <p class="sec1-ul3 rounded-pill">1</p>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="chat.php">الرسائل</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px; " aria-current="page" href="index.php">صفحتي</a>
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

<?php
include '../config.php';


$sql ="SELECT patients.name , reservations.time , reservations.date  FROM  reservations
JOIN patients  ON reservations.patients_id = patients.id
JOIN doctors ON reservations.doctors_id = doctors.id 
order by timestamp DESC ";
$select = $conn->query($sql);

if($select->num_rows > 0){
    while($row = $select->fetch_assoc()) {

?>


<div class="all shadow bg-body">
    <p class="sec1-t1">تفاصيل الحجز</p>
    <div class="sec1-row1 rounded-4">
        <img src="IMG/chat-per1.svg" class="sec1-img1" alt="">
        <p class="sec1-t2 sec1-t8">اسم الحالة </p>
        <p class="sec1-t3 sec1-t8">الموعد </p>
        <p class="sec1-t4 sec1-t8">الوقت</p>
        <p class="sec1-t5 sec1-t9"><?= $row['name'] ?></p>
        <p class="sec1-t6 sec1-t9">4/7/2022</p>
        <p class="sec1-t7 sec1-t9"> <?= $row['time'] ?></p>
        <style>
            .sec1-t2{
    top: 80px;
    right: 200px;
}
.sec1-t3{
    top: 80px;
    right: 200px;
}
.sec1-t4{
    top: 150px;
    right: 135px;
}
.sec1-t9{
    font-size: 18px;
    font-weight: bold;
    color: black;
    position: absolute;
    top: auto;
    bottom: auto;
    right: auto;
    left: auto;
    text-align: right;
}
.sec1-t5{
    top: 50px;
    right: 270px;
}
.sec1-t6{
    top: 104px;
    right: 270px;
}
.sec1-t7{
    top: 190px;
    right: 310px;
}
.sec1-row1{
    position: absolute;
    right: 100px;
    height: 300px;
    width: 500px;
    margin: 0;
}
        </style>
    </div>
    <div class="d-grid gap-2 d-md-block sec1-btns">
        <a class="btn btn-primary sec1-btn1 rounded-3 shadow bg-body" type="button">الرجاء تحديد موعد آخر</a>
        <button class="btn btn-primary sec1-btn2 rounded-3" type="button">قبول</button>
      </div>
</div>


<?php
    }

}



?>









</header>
</body>
</html>