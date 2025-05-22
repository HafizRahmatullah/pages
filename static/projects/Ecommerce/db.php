<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce_db";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
?>  -->
<!-- <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ecommerce";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Capture POST data from the checkout form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $cardNumber = $_POST['cardNumber'];

    // Insert into orders table
    $sql = "INSERT INTO orders (name, email, address, card_number) VALUES ('$name', '$email', '$address', '$cardNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "Order placed successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?> -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<?php
include 'db.php'; // Include the database connection script

// Capture POST data from the checkout form
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $cardNumber = $_POST['cardNumber'];

    // Insert into orders table
    $sql = "INSERT INTO orders (name, email, address, card_number) VALUES ('$name', '$email', '$address', '$cardNumber')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>
            document.getElementById('checkoutForm').style.display = 'none';
            document.getElementById('thankYouMessage').style.display = 'block';
        </script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

