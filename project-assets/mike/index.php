<?php get_header(); ?>

<!DOCTYPE html>
<style>
    
</style>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>New Age - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Google fonts-->
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://fonts.googleapis.com/css2?family=Newsreader:ital,wght@0,600;1,600&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Mulish:ital,wght@0,300;0,500;0,600;0,700;1,300;1,500;1,600;1,700&amp;display=swap" rel="stylesheet" />
        <link href="https://fonts.googleapis.com/css2?family=Kanit:ital,wght@0,400;1,400&amp;display=swap" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body id="page-top">
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light fixed-top shadow-sm" id="mainNav">
            <div class="container px-5">
                <a class="navbar-brand fw-bold" href="#page-top"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    Menu
                    <i class="bi-list"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto me-4 my-3 my-lg-0 justify-content-center">
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#">ABOUT</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#">MISSIONS</a></li>
                        <li class="nav-item"><a class="nav-link me-lg-3" href="#">CONTACT</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Mashead header-->
        <header class="masthead">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-6">
                        <!-- Mashead text and app badges-->
                        <div class="mb-5 mb-lg-0 text-center text-lg-start">
                            <h1 class="display-1 lh-1 mb-3">OUR MISSION TO NEPTUNE</h1>
                            <p class="lead fw-normal text-muted mb-5">We have been working on making it to planet Neptune. We are lauching early 2024. Stay tuned!</p>
                            <div class="d-flex flex-column flex-lg-row align-items-center"></div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <!-- Masthead device mockup feature-->
                        <div class="masthead-device-mockup">
                           <img src="<?php echo get_theme_file_uri(); ?>assets\img\images\planeet.png" width="400px" height="400px"/>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- Quote/testimonial aside-->
        <aside class="text-center>
            <div class="container px-5">
                <div class="row gx-5 justify-content-center">
                    <div class="col-xl-8" style="width:60%;">
                        <div class="h2 fs-1 text-white mb-4"><em>"THE STARS DON’T LOOK BIGGER, BUT THEY DO LOOK BRIGHTER!"</em></div>
                    </div>
                </div>
            </div>
        </aside>
        <!-- App features section-->
        <section id="features">
            <div class="container px-5">
                <div class="row gx-5 align-items-center">
                    <div class="col-lg-8 order-lg-1 mb-5 mb-lg-0">
                        <div class="container-fluid px-5">
                            <div class="row gx-5">
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-phone icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Watch anywhere</h3>
                                        <p class="text-muted mb-0">You can watch mission to Neptune from anywhere.</p>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-5">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-camera icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Take pictures</h3>
                                        <p class="text-muted mb-0">Post our mission to socialmedia and #neptune202 us!</p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6 mb-5 mb-md-0">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-gift icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">Giveaway</h3>
                                        <p class="text-muted mb-0">We are giving away VIP view to event. Stay active and see how to participate in giveaway.</p>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <!-- Feature item-->
                                    <div class="text-center">
                                        <i class="bi-patch-check icon-feature text-gradient d-block mb-3"></i>
                                        <h3 class="font-alt">First mankind accomplishment</h3>
                                        <p class="text-muted mb-0">It's next big accomplishment for mankind in histroy to reach safely to Neptune and back!</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 order-lg-0">
                        <!-- Features section device mockup-->
                        <div class="features-device-mockup">
                            <svg class="circle" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg">
                                <defs>
                                    <linearGradient id="circleGradient" gradientTransform="rotate(45)">
                                        <stop class="gradient-start-color" offset="0%"></stop>
                                        <stop class="gradient-end-color" offset="100%"></stop>
                                    </linearGradient>
                                </defs>
                                <circle cx="50" cy="50" r="50"></circle></svg
                            ><svg class="shape-1 d-none d-sm-block" viewBox="0 0 240.83 240.83" xmlns="http://www.w3.org/2000/svg">
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(120.42 -49.88) rotate(45)"></rect>
                                <rect x="-32.54" y="78.39" width="305.92" height="84.05" rx="42.03" transform="translate(-49.88 120.42) rotate(-45)"></rect></svg
                            ><svg class="shape-2 d-none d-sm-block" viewBox="0 0 100 100" xmlns="http://www.w3.org/2000/svg"><circle cx="50" cy="50" r="50"></circle></svg>

                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- Basic features section-->
        <section class="bg-light">
            <div class="container px-5">
                <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                    <div class="col-12">
                        <h2 class="display-4 lh-1 mb-4 col-lg-5">GET TO PLANET NEPTUNE</h2>
                        <p class="lead fw-normal text-muted mb-5 mb-lg-0">Get ready for an extraordinary journey through the cosmos as we embark on a mission to reach the mesmerizing planet Neptune. Buckle up and prepare to be captivated by the ethereal beauty of the deep blue giant, with its swirling storms and mysterious atmosphere. Traveling millions of kilometers through the vastness of space, our quest to explore Neptune's secrets will ignite our sense of wonder and push the boundaries of human exploration. So, hold on tight as we set sail towards this distant celestial marvel, where the mysteries of the universe await us.</p>
                    </div>
                    
                </div>
            </div>
        </section>
        <!-- Emblem -->
        <section class="bg-light">
        <div class="container px-5">
            <div class="row gx-5 align-items-center justify-content-center justify-content-lg-between">
                <div class="col-12">
                    <h2 class="display-4 lh-1 mb-4 col-lg-5"  style="margin-left:59%;">NEPTUME EMBLEM</h2>
                     <p class="lead fw-normal text-muted mb-5 mb-lg-0">Get ready for an extraordinary journey through the cosmos as we embark on a mission to reach the mesmerizing planet Neptune. Buckle up and prepare to be captivated by the ethereal beauty of the deep blue giant, with its swirling storms and mysterious atmosphere. Traveling millions of kilometers through the vastness of space, our quest to explore Neptune's secrets will ignite our sense of wonder and push the boundaries of human exploration. So, hold on tight as we set sail towards this distant celestial marvel, where the mysteries of the universe await us.</p>
                </div>    
            </div>
        </div>
        </section>
        <!-- Footer-->
        <footer class="bg-black text-center py-5">
            <div class="container px-5">
                <div class="text-white-50 small">
                    <div class="mb-2">&copy;MISSION TO NEPTUNE</div>
                    <a href="#">ABOUT</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#">MISSIONS</a>
                    <span class="mx-1">&middot;</span>
                    <a href="#">CONTACT</a>
                </div>
            </div>
        </footer>
       
                    

       
    </body>
</html>










<div class="content">

<?php 
while (have_posts()) : the_post();
    the_content();
endwhile;
?>

</div>

 <?php get_footer(); ?>
 