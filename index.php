<?php require 'display.php';
$DisplayFunction->GoHome_set(0); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>盼掌 - 殷</title>
    <?php $DisplayFunction->headWrite() ?>
    <style>
    </style>

</head>

<body>







    <?php $DisplayFunction->navBar();
    $DisplayFunction->MwolfKillerBG(); ?>


    <div id="PageDisplay">


        <div id="LandPangeMakerBrief">
            <div class="ImgBox"></div>
            <div class="TextBox">
                <h2>音狼哈勒</h2>
                <div class="line"></div>
                <div class="TalkTextBox">
                    <p id="TalkingToUser"></p>
                </div>
            </div>
        </div>
        <!-- 設計系出身，做了約一年多的平面設計<br>後續認為以工作的定位而言不太適合自己<br>轉而學習編碼的網頁工程師 -->

        <?php

        $PaneArr = [
            ['你是誰！不要殺我OAQ！！', '啊！！這.....這是開膛手傑克的主題cosplay啦\',\'我本人很溫和的，真的！！\',\'....嗯，希望你沒有過度恐慌，冒昧的自我介紹一下，我是音狼哈勒，主要興趣是畫圖，也喜歡遊戲、動畫和各類創作，種族是藍毛狼人，看到我染的紫黃雙色頭髮了嗎？\',\'挺顯眼的，我很喜歡，希望你也一樣喜歡uwu'],
            ['這個黑漆麻烏的地方是哪裡？', '這裡是盼掌，嗯...是我取的名字\',\'我喜歡創作，我期盼我的手掌能夠締造無數可能，無論是畫圖也好、編碼也好。\',\'如果可以，我會一點一點的在這邊堆上我的作品，不嫌棄的話可以看看'],
            ['平面不好嗎，怎麼就放棄它了？', '平面不好嗎...確實不好，大家總是覺得他們要的東西很簡單......行吧，也許真的是很簡單\',\'但......在傳達能力不夠好的人身上，再簡單的東西都是一場災難，我非常厭惡一邊猜一邊修一邊被質疑的過程，讓人心力交瘁而又憤愾\',\'而且平面的薪水又低，又沒甚麼翻身的機會，從生活品質到心理健康的角度來看，都無法發展成我想要的生活'],
            ['你說是某個「契機」讓你成為網頁設計的？', '即便漸漸發現平面設計在社會上的存活空間十分狹小\',\'我仍然嘗試認真的以平面設計在社會上掙扎了一兩年\',\'之後我終於撤底放棄時剛好在一間公司任職時兼任了網頁設計公司的窗口，意外發現網頁比想像中有趣得多\',\'在那之後就果斷決定切換方針，開始研習網頁知識了'],
            ['嘗試完後有甚麼感想呢？', '從我決定切換方針後，我發現相比設計我對網頁更加的有熱忱，更加有成就感\',\'我的目標從滿足、盲猜著想誰想要甚麼樣的東西變成了我有沒有能力完成任務\',\'從為了幾像素的差異花上數個小時，變成了幾秒鐘就能將資料快速調用和撤除\',\'版面再大也不會卡頓，不會有輸出問題等等的狀況，每一個字的編碼，都可以變成實質的經驗\',\'每一次的調整和設計，都有再續和發展的可能\',\'甚至它們也可以變成幫助我成長的更快的工具\',\'我每一鍵下所輸出的內容，都充滿意義'],
            ['我嘗試做過哪些努力？', '哈，這會是一個很長~~~~的故事\',\'提醒一下問題旁邊的小方塊可以直接把文本叫出來，就不用看我慢慢說囉\',\'最一開始基本都是全自學，當初甚至還是使用NotePad++，基本沒有任何提示字元\',\'但我還是拼死拼活的寫了一個很破的落地頁，當時還覺得自己用javaScript寫導覽列很神呢....\',\'之後當我換了一份半正式以網頁為主的工作後，就覺得一頁一頁調整html很沒有效益\',\'檔案雜亂無章，維護困難，常常很容易因為一點疏漏就跑版，再花大量的時間去翻找編碼問題\',\'於是當下我使用了我認為最有變化性，能用於渲染的javascript來寫模板，當時在工作空檔嘗試花了快三個月，終於寫成了\',\'在我測試完並興高采烈的將它上架後，我就發現了一個極端致命的問題，爬蟲無法抓取在網頁讀取完後執行的javaScript指令\',\'意思是在所有的搜尋引擎、所有SEO，讀到我的網頁全部都是空白的\',\'這在一個公司展示網站絕對是一個災難級別的結果，只慶幸發現的還算早，對SEO的影響並不大...\',\'接著我就明白用javaScript是完全無法作為渲染工具使用的，於是在我各種查找，確認過伺服器環境後，我鎖定了最安全的選項：PHP\',\'當我開始學習並使用PHP後，就像是發現了新大陸一樣，所有渲染問題全部都有比js簡單數十倍的渲染方式\',\'即使對當時的我來說仍然因為不熟而切編碼切得亂七八糟，但還是成功完成了\',\'使用大量的陣列數據去做渲染，既保證了網頁的維護性，又可以正常被爬蟲搜尋\',\'於是我一邊將公司常態編輯的各種網頁模板化，一邊學習更多的編碼\',\'直到現在，目前工作的內容對我而言已經輕而易舉，有很多的時間可以去鑽研更多的技術了'],
            ['未來有哪些期許？', '我想做全端，我想弄出酷酷的功能性平台\',\'正在努力學習react.js，想製作一個用於商用委託的平台'],
        ];



        WriteLandingPagePane($PaneArr);

        function WriteLandingPagePane($arr)
        {
            $var = 0;
            $ForReturn = '';
            $jsCode = '';
            foreach ($arr as $key => $value) {
                $jsCode .= "[['$value[1]']],";
                $var++;
                $varStr = "DropDownPane_" . $var;

                $ForReturn .=
                    '
            <div>
                <div class="TextPane">
                    <div><h3>' . $value[0] . '</h3></div> 
                    <div data-bs-toggle="collapse" data-bs-target="#' . $varStr . '" aria-expanded="false" aria-controls="' . $varStr . '"></div>
                    <div class="collapse multi-collapse" id="' . $varStr . '"><p>' . str_replace('\',\'', '</p><p>', $value[1]) . '</p></div>
                    <div class="talkEventbox" onclick="printSentenceByWord(ToLarnPageTalk[' . $key . '])"></div>
                </div>  
            </div>
        ';
            }
            $ForReturn = "<script>var ToLarnPageTalk = [$jsCode];</script>" . '<div id="ContentDisplay">' . $ForReturn . '</div>';

            echo $ForReturn;
        }
        ?>



    </div>

    <script>
        let TalkBoxTimeOutIds = [];

        function clearAllTimeouts() {
            TalkBoxTimeOutIds.forEach(id => clearTimeout(id));
            TalkBoxTimeOutIds = [];
        }


        function printSentenceByWord(arr) {
            clearAllTimeouts()
            let AllCount = 0;


            //設置新文字以及渲染等待時間
            function WriteTextList(text, Time) {
                AllCount += Time;
                let timeoutId = setTimeout(() => {
                    ssa.innerHTML += text;
                }, AllCount);
                TalkBoxTimeOutIds.push(timeoutId);
                // console.log(AllCount)
            }

            let ssa = document.getElementById('TalkingToUser');
            let UnFirstPrint = false;
            arr.forEach(OneCircle => {
                ssa.innerHTML = '';
                OneCircle.forEach(str => {
                    if (UnFirstPrint) {
                        WriteTextList("<span></span>", 2000)
                    } else {
                        UnFirstPrint = true
                    }
                    for (let count = 0; count < str.length; count++) {
                        WriteTextList(str.slice(count, count + 1), 30)
                    }
                });
            });
        }

        // 测试
        const arr = [
            ["嗨，你好，難得來了，不妨坐下喝杯茶如何？", "如果沒意外的話，你剛剛看到的那個飄浮的傢伙也是我，來這換了個風格，應該還是免強認得出來吧？", "簡單介紹一下，我是音狼哈勒，多媒體設計出身，做了一段時間的平面後因為一點契機轉行的網頁前端", "但我相信你不會想聽我滔滔不絕，所以我準備了下面這些問題，隨意點點吧，我會盡我所能回答的", "噢，提示一下，問題旁邊的小方格可以直接將文本叫出來，不用看我慢慢講哦"]
        ];
        printSentenceByWord(arr);


        //調整問題div的高度
        function adjustHeight() {
            var contentDisplay = document.getElementById('ContentDisplay');
            var rect = contentDisplay.getBoundingClientRect();
            var distanceFromTop = rect.top + window.scrollY;
            var newHeight = `calc(100vh - ${distanceFromTop}px)`;
            contentDisplay.style.height = newHeight;
        }

        adjustHeight()
        setTimeout(adjustHeight, 100);

        window.addEventListener('resize', setTimeout(adjustHeight, 100));
    </script>



</body>
<?php $DisplayFunction->footer() ?>

</html>