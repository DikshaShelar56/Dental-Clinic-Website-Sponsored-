<?php 
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "appointments"; 

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if a delete request has been made
if (isset($_POST['delete'])) {
    $pat_id = $_POST['pat_id'];
    $deleteQuery = "DELETE FROM booked_appoint WHERE pat_id='$pat_id'";
    if (mysqli_query($conn, $deleteQuery)) 
    { echo "<script> alert('Record deleted successfully'); window.location.href = 'fetch_table.php'; </script>"; }
     else { echo "Error deleting record: " . mysqli_error($conn); }
}

// Fetch all records from the database
$query = "SELECT * FROM booked_appoint";
$result = mysqli_query($conn, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($conn));
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Appointments</title>
    <link rel="stylesheet" href="style.css">
   
</head>
<body style="font-family: Arial, sans-serif;

display:inline;
justify-content: center;
align-items: center;
height: 100vh;
margin: 0;">

    <div class="appoint-cont">
        <h2>Booked Appointments</h2>
        <table>
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Phone Number</th>
                    <th>Email Address</th>
                    <th>Date & Time</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($row = mysqli_fetch_assoc($result)) {
                    // Check if 'pat_id' is correctly fetched
                    if (!isset($row['pat_id'])) {
                        die("pat_id not found in the row: " . print_r($row, true));
                    }
                ?>
                <tr>
                    <td><?php echo $row['pat_name']; ?></td>
                    <td><?php echo $row['phn_no']; ?></td>
                    <td><?php echo $row['email']; ?></td>
                    <td><?php echo $row['date_time']; ?></td>
                    <td>
                        <form method="POST" action="">
                            <input type="hidden" name="pat_id" value="<?php echo $row['pat_id']; ?>">
                            <button type="submit" name="delete">Delete</button>
                        </form>
                    </td>
                </tr>
                <?php
                }
                ?>
            </tbody>
        </table>
    </div>

    <!-- Add this to close the HTML body and document properly -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // You can add any JavaScript code here if needed
        });
    </script>
</body>
</html>
