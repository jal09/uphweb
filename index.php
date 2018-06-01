<!DOCTYPE html>
<html>

<head>
    <title>UPHS-IC</title>
    <!-- Bootstrap CSS -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- font awesome -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.12/js/all.js" integrity="sha384-Voup2lBiiyZYkRto2XWqbzxHXwzcm4A5RfdfG6466bu5LqjwwrjXCMBQBLMWh7qR" crossorigin="anonymous"></script>
    <!-- Our Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/colors.css">


</head>

<body>
    <header>
        <nav role="navigation" id="navi" class="fixed-top">
            <div id="menuToggle">
                <input type="checkbox" />
                <span></span>
                <span></span>
                <span></span>

                <ul id="menu" >
                    <a href="index.php">
                        <li>Home</li>
                    </a>
                    <a href="#">
                        <li>About</li>
                    </a>
                    <a href="online_admission/index.php">
                        <li>Apply now</li>
                    </a>
                    <a href="pages/pgnews.php">
                        <li>P.G. News</li>
                    </a>
                    <a href="pages/pgevent.php">
                        <li>Perpetual Events</li>
                    </a>
                    <a href="pages/pgevent.php">
                        <li>Announcement</li>
                    </a>
                    <a href="#" target="_blank">
                        <li>Contact</li>
                    </a>
                    <form class="form-inline">
                        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
                    </form>

                </ul>
            </div>
        </nav>
    </header>


    <section id="abovethefold">
        <div class="row align-items-center text-center h-100 m-auto">
            <div class="col-12 text-light">
                <h2 class="font-weight-bold">UNIVERSITY of</h2>
                <h1 class="font-weight-bold">PERPETUAL HELP SYSTEM</h1>
                <h2 class="font-weight-bold">Isabela Campus</h2>
                <hr class="border border-light col-2">
                <p class="text-light w-50 mx-auto">CHRACTER BUILDING IS NATION BUILDING</p>
            </div>
        </div>
    </section>

    <div id="content" class="container-fluid">
        <nav class=" navbar-expand-lg navbar-dark bg-transparent">
            <div class="navbar-header">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </nav>
    </div>

    <!-- about  -->
    <section id="about" class=" pt-5 mt-5 mb-5">
        <div class="container text-dark">
            <div class="row">
                <div class="col-md-12">
                    <div class=" text-center">
                        <h1 class="font-weight-bold">ABOUT US</h1>
                        <hr/ class="border border-dark col-1">
                        <p class="pb-4">We’ve been building unique digital products, platforms, and experiences for the past 6 years.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6 about-img">
                    <img src="img2/parallax/2.jpg" class="w-100" alt="">
                </div>

                <div class="col-md-6 content">
                    <h4>Lorem ipsum dolor sit amet, consectetur adipiscing elite storium paralate</h4>
                    <h5>Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</h5>
                    <p>
                        Ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum Libero justo laoreet sit amet cursus sit amet dictum sit. Commodo sed egestas egestas fringilla phasellus faucibus scelerisque eleifend donec Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- be perps  -->
    <section id="beperps" class="home-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12 p-5">
                    <div class="color-light text-center">
                        <h1 class="mt-5">Be a Perpetualite!</h1>
                        <p class="lead wow bounceInUp">We deliver good quality of education.</p>
                        <a href="pre-en/index.php" class="btn btn-primary btn-lg">Enroll Now</a>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- PG news  -->
    <section class="container mb-5 pb-5" id="pgnews">
        <div class="section-heading news mb-5">
            <h1 class="text-center text-dark font-weight-bold">Perpetual Gazette News</h1>
            <hr class="border border-primary w-25">
            <div class="heading-line"></div>
            <p class="text-center text-dark">latest</p>
        </div>

        <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            
            <div class="carousel-inner text-dark">
            <?php 
               include "database/dbcon.php";
                $sql = "select * from tbl_post_info WHERE category = 'Gazette News' order by created_at desc limit 3;";
                $result = mysqli_query($conn, $sql);
                $row = mysqli_fetch_assoc($result);
            ?>
                <div class="carousel-item active">
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <img src="admin/admin_pages/imgs/img_news/<?php echo $row['photo']; ?>" class="img-responsive w-100" alt="" />
                        </div>
                        <div class="col-sm-12 col-md-offset-1 col-md-6">
                            <h4><?php echo $row['title'] ?></h4>
                            <p>
                            <?php
                                $max_char 	= 150;
                                echo substr($row['body'], 0, $max_char) . '...';
                            ?>
                            </p>
                            <p><?php echo $row['created_at'] ?></p>
                            <a class="btn btn-primary float-right" href="pages/a_article.php?title=<?php echo $row['title'] ?>&date=<?php echo $row['created_at'] ?>">read more</a>
                        </div>
                    </div>
                </div>
                
            <?php while($row = mysqli_fetch_assoc($result)){ ?>
                <div class="carousel-item">
                    <div class="row">
                        <div class="col-sm-12 col-md-5">
                            <img src="admin/admin_pages/imgs/img_news/<?php echo $row['photo']; ?>" class="img-responsive w-100" alt="" />
                        </div>
                        <div class="col-sm-12 col-md-offset-1 col-md-6">
                            <h4><?php echo $row['title'] ?></h4>
                            <p>
                            <?php
                                $max_char 	= 150;
                                echo substr($row['body'], 0, $max_char) . '...';
                            ?>
                            </p>
                            <p><?php echo $row['created_at'] ?></p>
                            <a class="btn btn-primary float-right" href="pages/a_article.php?title=<?php echo $row['title'] ?>&date=<?php echo $row['created_at'] ?>">read more</a>
                        </div>
                    </div>
                </div>
            <?php } ?>

                <div class="carousel-item">
                    <div class="row py-5" id="read_more_news">
                        <div class="col text-center">
                            <h2>READ MORE</h2>
                            <p>@PERPETUAL GAZETTE NEWS</p>
                            <a href="pages/pgnews.php" class="btn btn-info text-light">read more</a>
                        </div>
                    </div>
                </div>
            </div>
            
            <a class="carousel-control-prev text-dark" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon text-dark" aria-hidden="true"></span>
            <span class="sr-only text-dark">Previous</span>
          </a>
            <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
          </a>
        </div>
    </section>


    <!-- event and announement -->
    <section class="container mt-5 pt-5" id="event">
        <div class="row">
            <div class="col-sm-6">

                <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">


                        <div class="carousel-item active">
                            <div class="row">
                                <?php 
                                    include "database/dbcon.php";
                                    $sql = "select * from tbl_post_info WHERE category = 'Event' order by post_id desc limit 2;";
                                    $result = mysqli_query($conn, $sql);
                                ?>
                                <?php while($row = mysqli_fetch_assoc($result)){ ?>
                                <div class="col-sm-6">
                                    <!-- Card -->
                                    <div class="card card-image mb-3 h-100" style="background: url(admin/admin_pages/imgs/img_event/<?php echo $row['photo']; ?>) no-repeat center / cover;">
                                        <div class="text-white text-center d-flex align-items-center rgba-black-strong py-5 px-4">
                                            <div>
                                                <h5 class="pink-text"><i class="fa fa-pie-chart"></i><?php echo $row['created_at']; ?></h5>
                                                <h3 class="card-title pt-2"><strong><?php echo $row['title']; ?></strong></h3>
                                                <a class=" btn btn-outline-warning" href="pages/a_event.php?title=<?php echo $row['title'] ?>&date=<?php echo $row['created_at'] ?>"><i class="fa fa-clone left"></i> View Event</a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- Card -->
                                </div>
                                 <?php } ?>
                            </div>
                        </div>


                        <div class="carousel-item">
                            <div class="card-body text-center p-5 mt-2">
                                <h1 class="font-weight-bold text-dark p-5 text-center">SEE MORE EVENTS</h1>
                                <a href="pages/pgevent.php" class="btn btn-outline-warning">click here</a>
                            </div>
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                      </a>
                    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                      </a>
                </div>


            </div>


            <div class="col-sm-6">
                <div class="card text-dark">
                    <img class="card-img-top h-50" src="img/6.jpg">
                    <!-- image here is fixed for announcement only-->
                    <div class="card-body">
                        <?php 
                            include "database/dbcon.php";
                            $sql = "select * from tbl_post_info WHERE category = 'Announcement';";
                            $result = mysqli_query($conn, $sql);
                            $row = mysqli_fetch_assoc($result);
                        ?>
                        <h4 class="card-title"><?php echo $row['title']; ?></h4>
                        <p class='small'>
                            <?php
                                $max_char 	= 150;
                                echo substr($row['body'], 0, $max_char) . '...';
                            ?>
                        </p>
                        <a href="a_article.php?title=<?php echo $row['title'] ?>&date=<?php echo $row['created_at'] ?>" class="btn btn btn-outline-info float-right">Read more</a>
                        <p class="card-text" style="font-size: 14px">2018-05-06 03:49:00</p>
                    </div>
                </div>
            </div>

        </div>

    </section>


    <!-- contact -->
    <section class="mt-5 pt-5 container mb-5 pb-5" id="contact">
        <div class="row mt-5 pt-5 text-dark ">
            <div class="col-sm-4 text-center">
                <i class="fas fa-map-marker-alt fa-3x m-3"></i>
                <h5 class="font-weight-bold mb-4">Main Building</h5>
                <ul class="list-unstyled">
                    <li>Minante Uno</li>
                    <li>Cauayan City, Isabela</li>
                </ul>
            </div>
            <div class="col-sm-4 text-center">
                <i class="fas fa-phone fa-3x m-3"></i>
                <h5 class="font-weight-bold mb-4">Call</h5>
                <ul class="list-unstyled">
                    <li>Tel. No: (078)307-3349</li>
                    <li>Mobile No: 0917-8555706</li>
                </ul>
            </div>
            <div class="col-sm-4 text-center">
                <i class="fas fa-envelope fa-3x m-3"></i>
                <h5 class="font-weight-bold mb-4">Email us</h5>
                <ul class="list-unstyled">
                    <li>uphs_isabela@gmail.com</li>
                </ul>
            </div>
        </div>

        <div class="row mb-5 pb-3">
            <div class="col-md-4">
            </div>
            <div class="col-md-4 text-center">
                <h4 class="font-weight-bold mb-4 text-dark mt-5">We're on social networks</h4>
                <i class="fab fa-facebook fa-3x icon ml-3 mr-3"></i>
                <i class="fab fa-instagram fa-3x icon ml-3 mr-3"></i>
                <i class="fab fa-twitter-square fa-3x icon ml-3 mr-3"></i>
            </div>
            <div class="col-md-4">
            </div>
        </div>
    </section>

    <footer id="ftr" class="mt-5 pt-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 text-center p-5">
                    <p>Copyright &copy; UPHS-IC. All rights reserved.</p>
                </div>
            </div>
        </div>
    </footer>



    <!-- V4 -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</body>

</html>
