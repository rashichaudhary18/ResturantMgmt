

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Nonu Resturant | Contact</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
  a 
  {
        color:grey;
  }
  a:hover
  {
    color: white;
    text-decoration: none;
  }
    body
    {
      background-color: #999000;
    }
  </style>
</head>
<body style="background-color:#e6e6e6;">
       <!--nav bar-->
     <nav class="navbar navbar-expand-sm bg-secondary navbar-dark">
      <ul class="navbar-nav">
      <a class="navbar-brand" href="Resturant.html">Nonu Restaurant</a>
      <li class="nav-item active">
        <a class="nav-link" href="#"></a>
        </li>
        <li class="nav-item active">
        <a class="nav-link" href="Resturant.html">Home</a>
        </li>
           <li class="nav-item active">
           <a class="nav-link" href="About.html">About us</a>
           </li>
      <li class="nav-item active">
           <a class="nav-link" href="Breakfast.html">Menu</a>
           </li>
           <li class="nav-item active">
      <a class="nav-link" href="bookTable.php">Book a table </a>
      </li>
      <li class="nav-item active">
      <a class="nav-link" href="Gallery.html">Gallery</a></li>

        <li class="nav-item active">
        <a class="nav-link" href="Blog.html">Blog</a>
        </li>
             <li class="nav-item active">
             <a class="nav-link" href="contact.php">Contact us</a>
             </li>
     </ul>
    </nav><br>
    
   <div class="container">
<div class="row">
 <div class="col-sm-6">
      <h2>Contact Us</h2>
      <p>Are you a food lover? If your answer is yes, then in restaurant for you.<br>
      We serve foods for reasonable prices and good quality. Its awesome, we know.</p>

      <form action="#" method="post">
    <div class="form-group">
      <input type="name" class="form-control" id="name" placeholder="Enter your full name" name="name">
    </div>

    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email">
    </div>

    <div class="form-group">
      <input type="number" class="form-control" id="number" placeholder="Enter your mobile number" name="number">
    </div>

     <div class="form-group">
      <input type="text" class="form-control" id="text" placeholder="Message here..." name="text">
    </div>

    <button type="submit" name="btn" class="btn btn-primary">Send</button>
  </form>
      </div>

      <!-- connectivity -->

    <?php
// if($_SERVER["REQUEST_METHOD"]=="POST")
if(isset($_POST["btn"]))
{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $number=$_POST["number"];
  $text=$_POST["text"];
  $conn=mysqli_connect("localhost:3306","root","","restaurant");   
  if($conn)
  {
    $sql="insert into nonu(name,email,number,text)values('$name','$email','$number','$text')";
    if(mysqli_query($conn,$sql))
    {
       $msg="Thank you for sharing your Details"; 
       echo "<script type='text/javascript'>alert('$msg');</script>";
    }
    else
    {
       $msg="Data not inserted"; 
       echo "<script type='text/javascript'>alert('$msg');</script>";
    }
  }  
  else
  {
     echo "Connection not establish";
  }
}
?>

         
  <div class="col-sm-6">
  <h2 style="margin-top: 20%; margin-left: 5%;">Contact Details</h2>
  <h5 style="margin-left: 5%;">Addess : 402, sch no:48, Vijay nagar square, Indore, Madhya Pradesh, pin code: 452010</h5>
  <h5 style="margin-left: 5%;">Email :nonurestaurant@yahoo.com</h5>
  <h5 style="margin-left: 5%;">Contact : 0731-445522, 9856231478</h5>
  </div></div></div><br>

 <footer class="bg-dark text-white">
            <div class="container">
              <div class="row">
               <div class="col-sm-4" style="text-align:center;">
                 <h2 style="margin-top: 5%;">Menu Links</h2>
                 <ul>
                 <li style="list-style: none;"><a href="Resturant.html">Home</a></li>
                 <li style="list-style: none;"><a href="About.html">About</a></li>
                 <li style="list-style: none;"><a href="Breakfast.html">Menu</a></li>
                 <li style="list-style: none;"><a href="Gallery.html">Gallery</a></li>
                 <li style="list-style: none;"><a href="contact.php">Contact</a></li>
                 <li style="list-style: none;"><a href="Blog.html">Blog</a></li>
               </ul>
              </div>
               
               <div class="col-sm-4" style="text-align:center;">
                 <h2 style="margin-top: 5%;">Support</h2>
                 <ul>
                  <li style="list-style: none;"><a href="termscon.html#Privacy">Privacy Policy</a></li>
                  <li style="list-style: none;"><a href="termscon.html#terms">Terms & Conditions</a></li>
                  <li style="list-style: none;"><a href="termscon.html#order">Order & Pre Order</a></li>
                  <li style="list-style: none;"><a href="termscon.html#refund">Refund Policy</a></li>
                  <li style="list-style: none;"><a href="termscon.html#cancel">Order Cancellation</a></li>
                  <li style="list-style: none;"><a href="termscon.html#policy">Cancellation Policy</a></li>
                  </ul>
               </div>
               <div class="col-sm-4" style="text-align:center;">
                  <h2 style="margin-top: 5%;">Follow Us</h2>
                  
                  <a href="https://www.facebook.com/" class="fa fa-facebook-square" style="font-size:36px;color:grey;"></a>
                  <a href="https://www.instagram.com/accounts/login/" class="fa fa-instagram" style="font-size:36px;color:grey;"></a>
                  <a href="https://login.live.com/" class="fa fa-skype" style="font-size:36px;color:grey;"></a>
                  <a href="https://twitter.com/login?lang=en" class="fa fa-twitter-square" style="font-size:36px;color:grey;"></a>
                  <a href="https://web.whatsapp.com/" class="fa fa-whatsapp" style="font-size:36px;color:grey;"></a>
                  <a href="https://accounts.google.com/signin" class="fa fa-envelope" style="font-size:36px;color:grey;"></a>
               </div>              
             </div>
            </div>
             <div style="text-align:center; ">Copyright 2020 | Web made by Rashi</div>
          </footer>


    </body>
</html>