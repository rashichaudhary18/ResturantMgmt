<!DOCTYPE html>
<html>
<head>
	<title>Nonu Resturant | Book a Table</title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <style>
     body
    {
      background-color: #f2fce3;
    }
     a 
  {
        color:grey;
  }
  a:hover
  {
    color: white;
    text-decoration: none;
  }
  </style>
</head>
<body>

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
    </nav>
       <br>

       <h3 style="text-align: center;">Book A Table</h3>
             <br>
       <div class="container">
       	<div class="row">
       		<div class="col-sm-6">
            <form action="#" method="post"><br><br><br><br><br>
    <div class="form-group">
      <input type="name" class="form-control" id="name" placeholder="Enter your full name" name="name" style="background-color: #f2fce3;">
    </div>

    <div class="form-group">
      <input type="email" class="form-control" id="email" placeholder="Enter your email" name="email" style="background-color: #f2fce3;">
    </div>

    <div class="form-group">
      <input type="number" class="form-control" id="number" placeholder="Enter your mobile number" name="number" style="background-color: #f2fce3;">
    </div>

    <div class="form-group">
      <input type="people" class="form-control" id="people" placeholder="Enter number of people" name="people" style="background-color: #f2fce3;">
    </div>

    <div class="form-group">
      <input type="date" class="form-control" id="date" placeholder="06-june-2020" name="date" style="background-color: #f2fce3;">
    </div>

     <div class="form-group">
      <input type="time" class="form-control" id="time" placeholder="select time" name="time" style="background-color: #f2fce3;">
    </div>

    <div class="form-group">
      <input type="text" class="form-control" id="text" placeholder="Any special request ?" name="text" style="background-color: #f2fce3;">
    </div>

    <button type="submit" name="btn" class="btn btn-primary">Book</button>
  </form>
      </div>
       		<div class="col-sm-6">
            <br>
       			  <img src="Book-a-table.jpg" width="800" height="600">
       		</div>
       	</div>
       </div>
       <br>
           <br>

           <?php
// if($_SERVER["REQUEST_METHOD"]=="POST")
if(isset($_POST["btn"]))
{
  $name=$_POST["name"];
  $email=$_POST["email"];
  $number=$_POST["number"];
  $people=$_POST["people"];
  $date=$_POST["date"];
  $time=$_POST["time"];
  $text=$_POST["text"];
  $conn=mysqli_connect("localhost:3306","root","","restaurant");   
  if($conn)
  {
    $sql="insert into book(name,email,number,people,date,time,text)values('$name','$email','$number','$people','$date','$time','$text')";
    if(mysqli_query($conn,$sql))
    {
       $msg="Thank you, your table is booked successfully"; 
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