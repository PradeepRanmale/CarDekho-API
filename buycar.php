<?php
$conn = mysqli_connect("localhost","root","","buycar")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>buycar</title>
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
                <li><a href="index.php">Sell car</a></li>
            </ul>
        </nav>
</header>
<main>
    <img class="sellcar" src="sellcar.jpg" alt="sellcar">
        <h1>Buy car on <span>Car</span>Dekho</h1>
        <div class="container">
    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
     BUDGET: <input type="number" name="budget" id="budget" placeholder="Enter your budget">
    <input type="submit">
    </form>

    <?php
    if($_SERVER["REQUEST_METHOD"] == "POST") {
      $budget = htmlspecialchars($_REQUEST['budget']);
      if (empty($budget)){
        echo "Budget is empty";
      }


    }
    if($budget<500000){
        $sql = "SELECT * FROM  buycar where type='economy'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo "</br><li>Name: </li>" . $row["car_name"]. "</br> brand: " . $row["brand"]. " </br>model: " . $row["model"] . "</br>min_cost_price: " . $row["min_cost_price"] . "</br>max_cost_price: " . $row["max_cost_price"] . "</br>type: " . $row["type"] . "</br><button>Buy Now</button>";
              
              
            }
          } else {
            echo "0 results";
          }
    }
    elseif($budget>500001 and $budget<1000000){
        $sql = "SELECT * FROM  buycar where type='budget'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            while($row = mysqli_fetch_assoc($result)) {
              echo "</br><li> Name: </li>" . $row["car_name"]. "</br> brand: " . $row["brand"]. "</br>model: " . $row["model"] . "</br>min_cost_price: " . $row["min_cost_price"] . "</br>max_cost_price: " . $row["max_cost_price"] . "</br>type: " . $row["type"] . "</br><button>Buy Now</button>";
            }
          } else {
            echo "0 results";
          }
    }
    elseif($budget>1000001 and $budget<1500000){
        $sql = "SELECT * FROM  buycar where type='midrange'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo "</br><li> Name: </li>" . $row["car_name"]. "</br> brand: " . $row["brand"]. "</br>model: " . $row["model"] . "</br>min_cost_price: " . $row["min_cost_price"] . "</br>max_cost_price: " . $row["max_cost_price"] . "</br>type: " . $row["type"] . "</br><button>Buy Now</button>"; 
            }
          } else {
            echo "0 results";
          }
    }
    elseif($budget>1500001){
        $sql = "SELECT * FROM  buycar where type='luxary'";
        $result = $conn->query($sql);
        if (mysqli_num_rows($result) > 0) {
            // output data of each row
            while($row = mysqli_fetch_assoc($result)) {
              echo "</br><li> Name: </li>" . $row["car_name"]. " </br>brand: " . $row["brand"]. "</br>model: " . $row["model"] . "</br>min_cost_price: " . $row["min_cost_price"] . "</br>max_cost_price: " . $row["max_cost_price"] . "</br>type: " . $row["type"] . "</br><button>Buy Now</button>"; 
            }
          } else {
            echo "0 results";
          }
    }

    ?>

    
</main>
    <footer class="text-center">
        <p>Copyright &copy; CarDekho.com</p>
    </footer>
</body>
</html>     