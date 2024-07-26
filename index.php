<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/x-icon" href="./media/img/JaydenInniss_Logo.png">
    <title>Jayden Inniss</title>


    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Be+Vietnam+Pro:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>


    <!-- CSS -->
    <link rel="stylesheet" href="styles/style.css">    
    <link rel="stylesheet" href="styles/home.css">

</head>
<body>

    <?php include "parts/header.php" ?>

    <!-- HERO IMAGE -->
    <div id="home-hero">

        <div id="home-hero-4"></div>
        <div id="home-hero-text"><p>JAYDEN INNISS</p>
        <h1>Photography | Videography | Multimedia Design</h1></div>
        <div id="home-hero-3"></div>
        <div id="home-hero-2"></div>
        <div id="home-hero-1"></div>

    </div>
    <!-- END HERO IMAGE -->



    <div class="content">
        <div class="about">
            <div class="about-profile">
                <img src="media/img/jayden24profilepic.JPEG" alt="Jayden Inniss" id="profile-pic">
            </div>
            <div class="about-right">
                <h1>Jayden Inniss<span id='jaydenstitle'><br>Photographer, Videographer, Multimedia Designer</span></h1>
                <p>Growing up in Whistler, I have had the unique opportunity to collaborate with the world's top athletes and participate in incredible events!<br><br>Over the past five years, I have worked with Whistler businesses, community organizations and athletes to produce photo/video marketing content. Recently, I have been working in television broadcast events as a camera operator.</p>
            </div>
        </div>
            


        <div class="photography">
            <!-- <div class="photo-header">
                <h2>PHOTOGRAPHY</h2>
            </div> -->
            <div class="photo-banner-section">
                <a href="#">
                    <div class="photo-banners" id="adventure">
                        <h3>ADVENTURE</h3>
                        <div class="seemore-container">
                            <p class="seemore-text">See More →</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="photo-banners" id="landscape">
                        <h3>LANDSCAPE</h3>
                        <div class="seemore-container">
                            <p class="seemore-text">See More →</p>
                        </div>
                    </div>
                </a>
                <a href="#">
                    <div class="photo-banners" id="commercial">
                        <h3>COMMERCIAL</h3>
                        <div class="seemore-container" id="commercial-seemore">
                            <p class="seemore-text">See More →</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>

        <!-- for the see more - I think you should make a div absolute and chuck it where it is (exact size of the text) and then overflow hidden, move the text above and then on hover move it down and into the div -->
            
        <div class="clients">
            <div class="client-header">
                <h2>HAPPY CLIENTS & COLLABORATIONS</h2>
            </div>
            <div id="logo-slider">
                <div id="logo-container">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                    <img src="/media/img/logos/logo1.png" alt="">
                </div>
            </div>
        </div>

        <div class="videography">
            <h3>VIDEOGRAPHY</h3>
        </div>

        <a href="html/newmedia.php">
            <div class="newmedia">
                <h3>NEW MEDIA PROJECTS</h3>
                <div class="seemore-container">
                    <p class="seemore-text">See More →</p>
                </div>
            </div>
        </a>
        <?php include "parts/footer.php" ?>
    </div>  

    <script src=" js/parallaxhero/parallaxhero_home.js"></script>
    <script src="js/home.js"></script>

</body>
</html>