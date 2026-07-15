<?php
$conn = mysqli_connect("localhost", "root", "", "pre_sales_db");
if(!$conn){
    die("Connection failed");
}
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$email_address = $_POST['email'];
$phone_number = $_POST['number'];
$date_of_inquiry = $_POST['date'];
$product = $_POST['product_interest'];
$questions = $_POST['questions'];
$method = $_POST['method'];
$customer_name = $fname . "" . $lname;
$sql = "INSERT INTO presales_inquiry_form(customer_name, email_address, 
phone_number, date_of_inquiry, product_interest, questions, response_method)
VALUES
('$customer_name', '$email_address', '$phone_number', '$date_of_inquiry',
 '$product', '$questions', '$method')"
 mysqli_query($conn, $sql);
 mysqli_close($conn);
 echo "Data saved sucessfully";
 ?>