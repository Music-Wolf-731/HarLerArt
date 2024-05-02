<?php  require '../display.php'; $DisplayFunction -> GoHome_set(1); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>盼掌 - 殷</title>
    <?php  $DisplayFunction -> headWrite()?>
  

</head>
<body>
    
    
<?php $DisplayFunction -> navBar(); $DisplayFunction -> MwolfKillerBG();?>




<?php

  $UsePrint = [
    ['1110420瀞吾.png','瀞浯','content'],
    ['利特族的夜晚.png','利特族之夜','content'],
    ['113627901_p0.png','夜戰鹿角惡魔','content'],
    ['1130226Naz.png','洞湖','content'],
    ['113627812_p0.png','伯爵情境圖','content'],
    ['02.png','場景嘗試','content'],
    ['01.png','岸邊小屋','content'],
    ['1120706角色設計_2.png','伯爵設定','content'],
    ['113628571_p0.png','橋邊','content'],
    ['113960788_p0.jpg','場景練習','content'],
    ['113628025_p0.png','地下城','content'],
    ['113627962_p0.png','衝突','content'],
  ];

  

  function WriteTest($arr){
    $ForReturn ='';
    foreach ($arr as $key => $value) {

    $jsVar = '';
      
    $ForReturn .= "
        <div class=\"GalleryPain\"".' class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" onclick="DisplayMyImg(\''.$value[0].'\')"'.">
          <div class=\"ImgBox\" style=\"background-image: url('https://wolf-test-box.s3.ap-northeast-1.amazonaws.com/HarlerArt/$value[0]');\"></div>
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


<div class="modal fade" id="exampleModal" aria-hidden="true" aria-labelledby="exampleModalToggleLabel" tabindex="-1">
  <div class="modal-dialog modal-xl">
    <div style="background:var(--Pagebackground);" class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalToggleLabel">Modal 1</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img id="DisplayArtImg" style="width:100%;" src="../media/gallery/1110420瀞吾.png" alt="">
      </div>
      <div class="modal-footer">
        <button class="btn btn-primary" data-bs-target="#exampleModalToggle2" data-bs-toggle="modal">Open second modal</button>
      </div>
    </div>
  </div>
</div>


</body>
<script>
  function DisplayMyImg(Img) {
    var imgElement = document.getElementById('DisplayArtImg');
    imgElement.src = "https://wolf-test-box.s3.ap-northeast-1.amazonaws.com/HarlerArt/"+Img;
  }
</script>


<?php $DisplayFunction -> footer() ?>
</html>