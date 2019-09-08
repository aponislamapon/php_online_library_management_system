<?php $db=new mysqli('localhost', 'root', '', 'library'); ?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Online Library Management System | </title>
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

    <div class="navbar navbar-inverse set-radius-zero">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.php">
                    <img src="assets/img/logo.png" />
                </a>

            </div>

            <div class="right-div">
                <a href="adminlogin.php" class="btn btn-success pull-right"><span class="fa fa-sign-in"> Login / Register</span></a>

            </div>

        </div>
    </div>
    <!-- LOGO HEADER END-->

    <section class="menu-section">
        <div class="container">
            <div class="row ">
                <div class="col-md-12">
                    <div class="navbar-collapse collapse ">
                        <ul id="menu-top" class="nav navbar-nav navbar-right">

                            <li><a class="fa fa-home" href="index.php">Home</a></li>
                            
                            <li><a class="fa fa-book" href="upcomming.php">Up comming Book</a></li>
                            
                            

                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- MENU SECTION END-->
    <div class="content-wrapper">
        <div class="container">

            <div id="myCarousel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                    <li data-target="#myCarousel" data-slide-to="1"></li>
                    <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner">
                    <div class="item active">
                        <img src="./admin/assets/img/1.jpg" alt="Los Angeles" style="width:100%; height: 300px;">
                    </div>

                    <div class="item">
                        <img src="./admin/assets/img/2.jpg" alt="Chicago" style="width:100%; height: 300px;">
                    </div>

                    <div class="item">
                        <img src="./admin/assets/img/3.jpg" alt="New york" style="width:100%; height: 300px;">
                    </div>
                </div>

                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
<!-- ==================================================== -->
        <section>

            <?php 

                $sql= "SELECT * FROM upcomming";
                $result= $db->query($sql);           

            ?>
            <?php 
                while($row= $result->fetch_assoc()){
             ?>
            <div class="row"><br>  <br> 
                
                <div class="col-xs-6">   
                    <h1 style="text-align: center;"><?php echo $row['book_title']; ?></h1>
                    <p><?php echo $row['book_summery']; ?></p>
                    
                </div>
                 
                <div class="col-xs-offset-2 col-xs-4">
                    <img src="<?php echo "admin\uploads../".$row['image'];?>" alt="pic">
                    <!-- <img src="./images/up1.jpg" alt=""> -->
                </div>
            </div>
           <?php } ?>



                
        </section>
<!-- ==================================================== -->
           



        
            








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