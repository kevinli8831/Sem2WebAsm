<?php
session_start();
if(isset($_POST['username']))
$admin =$_POST['username'];
if(isset($_POST['password']))
$password =$_POST['password'];

if(isset($admin))
$_SESSION['admin']=$admin;
if(isset($password))
$_SESSION['password']=$password;










if(($_SESSION['admin']=='admin') || ($_SESSION['password']!=='pass') )
{
    if(!($_SESSION['adminStatus']))
    header("Location: http://localhost/webproject/speed-volunteer/login/");


}

if(($_SESSION['admin']==='user') || ($_SESSION['password']==='user'))
{

    header("Location: http://localhost/webproject/speed-volunteer/register/");


}
if(($_SESSION['admin']==='admin') && ($_SESSION['password']==='pass')){
    $_SESSION['adminStatus']=true;
}
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

    <div id="admin" class="about-area">
        <div class="overlay">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="section-headline text-center " style="padding-top: 250px;padding-bottom: 250px">
                            <div style="display: flex;justify-content: space-between">
                                <a href="<?php echo BASEURL;?>/userinformation/">User Information</a>
                                <a href="<?php echo BASEURL;?>/event/">event</a>
                                <a href="<?php echo BASEURL;?>/history/">history</a>
                            </div>

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
