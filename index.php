<?php  require 'display.php'; $DisplayFunction->GoHome_set(0); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>盼掌 - 殷</title>
    <?php  $DisplayFunction->headWrite()?>
    <style>
    </style>

</head>
<body>





    
    
<?php $DisplayFunction->navBar(); $DisplayFunction->MwolfKillerBG();?>


<div id="PageDisplay">


<div id="LandPangeMakerBrief">
    <div class="ImgBox"></div>
    <div class="TextBox">
        <h2>音狼哈勒</h2>
        <div class="line"></div>
        <div class="TalkTextBox"><p id="TalkingToUser"></p></div>
    </div>
</div>
<!-- 設計系出身，做了約一年多的平面設計<br>後續認為以工作的定位而言不太適合自己<br>轉而學習編碼的網頁工程師 -->

<?php
/*這個是當時單純想用來測SQL用的
$pdo = new PDO('mysql:host=localhost;dbname=shop;charset=utf8','staff','password');
print_r($pdo->query('select * from product'));
echo '<br><br>';
foreach ($pdo->query('select * from product') as $key => $value) {
  print_r($value);
}  ;
*/
$PaneArr = [
    ['這是哪裡？','這是用於展示我的作品的網站，目前的規劃是以展示平面及自主創作的內容為用途，同時藉此作為一個簡單的實務專案來給予本網站一個實質意義，給予自己在建製該網站更明確的脈絡。'],
    ['為何會想放棄平面，轉向網頁？','平面的侷限性太高，主觀性太強，他們總是管你「做出他們要的東西」叫成長，甚至要你感激涕零，但不曾想這些東西只有他們要'],
    ['我嘗試做過哪些努力？','目前於一間中小企業任職，公司內僅有我一位網頁設計，為了更好的管理和控制，我在只有html、css、javascript的情況下硬是嘗試用javascript來刻屬於自己的版型(現在想來真的很蠢)，結果完成後才發現它無法被獲取資料，SEO變得一塌糊塗，於是我開始尋找其它替代方案，最後我在多種不一樣的選擇中選上了PHP，於是開始使用它架構模板，也因為各種嘗試，讓我愈發熟悉且擁有了不少種切版的方式和想法，實力已經超出公司所需後，我開始嘗試思考其它方案，我想要成為以網頁為主，設計為輔的工程師，所以又花錢開始學習react.js，嘗試跑一個自己的大型專案，目前正在資料庫和串接API的階段。'],
    ['未來有哪些期許？','從接觸網頁到能刻出自己的模板那一刻時，就蠻希望可以成為一位全端工程師的，這需要投入十分多的資源和時間，也要有好的同伴和老師也因此我才想辦法花錢上課來投資自己，不過我認為更重要的是持續的進步、發展，以及進行更多的專案及創作，這就是為何我會希望可以換工作的原因，創造更多的自我價值，更好的成長和發展。'],
];



WriteLandingPagePane($PaneArr);

function WriteLandingPagePane($arr){
    $var = 0;$ForReturn = '';$jsCode='';
    foreach ($arr as $key => $value) {
        $jsCode .= "[['$value[1]']],";
        $var++;$varStr = "DropDownPane_".$var;
        $ForReturn .= 
        '
            <div>
                <div class="TextPane">
                    <div><h3>'.$value[0].'</h3></div> 
                    <div data-bs-toggle="collapse" data-bs-target="#'.$varStr.'" aria-expanded="false" aria-controls="'.$varStr.'"></div>
                    <div class="collapse multi-collapse" id="'.$varStr.'"><p>'.$value[1].'</p></div>
                    <div class="talkEventbox" onclick="printSentenceByWord(ToLarnPageTalk['.$key.'])"></div>
                </div>  
            </div>
        ';
    }
    $ForReturn = "<script>var ToLarnPageTalk = [$jsCode];</script>".'<div id="ContentDisplay">'.$ForReturn.'</div>';

    echo $ForReturn;
}
?>



</div>




<script>

  // 测试

</script>



</body>
<?php $DisplayFunction -> footer() ?>
</html>