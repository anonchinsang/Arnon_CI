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
  
<div class="container">
  <h2>สุนัขที่รับฝาก</h2>
              
  <table class="table table-hover">
    <thead>
      <tr>
        <th>ID</th>
        <th>ชื่อ</th>
        <th>สายพันธ์</th>
        <th>ลักษณะ</th>
        <th>วันที่รับเลี้ยง</th>
        <th>วันที่รับรับกลับ</th>
        <th>Edit</th>
        <th>Del</th>
      </tr>
    </thead>
    <?php foreach ($rs as $r){ ?>
    <tbody>
      <tr>
        <td><?php echo $r['id_dog'];?></td>
        <td><?php echo $r['name_dog'];?></td>
        <td><?php echo $r['breed_dog'];?></td>
        <td><?php echo $r['nature_dog'];?></td>
        <td><?php echo $r['date_dog'];?></td>
        <td><?php echo $r['dates_dog'];?></td>
        <td><span class="glyphicon glyphicon-cog"></span> <?php echo anchor("member/edit_dog/".$r['id_dog'],"Edit")?></td>
        <td><span class="glyphicon glyphicon-trash"></span> <?php echo anchor("member/del_dog/".$r['id_dog'],"Del",array("onclick"=>"return confirm('Are you sure ?');"));?></td>
      </tr>
    </tbody>
<?php } ?>
  </table>
</div>

</body>
</html>