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
      <li><?php echo anchor("member/photo/","Photo Gallery")?></a></li>
      
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#">Contact</a></li>
      <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
      <li><?php echo anchor("member/login/","Logout")?></li>
    </ul>
  </div>
</nav>
  
<section id="contact">
      <div class="container">
        <h2 class="text-center text-uppercase text-secondary mb-0">เพิ่มสุนัขที่จะรับฝาก</h2>
        <hr class="star-dark mb-5">
        <div class="row">
          <div class="col-lg-8 mx-auto">
            
            <form  action="add_dog">
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>ID</label>
                  <input class="form-control" id="id" type="text" name="id">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>ชื่อ</label>
                  <input class="form-control" id="name_dog" type="text" name="name_dog">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>สายพันธ์สุนัข</label>
                  <input class="form-control" id="breed" type="breed" name="breed">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>ลักษณะ</label>
                  <input class="form-control" id="nature" type="nature" name="nature">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>วันที่รับฝาก</label>
                  <input class="form-control" id="date" type="date" name="date">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <div class="control-group">
                <div class="form-group floating-label-form-group controls mb-0 pb-2">
                  <label>วันที่รับกลับ</label>
                  <input class="form-control" id="dates" type="date" name="dates">
                  <p class="help-block text-danger"></p>
                </div>
              </div>
              <br>
              <div id="success"></div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-xl" id="sendMessageButton">Send</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

</body>
</html>