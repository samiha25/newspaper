<!DOCTYPE html>

<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
   
    <title>Newspaper</title>

   
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <link href="css/style.css" rel="stylesheet">

  
  </head>

  <body>



    <nav class="navbar navbar-default">
  
    <div class="container-fluid">

    <!-- Brand and toggle get grouped for better mobile display -->

    <div class="navbar-header">

      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">

        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>

      </button>

      <a class="navbar-brand" href="admin.php">Admin</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">

        <li class="active"><a href="logout.php">Logout


          (<?php session_start();


         $name=$_SESSION['name']; echo $name;?>)  


         <span class="sr-only">(current)</span></a></li>
        
        
      </ul>
      
      
    </div>

  </div>

</nav>

<div class="container-fluid">

    <div class="row">


         <div class="col-md-3 sidebar">

           <ul>

             <li><a href="#">Sidebar</a></li>
             <li><a href="catagori1.php">Add News Category</a></li>
             <li><a href="catagori_maintain.php">Category Maintain</a></li>
             <li><a href="news_detail.php">Add News Detail</a></li>
             <li><a href="news_detail_maintain.php">News Details Maintain</a></li>

           </ul>

         </div>

          <div class="col-md-9">

             <?php if(isset($_GET['inserted'])){ ?>

              <div class="row">

                <div class="col-md-12">

                   <span  style="color: green;">News Inserted Successfully</span>

                   <br>

                   <br>

                </div>

              </div>
              
              <?php } ?>

            <?php 



   $hostname="localhost";

   $username="root";

   $password="";

   $db="login1";

   $tb_name="news1";

   $con=mysql_connect($hostname,$username,$password)or die("can not connect");

   $db_connect=mysql_select_db($db) or die ("can not connect database");



   ?>
   
   <table class="table table-bordered table-hover">

<tr>

  <th>Id</th>

  <th>Category</th>

  <th>News Title</th>

  <th>Short description</th>

  <th>Image</th>

  <th>Action-----------</th>

</tr>

<?php

$query="select*from $tb_name";

$result=mysql_query($query);

while($row=mysql_fetch_array($result)){
 
  $id=$row['id'];

  $news_title=$row['news_title'];

  $short_description=$row['short_description'];

  $long_description=$row['long_description'];

  $image=$row['image'];

  $category=$row['category'];

  ?>

  <tr>

    <td><?php echo $id;?></td>
     <td><?php echo $category?></td>
    <td><?php echo $news_title;?></td>
    <td><?php echo $short_description;?></td>
    
  
    <td><img class="image" src="images/<?php echo $image?>"/></td>

    <td>

    <a href="news_update.php?id=<?php echo $id;?>">update</a>
      <a href="news_delete.php?id=<?php echo $id;?>">delete</a>
    </td>

  </tr>

  <?php } ?>


   </table>



         </div>

      </div>

    </div>
     




</div>







    
    <script src="js/jquery-1.12.4.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

  </body>

</html>