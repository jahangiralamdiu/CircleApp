<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        
        <title>Circle App</title>
        
    </head>
    
    <body>
        
        <form action="index.php" method="GET">
           
            Radius of Circle : <input type="text" name="radiusText"> <input type="submit" name="submitButton" value="Area">
            
        </form>
        
        <?php
        
        require_once 'circle.php';
        
        if(isset($_GET['submitButton']))        
        {
            $a_circle = new Circle();
        
            $a_circle->radius = $_GET['radiusText'];
        
            echo 'The area of circle is : '.$a_circle->get_circle_area();
        }           
        
        ?>
    </body>
</html>
