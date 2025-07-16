<?php 
    $title = "Received";
    require_once './includes/header.php';
    require_once './db/conn.php';
?>

<?php
If($_SERVER["REQUEST_METHOD"] == "POST"){
    //Create variables for user inputs
        $email = $_POST['email'];
        $address = $_POST['address'];
        $city = $_POST['city'];
        $province = $_POST['province'];
        $area_code = $_POST['area_code'];

	
	//Escape special characters in a string
    $email = mysqli_real_escape_string($conn, $email);
    $address = mysqli_real_escape_string($conn, $address);
    $city = mysqli_real_escape_string($conn, $city);
    $province = mysqli_real_escape_string($conn, $province);
    $area_code = mysqli_real_escape_string($conn, $area_code);

	//Create an SQL INSERT query
    $sql = "INSERT INTO client_info (email, address, city, province, area_code) VALUES ('$email', '$address', '$city', '$province', '$area_code')";

    // Execute the query and check for success
    if (mysqli_query($conn, $sql)) {
    echo "Record added successfully!";
        } else {
            echo "Error: " . mysqli_error($conn);
        }
}
?>

<?php 
    require_once './includes/footer.php';
 ?>
