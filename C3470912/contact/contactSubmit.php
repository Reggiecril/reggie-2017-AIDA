
    

<?php
//if submitted collect data
require_once 'init.php';
require_once './function/cleanString.php';
unset($_SESSION['robotCheck']);
if ($_POST['submit']){
    $custName = $_POST['cust'];
    $Email = $_POST['email'];
    $custEnquire = $_POST['txtEnquire'];
    $custAge = $_POST['radAge'];
    $custType = $_POST['typeList'];
    $fldSum = $_POST['fldSum'];
    
    //initialise array to hold error messages
    $error_check = array();
    
    //Get the correct answer to the sum
    $answer = $_SESSION['No1'] + $_SESSION['No2'];
    if($fldSum!=$answer){
        $_SESSION['robotCheck']='Are you a robot, refresh page and try again';
        header('location:index.php?content=contact');
        exit();
    }
    
    
    /*check each value entered for validity and sanitize
     *If an error is found save an error message in the error_check array
     */
    if (!empty($custName)){
        if(ctype_alpha($custName)){
        $custName = cleanString($custName);
        }else{
        $error_check['name'] = 'Name must be alphabetic characters only';
        }
    } else {
        $error_check['name'] = 'Please enter your name';
    }
    if (!empty($Email)){
        $Email = cleanString($Email);
        if (!filter_var($email,FILTER_VALIDATE_EMAIL)){
            $error_check['email'] = 'Please enter a valid email address';
        }
    }else{
        $error_check['email'] = 'Please enter your email';
    }
    
    if (!empty($custEnquire)) {
        $custEnquire = cleanString($custEnquire);
    } else {
        $error_check['enquiry'] = 'Please enter an enquiry';
    }
    if (empty($custAge)){
        $error_check['age'] = 'Please select an age range';
    }
    if ($custType == 'Please select'){
        $error_check['type'] = 'Please select a type';
    }
    //Have any errors been identified?
    
    if (empty($error_check)) {
        /*no errors detected so set appropriate sessions to store user entry
         *and relocate to sending page with success message
         */
        $_SESSION['cust'] = $custName;
        $_SESSION['email'] = $Email;
        $_SESSION['enquiry'] = $custEnquire;
        $_SESSION['type'] = $custType;
        $_SESSION['age'] = $custAge;
        $_SESSION['message'] = 'Thank you for your enquiry';
        //Send email rom live site
        //$to      =$Email;
        //$subject =$custType;
        //$message =$custEnquire;
        //$headers = 'From: reggie@gmail.com' . "/r/n" .
        //          'Reply-To: reggie@gmail.com' . "/r/n" .
        //          'X-Mailer: PHP/' . phpversion();
        
        
        //mail($to, $subject, $message, $headers);
        
        header('location:index.php?content=contactForm');
    }else{
        /*errors detected so set appropriate sessions to store user entry
         *and relocate to sending page with error message
         */
        $_SESSION['cust'] = $custName;
        $_SESSION['email'] = $Email;
        $_SESSION['enquiry'] = $custEnquire;
        $_SESSION['type'] = $custType;
        $_SESSION['age'] = $custAge;
        $_SESSION['errors'] = $error_check;
        $_SESSION['message']='There were errors in your submission, please correct their errors.';
        header('location:index.php?content=contactForm');
    }
    
}

?>