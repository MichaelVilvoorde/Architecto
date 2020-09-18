
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        
        <!-- favicon -->
        <link rel="icon" type="image/x-icon" href="/img/favicon.ico" />

        <!-- Font Awesome -->
        <script src="https://use.fontawesome.com/releases/v5.13.0/js/all.js" crossorigin="anonymous"></script>

        <!-- Google font-->
        
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/style.css">
        <link rel="stylesheet" href="css/desktop.css">
        <link rel="stylesheet" href="css/mobile.css">


        <!-- Animate On Scroll CSS-->
        <link rel="stylesheet" href="css/aos.css">
        

        <title>Architecto</title>
        <!-- Latijns voor bouwmeester -->
    </head>


    <body>

       

        <div class="overflow-x-hidden">
            <!-- Navigation-->
            <nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
                <div class="container">
                    <a class="navbar-brand close-collapsed-nav-on-click" href="index.html">Architecto</a>
                    <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#hamburger" aria-controls="hamburger" aria-expanded="false" aria-label="Toggle navigation">                    
                        <i class="fas fa-bars"></i>
                    </button>
                    <div class="collapse navbar-collapse" id="hamburger">
                        <ul class="navbar-nav ml-auto">
    
                            <li class="nav-item"><a class="nav-link close-collapsed-nav-on-click" href="index.html">Home</a></li>
    
                            <li class="nav-item"><a class="nav-link close-collapsed-nav-on-click" href="index.html#about">About</a></li>
    
                            <li class="nav-item"><a class="nav-link close-collapsed-nav-on-click" href="team.html">The Team</a></li>
    
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Projects
                                </a>
                                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item pb-3" href="projects.html">All the projects</a>
                                <!-- <div class="dropdown-divider"></div> -->
                                <a class="dropdown-item" href="project1.html">Light Utopia 2.0</a>
                                <a class="dropdown-item" href="project2.html">Digital light square</a>
                                <a class="dropdown-item" href="project3.html">Wild living & Nature</a>
                                <a class="dropdown-item" href="project4.html">Block vs Blocks Element</a>
                                </div>
                            </li>
                            
                            <li class="nav-item"><a class="nav-link close-collapsed-nav-on-click" href="contact.php">Contact</a></li>
                        </ul>
                    </div>
                </div>
            </nav>

           
        
            <div class="margin-top-100"></div>
            <section id="contact">
                
                <div class="container pb-5">
                    <h2 class="text-center">Contact us</h2>
                    
                    <?php
                        if(isset($_GET["fieldsempty"])){
                            if($_GET["fieldsempty"]==true){
                                echo "<p>You did not fill in all fields</p>";
                                $name=$_GET["name"];
                                $mail=$_GET["mail"];
                                $subject=$_GET["subject"];
                                $message=$_GET["message"];
                            }
                            
                        }
                        else {
                            $name = "";
                            $mail = "";
                            $subject = "";
                            $message = "";
                        }
                        if(isset($_GET["mailsend"])){
                            echo "<p>Mail sent successfully. We will be in touch shortly!</p>";
                        }
                    ?>

                   



                    <form action="contactform.php" method="POST">
                        <div class="form-group" >
                            <label>Name</label>
                            
                            <input type="text" name="name" class="form-control" placeholder="Full name" 
                            <?php
                                echo ' value="'.$name.'"';
                            ?>>
                        </div>

                        <div class="form-group" >
                            <label>Email address</label>

                            <input type="email" name="mail" class="form-control" placeholder="Your e-mail"
                            <?php
                                echo ' value="'.$mail.'"';
                            ?>>
                        </div>
                        
                        <div class="form-group" >
                            <label>Subject</label>
                            
                            <input type="text" name="subject" class="form-control" placeholder="What is the question about?"
                            <?php
                                echo ' value="'.$subject.'"';
                            ?>>
                        </div>
                        
                        
                        <div class="form-group">
                            <label>Message</label>

                            <textarea name="message" class="form-control" rows="3" placeholder="What is the question about?"><?php echo $message; ?></textarea>
                        </div>

                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                        
                            <label class="form-check-label" for="exampleCheck1">Subscribe to newsletter</label>

                        </div>


                        

                        <button type="sumbit" name="submit" class="btn text-lightx w-100">Send E-mail</button>

                        

                        

                        <!-- <button type="sumbit" name="submit">Send mail</button> -->
                    </form>
                    
                </div>
                
            </section>

            


<!-- 
            <h2>Contact us</h2>
            <form class="" action="contactform.php" method="POST">
                <input type="text" name="name" placeholder="Full name">
                <input type="text" name="mail" placeholder="Your e-mail">
                <input type="text" name="subject" placeholder="Subject">
                <textarea name="message" placeholder="Message"></textarea>
                <button type="sumbit" name="submit">Send mail</button>
                
            </form> -->
            





        
            <!-- Signup-->
            <!-- <section class="signup-section" id="signup">
                <div class="container">
                    <div class="row">
                        <div class="col-md-10 col-lg-8 mx-auto text-center">
                            
                            <h2 class="text-white mb-5 rounded">Subscribe to our newsletter!</h2>

                            <form class="form-inline d-flex">
                                <input class="form-control flex-fill mb-3 mr-0 mr-lg-3 mb-sm-0 " id="inputEmail" type="email" placeholder="Enter e-mail address..." />
                                <button class="btn btn-primary mx-auto" type="submit">Subscribe</button>
                            </form>
                        </div>
                    </div>
                </div>
            </section> -->

            <!-- FOOTER -->
            <footer class="contact-footer">
                <div class="container-fluid text-white">
                    <div class="row">
                        <div class="col text-center py-3">
                            <p>Copyright &copy; <span id="year"></span> Architecto</p>
                        </div>
                    </div>
                </div>
            </footer>
            
           
        </div>








        <!-- Bootstrap core JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"></script>
        <!-- Third party plugin JS-->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.4.1/jquery.easing.min.js"></script>

        <!-- Animate On Scroll -->
        <script src="js/aos.js"></script>

        <script type="text/javascript">
        //Global - For the whole page
            AOS.init({
                offset: 200,
                duration: 2000, 
                easing: 'ease-out',
                disable: window.innerWidth < 992
                // disable: function () {
                //     var maxWidth = 992;
                //     return window.innerWidth < maxWidth;
                // }
            });
        </script>

        <!-- Own script-->
        <script src="js/scriptsContact.js"></script>
        <script>
            $("#mainNav").addClass("contactNav");
        </script>
    </body>
</html>