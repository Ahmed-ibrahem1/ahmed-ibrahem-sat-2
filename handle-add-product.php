<?php 

if (isset($_GET['submit'])) {
    
    extract($_GET);

    $errors = [];

    // ProductName ->  required | string | min:5 | max:255
    if (empty($name)) {
        $errors[] = "Product Name is Required";
    } elseif (!is_string($name)) {
        $errors[] = "Product Name Must be String";
    } elseif (strlen($name) < 5 || strlen($name) > 255) {
        $errors[] = "Invaild Length Product Name";
    }

    // Description -> optional | string 
    if (!is_string($description)) {
        $errors[] = "Product Description Must be String";
    }

    // Price -> required | number | min:0 
    if (empty($price)) {
        $errors[] = "Product Price is Required";
    } elseif (!is_numeric($price)) {
        $errors[] = "Product Price Must be Number";
    } elseif ($price < 0) {
        $errors[] = "Product Price Must be grater than 0";
    }

    if (!empty($errors)) {
        $json_str = json_encode($errors);
        header("location:1.php?err=1&&result=$json_str");
    } else {
        $errors[] = "Product Added Successfully";
        $json_str = json_encode($errors);
        header("location:1.php?err=0&&result=$json_str&&price=$price");
    }


}



?>