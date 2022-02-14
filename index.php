<?php
if(isset($_POST['brandname'])){
    $server = "localhost";
    $username = "root";
    $password = "";

    $con = mysqli_connect($server, $username, $password);

    if (!$con){
        die("connection to this database failed due to" . mysqli_connect_error());
    }
    $brandname = $_POST['brandname'];
    $modelname = $_POST['modelname'];
    $kmdriven = $_POST['kmdriven'];
    $startingprice = $_POST['startingprice'];
    $endingprice = $_POST['endingprice'];
    $location = $_POST['location'];
    $type = '';
    if($startingprice<=500000){
        $type = "economy";
    }
    elseif($startingprice<=1000000){
        $type = "budget";
    }
    elseif($startingprice<=1500000){
        $type = "midrang";
    }
    else{
        $type = "luxary";
    }



    
    $sql = "INSERT INTO `api` . `api` (`brandname`, `modelname`, `kmdriven`, `startingprice`, `endingprice`, `location`,`type`) VALUES ('$brandname', '$modelname', '$kmdriven', '$startingprice', '$endingprice', '$location','$type');";

    if($con->query($sql) == true){
        echo "successfully inserted";
    }
    else{
        echo "ERROR: $sql <br> $con->error";
    }
    $con->close();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CarDekho</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <nav>
            <div class="logo"><span>Car</span>Dekho</div>
            <ul>
                <li><a href="Home.html">Home</a></li>
                <li><a href="About.html">About</a></li>
                <li><a href="Contact.html">Contact</a></li>
                <li><a href="buycar.php">buy car</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <img class="sellcar" src="sellcar.jpg" alt="sellcar">
        <h1>Sell your car on <span>Car</span>Dekho</h1>
        <div class="container">

            <form action="index.php" method="post">
                <input type="text" name="brandname" id="brandname" placeholder="Enter your Car's Brand Name Here">
                <input type="text" name="modelname" id="modelname" placeholder="Enter your Car's Model Name Here">
                <input type="number" name="kmdriven" id="kmdriven" placeholder="Enter KM's driven">
                <input type="number" name="startingprice" id="startingprice" placeholder="Enter Maximum price expected ">              
                <input type="number" name="endingprice" id="endingprice" placeholder="Enter Minimum price expected ">
                <input type="text" name="location" id="location" placeholder="Enter your location">
                <button class="btn">Submit</button>
            </form>
        </div>

    </main>
    <footer class="text-center">
        <p>Copyright &copy; CarDekho.com</p>
    </footer>
    <script src="index.js"></script>
</body>
</html>
