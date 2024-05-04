<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<style>
    .container{
        min-height: 100vh;
    }
</style>
    <title> Welcome to Farms-Discuss Forum</title>
</head>

<body>
    <?php include 'partials/_dbconnect.php';?>
    <?php include 'partials/_header.php';?>

   
   
    <!-- Search results -->
     <div class="container my-3">
         <h1 py-2>Search results for <em>"<?php echo  $_GET['Search'] ?>"</em></h1>
         
         <?php
             $query = $_GET["Search"];
             $sql = "SELECT * FROM threads where match (thread_title, thread_desc) against ('$query')"; 
             $result = mysqli_query($conn, $sql);
             while($row = mysqli_fetch_assoc($result)){
                   $title = $row['thread_title'];
                   $desc = $row['thread_desc'];
                   $thread_id = $row['thread_id'];
                   $url = "thread.php?threadid=". $thread_id;
                     
        // Display search results--
          echo '<div class="result">
                    <h3> <a href="/categories/qqq" class="text-dark">' . $title. '</a></h3>
                    <p>' . $desc . '</p>
                </div>';
  
           }
        ?>

    
    <div class="result">
    <h3> <a href="/categories/qqq" class="text-dark">Cannot install pyaudio</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti hic excepturi voluptates corrupti similique voluptatibus dolor in veritatis ab rerum voluptate, dolorem assumenda vitae! Maiores ut similique quod expedita? Sed voluptate illo odio mollitia laboriosam vero, praesentium id facilis neque recusandae blanditiis quia sequi nisi? Reiciendis animi.</p>
    </div>
    <div class="result">
    <h3> <a href="/categories/qqq" class="text-dark">Cannot install pyaudio</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti hic excepturi voluptates corrupti similique voluptatibus dolor in veritatis ab rerum voluptate, dolorem assumenda vitae! Maiores ut similique quod expedita? Sed voluptate illo odio mollitia laboriosam vero, praesentium id facilis neque recusandae blanditiis quia sequi nisi? Reiciendis animi.</p>
    </div>
    <div class="result">
    <h3> <a href="/categories/qqq" class="text-dark">Cannot install pyaudio</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti hic excepturi voluptates corrupti similique voluptatibus dolor in veritatis ab rerum voluptate, dolorem assumenda vitae! Maiores ut similique quod expedita? Sed voluptate illo odio mollitia laboriosam vero, praesentium id facilis neque recusandae blanditiis quia sequi nisi? Reiciendis animi.</p>
    </div>
    <div class="result">
    <h3> <a href="/categories/qqq" class="text-dark">Cannot install pyaudio</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti hic excepturi voluptates corrupti similique voluptatibus dolor in veritatis ab rerum voluptate, dolorem assumenda vitae! Maiores ut similique quod expedita? Sed voluptate illo odio mollitia laboriosam vero, praesentium id facilis neque recusandae blanditiis quia sequi nisi? Reiciendis animi.</p>
    </div>
    v<div class="result">
    <h3> <a href="/categories/qqq" class="text-dark">Cannot install pyaudio</a></h3>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Deleniti hic excepturi voluptates corrupti similique voluptatibus dolor in veritatis ab rerum voluptate, dolorem assumenda vitae! Maiores ut similique quod expedita? Sed voluptate illo odio mollitia laboriosam vero, praesentium id facilis neque recusandae blanditiis quia sequi nisi? Reiciendis animi.</p>
    </div>
     </div>




    <?php include 'partials/_footer.php';?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>