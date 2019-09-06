<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,400,600,700" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/@mdi/font/css/materialdesignicons.min.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Rita Lopes Portfolio</title>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg container-fluid" id="mainNav" role="navigation">
        <div class="container-fluid">
            <a href="mailto:general@ritalopes.com" target="_top"><span class="mdi mdi-email-outline white-text lg"></span></a>
            <a href=""><span class="mdi mdi-linkedin-box white-text lg"></span></a>
            <button class="navbar-toggler float-right collapsed" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="mdi mdi-minus white-text xl top"></span>
                <span class="mdi mdi-minus white-text xl middle"></span>
                <span class="mdi mdi-minus white-text xl bottom"></span>
            </button>
            <div class="collapse navbar-collapse float-right" id="navbarResponsive">
                <ul class="nav navbar-nav ml-auto white-text">
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#skills">Skills</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#portfolio">Portfolio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link js-scroll-trigger" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <!-- Main screen -->
    <div class="container-fluid row" id="shape">
        <div id="gradient" class="blue-background"></div>
        <div class="container-fluid" id="main-text">
            <h3 class="white-text">Hello, I'm Rita and I'm a</h3>
            <h1 class="green-text" id="web-developer">web developer</h1>
            <hr class="hr green">
        </div>
    </div>
    <!-- About -->
    <div class="container-fluid" id="about">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4 float-md-right container-img">
                    <img class="img-fluid" src="img/41443153_2335268026487751_4954639758308409344_o.jpg">
                </div>
                <div class="col-xs-12 col-md-8 col-lg-8 col-xl-8 float-md-left">
                    <h1 class="green-text title-txt">Who am I &#63</h1>
                    <hr class="hr green"></br>
                    <p>
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Education -->
    <div class="container-fluid green-background angled" id="education">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-md-12 education-title">
                    <h1 class="white-text title-txt">Education</h1>
                    <hr class="hr white"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <h5 class="blue-text education-section-title">High school in science and technologies</h5>
                    <p class="location white-text">Escola Sec. de Albergaria-a-Velha, PT</p>
                    <p class="year lightblue-text">2010 - 2014</p>
                    <p class="lightblue-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <h5 class="blue-text education-section-title">NEW COMMUNICATION TECHNOLOGIES</h5>
                    <p class="location white-text">University of Aveiro, PT</p>
                    <p class="year lightblue-text">2014 - 2017</p>
                    <p class="lightblue-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
                <div class="col-xs-12 col-md-4">
                    <h5 class="blue-text education-section-title">Computer engineering: Graphical systems &amp; mm</h5>
                    <p class="location white-text">ISEP - IPP, PT</p>
                    <p class="year lightblue-text">2017 - on going</p>
                    <p class="lightblue-text">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!-- Skills -->
    <div class="container-fluid full-height" id="skills">
        <div class="pattern"></div>
        <div class="container">
            <div class="row title">
                <div class="col-xs-12 col-md-12">
                    <h1 class="d-flex justify-content-end title-txt">Skills</h1>
                    <hr class="hr right"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-4">
                    <h2 class="type-skill">Type</h2>
                    <hr class="hr green center"><br>
                    <div class="skill" id="skill1">
                        <p class="skill-name">Skill name</p>
                        <div class="skill-bar">
                            <div class="skill-completion-bar"></div>
                        </div>
                    </div>
                    <div class="skill" id="skill2">
                        <p class="skill-name">Skill name</p>
                        <div class="skill-bar">
                            <div class="skill-completion-bar"></div>
                        </div>
                    </div>
                    <div class="skill" id="skill3">
                        <p class="skill-name">Skill name</p>
                        <div class="skill-bar">
                            <div class="skill-completion-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <h2 class="type-skill">Type</h2>
                    <hr class="hr green center"><br>
                    <div class="skill" id="skill1">
                        <p class="skill-name">Skill name</p>
                        <div class="skill-bar">
                            <div class="skill-completion-bar"></div>
                        </div>
                    </div>
                    <div class="skill" id="skill2">
                        <p class="skill-name">Skill name</p>
                        <div class="skill-bar">
                            <div class="skill-completion-bar"></div>
                        </div>
                    </div>
                    <div class="skill" id="skill3">
                        <p class="skill-name">Skill name</p>
                        <div class="skill-bar">
                            <div class="skill-completion-bar"></div>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-4">
                    <h2 class="type-skill">Type</h2>
                    <hr class="hr green center"><br>
                    <div class="skill" id="skill1">
                        <p class="skill-name">Skill name</p>
                        <div class="skill-bar">
                            <div class="skill-completion-bar"></div>
                        </div>
                    </div>
                    <div class="skill" id="skill2">
                        <p class="skill-name">Skill name</p>
                        <div class="skill-bar">
                            <div class="skill-completion-bar"></div>
                        </div>
                    </div>
                    <div class="skill" id="skill3">
                        <p class="skill-name">Skill name</p>
                        <div class="skill-bar">
                            <div class="skill-completion-bar"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Portfolio -->
    <div class="container-fluid row angled larger" id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 portfolio-title">
                    <h1 class="blue-text title-txt">Portfolio</h1>
                    <hr class="hr blue"><br>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                <div class="portfolio-item">
                    <div class="item block">
                        <button>
                            <img class="img-fluid" src="img/41443153_2335268026487751_4954639758308409344_o.jpg">
                            <div class="overlay" data-toggle="modal" data-target="#portfolioItemModal"><p class="post-name">Post Name</p></div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                <div class="portfolio-item">
                    <div class="item block">
                        <button>
                            <img class="img-fluid" src="img/41443153_2335268026487751_4954639758308409344_o.jpg">
                            <div class="overlay" data-toggle="modal" data-target="#portfolioItemModal"><p class="post-name">Post Name</p></div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                <div class="portfolio-item">
                    <div class="item block">
                        <button>
                            <img class="img-fluid"src="img/41443153_2335268026487751_4954639758308409344_o.jpg">
                            <div class="overlay" data-toggle="modal" data-target="#portfolioItemModal"><p class="post-name">Post Name</p></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                <div class="portfolio-item">
                    <div class="item block">
                        <button>
                            <img class="img-fluid" src="img/41443153_2335268026487751_4954639758308409344_o.jpg">
                            <div class="overlay" data-toggle="modal" data-target="#portfolioItemModal"><p class="post-name">Post Name</p></div>
                        </button>
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                <div class="portfolio-item">
                    <div class="item block">
                        <button>
                            <img class="img-fluid" src="img/41443153_2335268026487751_4954639758308409344_o.jpg">
                            <div class="overlay" data-toggle="modal" data-target="#portfolioItemModal"><p class="post-name">Post Name</p></div>
                        </button>                    
                    </div>
                </div>
            </div>
            <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                <div class="portfolio-item">
                    <div class="item block">
                        <button>
                            <img class="img-fluid" src="img/41443153_2335268026487751_4954639758308409344_o.jpg">
                            <div class="overlay" data-toggle="modal" data-target="#portfolioItemModal"><p class="post-name">Post Name</p></div>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Modal Portfolio-Item-->
    <div class="modal fade" id="portfolioItemModal" tabindex="-1" role="dialog" aria-labelledby="portfolioItemModalTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header blue-background">
                    <h5 class="modal-title white-text" id="exampleModalLongTitle">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span class="white-text mdi mdi-close lg" aria-hidden="true"></span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div id="container-image-modal" class="col-md-6 col-lg-6 col-xl-6 col-xs-12 green-background">
                            <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                <div class="carousel-inner">
                                    <div class="carousel-item active">
                                        <img class="d-block w-100" src="img/41443153_2335268026487751_4954639758308409344_o.jpg" alt="First slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="img/41443153_2335268026487751_4954639758308409344_o.jpg" alt="Second slide">
                                    </div>
                                    <div class="carousel-item">
                                        <img class="d-block w-100" src="img/41443153_2335268026487751_4954639758308409344_o.jpg" alt="Third slide">
                                    </div>
                                </div>
                            </div>
                            <div id="change-post" class="col-xs-12 col-md-12 col-lg-12 col-md-12 d-flex justify-content-center">
                                <div>
                                    <button class="btn" href="#carouselExampleIndicators" role="button" data-slide="prev"><span class="mdi mdi-chevron-left xl blue-text"></span></button>
                                </div>
                                <div>
                                    <button class="btn" href="#carouselExampleIndicators" role="button" data-slide="next"><span class="mdi mdi-chevron-right xl blue-text"></span></button>
                                </div>
                            </div>
                        </div>
                        <div id="post-content-container" class="col-md-6 col-lg-6 col-xl-6 col-xs-12">
                            <div class="container post-content">
                                <div class="row">
                                    <span>date</span>
                                    <span class="mdi mdi-square xs"></span>
                                    <span>skill, skill, skill, skill</span>
                                    <button id="link" class="btn float-right">
                                        <span class="mdi mdi-link blue-text lg"></span>
                                    </button>
                                </div>
                                <div class="row post-description">
                                    <p>
                                        Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact -->
    <div class="container-fluid row green-background" id="contact">
        <div class="container">
            <div class="row title">
                <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12">
                    <h1 class="white-text d-flex justify-content-center title-txt">Contact-me</h1>
                    <hr class="hr white center"><br>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
                    <h6 class="blue-text" id="contact-description">
                       Let's talk, send me an e-mail!                  
                    </h6>
                </div>
            </div>
            <form name="contact-form" id="contact-form" action="" method="POST">
                <div class="row">
                    <div class="col-xs-12 col-md-4 col-lg-4 col-xl-4">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="nameHelp" placeholder="Enter your name">
                        </div>
                        <div class="form-group">
                            <label for="email">E-mail</label>
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="emailHelp" placeholder="Enter your e-mail">
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-8 col-lg-8 col-xl-8">
                        <div class="form-group">
                            <label for="message">Message</label>
                            <textarea rows="5" form="contact-form" name="message-content" class="form-control" id="message" aria-describedby="messageHelp">Write your message here</textarea>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
                        <div id="send-btn">
                            <button name="submit" type="button" class="btn btn-lg white-text blue-background btn-move">
                                Send
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!-- Footer -->
    <footer class="container-fluid row blue-background">
        <div class="container">
            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center">
                <a href=""><span class="mdi mdi-linkedin green-text lg"></span></a>
                <a href=""><span class="mdi mdi-behance green-text xl"></span></a>
                <a href=""><span class="mdi mdi-github-box green-text lg"></span></a>
            </div>
            <div class="col-xs-12 col-md-12 col-lg-12 col-xl-12 d-flex justify-content-center row-hr">
                <hr class="hr thin green center">
            </div>
        </div>
    </footer>
    <!-- Scripts -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
    <script src="node_modules/jqueryui/jquery-ui.min.js"></script>
    <script src="node_modules/popper.js/dist/popper-utils.min.jsnp"></script>
    <script src="node_modules/materialize-css/dist/js/materialize.min.js"></script>
    <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="javascript/scrolling-nav.js"></script>
    <script src="javascript/myjs.js"></script>
</body>
</html>