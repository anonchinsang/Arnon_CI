<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotel Cat & Dog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>

<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" <?php echo anchor("member/index/","Hotel")?>">
    </div>
    <ul class="nav navbar-nav">
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">Home<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><?php echo anchor("member/doghome/","สุนัขที่รับฝาก")?></li>
          <li><?php echo anchor("member/cathome/","แมวที่รับฝาก")?></li>
        </ul>
      </li>
      <li class="dropdown"><a class="dropdown-toggle" data-toggle="dropdown" href="#">รับฝากสัตว์<span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><?php echo anchor("member/adddog/","รับฝากสุนัข")?></li>
          <li><?php echo anchor("member/addcat/","รับฝากแมว")?></li>
        </ul>
      </li>
      <li><a href="#">Photo Gallery</a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Contact</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><?php echo anchor("member/login/","Logout")?></li>
    </ul>
  </div>
</nav>
  <?php echo form_open('member/updatecat/'.$rs['id_cat'])?>
<section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">แก้ไขข้อมูล</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">      
    <div class="form-group">
      <label for="id">ID:</label>
      <input type="id" class="form-control" id="id_cat"  name="id_cat" value="<?php echo $rs['id_cat']?>" readonly>
    </div>
    <div class="form-group">
      <label for="name_dog">ชื่อ:</label>
      <input type="name_dog" class="form-control" id="name_cat"  name="name_cat" value="<?php echo $rs['name_cat']?>">
    </div>
    <div class="form-group">
      <label for="breed">สายพันธ์:</label>
      <input type="breed" class="form-control" id="breed_cat"  name="breed_cat" value="<?php echo $rs['breed_cat']?>">
    </div>
    <div class="form-group">
      <label for="nature">ลักษณะ:</label>
      <input type="nature" class="form-control" id="nature_cat"  name="nature_cat" value="<?php echo $rs['nature_cat']?>">
    </div>
    <div class="form-group">
      <label for="date">วันที่รับฝาก:</label>
      <input type="date" class="form-control" id="date_cat"  name="date_cat" value="<?php echo $rs['date_cat']?>">
    </div>
    <div class="form-group">
      <label for="dates">วันที่รับกลับ:</label>
      <input type="date" class="form-control" id="dates_cat"  name="dates_cat" value="<?php echo $rs['dates_cat']?>">
    </div>
    
    <button type="submit" class="btn btn-default">Submit</button>
  
</div>
<?php echo form_Close() ?>
    </section>

</body>
</html>