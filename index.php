<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->

<!-- Include Global Constants -->
<?php include_once 'config.php'; ?>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#1B4071"/>
    <meta name=”robots” content=”index, follow”>

    <!-- Favicon -->
    <link rel="apple-touch-icon" href="./favicon.ico">
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">

    <?php include_once 'imports.php'; ?>

    <!-- SEO -->
    <!-- Title -->
    <title><?= SEO_TITLE ?></title>
    <meta property="og:title" content="<?= SEO_TITLE ?>"/>

    <!-- Description -->
    <meta name="description" content="<?= SEO_DESCRIPTION ?>">
    <meta property="og:description" content="<?= SEO_DESCRIPTION ?>">

    <!-- Other -->
    <meta property="og:image" content="https://www.jusjus.me/jusjus.jpg" />
    <meta property="og:url" content="https://www.jusjus.me"/>

</head>

<body>

    <div class="wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col col-lg-6">
                    <section>
                        <div class="content">
                            <h1 class="title">Howdy</h1>
                            <h2 class="sub-title">I'm Justin <i>(aka JusJus)</i></h2>
                            <p>
                                I am a self taught Software Engineer with a little bit of help from college.
                                I have experience in managing and developing minecraft networks, and backend systems for them.
                                Beginning to work on professional level since April, 2014 <i>(The first version of Spigot)</i>.
                                <br><br>
                                I am mostly working on designing websites for clients or working on Java Projects.
                                I've met amazing people since I've become a programmer.
                                I am always excited to work on new features.
                            </p>

                            <a class="btn social-button" href="https://github.com/jusjus112" target="_blank">
                                <i class="fab fa-github"></i>
                            </a>
                            <a class="btn social-button" href="https://github.com/jusjus112" target="_blank">
                                <i class="fab fa-linkedin"></i>
                            </a>
                        </div>
                    </section>
                </div>
                <div class="col col-lg-6">
                    <div class="triangles">
                        <div class="triangle"></div>
                        <div class="triangle"></div>
                    </div>
                    <section class="transparent section">
                        <div class="content">
                            <h1 class="title">Best Skills</h1>
                            <p>
                                Three of my best skills I've achieved over the years of programming.
                            </p>

                            <div class="row">
                                <div class="col col-lg-12">
                                    <div class="row skill-section">
                                        <div class="col col-lg-3 skill-icon">
                                            <i class="fab fa-java"></i>
                                        </div>
                                        <div class="col col-lg-9 skill-content">
                                            <h2>Java</h2>
                                            <p>
                                                Creating and managing backend systems using the Spigot library since 2014.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-12">
                                    <div class="row skill-section">
                                        <div class="col col-lg-3 skill-icon">
                                            <i class="fas fa-code"></i>
                                        </div>
                                        <div class="col col-lg-9 skill-content">
                                            <h2>Web Development</h2>
                                            <p>
                                                Creating awesome websites like this one.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col col-lg-12">
                                    <div class="row skill-section">
                                        <div class="col col-lg-3 skill-icon">
                                            <i class="fas fa-code"></i>
                                        </div>
                                        <div class="col col-lg-9 skill-content">
                                            <h2>Linux Kernel</h2>
                                            <p>
                                                Managing dedicated servers and setting up firewalls, java programs, apache servers, webservers, and more.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>

    <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
    <script>
        window.ga = function () { ga.q.push(arguments) }; ga.q = []; ga.l = +new Date;
        ga('create', 'UA-XXXXX-Y', 'auto'); ga('set', 'anonymizeIp', true); ga('set', 'transport', 'beacon'); ga('send', 'pageview')
    </script>
    <script src="https://www.google-analytics.com/analytics.js" async></script>
</body>

</html>
