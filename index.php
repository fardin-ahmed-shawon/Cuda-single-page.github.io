<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta name="desctiption" content="An awesome single page portfolio HTML template. You can easily design your portfolio website using this template"> 
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <title>Cuda - An awesome single page portfolio HTML template</title>
    <link rel="shortcut icon" href="resources/img/Favicon.png" type="image/x-icon">
    
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css2?family=Titillium+Web:wght@300;400;600;700&display=swap" rel="stylesheet">

    <!--Font Awesome-->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous">

    <!--Vendors CSS-->
    <link rel="stylesheet" href="vendors/css/normalize.css">
    <link rel="stylesheet" href="vendors/css/grid.css">
 
    <!--Resources CSS-->
    <link rel="stylesheet" href="resources/css/style.css">
    <link rel="stylesheet" href="resources/css/responsive.css">
</head>
<body>

<!--================================-->   
<!-- START HEADER SECTION -->
<!--================================--> 

<header id="home">
    <nav>
        <div class="row">
            <a href="#home">
                <img class="logo" src="resources/img/logo.png" alt="cuda logo">
            </a>
            <ul class="main-nav">
                <li class="active"><a href="#home">home</a></li>
                <li><a href="#services">services</a></li>
                <li><a href="#team">team</a></li>
                <li><a href="#skill">skill</a></li>
                <li><a href="#portfolio">portfolio</a></li>
                <li><a href="#testimonial">testimonial</a></li>
                <li><a href="#contact">contact</a></li>
            </ul> 
        </div>

        <!--===== MOBILE MENU =====--> 
        <div class="mobile-menu">
            <span style="color: #fff;" onclick="openNav()">&#9776;</span>

            <div id="myNav" class="overlay">
                <a href="javascript:void(0)" onclick="closeNav()" class="closebtn">&times;</a>
                <div class="overlay-content">
                    <a onclick="closeNav()" href="#home">home</a>
                    <a onclick="closeNav()" href="#services">services</a>
                    <a onclick="closeNav()" href="#team">team</a>
                    <a onclick="closeNav()" href="#skill">skill</a>
                    <a onclick="closeNav()" href="#portfolio">portfolio</a>
                    <a onclick="closeNav()" href="#testimonial">testimonial</a>
                    <a onclick="closeNav()" href="#contact">contact</a>                 
                </div>
            </div>
        </div>   

    </nav>
    <div class="row">
        <div class="hero-text-box">
            <h1>
                Hi there! We are the new kids on the block and we build awesome websites and mobile apps.
            </h1>
            <a href="#contact" class="btn btn-hero">work with us!</a>
        </div>  
    </div>
</header>

<!--================================--> 
<!-- END HEADER SECTION -->
<!--================================--> 



<!--================================--> 
<!-- START SERVICES SECTION -->
<!--================================--> 

<section class="services-section js--services-section" id="services">
    <div class="row">
        <h2>SERVICES WE PROVIDE</h2>
        <P class="little-description">We are working with both individuals and businesses from all over the globe to create awesome websites and applications.</P>
    </div>
    <div class="row">
       
    <!--===== Services Box-1 =====-->
        <div class="col span_1_of_4 box">
            
            <img class="services-icon" src="resources/img/flag.png" alt="flag">
            <h3>Branding</h3>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh.</p>

        </div> 

    <!--===== Services Box-2 =====-->    
        <div class="col span_1_of_4 box">

            <img class="services-icon" src="resources/img/Crayon.png" alt="flag">
            <h3>Design</h3>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem lorem ipsum.</p>
         
        </div> 

    <!--===== Services Box-3 =====-->
        <div class="col span_1_of_4 box">

            <img class="services-icon" src="resources/img/gears.png" alt="flag">
            <h3>Development</h3>
            <p>At vero eos et accusamus et iusto odio dignissimos qui blanditiis praesentium.</p>

        </div> 

    <!--===== Services Box-4 =====-->
        <div class="col span_1_of_4 box">

            <img class="services-icon" src="resources/img/rocket.png" alt="flag">
            <h3>Rocket Science</h3>
            <p>Et harum quidem rerum est et expedita distinctio. Nam libero tempore.</p>

        </div>    
    
    </div>
</section>

<!--================================--> 
<!-- END SERVICES SECTION -->
<!--================================--> 



<!--================================--> 
<!-- START TEAM SECTION -->
<!--================================-->

