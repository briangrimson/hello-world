<!DOCTYPE html>
<html>
<head>
<link rel=stylesheet href=css/site.css>

</head>
<body>
<header>
<h1>BRIAN GRIMSON</h1>
    <img class=portrait src=images/me_photo.jpg>

    </header>


    
<main>
<hr>  
    <?php
    $list=array("There is nothing to fear but fear itself - FDR", "Yes we can - Obama", "I'm hungry - Dave");
$random = array_rand($list);

    
    echo
    '<p class=portrait>
        My name is Brian Grimson. I am an artist currently living in the boston area. You can check out my website <a href=www.briangrimson.com>here</a> <br><br><span class=quote>'.$list[$random].'</span></p>'    
    ?>
    
 
    
    <hr>  
    

    
</main>
    
     
     </body>


</html>