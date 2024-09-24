<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jayden Inniss - Photography</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-QPYBLBF2QD"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-QPYBLBF2QD');
    </script>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Be+Vietnam+Pro:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

    <!-- SEO -->
    <meta property="og:title" content="Photo - Jayden Inniss">
    <meta property="og:type" content="website">
    <meta property="og:URL" content="https://www.jaydeninniss.com/photo">
    <meta property="og:image" content="https://www.jaydeninniss.com/media/logo/jaydeninniss_logo.svg">
    <meta property="og:description" content="Jayden Inniss is a sports/adventure photographer and videographer proudly based in Whistler, BC.">
    <meta name="robots" content="all">
    <meta name="author" content="Jayden Inniss">
    <meta name="description" content="Jayden Inniss is a sports/adventure photographer and videographer proudly based in Whistler, BC.">
    <meta name="keywords" content="Photography, Videography, Jayden Inniss, Whistler, Camera, Photography Services in Whistler, Filmer in Whistler, Biking, Skiing, Hiking, Camping, Whistler British Columbia Photo/Video, Sport Photographer, Landscape Photography, Action Sport Photography and Videography">
    <link rel="icon" type="image/x-icon" href="./media/logo/jaydeninniss_logo.svg">
    <!-- End of SEO -->

    <!-- PHOTOSWIPE PLUGIN -->
    <script type="module">
        import PhotoSwipeLightbox from '/plugins/photoswipe/photoswipe-lightbox.esm.js';
        const options = {
        gallery: '#my-gallery',
        children: 'a',
        pswpModule: () => import('/plugins/photoswipe/photoswipe.esm.js')
        };
        const lightbox = new PhotoSwipeLightbox(options);
        lightbox.init();
    </script>

    <link rel="stylesheet" href="/plugins/photoswipe/photoswipe.css">
        <!-- END PHOTOSWIPE PLUGIN -->

    <!-- CSS -->
    <link rel="stylesheet" href="../styles/style.css">
    <link rel="stylesheet" href="../styles/photo.css">

</head>
<body>

    <?php include "./parts/header.php" ?>
    <?php include "parts/hamburger.php" ?>
    <?php include 'db/connect.php';?>

    <?php 
        $result2 = $imgs->query('SELECT * FROM sets');
        // $title = $result2->fetch_assoc();
    ?>

    <main>

    <!-- HERO IMAGE -->
    <div id="newmedia-hero">
        <div id="newmedia-hero-bg"></div>
    </div>
    <!-- END HERO IMAGE -->

    <div class="content-container">
        <div id="adventure">
            <div class="header-banner">
                <h2>Adventure</h2>
            </div>

            <div class="pswp-gallery pswp-gallery--single-column grid" id="my-gallery">
                <?php
                    $result = $imgs->query('SELECT * FROM imgs WHERE set_id=99');
                    while($img = $result->fetch_assoc()) {
                ?>

                <a href="<?php echo $img['photo_path']; ?>.jpeg"
                    class="grid-item"
                    data-pswp-width="<?php echo $img['width']; ?>"
                    data-pswp-height="<?php echo $img['height']; ?>"
                    target="_blank">
                    <img src="<?php echo $img['photo_path']; ?>.jpeg" alt=""/>
                </a>

                <?php }; ?>
            </div>
        </div>

        <div id="landscape">
            <div class="header-banner">
                <h2>Landscape</h2>
            </div>

            <div class="pswp-gallery pswp-gallery--single-column grid landscape" id="my-gallery">
                <?php
                    $result = $imgs->query('SELECT * FROM imgs WHERE set_id=98');
                    while($img = $result->fetch_assoc()) {
                ?>

                <a href="<?php echo $img['photo_path']; ?>.jpeg"
                    class="grid-item"
                    data-pswp-width="<?php echo $img['width']; ?>"
                    data-pswp-height="<?php echo $img['height']; ?>"
                    target="_blank">
                    <img loading="lazy" src="<?php echo $img['photo_path']; ?>.jpeg" alt=""/>
                </a>

                <?php }; ?>
            </div>
        </div>

        <div id="commercial">
            <div class="header-banner">
                <h2>Commercial
                    <?php echo var_dump($title); ?>
                </h2>
            </div>

            <div class="grid">
                <section class="section-6">
                    <div class="row">

                    <?php while($title = $result2->fetch_assoc()) { ?>

                        <figure class="figure">
                            <img src="<?php echo $title['set_cover']; ?>">
                            <figcaption>
                                <h3><?php echo $title['set_title']; ?></h3>
                                <p>"<?php echo $title['set_desc']; ?>"</p>
                            </figcaption>
                            <a href="photo-project?id=<?php echo $title['set_title']; ?>"></a>
                        </figure>

                        <?php } ?>


                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[1]]; ?>">
                            <figcaption>
                                <h3>FIS Junior/U18 Nordic Championships 2023</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=2"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[2]]; ?>">
                            <figcaption>
                                <h3>Foon Skis - David Peatfield</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=3"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[3]]; ?>">
                            <figcaption>
                                <h3>Green River Motocross</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=4"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[4]]; ?>">
                            <figcaption>
                                <h3>Knolly Bikes - Sergi Massot</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=5"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[5]]; ?>">
                            <figcaption>
                                <h3>Mekong</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=6"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[6]]; ?>">
                            <figcaption>
                                <h3>Nicklaus North Golf Course + Table Nineteen</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=7"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[7]]; ?>">
                            <figcaption>
                                <h3>Partners In Tourism - Invitaional Golf Tournament 2023+2024</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=8"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[8]]; ?>">
                            <figcaption>
                                <h3>Treeline Aerial</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=9"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[9]]; ?>">
                            <figcaption>
                                <h3>UBC Ski and Board Club</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=10"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[10]]; ?>">
                            <figcaption>
                                <h3>VRCA Awards of Excellence Gala 2023</h3>
                                <p>"Vancouver Regional Construction Association"</p>
                            </figcaption>
                            <a href="photo-project?id=11"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[11]]; ?>">
                            <figcaption>
                                <h3>Whistler Naturalists</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=12"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[12]]; ?>">
                            <figcaption>
                                <h3>WORCA</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=13"></a>
                        </figure>
                        <figure class="figure">
                        <img src="<?php echo $title['set_cover'[13]]; ?>">
                            <figcaption>
                                <h3>Whistler Real Estate Co.</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="photo-project?id=14"></a>
                        </figure>
                    </div>
                </section>
            </div>
        </div>

    </div>

    <?php include "./parts/footer.php" ?>

    </main>

</body>
</html>