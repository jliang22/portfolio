<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jessica Liang</title>

    <!-- JQuery Skill Bar -->
    <script src="//code.jquery.com/jquery-1.11.2.min.js"></script>

    <!-- Bootstrap Core CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

    <!-- Custom Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css" type="text/css">

    <!-- Plugin CSS -->
    <link rel="stylesheet" href="css/animate.min.css" type="text/css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/creative.css" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body id="page-top">

<nav id="mainNav" class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand page-scroll" href="#page-top">Jessica Liang</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li>
                    <a class="page-scroll" href="#about">About</a>
                </li>
                <li>
                    <a class="page-scroll" href="#skills">skills</a>
                </li>
                <li>
                    <a class="page-scroll" href="#project">Projects</a>
                </li>
                <li>
                    <a class="page-scroll" href="#contact">Contact</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container-fluid -->
</nav>

<header>
    <div class="header-content">
        <div class="header-content-inner">
            <h1><i>I CAN, THEREFORE I WILL</i></h1>
            <p1 style="margin-left: 17%; color: #EE5A97"><i><small>-Simone Weil </small></i></p1>
            <hr>
            <p>Third year programmer at UBC specialising in JavaScript, HTML, CSS, Responsive Design and Performance</p>
            <a href="#about" class="btn btn-primary btn-xl page-scroll">Find Out More</a>
        </div>
    </div>
</header>

<section class="bg-primary" id="about">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Jessica Liang</h2>
                <hr class="blue">
                <div id="picme" style="width:300px;height:450px; margin-left:-7%"></div>
                <p class="text-faded" style="margin-left:33%">
                    <b>About Me</b>
                    <br/>
                    I am third year programmer at UBC majoring in Computer Science. I have a boyfriend who is really
                    caring. He is very cute and also gives me really good food.
                    <br/> <br/>
                    <b>Interests</b>
                    <br/>
                    I like to play the piano, I've been playing the piano since 8 years old. I enjoy watching reality
                    TV shows like Survivor.
                </p>
                <!-- <a href="#" class="btn btn-default btn-xl">Get Started!</a> -->
            </div>
        </div>
    </div>
</section>
<section id="skills">
    <div class="content">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="section-heading">Programming Skills</h2>
                <hr class="light">
            </div>
        </div>


    <script>
        jQuery(document).ready(function(){
            jQuery('.skillbar').each(function(){
                jQuery(this).find('.skillbar-bar').animate({
                    width:jQuery(this).attr('data-percent')
                },6000);
            });
        });
    </script>
<div id="bar">
    <div class="skillbar clearfix " data-percent="23%">
        <div class="skillbar-title" style="background: #d35400;"><span>C/C++</span></div>
        <div class="skillbar-bar" style="background: #e67e22;"></div>
       <!-- <div class="skill-bar-percent">20%</div> -->
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="76%">
        <div class="skillbar-title" style="background: #2980b9;"><span>CSS3</span></div>
        <div class="skillbar-bar" style="background: #3498db;"></div>
        <!-- <div class="skill-bar-percent">20%</div> -->
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="50%">
        <div class="skillbar-title" style="background: #2c3e50;"><span>jQuery</span></div>
        <div class="skillbar-bar" style="background: #2c3e50;"></div>
        <!-- <div class="skill-bar-percent">20%</div> -->
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="67%">
        <div class="skillbar-title" style="background: #27ae60;"><span>Javascript</span></div>
        <div class="skillbar-bar" style="background: #2ecc71;"></div>
        <!-- <div class="skill-bar-percent">20%</div> -->
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="58%">
        <div class="skillbar-title" style="background: #333333;"><span>PHP</span></div>
        <div class="skillbar-bar" style="background: #525252;"></div>
        <!-- <div class="skill-bar-percent">20%</div> -->
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="69%">
        <div class="skillbar-title" style="background: #46465e;"><span>SQL</span></div>
        <div class="skillbar-bar" style="background: #5a68a5;"></div>
        <!-- <div class="skill-bar-percent">20%</div> -->
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="79%">
        <div class="skillbar-title" style="background: #96694B;"><span>HTML5</span></div>
        <div class="skillbar-bar" style="background: #B27D59;"></div>
        <!-- <div class="skill-bar-percent">20%</div> -->
    </div> <!-- End Skill Bar -->

    <div class="skillbar clearfix " data-percent="43%">
        <div class="skillbar-title" style="background: #A35391;"><span>Java</span></div>
        <div class="skillbar-bar" style="background: #BD60A8;"></div>
        <!-- <div class="skill-bar-percent">20%</div> -->
    </div><!-- End Skill Bar -->
