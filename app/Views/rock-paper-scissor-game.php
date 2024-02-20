<?php include("header.php") ?>

<body>
    <?php include("navbar.php") ?>
    <div class="content">
        <section>
            <div class="container">
                <div class="title">
                    <h2>Rock, Paper, Scissor game</h2>
                </div>
                <div class="project-parent">
                    <!-- <div class="project-header">
                        <p>Landing Page</p>
                        <a href="https://timely-croquembouche-906b2a.netlify.app/" target="_blank">Live Preview</a>
                    </div> -->
                    <div class="project-image-parent">
                        <img src="<?php echo base_url("assets/images/rock-paper-scissor.png")?>">
                        <div id="ribbon-container"
                            style="top: 240px;right: -15px;"
                        >
                            <p href="#" id="ribbon"></p>
                        </div>
                    </div>
                    <div class="project-detail">
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Facilis fuga velit veniam dolor porro ratione maiores obcaecati voluptatem ipsa error magnam cum quaerat, atque sint similique necessitatibus iusto! Atque, sapiente!</p>
                        <a href="https://luminous-cassata-a4e25b.netlify.app/" target="_blank">Live Preview</a>
                    </div>
                    <div class="project-image-parent gif">
                        <img src="<?php echo base_url("assets/images/gif/rock-paper-scissor-game.gif") ?>">
                    </div>
                </div>
        </section>
        <?php include("footer.php") ?>
    </div>
    <?php include("scr.php") ?>
</body>

</html>