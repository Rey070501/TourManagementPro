 <?php
 include 'connect.php';
 if(isset($_POST['SignUp'])){
    $FirstName=$_POST['fname'];
    $LastName=$_POST['lname'];
    $email=$_POST['email'];
    $password=$_POST['password'];
    $password=md5($password);
    $confirmpassword=$_POST['confirm-password'];

    $checkemail = "SELECT * FROM logins where email='$email'";
    $result=$conn->query($checkemail);
    if($result->num_rows>0){
        header("location:alert.php");
    }
    else{
        $insertquery ="INSERT INTO logins(FirstName,LastName,Email,Password,PhoneNumber,CountOfPeople,Amount)VALUES('$FirstName','$LastName','$email','$password','$confirmpassword','','')";
        if($conn->query($insertquery)==TRUE){
            header("location:index.php");
        }
    }
 }
 if(isset($_POST['SignIn'])){

      $Email=$_POST['Email'];

      $Password=$_POST['Password'];
      $Password=md5($Password);

     $sql="SELECT * FROM logins WHERE Email='$Email' and Password='$Password'";

      $result=$conn->query($sql);

      if($result->num_rows>0)
      {

      session_start();

      $row=$result->fetch_assoc();
      $_SESSION['email']=$row['email'];

        header("Location:homepage.php");
        exit();
       }
       else{
         header("Location:homepage.php");
       }
 }
 if(isset($_POST['Proceedbutton'])){
    $FirstName=$_POST['fname'];
    $Gender=$_POST['Gender'];
    $email=$_POST['email'];
    $Phonenumber=$_POST['Phonenumber'];
    $Place=$_POST['Place'];
    $adress=$_POST['adress'];
    $Totalmember=$_POST['Totalmember'];
    $Amount=$_POST['Amount'];
    

          $insertpayquery ="INSERT INTO payment(Name,Gender,Email,Phonenumber,Place,address,TotalMember,Amount)VALUES('$FirstName','$Gender','$email','$Phonenumber','$Place','$adress','$Totalmember','$Amount')";
        if($conn->query($insertpayquery)==TRUE){
            header("location:index.php");
        }
    
 }
 ?>
