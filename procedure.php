<!DOCTYPE html>
<html>
<head>
    <title>Get Victim Details</title>
    <style>
        /* Add your custom CSS styles here */
    </style>
</head>
<body>
    <h1>Get Victim Details</h1>
    <form method="post">
        <label for="Victim_FIR">Victim FIR:</label>
        <input type="text" name="Victim_FIR" required>
        <input type="submit" name="submit" value="Get Details">
    </form>

    <?php
    // Check if form is submitted
    if(isset($_POST['submit'])) {
        // Get Victim_FIR from form data
        $Victim_FIR = $_POST['Victim_FIR'];

        // Connect to database

        // Check connection
        include_once("db_connect.php");
        if (mysqli_connect_errno()) {
          echo "Failed to connect to MySQL: " . mysqli_connect_error();
          exit();
        }

        // Call stored procedure to get victim details
        $query = "CALL victim_details('$Victim_FIR')";
        $result = mysqli_query($connect, $query);

        // Check if query was successful
        if($result) {
            // Display victim details
            while($row = mysqli_fetch_assoc($result)) {
                echo "<p>" . $row['victim_details'] . "</p>";
            }
        } else {
            // Display error message if query fails
            echo "<p>Failed to get victim details.</p>";
        }

        // Close database connection
        mysqli_close($connect);
    }
    ?>
</body>
</html>
