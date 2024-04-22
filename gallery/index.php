<?php  require '../display.php'; $DisplayFunction -> GoHome_set(1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>盼掌 - 殷</title>
    <?php  $DisplayFunction -> headWrite()?>
  
    <style>
        :root {
        }
    </style>

</head>
<body>
    
    
<?php $DisplayFunction -> navBar(); $DisplayFunction -> MwolfKillerBG();?>




<?php

  $UsePrint = [
    ['1110420瀞吾.png','累','content'],
    ['利特族的夜晚.png','煩','content'],
    ['1110420瀞吾.png','討厭','content'],
    ['利特族的夜晚.png','為甚麼','content'],
    ['1110420瀞吾.png','他們','content'],
    ['利特族的夜晚.png','這麼噁心','content'],
    ['1110420瀞吾.png','我恨這一切','content'],
    ['利特族的夜晚.png','我要休息','content'],
    ['1110420瀞吾.png','Title','content'],
    ['利特族的夜晚.png','Title','content'],
    ['1110420瀞吾.png','Title','content'],
    ['利特族的夜晚.png','Title','content'],
  ];

  

  function WriteTest($arr){
    $ForReturn ='';
    foreach ($arr as $key => $value) {
      
    $ForReturn .= "
        <div class=\"GalleryPain\">
          <div class=\"ImgBox\" style=\"background-image: url('../media/gallery/$value[0]');\"></div>
          <div><h3>$value[1]</h3></div>
        </div>
      
      ";
    }
    echo "<div id=\"GalleryPainWindow\">$ForReturn</div>";
  }


?>

<div id="PageDisplay">
  


<div id="LandPangeMakerBrief">
    <div class="ImgBox"></div>
    <div class="TextBox">
        <h2>音狼哈勒</h2>
        <div class="line"></div>
        <p id="TalkingToUser">設計系出身，做了約一年多的平面設計<br>後續認為以工作的定位而言不太適合自己<br>轉而學習編碼的網頁工程師</p>
    </div>
</div>


<div id="Gallery">
  <button type="button" class="btn btn-outline-light">AAA</button>
  <button type="button" class="btn btn-outline-light">AAA</button>
  <button type="button" class="btn btn-outline-light">AAA</button>
  <button type="button" class="btn btn-outline-light">AAA</button>
</div>


<?php WriteTest($UsePrint);?>


</div>


<!-- 

浮空按鈕
 
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Launch demo modal
</button>



浮空按鍵

<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <button type="button " class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      <div class="modal-body">
        嘿
      </div>
    </div>
  </div>
</div> -->



</body>



<?php $DisplayFunction -> footer() ?>
</html>