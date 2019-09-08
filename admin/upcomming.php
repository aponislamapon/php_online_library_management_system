<?php //$db=new mysqli('localhost', 'root', '', 'library'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System</title>
    <!-- BOOTSTRAP CORE STYLE  -->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONT AWESOME STYLE  -->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- CUSTOM STYLE  -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <!-- GOOGLE FONT -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />

</head>
<body>
    <!------MENU SECTION START-->
<?php include('includes/header.php');?>
<!-- MENU SECTION END-->
<div class="content-wrapper">
<div class="container">
<div class="row pad-botm">
<div class="col-md-12">
<h4 class="header-line">Upcomming Book FORM</h4>
</div>
</div>
             
<!--LOGIN PANEL START-->           
 <!-- =============================================== -->
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "library");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $book_title = mysqli_real_escape_string($db, $_POST['book_title']);
    $book_summery = mysqli_real_escape_string($db, $_POST['book_summery']);

    // image file directory
    $target = "uploads/".basename($image);

    $sql = "INSERT INTO upcomming (book_title, book_summery, image) VALUES ('$book_title', '$book_summery','$image')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
  }
  
?>

<div>


       


  
  <form method="POST" class="form form-horizontal" action="upcomming.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <b>Book title :</b>
    <input type="text" class="form-control" name="book_title" placeholder="Book Name">
    <b>Book Image :</b>    
      <input type="file" name="image" class="form-control">
   <b>Book Description :</b>
      
      <textarea 
        id="text" 
        cols="40" 
        rows="4" 
        class="form-control"
        name="book_summery" 
        placeholder="Say something about this Book..."></textarea><br>
    

        
        <button type="submit" name="upload" class="btn btn-info">SUBMIT </button>
    
  </form>
</div>

 <!-- ================================================== -->
<!---LOGIN PABNEL END-->


  
















             
 
    </div>
    </div>
     <!-- CONTENT-WRAPPER SECTION END-->
 <?php include('includes/footer.php');?>
      <!-- FOOTER SECTION END-->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS  -->
    <script src="assets/js/bootstrap.js"></script>
      <!-- CUSTOM SCRIPTS  -->
    <script src="assets/js/custom.js"></script>
</body>
</html>
