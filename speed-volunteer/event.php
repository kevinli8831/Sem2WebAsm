<?php
// include header
session_start();
include_once 'includes/header.php';
?>

<title>Event | <?php echo SITE_TITLE;?></title>
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

  $sql = "SELECT * FROM event"; 

  $stmt = $conn->query($sql);
  $stmt->setFetchMode(PDO::FETCH_ASSOC);

}catch(PDOException $e) {
  die("Could not connect to the database $dbname :" . $e->getMessage());
}

?>



    <div style="padding-top: 100px;padding-bottom: 100px">

    <h1 >
        <center>
            <b style="text-align: center">The event</b>
            <img src="<?php echo BASEURL;?>/assets/img/icons8-print-64.png" onclick="printJS({printable: 'printJS-table', type: 'html', header: 'Event',targetStyle
: 'text-align:left' })" style="cursor: pointer;">

        </center>

    </h1>

        <div style="display: flex;justify-content: center">
    <table border="1" id="printJS-table" >

      <tr >

        <th> id</th>
        <th> activitiesName </th>
        <th> games </th>
      </tr>
          
      <?php while ($row = $stmt->fetch()): ?>
      <tr>         
        <td><?php echo ($row['id']); ?></td>
        <td><?php echo ($row['activitesname']); ?></td>
        <td><?php echo ($row['games']); ?></td>
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

