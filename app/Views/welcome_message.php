<?php include("header.php") ?>

<body>

    <!-- HEADER: MENU + HEROE SECTION -->

    <!-- CONTENT -->
    <?php include("navbar.php") ?>
    <div class="content">
        <section class="banner position-relative" id="home">
            <!-- <div class="center-absolute container display-mobile-banner-none">
                <div class="content-banner-mobile flex flex-column">
                    <div class="background-mobile position-relative">
                        <img src="<?php echo base_url("assets/images/IMG.png") ?>" class="image-banner-mobile" alt="img-banner">
                    </div>
                    <div class="banner-text-first-mobile">
                        <span class="hello">Hello, I'm</span>
                        <span class="name">
                            Rizky Dwi Yuliyanto
                        </span>
                    </div>
                    <span class="banner-text-second-mobile">Web Developer</span>
                </div>
            </div> -->
            <div class="center-absolute display-desktop-banner-none">
                <div class="content-banner">
                    <div class="background position-relative">
                        <img src="<?php echo base_url("assets/images/IMG.png") ?>" class="image-banner" alt="img-banner">
                        <div id="ribbon-container" style="top: 295px;right: -15.5px;">
                            <p>
                                <!-- <span class="hello">Hello, I'm</span>
                                <span class="name">
                                </span> -->
                                Web developer
                            </p>
                        </div>
                    </div>
                    <div class="banner-text-first">
                        <p class="hello">Hello, I'm</p>
                        <p class="name">
                            Rizky
                        </p>
                    </div>
                </div>
            </div>
        </section>
        <section class="w-100 tech position-relative flex align-items-center" id="techs">
            <div class="w-100 tech-content">
                <div class="container h-100">
                    <h1 class="header-content">Techs I Used</h1>
                    <div class="bg-tect-item">
                        <div class="flex tect-item-width justify-content-space-between">
                            <div class="tect-item-parent">
                                <ul class="flex flex-column justify-content-space-between h-100">
                                    <li>Node js</li>
                                    <li>PHP</li>
                                    <li>Python</li>
                                </ul>
                            </div>
                            <div class="tect-item-parent">
                                <ul class="flex flex-column justify-content-space-between h-100">
                                    <li>HTML</li>
                                    <li>CSS</li>
                                    <li>JavaScript</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="projects flex align-items-center" id="projects">
            <div class="w-100 projects-content">
                <div class="container h-100">
                    <div class="flex flex-column justify-content-flex-start">
                        <h1 style="height: 0;" class="header-content project-header">Projects</h1>
                    </div>
                    <div class="projects-items">
                        <div class="item position-relative">
                            <img src="./assets/images/project.png" alt="project">
                            <div class="flex flex-column justify-content-flex-end project-detail">
                                <h2>Blogr Website</h2>
                                <div class="logo-project flex justify-content-space-between">
                                    <img src="<?php echo base_url("assets/images/html-5.png") ?>" alt="html">
                                    <img src="<?php echo base_url("assets/images/css-3.png") ?>" alt="css">
                                    <img src="<?php echo base_url("assets/images/java-script.png") ?>" alt="js">
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo base_url("huddle-landing-page") ?>" class="item position-relative">
                            <img src="<?php echo base_url("assets/images/project6.png") ?>" alt="project6">
                            <div class="flex flex-column justify-content-flex-end project-detail">
                                <h2>Huddle Landing Page</h2>
                                <div class="logo-project flex justify-content-space-between">
                                    <img src="<?php echo base_url("assets/images/html-5.png") ?>" alt="html">
                                    <img src="<?php echo base_url("assets/images/css-3.png") ?>" alt="css">
                                    <img src="<?php echo base_url("assets/images/java-script.png") ?>" alt="js">
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url("crowdfunding-page") ?>" class="item position-relative">
                            <img src="<?php echo base_url("assets/images/project2.png") ?>" alt="project2">
                            <div class="flex flex-column justify-content-flex-end project-detail">
                                <h2>Crowdfunding Page</h2>
                                <div class="logo-project flex justify-content-space-between">
                                    <img src="<?php echo base_url("assets/images/html-5.png") ?>" alt="html">
                                    <img src="<?php echo base_url("assets/images/css-3.png") ?>" alt="css">
                                    <img src="<?php echo base_url("assets/images/java-script.png") ?>" alt="js">
                                </div>
                            </div>
                        </a>
                        <a href="<?php echo base_url("rock-paper-scissor-game") ?>" class="item position-relative">
                            <img src="<?php echo base_url("assets/images/rock-paper-scissor.png") ?>" alt="project3">
                            <div class="flex flex-column justify-content-flex-end project-detail">
                                <h2 style="margin:0 12px;">Rock, Paper, Scissors game</h2>
                                <div class="logo-project flex justify-content-space-between">
                                    <img src="<?php echo base_url("assets/images/html-5.png") ?>" alt="html">
                                    <img src="<?php echo base_url("assets/images/css-3.png") ?>" alt="css">
                                    <img src="<?php echo base_url("assets/images/java-script.png") ?>" alt="js">
                                </div>
                            </div>
                        </a>
                        <div class="item position-relative">
                            <img src="./assets/images/project4.png" alt="project4">
                            <div class="flex flex-column justify-content-flex-end project-detail">
                                <h2>Clipboard Landing Page</h2>
                                <div class="logo-project flex justify-content-space-between">
                                    <img src="<?php echo base_url("assets/images/html-5.png") ?>" alt="html">
                                    <img src="<?php echo base_url("assets/images/css-3.png") ?>" alt="css">
                                    <img src="<?php echo base_url("assets/images/java-script.png") ?> " alt="js">
                                </div>
                            </div>
                        </div>
                        <div class="item position-relative">
                            <img src="./assets/images/project5.png" alt="project5">
                            <div class="flex flex-column justify-content-flex-end project-detail">
                                <h2>Fylo Landing Page</h2>
                                <div class="logo-project flex justify-content-space-between">
                                    <img src="<?php echo base_url("assets/images/html-5.png") ?>" alt="html">
                                    <img src="<?php echo base_url("assets/images/css-3.png") ?>" alt="css">
                                    <img src="<?php echo base_url("assets/images/java-script.png") ?>" alt="js">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <?php include("footer.php") ?>
    </div>
    <!-- FOOTER: DEBUG INFO + COPYRIGHTS -->

    <?php include("scr.php") ?>
    <!-- SCRIPTS -->


    <!-- -->

</body>

</html>