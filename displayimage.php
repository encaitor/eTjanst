<?php
      session_start();    
       $username = $_SESSION['user'];
?>

<html>
    <body>
      
        <?php
        
      //TESTKOD FÖR HÄMTNING AV BILDER. 
        
         function displayImage(){
                
                $username = $_SESSION['user'];
                
                $mysqli = new mysqli('localhost', 'root', '', 'db-projekt');
                $imgRequest = "2";
                $sql =  "SELECT * FROM user_images WHERE username = '$username'";
                $sth =  $mysqli->query($sql);
                
                $result = mysqli_fetch_array($sth);
                
                echo '<img height="300" width="250" src="data:image/jpeg;base64,'.base64_encode( $result['content'] ).'"/>';
                
                //
                exit;
            }
            displayImage();
        
        ?>
        
    </body>
</html>