</div>
    </div>
    </div>
    <!--
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-diamond wow bounceIn text-primary"></i>
                    <h3>Sturdy Templates</h3>
                    <p class="text-muted">Our templates are updated regularly so they don't break.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-paper-plane wow bounceIn text-primary" data-wow-delay=".1s"></i>
                    <h3>Ready to Ship</h3>
                    <p class="text-muted">You can use this theme as is, or you can make changes!</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-newspaper-o wow bounceIn text-primary" data-wow-delay=".2s"></i>
                    <h3>Up to Date</h3>
                    <p class="text-muted">We update dependencies to keep things fresh.</p>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 text-center">
                <div class="service-box">
                    <i class="fa fa-4x fa-heart wow bounceIn text-primary" data-wow-delay=".3s"></i>
                    <h3>Made with Love</h3>
                    <p class="text-muted">You have to make your websites with love these days!</p>
                </div>
            </div>
        </div>
    </div>
    -->
</section>
<section class="no-padding" id="project">
<aside class="bg-dark">
    <div class="container text-center">
        <div class="call-to-action">
            <h2 style="margin-top: 5%">Technical Projects</h2>
            <hr>
            <!--  <a href="#" class="btn btn-default btn-xl wow tada">Download Now!</a> -->
        </div>
    </div>
</aside>

    <div class="container-fluid">
        <div class="row no-gutter">
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="project-box">
                    <img src="../img/homepage.png" class="img-responsive" alt="">
                    <div class="project-box-caption">
                        <div class="project-box-caption-content">
                            <div class="project-name">
                                Glacier
                            </div>
                            <div class="project-category text-faded">
                                Jan 2015 - April 2015
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="project-box">
                    <img src="../img/cycle.png" class="img-responsive" alt="">
                    <div class="project-box-caption">
                        <div class="project-box-caption-content">
                            <div class="project-name">
                                Cycle Vancouver
                            </div>
                            <div class="project-category text-faded">
                                Sept 2014 - Dec 2014
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="project-box">
                    <img src="../img/course.png" class="img-responsive" alt="">
                    <div class="project-box-caption">
                        <div class="project-box-caption-content">
                            <div class="project-name">
                                UBC SSC Course Recommender
                            </div>
                            <div class="project-category text-faded">
                                Sept 2014 - Dec 2014
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="project-box">
                    <img src="../img/clinic.png" class="img-responsive" alt="">
                    <div class="project-box-caption">
                        <div class="project-box-caption-content">
                            <div class="project-name">
                                Vancouver Clinic
                            </div>
                            <div class="project-category text-faded">
                                May 2014 - July 2014
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="project-box">
                    <img src="https://unsplash.it/650/350?image=531" class="img-responsive" alt="">
                    <div class="project-box-caption">
                        <div class="project-box-caption-content">
                            <div class="project-name">
                                Find Waldo
                            </div>
                            <div class="project-category text-faded">
                                Sept 2013 - Dec 2013
                            </div>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-lg-4 col-sm-6">
                <a href="#" class="project-box">
                    <img src="../img/portfolio.png" class="img-responsive" alt="">
                    <div class="project-box-caption">
                        <div class="project-box-caption-content">
                            <div class="project-name">
                                Personal Portfolio
                            </div>
                            <div class="project-category text-faded">
                                April 2015
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <footer></footer>
</section>



<section id="contact">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-lg-offset-2 text-center">
                <h2 class="section-heading">Let's Get In Touch!</h2>
                <hr class="primary">
                <p>FOR EMPLOYMENT INQUIRIES, PLEASE CONTACT ME!</p>
            </div>
            <div class="col-lg-4 col-lg-offset-2 text-center">
                <i class="fa fa-phone fa-3x wow bounceIn"></i>
                <p>CELL: 604-358-6803</p>
            </div>
            <div class="col-lg-4 text-center">
                <i class="fa fa-envelope-o fa-3x wow bounceIn" data-wow-delay=".1s"></i>
                <p>EMAIL: <a href="mailto:jessica.liang@outlook.com">jessica.liang@outlook.com</a></p>
            </div>
        </div>
    </div>
</section>


    <!-- Start of SimpleHitCounter Code -->
    <div align="right">
        <img src="http://simplehitcounter.com/hit.php?uid=1886329&f=0&b=16777215" border="0" height="18" width="83" alt="web counter">
        <br>
        <a style="text-decoration:none;">web counter</a>
    </div>
    <!-- End of SimpleHitCounter Code -->


<!-- jQuery -->
<script src="js/jquery.js"></script>

<!-- Bootstrap Core JavaScript -->
<script src="js/bootstrap.min.js"></script>

<!-- Plugin JavaScript -->
<script src="js/jquery.easing.min.js"></script>
<script src="js/jquery.fittext.js"></script>
<script src="js/wow.min.js"></script>

<!-- Custom Theme JavaScript -->
<script src="js/creative.js"></script>

</body>

</html>
