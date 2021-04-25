<?php

session_start();

// include header
include_once 'includes/header.php';
?>

<head>
    <title>Contact Us | <?php echo SITE_TITLE;?></title>
    <link rel="stylesheet" href="style.css" />
</head>

<body data-spy="scroll" data-target="#navbar-example">

<?php
// include menu bar
include_once 'includes/nav.php';
?>
<main id="main">
    <br/>
    <div class="register-form">
        <br>
        <h2>Application Form</h2>
        <form action="../handlingRegister.php" method="post"  name="register_form" >
            <div class="form-detail">
                <label>Name</label>
                <input type="text"  name="name" value="" >
            </div>
            <div class="form-detail">
                Gender
                <select name="gender">
                    <option value="F">F</option>
                    <option value="M">M</option>
                </select>
            </div>
            <div class="form-detail">
                <label>Age</label>
                <input type="text"  name="age" >
            </div>
            <div class="form-detail">
                Phone number <input type="input"  name="Phone" pattern="[0-9]{8}" placeholder="Enter phone number" >
            </div>
            <div class="form-detail">
                <label for="email">E-mail address</label>
                <input type="email"  id="email" name="email"/>
            </div>
            <div style="padding: 12px 15px">
                <div>List of games</div>
                <input type="checkbox" id="Self-management camp" name="listGames[]" value="Self-management camp">
                <label for="Self-management camp"> Self-management camp</label><br>
                <input type="checkbox" id="Independence camp" name="listGames[]" value="Independence camp">
                <label for="Independence camp"> Independence camp</label><br>
                <input type="checkbox" id="Self-confidence training camp" name="listGames[]" value="Self-confidence training camp">
                <label for="Self-confidence training camp"> Self-confidence training camp</label><br>
                <input type="checkbox" id="Overnight training camp" name="listGames[]" value="Overnight training camp">
                <label for="Overnight training camp"> Overnight training camp</label><br>
                <input type="checkbox" id="Elderly boxing" name="listGames[]" value="Elderly boxing">
                <label for="Elderly boxing"> Elderly boxing</label><br>
                <input type="checkbox" id="Family camping" name="listGames[]" value="Family camping">
                <label for="Family camping"> Family camping</label><br>
                <input type="checkbox" id="Volunteer for elderly" name="listGames[]" value="Volunteer for elderly">
                <label for="Volunteer for elderly"> Volunteer for elderly</label><br>
                <input type="checkbox" id="Volunteer for disabilities" name="listGames[]" value="Volunteer for disabilities">
                <label for="Volunteer for disabilities"> Volunteer for disabilities</label><br>

            </div>
            <div>
                <input type="reset" class="btn" id="reset" value="Reset"/>
                <input type="submit" class="btn" id="btn-submit" value="Submit"/>
            </div>
    </div>
    </form>

    <h1><?php if(isset($_SESSION['login_msg']))
        echo $_SESSION['login_msg'];
         ?>
    </h1>
    <?php
    // include footer
    include_once 'includes/footer.php';
    ?>
</main>
</body>
</html>

<style>

    h2 {
        color: #F7C331;
        text-align: center;
        font-weight: bold;
        padding-top: 50px;
    }

    form, .content {
        width: 40%;
        margin: 0px auto;
        padding: 20px;
        border: 3px solid #F7882F;
        background: white;
        border-radius: 10px 10px 10px 10px;
    }

    .form-detail label {
        display: block;
        text-align: left;
        margin: 3px;
    }

    .form-detail input {
        height: 30px;
        width: 93%;
        padding: 5px 10px;
        font-size: 16px;
        border-radius: 1px;
        border: 1px solid gray;
    }


    .form-detail {
        border-radius: 0;
        box-shadow: none;
        font-size: 16px;
    }

    .form-detail::focus, .register-form textarea::focus {
        background-color: #F7C331;
    }

    .form-detail {
        padding: 12px 15px;
    }

    .btn {
        background: rgba(0, 0, 0, 0) none repeat scroll 0 0;
        border: 1px solid #ccc;
        color: #444;
        font-size: 16px;
        font-weight: 700;
        margin-top: 8px;
        padding: 12px 30px;
        text-transform: uppercase;
        transition: all 0.3s ease 0s;
        border-radius: 30px;
    }

    .btn:hover {
        background-color: #F7C331;
        color: white;
        border: 2px solid white;
    }


</style>