 <?php include'header.php';   ?>

 <?php  
  $connect = mysqli_connect("localhost", "id14326164_nonurestaurant", "[PODrlP*HOPR$$02", "id14326164_restaurant1com");  
 if(isset($_POST["insert"]))  
 {  
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $name1 = $_POST['name1'];
      $date = $_POST['date'];
      $reviews = $_POST['reviews'];
      $query = "INSERT INTO tbl_images(name,name1,date,reviews) VALUES ('$file','$name1','$date','$reviews')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }  
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
        <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Nonu Resturant | Blog</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  
           <style>
              body
                   {
                      background-color: #f2fce3;
                   }
           </style>
      </head>  
      <body>  
            
           <div class="container" >  
            <br/>
                <h2 style="text-align: center;">"Restaurant Blog Wall"</h2>
                <br />  
                <div class="container mt-3">
                <div class="media border p-3">
                <form method="post" enctype="multipart/form-data">  
                     <input type="file" name="image" id="image" /> 
                      <h4><input type="text" id="name1" name="name1" style="background-color: #f2fce3;"  placeholder="enter name"> <small><i>Posted on 
                     <input type="date" id="date" name="date" style="background-color: #f2fce3;"></i></small></h4><br>

                    <p><textarea id="reviews" name="reviews" row="10" col="10" style="background-color: #f2fce3;" placeholder="reviews" ></textarea> </p>
   
                     <br />  
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />  
                </form>
                </div>
                </div>  
                <br />
                <table class="table table-bordered">  
                      
                <?php  
                $query = "SELECT * FROM tbl_images ORDER BY id DESC";  
                $result = mysqli_query($connect, $query);  
                while($row = mysqli_fetch_array($result))  
                {  
                     echo '  
                       <div class="container mt-3">
                         <div class="media border p-3">
                               <img src="data:image/jpeg;base64,'.base64_encode($row['name'] ).'" height="120" width="200"/>  
                              <div class="media-body" style="margin-left:2%;">
                              <h4>'.($row['name1'] ).' <small><i> Posted on '.($row['date'] ).'</i></small></h4>
                              <p>'.($row['reviews'] ).' </p>
                              </div>
                          </div>
                        </div>  
                     ';  
                }  
                ?>  
                </table>  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  

 <div class="container mt-3">
<div class="media border p-3">
  <img src="khanvi.jpg" class="align-self-center mr-3" style="width:200px;">
  <div class="media-body">
   <h4>Anjali <small><i>Posted on 2020-06-25</i></small></h4>
    <p> Hello, me and my friend visit nonu restaurant and we have placed order for Khandvi. Services is very nice and its too tasty. We have enjoyed much at Nonu Restaurant. I will suggest this place to my friend circle to once visit here.</p>
  </div>
</div>
</div><br>

<div class="container mt-3">
<div class="media border p-3">
  <img src="noodles.jpg" class="align-self-center mr-3" style="width:200px;">
  <div class="media-body">
   <h4>Sanjay <small><i>Posted on 2020-06-19</i></small></h4>
    <p> Hello, me and my college friends visit nonu restaurant and we have placed order for Noodles and Manchuriyan. They serve order is less time and taste is also good. We have enjoyed much at Nonu Restaurant.</p>
  </div>
</div>
</div><br>


<?php  include 'footer.php'; ?>