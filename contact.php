
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Bootstrap 4 Portfolio Template For Developers</title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Responsive Portfolio Template">
    <meta name="author" content="Xiaoying Riley at 3rd Wave Media">
<!--    <link rel="shortcut icon" href="favicon.ico">-->

    <!-- Google Font -->
    <link href='//fonts.googleapis.com/css?family=Roboto:400,500,400italic,300italic,300,500italic,700,700italic,900,900italic' rel='stylesheet' type='text/css'>

    <!-- FontAwesome JS-->
    <script type="text/javascript" src="js/fontawesome-all.min.js"></script>

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="css/bootstrap.css">

</head>

<body>

<header class="header">

    <div class="top-bar theme-bg-primary-darken">

        <div class="container-fluid">

            <nav class="navbar navbar-expand-lg navbar-dark position-relative">


                <ul class="social-list list-inline mb-0">
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="fab fa-twitter fa-fw"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                    <li class="list-inline-item"><a class="text-white" href="#"><i class="fab fa-codepen fa-fw"></i></a></li>
                </ul><!--//social-list-->


                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse text-uppercase" id="navigation">
                    <ul class="navbar-nav ml-lg-auto">
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="index.html">About</a>
                        </li>
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="projects.html">Projects</a>
                        </li>
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="talks.html">Talks</a>
                        </li>
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="blog.html">Blog</a>
                        </li>
                        <li class="nav-item mr-lg-3">
                            <a class="nav-link" href="resume.html">Resume</a>
                        </li>
                        <li class="nav-item active mr-lg-3">
                            <a class="nav-link" href="contact.html">Contact <span class="sr-only">(current)</span></a>
                        </li>
                        <li class="nav-item dropdown mr-0">
                            <a class="nav-link dropdown-toggle" href="#" id="navigationLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Pages
                            </a>
                            <div class="dropdown-menu dropdown-menu-right text-capitalize shadow-lg" aria-labelledby="navigationLink">
                                <a class="dropdown-item" href="project.html">Project Case Study (1 Column)</a>
                                <a class="dropdown-item" href="project-alt.html">Project Case Study (2 Columns)</a>
                                <a class="dropdown-item" href="blog-post.html">Blog Post</a>
                            </div>
                        </li>

                    </ul>
                    <span id="slide-line"></span>
                </div>



            </nav>

        </div><!--//container-->

    </div><!--//top-bar-->

    <div class="header-intro theme-bg-primary text-white py-5">
        <div class="container">
            <h2 class="page-heading mb-0">Contact</h2>

        </div><!--//container-->
    </div><!--//header-intro-->

</header><!--//header-->

<section class="section py-5">
    <div class="container">
        <div class="row">
            <div class="contact-intro col-lg-8 mx-lg-auto mb-5 text-center">

                <img class="profile-small d-inline-block mx-auto rounded-circle mb-3" src="assets/images/profile.jpg" alt="">

                <div class="speech-bubble bg-white p-4 p-lg-5 shadow-sm">
                    <p class="text-left mb-3">I'm currently taking on freelance work. If you are interested in hiring me for your project please use the form below to get in touch. Want to know how I work and what I can offer? Check out my <a href="projects.html">project case studies</a> and <a href="resume.html">resume</a>.</p>
                    <h6 class="font-weight-bold text-center mb-3">You can also find me on the following channels</h6>

                    <ul class="social-list-color list-inline mb-0">
                        <li class="list-inline-item mb-3"><a class="twitter" href="#"><i class="fab fa-twitter fa-fw"></i></a></li>

                        <li class="list-inline-item mb-3"><a class="linkedin" href="#"><i class="fab fa-linkedin-in fa-fw"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="github" href="#"><i class="fab fa-github-alt fa-fw"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="stack-overflow" href="#"><i class="fab fa-stack-overflow fa-fw"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="medium" href="#"><i class="fab fa-medium-m fa-fw"></i></a></li>
                        <li class="list-inline-item mb-3"><a class="codepen" href="#"><i class="fab fa-codepen fa-fw"></i></a></li>


                        <!--<li class="list-inline-item mb-3"><a class="facebook" href="#"><i class="fab fa-facebook-f fa-fw"></i></a></li>-->

                        <!--<li class="list-inline-item"><a class="instagram" href="#"><i class="fab fa-instagram fa-fw"></i></a></li>-->
                    </ul><!--//social-list-->
                </div>

            </div><!--//contact-intro-->
            <form id="contact-form" class="contact-form col-lg-8 mx-lg-auto" method="post" action="">
                <h3 class="text-center mb-3">Get In Touch</h3>
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label class="sr-only" for="cname">Name</label>
                        <input type="text" class="form-control" id="cname" name="name" placeholder="Name" minlength="2" required="" aria-required="true">
                    </div>
                    <div class="form-group col-md-6">
                        <label class="sr-only" for="cemail">Email</label>
                        <input type="email" class="form-control" id="cemail" name="email" placeholder="Email" required="" aria-required="true">
                    </div>
                    <div class="form-group col-12">
                        <label class="sr-only" for="cmessage">Your message</label>
                        <textarea class="form-control" id="cmessage" name="message" placeholder="Enter your message" rows="10" required="" aria-required="true"></textarea>
                    </div>
                    <div class="form-group col-12">
                        <button type="submit" class="btn btn-block btn-primary py-2">Send It</button>
                    </div>
                </div><!--//form-row-->
            </form>

        </div><!--//row-->
    </div><!--//container-->
