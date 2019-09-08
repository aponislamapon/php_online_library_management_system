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
                <a class="navbar-brand" href="home.php">
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

                            <li><a class="fa fa-home" href="home.php">Home</a></li>
                            <li><a class="fa fa-book" href="newarrival.php">New Arrival Book</a></li>
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


           
        <section>
            <div class="row ">
                <div class="col-xs-6"><br><br>
                    <h1>Rich Dad Poor Dad</h1>
                    <p>In the 20th anniversary edition of this classic, Robert offers an update on what we’ve seen over the past 20 years related to money, investing and the global economy. Sidebars throughout the book will take readers “fast forward” from 1997 to today as Robert assesses how the principles taught by his rich dad have stood the test of time. In many ways, the messages of rich dad poor dad, messages that were criticized and challenged two decades ago, are more meaningful, relevant and important today than they were 20 years ago. As always, readers can expect that Robert will be candid, insightful and continue to rock more than a few boats in his retrospective. Will there be a few surprises? Count on it. Rich dad poor dad 1. Explodes the myth that you need to earn a high income to become rich 2. Challenges the belief that your house is an asset 3. Shows parents why they can’t rely on the school system to teach their kids about money 4. Defines once and for all an asset and a liability Teaches you what to teach your kids about money for their future financial success.</p>
                </div>
                <div class="col-xs-6">
                    <img src="./admin/assets/img/book1.png">
                </div>
                
            </div>
            <div class="row">
                <div class="col-xs-6">
                    <img src="./admin/assets/img/book2.jpg">
                </div>
                <div class="col-xs-6"><br><br>
                    <h1>Elon Musk</h1>
                    <p>The book captures the life and achievements of South African interpreter and innovator, Elon Musk, the brain behind series of successful enterprises such as PayPal, Tesla, SpaceX and Solarcity. The real-life inspiration of the Iron Man Series, Musk wants to be the saviour of the planet, send people into space and set up a colony on Mars. Bullied in school and scolded tremendously by his father, Musk was actually a brilliant student and his life story is nothing less than a drama packed film. Ashlee Vance’s brilliant description of Musk’s character, simple language and neat choice of words indeed makes this book a great read. Considered by some as the innovation, entrepreneurial Steve Jobs of the present and future, Elon Musk became a billionaire early in life with his successful online ventures. One of the successful companies that he co-founded was the online payment gateway PayPal that was later acquired by e-Bay in 2002.</p>
                </div>
                
            </div>
                    
        </section>


        
            








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