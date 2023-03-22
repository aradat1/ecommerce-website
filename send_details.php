<html>

<head>

</head>

<body>

    <?php
        $host = "localhost";
        $user = "aradat_user1";
        $pass = 12345;
        $db = "aradat_vintage_shop";
    	

        //create connection
        $conn = new mysqli($host, $user, $pass, $db);
        if ($conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
        }
        echo "Connection successful";
    
        $mobile=$_POST['mobile'];
        $firstName=$_POST['firstName'];
        $lastName=$_POST['lastName'];
        $email=$_POST['email'];
        $city=$_POST['city'];
        $street=$_POST['street'];
        $streetNum=$_POST['streetNum'];
    
    	
    	$sql="INSERT INTO `customers`(`mobile`, `firstName`, `lastName`, `email`, `city`, `street`, `streetNum`) VALUES (".$mobile.",'".$firstName."','".$lastName."','".$email."','".$city."','".$street."',".$streetNum.")";

        if ($conn->query($sql)==FALSE){
            echo "Can not add new customer.  Error is: ".
        		$conn->error;
            exit();
        }
        echo "New customer was added<br>";
        echo "<a href='index.html>Back to Home page</a>";
    

    ?>

    
    
</body>

</html>
