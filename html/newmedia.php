<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jayden Inniss - New Media</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Be+Vietnam+Pro:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/newmedia.css">

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

    <!-- SEO -->
    <meta property="og:title" content="New Media Projects - Jayden Inniss" />
    <meta name="description" content="Jayden Inniss is a photographer and videographer proudly based in Whistler, BC.">
    <meta name="keywords" content="Photography, Videography, Jayden Inniss, Whistler, Camera, Photography Services in Whistler, Filmer in Whistler, Biking, Skiing, Hiking, Camping, Whistler British Columbia Photo/Video, Sport Photographer, Landscape Photography, Action Sport Photography and Videography" \>
        <!-- End of SEO -->

</head>
<body>

<!-- TODO
    1. Finish bringing over copy
    2. Design Button
    3. Move project 2 image over
    4. Add h1 above projects and topographic textures
    4. Responsive
    5. Link buttons?
-->

    <?php include "../parts/header.php" ?>

    <main>

    <!-- HERO IMAGE -->
    <div id="newmedia-hero">
        <div id="newmedia-hero-bg"></div>
        <div id="newmedia-hero-text"><p id='hero'>NEW MEDIA PROJECTS</p></div>
        <div id="newmedia-hero-foreground"></div>
    </div>
    <!-- END HERO IMAGE -->

    <div class="content-container">
        <div id="grey-cover">        <h1>Hello</h1></div>
        <!-- Put something here - probably featured projects -->

        <div class="project-banner-container">
            <div class="project" id="project1">
                <div class="project-info" id="project-info1">
                    <div class="left-side-info">
                        <h3>SEA TO SKY STUDENT SHORT FILM FESTIVAL</h3>
                        <h3>Community Fundraising Event</h3>
                        <p class="project-type">Self-Directed</p>
                        <p class="project-desc">Two peers and I created an event as a grad fundraiser for our high school. After receiving 9 submitted films, we held a viewing night at our school for an audience of over 300. <br><br>Role: Co-Founder</p>
                        <button class="cta-button">
                            <div class="cta">
                                <p>Read more</p>
                                <img src="../media/icons/button-arrow.svg" alt="">
                            </div>
                        </button>
                    </div> 
                </div>
            </div>

            <div class="project" id="project2">
                <div class="project-info" id="project-info2">
                    <div class="left-side-info">
                        <h3>Alpine Armour</h3>
                        <h3>Community Fundraising Event</h3>
                        <p class="project-type">Self-Directed</p>
                        <p class="project-desc">Two peers and I created an event as a grad fundraiser for our high school. After receiving 9 submitted films, we held a viewing night at our school for an audience of over 300. <br><br>Role: Co-Founder</p>
                        <button class="cta-button">
                            <div class="cta">
                                <p>Read more</p>
                                <img src="../media/icons/button-arrow.svg" alt="">
                            </div>
                        </button>
                    </div> 
                </div>
            </div>


            <div class="project" id="project3">
                <div class="project-info" id="project-info3">
                    <div class="left-side-info">
                        <h3>SEA TO SKY STUDENT SHORT FILM FESTIVAL</h3>
                        <h3>Community Fundraising Event</h3>
                        <p class="project-type">Self-Directed</p>
                        <p class="project-desc">Two peers and I created an event as a grad fundraiser for our high school. After receiving 9 submitted films, we held a viewing night at our school for an audience of over 300. <br><br>Role: Co-Founder</p>
                        <button class="cta-button">
                            <div class="cta">
                                <p>Read more</p>
                                <img src="../media/icons/button-arrow.svg" alt="">
                            </div>
                        </button>
                    </div> 
                </div>
            </div>
        </div>
    </div>




        <?php include "../parts/footer.php" ?>

    </main>

    <script src="../js/parallaxhero/parallaxhero_newmedia.js"></script>
    <script src="../js/newmedia.js"></script>

</body>
</html>