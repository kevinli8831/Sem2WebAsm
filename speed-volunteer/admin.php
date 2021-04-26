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

$_SESSION['adminStatus']=false;

$dbname="";
$servername="localhost";
$user="root";
$pass="";
$conn=mysqli_connect($servername,$user,$pass);
if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}
echo "Suceesfull connected";



$sql="CREATE DATABASE speedVolunteer";
if(mysqli_query($conn,$sql)) {
    echo "Database created successfully";
    $dbname = "speedVolunteer";
    $conn = mysqli_connect($servername, $user, $pass, $dbname);

    $sql = "CREATE TABLE userinformation(
  name VARCHAR(255) NOT NULL,
  gender CHAR(1) NOT NULL,
  age INT(3) NOT NULL,
  phone INT(8) NOT NULL PRIMARY KEY,
  email VARCHAR (255) NOT NULL
)";

    if (mysqli_query($conn, $sql)) {

        echo "SUcessfully create table userinformation";
    } else {
        echo "Error creating table:" . mysqli_error($conn);
    }



    $sql = "CREATE TABLE event(
id INT(255) PRIMARY KEY AUTO_INCREMENT,
  activitesname VARCHAR (255) NOT NULL,
  games VARCHAR (255) NOT NULL  
)";

    if (mysqli_query($conn, $sql)) {

        echo "SUcessfully create table event";
    } else {
        echo "Error creating table:" . mysqli_error($conn);
    }


    $sql = "CREATE TABLE history(
  id INT(255) PRIMARY KEY AUTO_INCREMENT,
  memberName VARCHAR (255) NOT NULL,
  activites VARCHAR (255) NOT NULL
)";
    if (mysqli_query($conn, $sql)) {

        echo "SUcessfully create table history";
    } else {
        echo "Error creating table:" . mysqli_error($conn);
    }

    $sql = "INSERT INTO userinformation (name,gender,age,phone,email)
VALUES('Andy Ng','M','20','12544262','Andyng@gmail.com')
,('Benson Leung','M','22','56413421','BL123@yahoo.com.hk')
,('Cathy Wong','F','40','54762314','Cathy@gmail.com')
,('Kevin Kwok','M','45','75844523','KKwok@gmail.com')
,('Felix Yu','M','67','68231233','Felixyu@yahoo.com.hk')
,('Ken Tsang','M','10','93141241','KenT@hotmail.com')
,('Eric Wong','M','30','61324145','Eric67@yahoo.com.hk')";

    if (mysqli_query($conn, $sql)) {
        echo "Insert sucessfully userinformation";
    } else {
        echo "Error Insert userinformation:" . mysqli_error($conn);
    }





    $sql = "INSERT INTO history (memberName,activites)VALUES('Andy Ng','Self-management camp 、 Overnight training camp')
,('Benson Leung','Independence camp'),('Cathy Wong','Self-confidence training camp 、 Overnight training camp')
,('Kevin Kwok','Self-confidence training camp 、 Overnight training camp')
,('Felix Yu','Elderly boxing')
,('Ken Tsang','Family camping')
,('Eric Wong','Volunteer for elderly 、 Volunteer for disabilities')";

    if (mysqli_query($conn, $sql)) {
        echo "Insert sucessfully history";
    } else {
        echo "Error Insert data:" . mysqli_error($conn);
    }
    $sql = "INSERT INTO event (activitesname,games)VALUES('Self-management camp','Camp site activities, Meal cooking, Campfire')
,('Independence camp','Adventure activities, Meal cooking, Self-sharing')
,('Self-confidence training camp','Break the ice, Sports, Adventure activities, Campfire')
,('Overnight training camp','Break the ice, Adventure activities, Self-challenging, Campfire')
,('Elderly boxing','Warm up, Boxing')
,('Family camping','Warm up, Family-talk, Family exercise, Water activities')
,('Volunteer for elderly','Talking with elderly, Cooking, Present giving')
,('Volunteer for disabilities','Talk with disabilities, minigame(Sudoku, Get it at once), Making souvenirs')";





    if (mysqli_query($conn, $sql)) {
        echo "Insert sucessfully event";
    } else {
        echo "Error Insert data:" . mysqli_error($conn);
    }



//    $sql="drop DATABASE speedVolunteer";
//    mysqli_query($conn,$sql);
}



if(($_SESSION['admin']!=='admin') || ($_SESSION['password']!=='pass') )
{
    if(!($_SESSION['adminStatus']))
    header("Location: http://localhost/webproject/speed-volunteer/login/");


}

if(($_SESSION['admin']==='admin') && ($_SESSION['password']==='pass')){
    $_SESSION['adminStatus']=true;
}
?>



<?php
// include header
include_once 'includes/header.php';
?>

<title>Admin | <?php echo SITE_TITLE;?></title>
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
