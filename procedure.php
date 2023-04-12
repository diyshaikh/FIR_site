

<?php
include("db_connect.php")

// Call stored procedure to retrieve form data from database
$sql = mysqli_query($connect, "CALL view_form_data()");
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // Output data of each row
    while($row = $result->fetch_assoc()) {
        $name = $row["name"];
        $email = $row["email"];
        $phone = $row["phone"];
        // Repeat for each field in the form
    }
} else {
    echo "No form data found.";
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>View Form Data</title>
    <style>
        /* Add your CSS styles here */
    </style>
</head>
<body>
    <h1>Form Data</h1>
    <p><strong>Name:</strong> <?php echo $name; ?></p>
    <p><strong>Email:</strong> <?php echo $email; ?></p>
    <p><strong>Phone:</strong> <?php echo $phone; ?></p>
    <!-- Repeat for each field in the form -->
</body>
</html>
