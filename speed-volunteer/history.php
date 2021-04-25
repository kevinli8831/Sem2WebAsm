<?php
// include header
include_once 'includes/header.php';
?>

<title>About Us | <?php echo SITE_TITLE;?></title>
</head>

<body data-spy="scroll" data-target="#navbar-example">

<?php
// include menu bar
include_once 'includes/nav.php';
?>

<?php
// include menu bar
include_once 'includes/nav.php';
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


    <h1><center><b>The record of user information</b></center></h1>

<div style="display: flex;justify-content: center">


    <table border="1">
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