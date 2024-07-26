<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>UI/UX - Jayden Inniss</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anybody:ital,wght@0,100..900;1,100..900&family=Be+Vietnam+Pro:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">

    <!-- GSAP -->
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js"></script>

    <!-- CSS -->
    <link rel="stylesheet" href="../styles/style.css">    
    <link rel="stylesheet" href="../styles/project-uiux.css">
</head>
<body>

    <?php include "../parts/header.php" ?>

    <main>
        <!-- Header Img -->
        <div class="hero">
            <img src="../media/img/projects/uiuxprojectcover.png" alt="">
            <div class="project-title">
                <h1>UI/UX</h1>
            </div>
        </div>
        <!-- END Header Img -->

        <div class="project-description">
            <div class="left-col">
                <button class="cta-button">
                    <a class="cta" href="#">
                        Read more
                        <img src="../media/icons/button-arrow.svg" alt="">
                    </a>
                </button>
            </div>
            
            <div class="right-col">
                <h2>Interface Design & User Testing - Outdoor Adventure Planning Tool</h2>
                <p>UI/UX Designer<br>April 2, 2024 - 42 Hours</p>
            </div>
        </div>
        <div class="content-container">
            <div class="qa-container">
                <h3 class="question" id="first">The Goal</h3>
                <p class="answer"><strong>This project consisted of three phases:</strong></p>
                <ul class="answer">
                    <li>Phase 1: User research & designing the initial interface (Low-fidelity wireframes).</li>
                    <li>Phase 2: Design high-fidelity interactive mockups. Then conduct User Testing to identify issues/weaknesses in the design.</li>
                    <li>Phase 3: Edit the interface to address issues identified in user testing.</li>
                </ul>
                <p class="answer"><em>Phases 1 & 3 have accompanying reports.</em></p>
            </div>

            <div class="qa-container">
                <h3 class="question">Phase 1</h3>
                <p class="answer">Phase 1 began with establishing the topic of the website interface. I landed on an outdoor adventure planning tool as I use similar tools frequently planning my own adventures, so I understand what I like and what could be improved with existing websites.<br><br>Before design work could begin, the target audience and user goals had to be identified. To define the target user I created a detailed user persona, a user scenario, an empathy map and a journey map for an expected user.<br><br> [Insert images or video graphics walking through the deliverables here]. <br><br>Now that user goals and tasks have been identified, a detailed flow chart lays out the basic information architecture.<br><br>Finally, I moved over to Figma to design the initial wireframes for the interface. The initial wireframes lay out ten pages, including the feature set of pages: the interactive map. Users can zoom in and out, change the map layers, and select trails to view more information on this map. This functionality is quite complicated and is the main focus of user testing!</p>
            </div>

            <div class="qa-container">
                <h3 class="question">Phase 2 - User Testing</h3>
                <p class="answer">This phase began with adding interactivity and finalizing all design elements within the interface, going from wireframes to high-fidelity mockups.<br><br><br><br> [Image or video graphic of before/after here.] <br><br>Next, I conducted user testing on my peers where they could work through 4 missions I had set up to test various interface aspects. These missions had users move through multiple pages and use specific functionality such as drop-downs and radio buttons. <br><br>Maze allowed me to view many different metrics from each user test. Below is an example of the results from one user test.<br><br><br><br> [Images or video graphic here]<br><br><br><br>Metrics including misclick rates, test durations, and heatmaps made identifying issues with the interface much easier! It was neat to see the design work come to life! Watching users move through the interface made his phase of the project a lot of fun!</p>
            </div>

            <div class="qa-container">
                <h3 class="question">Phase 3</h3>
                <p class="answer">The user testing went great! My final report contains the four issues identified in user testing and how they were addressed. <br><br>This final report & presentation combo was a fun challenge as it required hours of critical thinking to break down issues to find the root of a user's confusion. Taking a step back and putting yourself in the user's shoes to understand why they got confused or off-track! I enjoyed the analytical problem-solving aspect of this project!</p>
            </div>

            <div class="qa-container">
                <h3 class="question">Conclusion</h3>
                <p class="answer">In conclusion, I designed an effective interface that was tested to improve its design and functionality. Now I have a user-tested interface which is even more effective than before!</p>
            </div>

            <button class="cta-button">
                <a class="cta" href="./project-alpinearmour.php">
                Read more
                <img src="../media/icons/button-arrow.svg" alt="">
                </a>
            </button>
        </div>

        <?php include "../parts/footer.php" ?>

    </main>

</body>
</html>