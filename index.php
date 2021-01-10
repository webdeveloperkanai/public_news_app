<!DOCTYPE html>
<html class="no-js" lang="en-US"> 
    <head>
        <meta charset="UTF-8" />
        <meta author="Web Developer Kanai Shil" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="pingback" href="https: //domainname.com/xmlrpc.php" />
        <title>Public News App</title>
        
        
    </head>
    <body>        
        <link rel="stylesheet" type="text/css" href="./style.css" />
        <script src="https://kit.fontawesome.com/02a61f1b20.js" crossorigin="anonymous"></script>
 <div id="container">
    
    <?php for ($i=0; $i < 30 ; $i++) { 
       ?>
    
    <div class="section" id="section0">


    <video controls loop class="cls">
        <source src="./.mp4" type="mp4/media">
    </video>

        <h1> Title  - <?php echo $i ?></h1> 
<div class="social">
    <a href=""><i class="fa fa-facebook"></i></a>
    <a href=""><i class="fa fa-telegram"></i></a>
    <a href=""><i class="fa fa-twitter"></i></a>
    <a href=""><i class="fa fa-share-alt"></i></a>
</div>
            <h4>
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sed optio ratione, suscipit voluptatem voluptates iusto rerum quo aperiam et rem ipsam quidem culpa, modi ad qui magnam id doloribus architecto?
            </h4>


    </div>


 <?php }?>
</div>
        <div class="bottomBar">
                <a href=""><i class="fa fa-home"></i></a>
                
                <a href="" class="fa-X"><i class="fa fa-plus"></i></a>

                <a href=""><i class="fa fa-user"></i></a>
        </div>
        
    </body>
</html>