<section class="team-section" id="team">
    <div class="row">
        <h2>meet our beautiful team</h2>
        <p class="little-description">We are a small team of designers and developers, who help brands with big ideas.</p>
    </div>
    
    <div class="row">

    <!--===== Team Box-1 =====-->  
        <div class="col span_1_of_4 box">

            <img src="resources/img/men1.png" alt="man1" class="team-members">
            <h3>ANNE HATHAWAY</h3>
            <span class="role">CEO / Marketing Head</span>
            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt utlaoreet dolore magna.</p>
            <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>  

    <!--===== Team Box-2 =====-->  
        <div class="col span_1_of_4 box">

            <img src="resources/img/men2.png" alt="man2" class="team-members">
            <h3>Kate Upton</h3>
            <span class="role">Creative Director</span>
            <p>Duis aute irure dolor in in voluptate velit esse cillum dolore fugiat nulla pariatur. Excepteur sint occaecat non diam proident.</p>
            <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>  

    <!--===== Team Box-3 =====-->  
        <div class="col span_1_of_4 box">

            <img src="resources/img/men3.png" alt="man3" class="team-members">
            <h3>Olivia Wilde</h3>
            <span class="role">Lead Designer</span>
            <p>Nemo enim ipsam voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni dolores eos qui ratione voluptatem nesciunt.</p>
            <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>
        </div> 
        
    <!--===== Team Box-4 =====-->  
        <div class="col span_1_of_4 box">

            <img src="resources/img/men4.png" alt="man4" class="team-members">
            <h3>Ashley Greene</h3>
            <span class="role">SEO / Developer</span>
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
            <div class="social-link">
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-linkedin-in"></i></a></li>
                    <li><a href="#"><i class="fas fa-envelope"></i></a></li>
                </ul>
            </div>
        </div>  

    </div>
</section>

<!--================================--> 
<!-- END TEAM SECTION -->
<!--================================-->



<!--================================-->   
<!-- START SKILL SECTION -->
<!--================================--> 

<section class="skill-section" id="skill">
    <div class="row">
        <h2>we got skillS!</h2>
        <p class="little-description">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
    </div>

    <!--===== Start Animated Circle Plugins =====--> 
    <div class="row">
        <div class="col span_1_of_4 box">

            <svg class="radial-progress web-design" data-percentage="90" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">90%</text>
            </svg>
            <h3>web design</h3>

        </div>
        <div class="col span_1_of_4 box">

            <svg class="radial-progress html-css" data-percentage="75" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">75%</text>
            </svg>
            <h3>HTML / CSS</h3>

        </div>
        <div class="col span_1_of_4 box">

            <svg class="radial-progress graphic-design" data-percentage="70" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">70%</text>
            </svg>
            <h3>Graphic design</h3>

        </div>
        <div class="col span_1_of_4 box">

            <svg class="radial-progress ui-ux" data-percentage="85" viewBox="0 0 80 80">
                <circle class="incomplete" cx="40" cy="40" r="35"></circle>
                <circle class="complete" cx="40" cy="40" r="35" style="stroke-dashoffset: 39.58406743523136;"></circle>
                <text class="percentage" x="50%" y="57%" transform="matrix(0, 1, -1, 0, 80, 0)">85%</text>
            </svg>
            <h3>UI / UX</h3>

        </div>
    </div>
    <!--===== End Animated Circle Plugins =====-->

</section>

<!--================================-->   
<!-- END SKILL SECTION -->
<!--================================--> 



<!--================================-->   
<!-- START PORTFOLIO SECTION -->
<!--================================--> 

<section class="portfolio-section" id="portfolio">
    <div class="row">
        <h2>our portfolio</h2>
        <p class="little-description">Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet consectetur, adipisci velit, sed quia non numquam</p>
    </div>
    <div class="row">
        <div class="portfolio-filter">
            <button type="button" data-filter="all">all</button>
            <button type="button" data-filter=".web">web</button>
            <button type="button" data-filter=".apps">apps</button>
            <button type="button" data-filter=".icons">icons</button>
        </div>
    </div>
    <div class="row container">
        <div class="col span_1_of_2 box mix apps ">
            <img class="portfolio-image" src="resources/img/port1.png" alt="Isometric Perspective Mock-Up">
            <h4>Isometric Perspective Mock-Up</h4>
        </div>
        <div class="col span_1_of_2 box mix apps web">
            <img class="portfolio-image" src="resources/img/port2.png" alt="Time Zone App UI">
            <h4>Time Zone App UI</h4>
        </div>
        <div class="col span_1_of_2 box mix icons">
            <img class="portfolio-image" src="resources/img/port3.png" alt="Viro Media Players UI">
            <h4>Viro Media Players UI</h4>
        </div>
        <div class="col span_1_of_2 box mix icons web apps">
            <img class="portfolio-image" src="resources/img/port4.png" alt="Blog / Magazine Flat UI Kit">
            <h4>Blog / Magazine Flat UI Kit</h4>
        </div>
    </div>
    <div class="row">
        <a href="#" class="btn btn-load-more">load more projects</a>
    </div>
