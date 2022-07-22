<?php 
include ('inc/config.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qwaran appt</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>    
    <div class="app-video">
        <?php
        $fetchAllvideo = mysqli_query($con,"SELECT * FROM videos ORDER BY id DESC");
        while($row = mysqli_fetch_assoc($fetchAllvideo)){
            $location = $row['location'];
            $subject = $row ['subject'];
            $titel = $row ['Title'];
           echo '<div class="video">';
           echo ' <video src="'.$location.'" class="video-player"></video>';
           echo '  <div class="footer">';
           echo '   <div class="footer-text">';
           echo '   <h3>Abdulwahab Ahmed</h3>';
           echo '    <p class="description"> '.$subject.'</p>';
           echo ' <div class="img-marq">';
           echo '    <a href="upload.php"><img src="image/uparrow_arriba_1538.png"></a>';
           echo '   <marquee>'.$titel.'</marquee>';
           echo '    </div>';
           echo ' </div>';
           echo '  <img src="image/player.png" class="image-playe">';
           echo ' </div>';
           echo ' </div>';
        }
         ?>
    </div>
    <script>
        const videos = document .querySelectorAll('video');
        for (const video of videos){
            video.addEventListener('click',function(){
                if(video.paused){
                    video.play();
                }
                else{
                    video.pause();
                }
            })
        }
    </script>
</body>
</html>

















