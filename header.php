<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
        <link href="styling.css" rel="stylesheet" />
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    </head>
    <body>
        <div class="d-flex" id="wrapper">
            <!-- Sidebar-->
            <div class="border-end bg-black" id="sidebar-wrapper">
                <div class="sidebar-heading border-bottom bg-light nav-link category-link"  href="#!" onclick="sortMovies('popularity')"><img src="final.gif" alt="" class="img-fluid" width="135"></div>
                <div class="list-group list-group-flush" id="black_in">
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!" id="item3"><img src="gifs/player.gif" class="img-fluid" width="40">Popular Genres</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3 category-link" href="#!" onclick="sortMovies('rating')">Ratings</a> 
                  
                    <a class="list-group-item list-group-item-action list-group-item-black p-3" href="#!" id="item1"><i class="fa fa-user"></i> Sign Up</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="login.php" id="item2"><i class="fa fa-laptop"></i> Login</a>
                    
                    <style>#item1{background-color: black;
                    color:white
                    }
                    #item2{background-color: black;
                    color:white
                    }
                    #item3{background-color: black;
                    color:white
                    }
                    </style>
                </div>
            </div>
            <!-- Page content wrapper-->
            <div id="page-content-wrapper">
                <!-- Top navigation-->
                <nav class="navbar navbar-expand-lg navbar-dark  border-bottom" id="my_Navbar">
                    <style>#my_Navbar{background-color: black;}</style>
                    <div class="container-fluid">
                        <button class="btn btn-outline-light" id="sidebarToggle">Toggle Menu</button>
                        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                        <div class="collapse navbar-collapse" id="navbarSupportedContent">
                            <ul class="navbar-nav ms-auto mt-2 mt-lg-0" id="colors">
                          
                                <li class="nav-item "><a class="nav-link" href="index.php"><img src="gifs/menu.gif" class="img-fluid" width="20">Home</a></li> <br>
                                <li class="nav-item "><a class="nav-link" href="contact.php" > Contact Us</a></li> 
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="login.php" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
                                    <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                                        <a class="dropdown-item" href="login.php">Sign In</a>
                                        <a class="dropdown-item" href="register.php">Sign Up</a>
                                        <div class="dropdown-divider"></div>
                                    
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </nav>
                <!-- Page content-->
                <div class="container-fluid">
                 <br></div>
                    <div class="row">

                        <!--My SEARCHBAR HERE-->
                         <!--My SEARCHBAR HERE-->
                          <!--My SEARCHBAR HERE-->
                           <!--My SEARCHBAR HERE-->

                        <div class="col-sm-12">
                            <div class="wrapper">
                        <form class="form-inline">
                        
                        <input class="form-control input-md search-input" type="search" placeholder="Search for Movie Here......" aria-label="Search" id="search" onKeyPress="return checkSubmit(event)"  placeholder="&nbsp;Search for a movie..."  value=""">
                        
                      </form>
                </div>
                      <!--END OF SEARCH BAR HERE-->
                               <!--END OF SEARCH BAR HERE-->
                                        <!--END OF SEARCH BAR HERE-->
                                                 <!--END OF SEARCH BAR HERE-->
                                                          <!--END OF SEARCH BAR HERE-->

                                                          <!--HIGHLIGHTS QUICK-->

                                                          <div class="row">




                                                          </div>
                                                          <!--END OF HIGHLIGHTS QUICK-->
                                                          <h1 align="center"></h1>
                    <div class="inner-container">
                        <div class="titles">
                        
                        </div>
                        <div class="item-container">
                        </div>
                        <div class="load-more"><i class="fa fa-plus-circle more" aria-hidden="true">More</i></div>
                      </div>
                      </div>
                </div>
            </div>
        </div>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
        <script src="script.js"></script>
    </body>
</html>