</section><!--//section-->



<footer class="footer text-light text-center py-2">
    <small class="copyright">Template Copyright &copy; <a class="text-light" href="https://themes.3rdwavemedia.com/" target="_blank">3rd Wave Media</a></small>
</footer>


<!-- *****CONFIGURE STYLE (REMOVE ON YOUR PRODUCTION SITE)****** -->
<div id="config-panel" class="config-panel d-none d-lg-block">
    <div class="panel-inner">
        <a id="config-trigger" class="config-trigger config-panel-hide text-center" href="#"><i class="fas fa-cog mx-auto" data-fa-transform="down-6" ></i></a>
        <h5 class="panel-title">Choose Colour</h5>
        <ul id="color-options" class="list-inline mb-0">
            <li class="theme-1 active list-inline-item"><a data-style="assets/css/theme-1.css" data-chart="#00BCD4" href="#"></a></li>
            <li class="theme-2  list-inline-item"><a data-style="assets/css/theme-2.css" href="#"></a></li>
            <li class="theme-3  list-inline-item"><a data-style="assets/css/theme-3.css" href="#"></a></li>
            <li class="theme-4  list-inline-item"><a data-style="assets/css/theme-4.css" href="#"></a></li>
            <li class="theme-5  list-inline-item"><a data-style="assets/css/theme-5.css" href="#"></a></li>
            <li class="theme-6  list-inline-item"><a data-style="assets/css/theme-6.css" href="#"></a></li>
            <li class="theme-7  list-inline-item"><a data-style="assets/css/theme-7.css" href="#"></a></li>
            <li class="theme-8  list-inline-item"><a data-style="assets/css/theme-8.css" href="#"></a></li>
            <li class="theme-9  list-inline-item"><a data-style="assets/css/theme-9.css" href="#"></a></li>
            <li class="theme-10  list-inline-item"><a data-style="assets/css/theme-10.css" href="#"></a></li>
            <li class="theme-11  list-inline-item"><a data-style="assets/css/theme-11.css" href="#"></a></li>
            <li class="theme-12  list-inline-item"><a data-style="assets/css/theme-12.css" href="#"></a></li>
        </ul>
        <a id="config-close" class="close" href="#"><i class="fa fa-times-circle"></i></a>
    </div><!--//panel-inner-->
</div><!--//configure-panel-->

<script
    src="https://code.jquery.com/jquery-3.3.1.js"
    integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
    crossorigin="anonymous"></script>

<script type="text/javascript" src="js/popper.min.js"></script>

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<script type="text/javascript" src="js/back-to-top.js"></script>

<!--Page Specific JS -->
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>

<!-- Custom JS -->
<script type="text/javascript" src="js/main.js"></script>
<script type="text/javascript" src="js/form.js"></script>

<!-- Style Switcher (REMOVE ON YOUR PRODUCTION SITE) -->
<script type="text/javascript" src="js/style-switcher.js"></script>


</body>
</html>

