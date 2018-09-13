<!DOCTYPE html>
<html lang="en">
<head>
  <title>Hotel Cat & Dog</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">

</head>
<style>
.brightness {-webkit-filter: brightness(250%);filter: brightness(250%);}
.bottommenu img {
  margin-left: 20px;
  margin-top: 0px;
  margin-right: 20px;
  margin-bottom: 10px;
  transition: opacity 1s ease-in-out;
}
.bottommenu img:hover{
  opacity: 0.6;
}
body
{ 
    
    background-image: url('<?php echo base_url();?>/assets/img/bg2.jpg');
    background-size: 100%;
    padding: 10px;
}
.footer {
    background-color:#222222;
    padding: 50px;
    margin-top:140px;
}
<body >
</style>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" <?php echo anchor("member/index/","Hotel")?>
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
      <li><?php echo anchor("member/photo/","Photo Gallery")?></a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="https://www.facebook.com/profile.php?id=100002467193569">Contact</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><?php echo anchor("member/login/","Logout")?></li>
    </ul>
  </div>
</nav>
  
      <div class="bottommenu" align="center">

      <img src="<?php echo base_url();?>/assets/img/hotel1.jpg" class="img-thumbnail" alt="Cinque Terre" width="500" height="250">

      <img src="<?php echo base_url();?>/assets/img/hotel2.jpg" class="img-thumbnail" alt="Cinque Terre" width="420" height="300"> 
      </div>
      <div class="footer">      
      </div>
</body>
</html>