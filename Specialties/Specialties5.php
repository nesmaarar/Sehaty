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
    <link rel="stylesheet" href="../CSS/style.css">
    <link rel="stylesheet" href="../CSS/style-s.css">
    <link rel="stylesheet" href="../CSS/style-s1.css">
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
                    <a class="nav-link active nav1" style="color: #00318B; margin-right: 38px;margin-left: 410px; font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="../ContactUs.php">تواصل معنا</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="../about.php">عن الموقع</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="../hjozti.php">حجوزاتي</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link active" style="color: #0089D9; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px;" aria-current="page" href="../Specialties/Specialties.php">التخصصات</a>
                </li>

              <li class="nav-item">
                  <a class="nav-link active" style="color: #00318B; margin-right: 38px;font-family: 'JannaLT-Regular';font-size: 18px; " aria-current="page" href="../index.php">الرئيسية</a>
                  <div class="sec1-ul1"></div>
                </li>

              
                
            </ul>
            <a href="../noti.php" class="sec1-ul1-1 rounded-circle"><i class="fa-light fa-bell "></i></a>
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
    <p class="sec1-t1">القلب</p>
    <p class="sec1-t2">هنا قائمة  بجميع الأطباء في تخصص القلب .</p>

    <div class="container">
        <div class="row">



        <?php
include '../config.php';


$sql ="SELECT * FROM `doctors` where specialty = 'القلب' ";
$select = $conn->query($sql);

if($select->num_rows > 0){
  while($row = $select->fetch_assoc()) {
    ?>
          <div class="col-lg-6 col-md-6 ">
              
            <div class="shadow p-3 mb-5 bg-body rounded sec1-col">
                <img src="<?= $row['path']?>" class="sec1-img" alt="">
                <div class="sec1-t" style='width:35%;' >
                <p class="sec1-t3">د.<?= $row['name']?></p>
            <p class="sec1-t4">د.<?= $row['name']?> <br>
      :  الخبرة المهنية  <br> <?= $row['experience']?> <br> 
                مكان العمل :  <?= $row['workplace']?> <br>   
                <?= $row['phone']?>:بيانات التواصل </p>
                </div>
            <div class="d-grid gap-2 d-md-block sec1-btns1">
                <a href="../chat.php?id=<?= $row['id']; ?>"><button class="btn sec1-bt1" type="button"><i class="fa-regular fa-comment"></i></button></a> 
                <a href="../date.php?id=<?= $row['id']; ?>"><button class="btn sec1-bt2 rounded" type="button">حجز موعد</button></a>
            </div>
          </div>
  </div>
<?php
  }
}



?>






        </div>
        
    </div>
          
</header>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>


</body>
</html>