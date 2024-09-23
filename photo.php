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
                <a href="../media/img/gallery/gallery15.jpeg"
                    class="grid-item"
                    data-pswp-width="1920"
                    data-pswp-height="1280"
                    target="_blank">
                    <img src="../media/img/gallery/gallery15.jpeg" alt=""/>
                </a>
                <a href="../media/img/gallery/gallery16.jpeg"
                    class="grid-item"
                    data-pswp-width="1920"
                    data-pswp-height="1280"
                    target="_blank">
                    <img src="../media/img/gallery/gallery16.jpeg" alt="" class="grid-item"/>
                </a>
                <a href="../media/img/gallery/gallery17.jpeg"
                    class="grid-item"
                    data-pswp-width="1669"
                    data-pswp-height="2500"
                    target="_blank">
                    <img src="../media/img/gallery/gallery17.jpeg" alt="" class="grid-item"/>
                </a>
                <a href="../media/img/gallery/gallery18.jpeg"
                    class="grid-item"
                    data-pswp-width="1669"
                    data-pswp-height="2500"
                    target="_blank">
                    <img src="../media/img/gallery/gallery18.jpeg" alt="" class="grid-item"/>
                </a>
            </div>
        </div>

        <div id="landscape">
            <div class="header-banner">
                <h2>Landscape</h2>
            </div>

            <div class="pswp-gallery pswp-gallery--single-column grid" id="my-gallery">
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_1.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_1.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_2.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_2.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_3.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1080"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_3.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_4.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_4.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_4.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_4.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_5.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_5.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_6.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_6.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_7.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_7.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_8.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1080"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_8.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_9.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_9.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_10.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_10.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_11.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_11.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_12.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_12.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_13.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="1280"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_13.jpeg" alt="" class="grid-item"/>
            </a>
            <a href="/media/img/gallery/landscape/jaydeninniss_landscape_14.jpeg"
                class="grid-item"
                data-pswp-width="1920"
                data-pswp-height="650"
                target="_blank">
                <img src="/media/img/gallery/landscape/jaydeninniss_landscape_14.jpeg" alt="" class="grid-item"/>
            </a>
            
            </div>
        </div>

        <div id="commercial">
            <div class="header-banner">
                <h2>Commercial</h2>
            </div>

            <div class="grid">
                <section class="section-6">
                    <div class="row">
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery4.jpg">
                            <figcaption>
                                <h3>Crankworx 2023</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery8.jpg">
                            <figcaption>
                                <h3>FIS Junior/U18 Nordic Championships 2023</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>Foon Skis - David Peatfield</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>Green River Motocross</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>Knolly Bikes - Sergi Massot</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>Mekong</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>Nicklaus North Golf Course + Table Nineteen</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>Partners In Tourism - Invitaional Golf Tournament 2023+2024</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>Treeline Aerial</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>UBC Ski and Board Club</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>VRCA Awards of Excellence Gala 2023</h3>
                                <p>"Vancouver Regional Construction Association"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>Whistler Naturalists</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>WORCA</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
                        </figure>
                        <figure class="figure">
                            <img src="../media/img/gallery/gallery19.jpeg">
                            <figcaption>
                                <h3>Whistler Real Estate Co.</h3>
                                <p>"DESC"</p>
                            </figcaption>
                            <a href="#"></a>
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