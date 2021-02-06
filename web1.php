<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Login Form</title>
    <style>
        .error {color:#FF0000;}
    </style>
</head>
<body align = "center">
<?php
    $enteridErr = $enternameErr = $genderErr = $selectlanguageErr = $enteraddressErr = $selectcourseErr = "";
    $enterid = $entername = $selectlanguage = $enteraddress = $gender = $selectcourse = "";
    if($_SERVER["REQUEST_METHOD"] == "POST") {
        if (empty($_POST["enterid"])) {
            $enteridErr = "Name is required";
        } else {
            $enterid = test_input($_POST["enterid"]);
            if (!pregmatch("/^[a-zA-Z-']*$/",$enterid)){
                $enteridERR = "Only letters and white spaces are allowed";
            }
        }
        if(empty($_POST["entername"])) {
            $enternameErr = "Name is required";
        } else {
            $entername = test_input($_POST["entername"]);
               }
        if(empty($POST["enteraddress"])) {
            $enteraddress = "Address is required";
        } else {
            $enteraddress = test_input($_POST["enter address"]);
        }
        if(empty($_POST["gender"])) {
            $genderErr = "Gender is required";
        } else {
            $gender = test_input($_POST["gender"]);
        }
        if(empty($_POST["selectlanguage"])) {
            $selectlanguageErr = "please select language";
        } else {
            $selectlanguage = test_input($_POST["selectlanuage"]);
        }
        }


    function test_input($data) {
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }
?>

    <h1>PHP Form Validation</h1>
    <p span class = "error">* required field</span></p>
    <form action = "./web1.py" method="post" >
    <!-- "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" -->
    Enter ID:
    <input type = "text" name= "name" value = "<?php echo $enterid ?>">
    <span class = "error">*<?php echo $enteridErr ?> </span>
    <br><br>
    Enter Name:
    <input type= "text" name = "name" value = "<?php echo $entername ?>">
    <span class = "error">*<?php echo $enternameErr ?> </span>
    <br><br>
    Enter Address:
    <input type = "text" name = "address" value = "<?php echo $enteraddress ?>">
    <span class = "error">*<?php echo $enteraddressErr ?> </span>
    <br><br>
    Gender:
    <input type = "radio" name = "gender" value = "<?php echo $gender ?>">Male
    <span class = "error">*<?php echo $genderErr ?> </span>
    <input type = "radio" name = "gender" value = "<?php echo $genderErr ?>">Female
    <span class = "error">*<?php echo $genderErr ?> </span><br><br>
    Select Language:
    <input type = "radio" name = "language" value = "<?php echo $selectlanguage ?>">Hindi
    <span class = "error">*<?php echo $selectlanguageErr ?></span>

    <input type = "radio" name = "language" value = "<?php echo $selectlanguage ?>">English


    <input type = "radio" name = "language" value = "<?php echo $selectlanguage ?>">Telugu
    <br><br>
    <lable for = "course">Course:</lable>
    <select id = "course">
    <option value = "CSC">CSC</option>
    <option value = "IT">IT</option>
    <option value = "EEE">EEE</option>
    </select><br><br>
    <input type = "submit" name = "submit" value = "submit">
    <!-- $submit = shell_execute("py web1.py") -->
</form>
<!-- <button type="button"
onclick="document.getElementById('demo').innerHTML = Date()">
Click me to display Date and Time.</button>


</body>
</html>