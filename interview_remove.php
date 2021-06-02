<?php
include 'config.php';
// Make sure an ID was passed
if(isset($_GET['id'])) {
// Get the ID
    $id = intval($_GET['id']);
 
    // Make sure the ID is in fact a valid ID
    if($id <= 0) {
        die('The ID is invalid!');
    }
    else {
        // Connect to the database
        /*$dbLink = new mysqli('127.0.0.1', 'user', 'pwd', 'myTable');
        if(mysqli_connect_errno()) {
            die("MySQL connection failed: ". mysqli_connect_error());
        }*/
 
        // Fetch the file information
        $query = "DELETE FROM interview WHERE `id` = {$id}";
        $result = $mysqli->query($query);
 
        if($result) {
            // Make sure the result is valid
echo "
<script type=\"text/javascript\">
alert('Removed data successfully');
window.top.location = 'admin-announcement.php';
</script>
";
		}
        else {
            echo "Error! Query failed: <pre>{$mysqli->error}</pre>";
        }
        @mysqli_close($mysqli);
    }
}
else {
    echo 'Error! No ID was passed.';
}
?>