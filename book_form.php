<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $name = $_POST["name"];
    $email = $_POST["email"];
    $phone = $_POST["phone"];
    $address = $_POST["address"];
    $location = $_POST["location"];
    $guests = $_POST["guests"];
    $arrivals = $_POST["arrivals"];
    $leaving = $_POST["leaving"];


    // Validate data if needed

    // Update MySQL server credentials
    $servername = "localhost";  // Change this to your MySQL server's host or IP
    $username = "root";
    $password = "";
    $dbname = "book_db";

    // Connect to MySQL server
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Prepare and execute SQL query to insert data into the 'book_form' table
    $sql = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving)
            VALUES ('$name', '$email', '$phone', '$address', '$location', '$guests', '$arrivals', '$leaving')";

    if ($conn->query($sql) === TRUE) {
        echo "Booking submitted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close database connection
    $conn->close();
}
