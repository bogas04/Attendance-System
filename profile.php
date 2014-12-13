<?php
  session_start();
  $isIndex = 0;
  if(!(array_key_exists('teacher_id',$_SESSION) && isset($_SESSION['teacher_id']))) {
    session_destroy();
    if(!$isIndex) header('Location: index.php');
  }
?>
<?php include 'php/node_class.php'; ?>
<html>
 <head>
  <link rel="stylesheet" href="css/style.css"/>
  <title>Profile</title>
  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/profile.js"></script>
 </head>
 <body>
  <div id="header" class="clearfix">
    <h1>Netaji Subhas Institute of Technology</h1>
    <h3>Profile</h3>	
  </div>
  <nav class="navbar navbar-default" id="sub-menu">  
    <div class="navbar-header">    
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">      
        <span class="sr-only">Toggle navigation</span>      
        <span class="icon-bar"></span>      
        <span class="icon-bar"></span>      
        <span class="icon-bar"></span>    
      </button>  
    </div>  
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">    
      <ul class="nav navbar-nav navbar-left">      
        <li><a href="teacher.php">Home</a></li>
        <li class="active"><a href="profile.php">Profile</a></li>
        <li><a href="class.php">Classes</a></li>
        <li><a href="statistics.php">Statistics</a></li>
        <li><a href="logout.php">Logout</a></li>
      </ul>  
    </div>  
  </nav> 
  <div class="container">
    <?php
      $name = $_SESSION['name'];
      $phone = $_SESSION['phone'];
      $email = $_SESSION['email'];
      $classes = $_SESSION['classes'];
      $teacher_id = $_SESSION['teacher_id'];
      echo '<h2>Welcome , '.$name.'. Edit your profile here.</h2><br>';
    ?>
    <div class="wrapper">
      <dl class="dl-horizontal">
        <dt>Name : </dt>
        <dd>
          <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-user"></span></span>
          <input class="form-control" name="name" placeholder="Enter your name" value="<?php echo $name; ?>">
          </div>
        </dd>
        <dt>Phone : </dt>
        <dd>
          <div class="input-group">
          <span class="input-group-addon"><span class="glyphicon glyphicon-phone"></span></span>
          <input class="form-control" name="phone" placeholder="Enter your phone" value="<?php echo $phone; ?>">
          </div>
        </dd>
        <dt>Email : </dt>
        <dd>
          <div class="input-group">
          <span class="input-group-addon">@</span>
          <input class="form-control" name="email" placeholder="Enter your email"  value="<?php echo $email; ?>">
          </div>
        </dd>
        <dt>Classes : </dt>
        <dd><?php echo $classes == 0? 0 : count($classes); ?></dd>
     </dl>
     <button class="btn btn-success update-profile">Save</button>
    </div>
  </div>
 </body>
</html>
