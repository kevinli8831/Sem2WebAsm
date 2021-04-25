<?php
$name =$_POST['name'];
$gender =$_POST['gender'];
$age =$_POST['age'];
$Phone =$_POST['Phone'];
$email =$_POST['email'];
$listOfGame = $_POST['listGames'];



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
        mysqli_query($conn, $sql);
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
        mysqli_query($conn, $sql);
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
        mysqli_query($conn, $sql);
        echo "SUcessfully create table history";
    } else {
        echo "Error creating table:" . mysqli_error($conn);
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

}



$dbname="speedVolunteer";
$conn=mysqli_connect($servername,$username,$password,$dbname);

$sql="INSERT INTO userinformation (name, gender, age, phone, email)VALUES('$name', '$gender','$age','$Phone','$email')";

if(mysqli_query($conn,$sql)){
    echo "Insert sucessfully";
}else{
    echo "Error Insert data:" . mysqli_error($conn);
}
$templistOfGame = implode(" 、 ", $listOfGame);

$sql="INSERT INTO history(memberName,activites)VALUES('$name','$templistOfGame')";

if(mysqli_query($conn,$sql)){
    echo "Insert sucessfully ";
}else{
    echo "Error Insert data:" . mysqli_error($conn);
}



//echo $name;
//echo $gender;
//echo $age;
//echo $Phone;
//echo $email;
//$N = count($listOfGame);
//$temp=json_encode($listOfGame);
//$cars_together = implode(", ", $listOfGame);
//echo $cars_together;







