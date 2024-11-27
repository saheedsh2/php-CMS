<?php
error_reporting();
include('connection.php');

$fname = $_POST['fname'];
$mname = $_POST['mname'];
$lname = $_POST['lname'];
$email = $_POST['email'];
$gender = $_POST['gender'];
$phone1 = $_POST['phone1'];
$phoneII = $_POST['phoneII'];
$title = $_POST['title'];

$state = $_POST['state'];
$lga = $_POST['lga'];

$position = $_POST['position'];
$certificate = $_FILES['certificate']['name'];
$cv = $_FILES['cv']['name'];
$other = $_FILES['other']['name'];


$target="upload/profiles/$fname.$lname/".basename($_FILES['certificate']['name']);
$lic="upload/profiles/$fname.$lname/".basename($_FILES['cv']['name']);
$ind="upload/profiles/$fname.$lname/".basename($_FILES['other']['name']);




$ext=pathinfo($target,PATHINFO_EXTENSION);
$ext_cv=pathinfo($lic,PATHINFO_EXTENSION);
$ext_other=pathinfo($ind,PATHINFO_EXTENSION);



if($ext!="jpg" && $ext!="jpeg" && $ext!="png"){
    echo "Your Certificate Upload must be JPG, JPEG Or PNG files";
}

else if($ext_cv!="pdf"){
    echo "Your CV Upload Must Be PDF files";
}

else if($ext_other!="jpg" && $ext_other!="jpeg" && $ext_other!="png"){
    echo "You Other Uploads Must be JPG,JPEG and PNG files";
}


else if($_FILES['certificate']['size']>15000000000){
    echo "File Size Too Large";
}

else if($_FILES['cv']['size']>15000000000){
    echo "File Size Too Large";
}

else if($_FILES['other']['size']>15000000000){
    echo "File Size Too Large";
}


else if(file_exists($target)){
    echo "File Uploaded Alreaded";
}


else if(file_exists($lic)){
    echo "File Uploaded Alreaded";
}

else if(file_exists($ind)){
    echo "File Uploaded Alreaded";
}




else{
    
    $search = "SELECT * FROM applications WHERE email='$email'";
    $query = mysqli_query($conn,$search);
    $row = mysqli_fetch_assoc($query);
    $existemail = $row['email'];
    
    if($existemail == $email){
        echo "Email Exists";
    }
    else{
    
    
    
    $sql = "INSERT into applications (fname, mname, lname, email, gender, phone1, phoneII, state, lga, position, certificate, cv, other)
     values ('$fname', '$mname', '$lname', '$email', '$gender', '$phone1', '$phoneII', '$state', '$lga', '$position',  '$certificate', '$cv', '$other')";

     if(mysqli_query($conn, $sql)){
         
        
        $target="upload/profiles/$fname.$lname/";
        $lic="upload/profiles/$fname.$lname/";
        $ind="upload/profiles/$fname.$lname/";
        mkdir($target, 0777, true);
        mkdir($lic, 0777, true);
        mkdir($ind, 0777, true);
        
        $first = move_uploaded_file($_FILES['certificate']['tmp_name'], "upload/profiles/$fname.$lname/".$_FILES['certificate']['name']);
        
        $second = move_uploaded_file($_FILES['cv']['tmp_name'], "upload/profiles/$fname.$lname/".$_FILES['cv']['name']);
        
         $third = move_uploaded_file($_FILES['other']['tmp_name'], "upload/profiles/$fname.$lname/".$_FILES['other']['name']);
         
        if($first && $second && $third )
        {
    
            
             echo "Application Submitted. Successful Candidates will be Contacted By Phone";
             
             
        ?>
        <script>
        
         setTimeout(function(){
            window.location.href = 'http://nasc.fmckeffi.gov.ng/register.php';
         }, 800);
        </script>
        
        
        <?php
        
                include('Mail.php'); // includes the PEAR Mail class, already on your server.
        
        $username = 'recruitments@fmckeffi.gov.ng'; // your email address
        $password = 'P@55w0rd1234@'; // your email address password
        
        $from = "recruitments@fmckeffi.gov.ng";
        $to = $email;
        $subject = "NASC Recruitments";
        $body= "Your Application Was Successfully Submitted. You Will Receive a Phone Call or Email Once You are Successful";
        
        $headers = array ('From' => $from, 'To' => $to, 'Subject' => $subject); // the email headers
        $smtp = Mail::factory('smtp', array ('host' =>'localhost', 'auth' => true, 'username' => $username, 'password' => $password, 'port' => '25')); // SMTP protocol with the username and password of an existing email account in your hosting account
        $mail = $smtp->send($to, $headers, $body); // sending the email
        
        if (PEAR::isError($mail)) {
        echo("<p>" . $mail->getMessage() . "</p>");
        }
        else {
        echo("<p></p>");
        // header("Location: http://www.example.com/"); // you can redirect page on successful submission.
        }
        
        
        
        
        
             
        }
        else {
            echo "Something wrong with your uploads";
            
        ?>
            <script>
         setTimeout(function(){
            window.location.href = 'http://nasc.fmckeffi.gov.ng/register.php';
         }, 5000);
        </script>
        
        <?php
        
        }
       
}





else {
    echo "Something Went Wrong";
}








}
}

?>