</section>

<!--================================-->   
<!-- END PORTFOLIO SECTION -->
<!--================================--> 



<!--================================-->   
<!-- START TESTIMONIAL SECTION -->
<!--================================-->

<section class="testimonial" id="testimonial">
    <div class="row">
        <h2>WHAT POEPLE SAY ABOUT US</h2>
        <p class="little-description">Our clients love us!</p>
    </div>
    <div class="row">
        <div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resources/img/man1.png" alt="Chanel Iman">
            </div>
            <div class="client-review">
                <p>“Nullam dapibus blandit orci, viverra gravida dui lobortis eget. Maecenas fringilla urna eu nisl scelerisque.”</p>
                <h3>Chanel Iman</h3>
                <span class="role">CEO of Pinterest</span>
            </div>
        </div>
        <div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resources/img/man2.png" alt="ADRIANA LIMA">
            </div>
            <div class="client-review">
                <p>“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”</p>
                <h3>ADRIANA LIMA</h3>
                <span class="role">Founder of Instagram</span>
            </div>
        </div>
        <div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resources/img/man3.png" alt="ANNE HATHAWAY">
            </div>
            <div class="client-review">
                <p>“Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta.”</p>
                <h3>ANNE HATHAWAY</h3>
                <span class="role">Lead Designer at Behance</span>
            </div>
        </div>
        <div class="col span_1_of_2 box">
            <div class="client-photo">
                <img src="resources/img/man4.png" alt="EMMA STONE
                ">
            </div>
            <div class="client-review">
                <p>“Phasellus non purus vel arcu tempor commodo. Fusce semper, purus vel luctus molestie, risus sem cursus neque.”</p>
                <h3>EMMA STONE</h3>
                <span class="role">Co-Founder of Shazam</span>
            </div>
        </div>
    </div>
</section>

<!--================================-->   
<!-- END TESTIMONIAL SECTION -->
<!--================================-->



<!--================================-->   
<!-- START CONTACT SECTION -->
<!--================================-->

<section class="contact-section" id="contact">
    <div class="row">
        <h2>GET IN TOUCH</h2>
        <p class="little-description">1600 Pennsylvania Ave NW, Washington, DC 20500, United States of America. Tel: (202) 456-1111</p>
    </div>
    <div class="row">
        <form action="https://formspree.io/f/mgepyzrp" method="POST">
            <div class="row">
                <div class="col span_1_of_2 nm">
                    <input type="text" name="Name" placeholder="Your Name *" required>
                </div>
                <div class="col span_1_of_2">
                    <input type="text" name="Email" placeholder="Your Email *" required>
                </div>
            </div>
            <div class="row">
                <textarea name="Messege" cols="30" rows="10" placeholder="Your Messege *" required></textarea>
            </div>
            <div class="row">
                <input type="submit" value="SENT MESSEGE"  class="btn btn-submit">
            </div>
        </form>
    </div>
</section>

<!--================================-->   
<!-- END CONTACT SECTION -->
<!--================================-->



<!--================================-->   
<!-- START FOOTER SECTION -->
<!--================================-->

<footer class="footer-section">
    <div class="row">
        <ul>
            <li><a href="#">Facebook</a></li>
            <li><a href="#">Twitter</a></li>
            <li><a href="#">Google+</a></li>
            <li><a href="#">Linkedin</a></li>
            <li><a href="#">Behance</a></li>
            <li><a href="#">Dribble</a></li>
            <li><a href="#">Github</a></li>
        </ul>
    </div>
</footer>

<!--================================-->   
<!-- END FOOTER SECTION -->
<!--================================-->



<!------------------------------->
<!--===== JS Source Files =====--> 
<!------------------------------->


<!-- Google Hosted Jquery --> 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Vendors Js -->
<script src="vendors/js/html5shiv.min.js"></script>
<script src="vendors/js/respond.min.js"></script>
<script src="vendors/js/selectivizr.js"></script>

<!--JQuery Plugins-->
<script src="vendors/js/jquery.waypoints.min.js"></script>
<script src="vendors/js/mixitup.min.js"></script>
 
<!-- Resources Js -->
<script src="resources/js/main.js"></script>


</body>
</html>