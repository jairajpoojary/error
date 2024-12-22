<?php include("connection.php");?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>php crud operations</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
</head>


<body>
    
<div>
    <h2 class="mb-3 text-center">REGISTRATION FORM</h2>
</div>

<div class="container w-50">

<form action="#" method="POST">
    <div class="mb-3 fw-bolder">
        <label for="exampleFormControlInput1" class="form-label">First name</label>
        <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="Enter your name" name="fname">
      </div>


      <div class="mb-3 fw- bolder">
        <label for="exampleFormControlInput2" class="form-label">Last name</label>
        <input type="text" class="form-control" id="exampleFormControlInput2" placeholder="Enter your last name" name="lname">
      </div>



      <div class="mb-3 fw-bolder">
        <label for="exampleFormControlInput3" class="form-label">Password</label>
        <input type="Password" class="form-control" id="exampleFormControlInput3" placeholder="enter your password" name="password">
      </div>




      <div class="mb-3 fw-bolder">
        <label for="exampleFormControlInput4" class="form-label">Confirm password</label>
        <input type="password" class="form-control" id="exampleFormControlInput4" placeholder="confrim your password" name="conpassword">
      </div>




      <div class="mb-3 fw-bolder" >
        <label class="form-label">gender</label>
        <select name="gender">
            <option value="not selected">select</option>
            <option value="Male">Male</option>
            <option value="female">female</option>
          
          </select>
      </div>



      <div class="mb-3 fw-bolder">
        <label for="exampleFormControlInput5" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleFormControlInput5" placeholder="name@example.com" name="email">
      </div>

      <div class="mb-3 fw-bolder">
        <label for="exampleFormControlInput6" class="form-label">phone number</label>
        <input type="number" class="form-control" id="exampleFormControlInput6" placeholder="enter your number" name="phone">
      </div>

      <div class="mb-3 fw-bolder">
        <label for="exampleFormControlInput7" class="form-label">Address</label>
        <textarea type="text" class="form-control" id="exampleFormControlInput7" placeholder="enter your address" name="addr"></textarea>
      </div>
      <div class="form-check">
        <input class="form-check-input" type="checkbox" id="check1" name="option1" value="something" required>
        <label class="form-check-label">i agree terms and condfitions</label>
      </div>
      <div class="d-flex  justify-content-center">
      <button type="submit" class="btn btn-primary " name="register">submit</button>
    </div>
    </form>
   

</div>
</body>
</html>


<?php
  if($_POST['register'])
  {
   $fname = $_POST['fname'];
   $lname = $_POST['lname'];
   $pwd = $_POST['password'];
   $cpwd = $_POST['conpassword'];
   $gender = $_POST['gender'];
   $email = $_POST['email'];
   $phone = $_POST['phone'];
   $address = $_POST['addr'];
   
   $query="INSERT INTO FORM VALUES('$fname','$lname','$pwd','$cpwd','$gender','$email','$phone','$addr');
   $data= mysqli_query($conn,$query)";

   if($data)
   {
    echo "data inserted into database";
   }
   else{
    echo "failed";
   }
  
  }


?>