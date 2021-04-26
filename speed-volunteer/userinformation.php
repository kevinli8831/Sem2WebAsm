<?php
// include header
session_start();
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

$servername='localhost';
$username='root';
$password='';
$dbname = "speedVolunteer";

try{
  $conn = new PDO("mysql:host=localhost;dbname=$dbname", $username, $password); 

  $sql = "SELECT * FROM userinformation"; 

  $stmt = $conn->query($sql);
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

}catch(PDOException $e) {
  die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>



    <div style="padding-top: 100px;padding-bottom: 100px">

    <h1><center><b>The user information</b></center></h1>
        <div style="display: flex;justify-content: center">
    <table class="center"; border="1">
      <tr>
      	<th> Name</th>
        <th> Gender </th>
        <th> Age </th>
        <th> Phone </th>
        <th> Email </th>
      </tr>
          
      <?php while ($row = $stmt->fetch()): ?>
      <tr>         
        <td><?php echo ($row['name']); ?></td>
        <td><?php echo ($row['gender']); ?></td>
        <td><?php echo ($row['age']); ?></td>
        <td><?php echo ($row['phone']); ?></td>
        <td><?php echo ($row['email']); ?></td>
      </tr>
        <?php endwhile; ?>
    </table>


        </div>
        <br>
        <div style="text-align: center">
            <a href="<?php echo BASEURL;?>/admin/">Back</a>
        </div>
    </div>
    <?php
    // include footer
    include_once 'includes/footer.php';
    ?>

  </body>
</html>



