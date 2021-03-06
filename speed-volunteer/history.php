<?php
// include header
session_start();
include_once 'includes/header.php';
?>

<title>History | <?php echo SITE_TITLE;?></title>
</head>

<body data-spy="scroll" data-target="#navbar-example">

<?php
// include menu bar
include_once 'includes/nav.php';
?>

<?php

$dbname="";
$servername="localhost";
$username="root";
$password="";
$conn=mysqli_connect($servername,$username,$password);
if(!$conn){
    die("Connection failed" . mysqli_connect_error());
}
echo "Suceesfull connected";
//$sql="DROP DATABASE speedVolunteer";
//mysqli_query($conn,$sql);

//
//if(mysqli_query($conn, $sql))
//{
//    echo "database success";
//}else {
//    echo "Error creating db:" . mysqli_error($conn);
//}




$sql="CREATE DATABASE speedVolunteer";
if(mysqli_query($conn,$sql)) {
    echo "Database created successfully";
    $dbname = "speedVolunteer";
    $conn = mysqli_connect($servername, $username, $password, $dbname);

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

    $conn = mysqli_connect($servername, $username, $password, $dbname);

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


    $sql = "INSERT INTO history (memberName,activites)VALUES('Andy Ng','Self-management camp ??? Overnight training camp')
,('Benson Leung','Independence camp'),('Cathy Wong','Self-confidence training camp ??? Overnight training camp')
,('Kevin Kwok','Self-confidence training camp ??? Overnight training camp')
,('Felix Yu','Elderly boxing')
,('Ken Tsang','Family camping')
,('Eric Wong','Volunteer for elderly ??? Volunteer for disabilities')";

    if (mysqli_query($conn, $sql)) {
        echo "Insert sucessfully history";
    } else {
        echo "Error Insert history:" . mysqli_error($conn);
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
        echo "Error Insert event:" . mysqli_error($conn);
    }

}
?>




<?php

$servername='localhost';
$username='root';
$password='';
$dbname = "speedVolunteer";

try{
  $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password); 

  $sql = "SELECT * FROM history"; 

  $stmt = $conn->query($sql);
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

}catch(PDOException $e) {
  die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>



   
<div style="padding-top: 100px;padding-bottom: 100px">


    <h1><center>
            <b>The record of user information</b>
            <img src="<?php echo BASEURL;?>/assets/img/icons8-print-64.png" onclick="printJS('printJS-table', 'html')" style="cursor: pointer;">

        </center></h1>

<div style="display: flex;justify-content: center">


    <table border="1" id="printJS-table">
      <tr>
      	<th> id</th>
        <th> memberName </th>
        <th> activities </th>
      </tr>
          
      <?php while ($row = $stmt->fetch()): ?>
      <tr>         
        <td><?php echo ($row['id']); ?></td>
        <td><?php echo ($row['memberName']); ?></td>
        <td><?php echo ($row['activites']); ?></td>
      </tr>
        <?php endwhile; ?>
    </table>


</div>
    <br>
    <div style="text-align: center">
        <a href="<?php echo BASEURL;?>/admin/">Back</a>
    </div>
</div>
</body>

<?php
// include footer
include_once 'includes/footer.php';
?>

  </body>
</html>