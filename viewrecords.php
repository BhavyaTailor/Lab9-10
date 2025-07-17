<?php 
    $title = "View Records";
    require_once './includes/header.php';
    require_once './db/conn.php';     	
?>

<?php
    if (isset($_GET['status'])) {
        if ($_GET['status'] == 'deleted') {
            echo '<div class="alert alert-success" role="alert">Record deleted successfully!</div>';
        } elseif ($_GET['status'] == 'error') {
            $errorMessage = isset($_GET['message']) ? htmlspecialchars($_GET['message']) : 'An unknown error occurred during deletion.';
            echo '<div class="alert alert-danger" role="alert">Error deleting record: ' . $errorMessage . '</div>';
        } elseif ($_GET['status'] == 'no_id') {
            echo '<div class="alert alert-warning" role="alert">No record ID was provided for deletion.</div>';
        }
    }
?>


<h1>Records in database</h1>

<?php
    
    $sql = "SELECT * FROM `client_info` WHERE 1";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {

?>

<table class="table table-striped table-bordered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Email</th>
            <th>Address</th>
            <th>City</th>
            <th>Province</th>
            <th>Area Code</th>
            </tr>
    </thead>
    <tbody>
        <?php
        while ($row = mysqli_fetch_assoc($result)) {
        ?>
            <tr>
                <td><?php echo $row['client_id']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['address']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['province']; ?></td>
                <td><?php echo $row['area_code']; ?></td>
                <tr>
                <!-- <td><?php echo $row['id']; ?></td> -->
                
</tr>
            </tr>
        <?php
        }
        ?>
    </tbody>
</table>

<?php
    } else {
        echo "<p>No records found in the database.</p>";
        if (!$result) {
            echo "<p>Error executing query: " . mysqli_error($conn) . "</p>";
        }
    }

    if ($result) {
        mysqli_free_result($result);
    }
?>

<?php 
    require_once './includes/footer.php';
 ?>
