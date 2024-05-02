 <?php
 
 
$pdo=new PDO('mysql:host=localhost;dbname=harlerart;charset=utf8', 
'staff', 'password');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .editbox{
            display: flex;
        }
        .ImgBox{
            width:300px;height:300px;background-size: cover;
        }
    </style>
</head>
<body>
    <div>
        <div style="width:100%;">
            <div class="ImgBox" style="background-image: url('https://wolf-test-box.s3.ap-northeast-1.amazonaws.com/HarlerArt/1110420瀞吾.png');"></div>
            <div>
                <input type="text">
            </div>
        </div>
    </div>
    
</body>
</html>