<?php
include 'header.php'; 

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | login</title>
     <!-- css FILES for online bootstarp -->
     <link rel="stylesheet" href="../src/css/bootstrap.css">
    <link rel="stylesheet" href="../src/css/fontawesome.min.css">
    <!-- css FILES for online bootstarp End -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    
    <!-- css FILES style 1 folder por ty admin sob file .. -->
    <link rel="stylesheet" href="../src/scss/style.css"> 
</head>
<body>
       
   <div id="header-post" class="header-post">
    <div class="container">
        <div class="row">
       <div class="col-md-6">
            <h2 class="text-dark mt-4 ml-3">ALL USERS</h2>
       </div>
       <div class="col-md-6">
            <a href="add-user.php" class="btn btn-new1 btn-light mr-3">ADD USER</a>
       </div>
        </div>
        <div class="col-md-12">
            <table class="table-start">
            <thead>
                <th>S.ON</th>
                <th>FULL NAME</th>
                <th>USER NAME</th>
                <th>ROLE</th>
                <th>EDIT</th>
                <th>DELETE</th>
                
            </thead>
            <tbody>
                <tr>
                   <td>1</td>
                   <td>Lorem ipsum</td>
                   <td>Lorem</td> 
                   <td>Admin</td>
                   <td><a href=""><i class="fa fa-edit"></i></a></td> 
                   <td><a href=""><i class="fa fa-trash-o"></i></a></td>    

                </tr>
                <tr>
                  <td>2</td>
                   <td>Lorem ipsum</td>
                   <td>Lorem</td> 
                   <td>Admin</td>
                   <td><a href="update-user.php"><i class="fa fa-edit"></i></a></td> 
                   <td><a href="delete.php"><i class="fa fa-trash-o"></i></a></td>  
                </tr>
                <tr>
                <td>3</td>
                <td>Lorem ipsum</td>
                   <td>Lorem</td> 
                   <td>Admin</td>
                   <td><a href="update-user.php"><i class="fa fa-edit"></i></a></td> 
                   <td><a href="delete.php"><i class="fa fa-trash-o"></i></a></td>   


                </tr>
                <tr>
                <td>4</td>
                <td>Lorem ipsum</td>
                   <td>Lorem</td> 
                   <td>Admin</td>
                   <td><a href="update-user.php"><i class="fa fa-edit"></i></a></td> 
                   <td><a href="delete.php"><i class="fa fa-trash-o"></i></a></td>   

                </tr>
            </tbody>

            </table>
            <ul class='pagination11'>
               <li class="active"><a href="">1</a></li>
               <li><a href="">2</a></li>
               <li><a href="">3</a></li>
            </ul>
       </div>
    </div>
   </div>
   <?php include 'footer.php'; ?>
   
<!-- JS FILES for online bbotstarp -->
 <!-- JS FILES for online bbotstarp -->
 <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js " integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN " crossorigin="anonymous "></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js " integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q " crossorigin="anonymous "></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js " integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl " crossorigin="anonymous "></script>
    <!-- JS FILES for online bbotstarp end -->
     
</body>
</html>
