<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basic Banking System</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
    <?php
        include'connect.php';
    ?>
    <img class="bg" src="img/images.jfif" alt="BackGround" width="100%" style="background-attachment:fixed;">
        <nav>
            <input type="checkbox" id="check">
            <label for="check" class="checkbtn">
                <i class="fas fa-bars"></i>
            </label>
            <label class="logo">Sparks Foundation Bank</label>
            <ul>
                <li><a class="active" href="index.php">Home</a></li>
                <li><a href="viewuser.php">View Customers</a></li>
                
                <li><a href="history.php">Transfer History</a></li>
            </ul>
        </nav>
    <div class="covidnorm">
        <p>!!! Success is not about how much money we have in the bank, but it's about how many peoples' lives we have impacted through it. Success is experienced when we do things which are never done before.!!!</p>
    </div>
    <div class="textarea">
        <p>We are just the bank you need</p>
    </div>
    <br>
    <br>
    <br>
    <div class="logos">
    <ul>
        <li style="margin-left: 500px;"><img src="img/customer.jpg" alt="Add user"></li>        
        <li style="margin-left: 50px;"><img src="img/history.png"   style="width :87%;" alt="History"></li>
    </ul>
    </div>
    <br><br>
    <div class="buttons">
        <ul>
            <li class="link1" style="margin-left: 480px; margin-right: 40px;"><a href="viewuser.php" class="a1"><b>View Customers</b></a></li>            
            <li class="link3"><a href="history.php" class="a3"><b>History</b></a></li>
        </ul>
    </div>
    <br><br><br><br>
    <div class="about">
        <p>
            <b>Growth is real only when it is sustainable and serves the long-term interest of stakeholders. An aspiration for accelerated and sustained growth paved the way for the merger of erstwhile Sparks Bank Ltd and erstwhile Capital First Ltd on December 18, 2018. Thus, a new bank with a new DNA was born – Sparks Bank. The merger is a milestone in the history of the two institutions and marks the end of one journey and beginning of a new one.</b>
        </p>
    </div>   
    
    <footer id="index">
        <p>&copy 2021. Made by <b>Yuvaraj KN</b><br>THE SPARKS FOUNDATION</p>
    </footer>
</body>
</html>
