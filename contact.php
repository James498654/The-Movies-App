<?
    include("footer.php")
?>
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
                    <a class="list-group-item list-group-item-action list-group-item-black p-3" href="register.php" id="item1"><i class="fa fa-user"></i> Sign Up</a>
                    <a class="list-group-item list-group-item-action list-group-item-light p-3" href="#!" id="login.php"><i class="fa fa-laptop"></i> Login</a>
                    
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
                          
                                <li class="nav-item "><a class="nav-link category-link" href="#!" onclick="sortMovies('popularity')" ><img src="gifs/menu.gif" class="img-fluid" width="20">Home</a></li> <br>
                                <li class="nav-item "><a class="nav-link category-link" href="contact.php" > Contact Us</a></li> 
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login</a>
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

                        <div class="col-sm-4">
                            <h2 align="center">TAPIWA JAMES MUDZVITI</h2>
                           
                            <div class="card">
                              <img class="card-img-top" src="James.jpg" alt="Card image" style="width:100%" align="center">
                              <div class="card-body">
                                <h4 class="card-title">FULL STACK WEB DEVELOPER</h4>
                                <p class="card-text">Hey there, i'm your go to guy when it comes to online stuff, i do quite a lot of projects from CMS to coding, whatever you need, sky is no the limit.</p>
                                <a href="https://www.linkedin.com/in/tapiwa-mudzviti-4276a2156/" class="btn btn-primary">LinkedIn</a>
                              </div>
                            </div>
                      
                      </div>
                      <div class="col-sm-4">
                        <h2 align="center">LATEST & NICE PROJECTS</h2>
                       
                        <div class="card">
                          <img class="card-img-top" src="Web-Development.jpg" alt="Card image" style="width:100%" align="center">
                          <div class="card-body">
                            <h4 class="card-title">A few of my projects</h4>
                            <a href="https://irichcomputers.co.za"><button type="button" class="btn btn-outline-danger">Irich Hosting</button></a>
                            <a href="https://eagleclothing.co.za"><button type="button" class="btn btn-outline-success">Eagle Clothing</button></a>
                            <a href="https://irichcomputers.co.za/music"><button type="button" class="btn btn-outline-danger">Music Embed Platform</button></a>
                            <a href="https://francointernational.co.za"><button type="button" class="btn btn-outline-primary">Franco International</button></a>
                            <a href="https://lancersmarket.com"><button type="button" class="btn btn-outline-dark">Marketplace</button></a>
                          </div>
                        </div>
                  
                  </div>

                  <div class="col-sm-4">
                    <h2 align="center">CONTACT ME</h2>
                   
                    <div class="card">
                      <img class="card-img-top" src="contact.gif" alt="Card image" style="width:100%" align="center">
                      <div class="card-body">
                        <h4 class="card-title">NAME:  TAPIWA JAMES MUDZVITI</h4>
                        <h4 class="card-title">PHONE NUMBER: 064 317 5303</h4>
                        <h4 class="card-title">EMAIL: mudzvititapiwa@live.com</h4>
                        <h4 class="card-title">ALTERNATIVE EMAIL:  mudzviti1995@gmail.com</h4>
                        <h4 class="card-title">ADDRESS: 10a 7th ave Houghton Estate | Rosebank</h4>
                        
                
                      </div>
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
