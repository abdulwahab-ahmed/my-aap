<?php 

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200&display=swap" rel="stylesheet">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>upload video</title>
    <link rel="stylesheet" href="main.css"> 

    <?php 
    include ('inc/config.php');
    $subject = '';
    $titel = '';
    
    if(isset($_POST['subject'])){
        $subject = $_POST['subject'];
    }
    if(isset($_POST['titel'])){
        $titel = $_POST['titel'];
    }
    if(isset($_POST['but_upload'])){
        $maxsize = 5242880;
        $name = $_FILES['file']['name'];
        $target_dir= 'videos/';
        $location=$target_dir . $_FILES ['file']['name'];
        $video_file_tybe = strtolower(pathinfo($location, PATHINFO_EXTENSION ));
        $extenton_arr = array("mp4","mpeg","avi","3pg");
        if(in_array($video_file_tybe,$extenton_arr)){
            if(($_FILES ['file']['size'] >= $maxsize) || ($_FILES['file']['size']==0)){
                echo "<center><h3 class='filed'>حجم الملف كبير جداً يجب ان يكون أقل من 5 ميجا بيت</h3></center>";
            }
            else{
                if(move_uploaded_file($_FILES ['file']['tmp_name'],$location)){
                    $query ="INSERT INTO videos(name,location,subject,Title) 
                             VALUES('".$name."','".$location."','".$subject."','".$titel."') ";
                    mysqli_query($con,$query);
                    echo "<center><h3 class='succes'></h3>تم رفع الفديو</center>";
                }
            }
        }
    }
    ?>

</head>
<body>
    <div class="container">
        <center>
            <img src="image/logo-removebg-preview.png">
        </center>
        <div class="form">
            <form method="post" enctype="multipart/form-data">
                <input type="file" name="file">
                <br>
                <input type="text" name="subject" id="subject" placeholder="اكتب عنوان الفديو">
                <br>
                <input type="text" name="titel" id="titel" placeholder="اكتب وصف الفديو">
                <br>
                <input type="submit" value="رفع الفديو" name="but_upload" >
                <br> 
                <a href="readvideos.php" class="linko" >الرجوع الى التطبيق </a>   

            </form>
        </div>
    </div>
</body>
</html>