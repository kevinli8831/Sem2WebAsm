<?php
session_start();
?>
<?php
// include header
include_once 'includes/header.php';
?>

<title>Home | <?php echo SITE_TITLE;?></title>
</head>

<body data-spy="scroll" data-target="#navbar-example">




<?php
// include menu bar
include_once 'includes/nav.php';
?>


<main id="main">

    <div id="login" class="about-area">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center padding-top">
                            <form method="post" action="../admin.php">

                                <label for="username">username</label>
                                <input type="text" id="username" name="username" ><br>

                                <label for="password">password</label>
                                <input type="text" id="password" name="password" ><br>

                                <?php
                                if (isset($msg))
                                echo $msg;
                                ?>
                                <input type="submit" value="submit" style="margin-top: 5px">



                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>





</main>
</body>
</html>

<?php
// include footer
include_once 'includes/footer.php';
?>
