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

      <a class="navbar-brand" href="index.php">News@24</a>

    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

      <ul class="nav navbar-nav navbar-right">

        <li><a href="index.php">HOME</a></li>

        <?php


         $hostname="localhost";

         $username="root";

         $password="";

         $db="login1";

         $tb_name="catagori";

         $connect=mysql_connect($hostname,$username,$password) or die ("can not connect");

         $db_connect=mysql_select_db($db) or die ("not connect");

         $query="select*from $tb_name";

         $result=mysql_query($query);

         while($row=mysql_fetch_array($result)){

          $menu=$row['news'];

          ?>

          <li class="active"><a href="category_news.php?menu=<?php echo $menu;?>"><?php echo $menu;?></a></li>


        <?php } ?>


        
          
        
      </ul>
      
      
    </div>

  </div>

</nav>

<div class="container-fluid">

  <div class="row">

    <div class="col-md-9 news_main">

      <ul>

        <?php 



   $hostname="localhost";

   $username="root";

   $password="";

   $db="login1";

   $tb_name="news1";

   $con=mysql_connect($hostname,$username,$password)or die("can not connect");

   $db_connect=mysql_select_db($db) or die ("can not connect database");

   $query="select*from $tb_name  order by id desc limit 0,6";

   $result=mysql_query($query);

   while($row=mysql_fetch_array($result)){

    $id=$row['id'];

    $title=$row['news_title'];

    $short=$row['short_description'];

    $image=$row['image'];
 
    ?>


        <li>

            <h2><a href="news_detail_front.php?id=<?php echo $id;?>"><?php echo $title;?></a></h2>

           
            <img src="images/<?php echo $image;?>"/>

             <p><?php echo $short;?></p>


            <h3><a href="news_detail_front.php?id=<?php echo $id;?>">Read More</a></h3>


        </li>


   <?php } ?>


      </ul>
    </div>

    <div class="col-md-3 latest">

      <ul>

        <?php 



   $hostname="localhost";

   $username="root";

   $password="";

   $db="login1";

   $tb_name="news1";

   $con=mysql_connect($hostname,$username,$password)or die("can not connect");

   $db_connect=mysql_select_db($db) or die ("can not connect database");

   $query="select*from $tb_name order by id desc limit 0,12";

   $result=mysql_query($query);

   while($row=mysql_fetch_array($result)){

    $title=$row['news_title'];

    $id=$row['id'];


    ?>


        <li>

           

            <h3><a href="news_detail_front.php?id=<?php echo $id;?>">
              <?php echo $title;?></a></h3>


        </li>


   <?php } ?>


      
    </div>

  </div>

  </div>

 
  <footer>

  <div class="wrap-footer zerogrid footer">

    <div class="row block09">

      <div class="col-1-4">

        <div class="wrap-col">

          <div class="box">

        

            <div class="content content_footer">

              <ul>

                <li>Editor:Md. Shah Dider Alam Chowdhury</li>
                <li>Deputy Editor : Moshiur Rahman Chowdhury</li>
                <li>Email :slhetview24@gmail.com</li>
                <li>Mobile :01616 440 095 (Ad), 01791 567 387 (News)</li>
                <li>Copyright © 2013 - 2016</li>

              </ul>

            </div>

          </div>

        </div>

      </div>

      <div class="col-1-4">

        <div class="wrap-col">

          <div class="box">

            

            <div class="content content_footer2">

              

                <ul>

                <li>Nehar Market, Level-4,</li>
                <li>East Zindabazar, </li>
                <li>Sylhet, Bangladesh</li>
                <li>All Rights Reserved by sylhetview24.com </li>
                <li>Copyright © 2013 - 2016 </li>

              

                </ul>



            </div>

          </div>

        </div>

      </div>

      

      <div class="col-md-4">

        <div class="wrap-col">

          <div class="box">

           

            <div class="content content_img">

              <a class="navbar-brand" href="index.php">News@24</a>

            </div>

          </div>

        </div>

      </div>

    </div>

    
    <div class="row copyright">

      <p>Copyright © 2016 - <a href="#" target="_blank">Humayra Samiha</a> by <a href="#" target="_blank">news24.com</a></p>

    </div>

  </div>

</footer>
 





    
    <script src="js/jquery-1.12.4.min.js"></script>

    <script src="js/bootstrap.min.js"></script>

  </body>

</html>