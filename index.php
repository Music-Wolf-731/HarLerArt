<?php
session_start();
require 'display.php';
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

        <?php { //一般遊客遊覽
            $Welcome = '"嗨，你好，難得來了，不妨坐下喝杯茶如何？", "如果沒意外的話，你剛剛看到的那個飄浮的傢伙也是我，來這換了個風格，應該還是免強認得出來吧？", "簡單介紹一下，我是音狼哈勒，下面有一些我準備的問題，好奇的話可以隨意點點，我會盡我所能回答的", "噢，提示一下，問題旁邊的小方格可以直接將文本叫出來，不用看我慢慢講哦"';

            $PaneArr = [
                ['你是誰！不要殺我OAQ！！', '啊！！這.....這是開膛手傑克的主題cosplay啦\',\'我本人很溫和的，真的！！\',\'....嗯，希望你沒有過度恐慌，冒昧的自我介紹一下，我是音狼哈勒，主要興趣是畫圖，也喜歡遊戲、動畫和各類創作，種族是藍毛狼人，看到我染的紫黃雙色頭髮了嗎？\',\'挺顯眼的，我很喜歡，希望你也一樣喜歡uwu'],
                ['這個黑漆麻烏的地方是哪裡？', '這裡是盼掌，嗯...是我取的名字\',\'我喜歡創作，我期盼我的手掌能夠締造無數可能，無論是畫圖也好、編碼也好。\',\'如果可以，我會一點一點的在這邊堆上我的作品，不嫌棄的話可以看看'],
                ['這裡跟我想的不太一樣', '嗯，這是有可能發生的\',\'這個網站其實有幾個不同的入口，會為每一位進來的人進行標記，每種身份會看到的東西不盡相同\',\'如果你從別人手中拿到這個網址，他的描述卻和你看到的不一樣，那就請他告訴你他是從哪裡點進這個網站的吧，入口相同了，就會標記上一樣的身份的\',\'有空的話之後我會製作能夠讓有標記的人能複製入口網址的按鈕的，在那之前就多擔待一下了，不好意思\',\'ps：如果網站閒置太久沒有刷新的話，標記也會自己消散哦'],
                ['能問的問題是不是太少了？', '噢，這其實有非常深刻的理由的......個屁！！\',\'沒有啦，其實我一開始寫了蠻多問題的，但我發現提到了不少我不想隨意公開的資料，所以就另外寫了個功能把身份隔開了\',\'目前這個網站的內容大多是以工作的角度為主在製作的，當然也只有符合以工作角度進來的人才能看到更多，而供給一般遊客的問題我大多都還沒想好，再等我一陣子吧，ㄟ黑Ow<*'],
            ];
        }

        //公司或求職單位遊覽
        if (isset($_SESSION['Visitor']) && $_SESSION['Visitor'] == 'company') {
            $Welcome = '"嗨，你好，難得來了，不妨坐下.....嗯？", "看起來你不是一般的訪客，是經過特殊通道進來的，是哪間公司的貴客，又或是前輩？", "哈，雖然不太習慣，但我幫你們準備了專屬你們的問題，請隨意點點吧", "一樣，我會盡力回答的uwu"';

            $PaneArr = [
                ['你的東西有點多，能濃縮在這個問題裡回答嗎？', '當然，為了整理比較重點的內容，我會把我認為較為重要的資訊在這裡回答你的~\',\'我是蔡明佑，目前是任職於一間投影機公司的網頁設計，雖然我的工作本身僅僅只要維護網站的基本前端並時刻進行更新，但如你所見，我一直都有在自行進修，學習更多的技術並製作自己的網站\',\'還算是有掌握一些比較常用的html/css/javaScript的知識，並且目前會以PHP去做一些變化或是刻模板進行渲染，學習並使用過MySQL，製作了我的個人線上工具「哈勒筆記」，可以從導覽列看到\',\'至於工作期間製作的各種作品和網站範例除了目前導覽列中的投影距離Demo外，並無其它，主要是因為許多成品是於學習初期做的，加上使用了大量的公司資料，整理出來展示並不合適，就沒有拿出來擺了\',\'目前正在學習react.js，想嘗試在補習班的幫助下製作一個屬於自己的大型專案，並且在過程中學習一些業界使用的專業技術和知識(天啊學費好貴QQ)，但API的部份目前還在嘗試和學習'],
                ['你說我是特別的訪客是甚麼意思？', '哈，您是被註記的貴賓呢，沒意外的話應該是公司的貴客，又或是前輩吧？\',\'是的，你們的身份不一樣，看見的問題也會不一樣\',\'這是我的個人網站，未來也會有不同的展示用途，會給予不同的人觀看\',\'而我並不希望每個人都知道我全方位的資料，所以用了入口標記的方式將使用者區隔開來，說得專業點是用PHP的session\',\'若您要將您看到的這個頁展示給其它人，請使用以下網趾，直接複製目前網站的網址的話會少掉很多重要資料的哦(我以後會做一鍵複製的功能的，再等等我吧)\',\'https://musicwolf-harler.com/NetIndex/?Visit=work'],
                ['平面不好嗎，怎麼就放棄它了？', '平面不好嗎...確實不好，大家總是覺得他們要的東西很簡單......行吧，也許真的是很簡單\',\'但......在傳達能力不夠好的人身上，再簡單的東西都是一場災難，我非常厭惡一邊猜一邊修一邊被質疑的過程，讓人心力交瘁而又憤愾\',\'而且平面的薪水又低，又沒甚麼翻身的機會，從生活品質到心理健康的角度來看，都無法發展成我想要的生活'],
                ['你說是某個「契機」讓你成為網頁設計的？', '即便漸漸發現平面設計在社會上的存活空間十分狹小\',\'我仍然嘗試認真的以平面設計在社會上掙扎了一兩年\',\'之後我終於撤底放棄時剛好在一間公司任職時兼任了網頁設計公司的窗口，意外發現網頁比想像中有趣得多\',\'在那之後就果斷決定切換方針，開始研習網頁知識了'],
                ['嘗試完後有甚麼感想呢？', '從我決定切換方針後，我發現相比設計我對網頁更加的有熱忱，更加有成就感\',\'從單純的滿足、盲猜著上司/委託人想要甚麼樣的東西，然後被那些覺得設計很簡單的人吐口水，變成了被尊重專業，願意給予時間完成，並且過程充滿學習和挑戰，時不時有種「原來有這種做法」的靈機一動冒出來，很有趣\',\'比起為了幾像素的差異花上數個小時，變成了幾秒鐘就能將資料快速調用和撤除，節省了多餘的時間損失，也不會被認為這一切都雕蟲小技\',\'版面再大也不會卡頓，不會有輸出問題等等的狀況，每一個字的編碼，都可以變成實質的經驗\',\'每一次的調整和設計，都有再續和發展的可能\',\'甚至它們也可以變成幫助我成長的更快的工具\',\'我每一鍵下所輸出的內容，都充滿意義'],
                ['你的努力過程經歷了哪些，結果如何？', '哈，這會是一個很長~~~~的故事\',\'提醒一下問題旁邊的小方塊可以直接把文本叫出來，就不用看我慢慢說囉\',\'最一開始剛出社會時其實就有小小的接觸了一下，當時還沒有摸得太深入，只是覺得好像沒那麼難懂...但還是更想嘗試平面和設計一點，接著當我放棄平面後開始認真嘗試寫網頁時(約略是2021年底吧)基本都是全自學，當初甚至還是使用NotePad++，基本沒有任何提示字元\',\'但我還是拼死拼活的寫了一個很破的落地頁，當時還覺得自己用javaScript寫導覽列很神呢....\',\'之後當我換了一份半正式以網頁為主的工作後，就覺得一頁一頁調整html很沒有效益\',\'檔案雜亂無章，維護困難，常常很容易因為一點疏漏就跑版，再花大量的時間去翻找編碼問題\',\'於是當下我使用了我認為最有變化性，能用於渲染的javascript來寫模板，當時在工作空檔嘗試花了快三個月，終於寫成了\',\'在我測試完並興高采烈的將它上架後，我就發現了一個極端致命的問題，爬蟲無法抓取在網頁讀取完後執行的javaScript指令\',\'意思是在所有的搜尋引擎、所有SEO，讀到我的網頁全部都是空白的\',\'這在一個公司展示網站絕對是一個災難級別的結果，只慶幸發現的還算早，對SEO的影響並不大...\',\'接著我就明白用javaScript是完全無法作為渲染工具使用的，於是在我各種查找，確認過伺服器環境後，我鎖定了最安全的選項：PHP\',\'當我開始學習並使用PHP後，就像是發現了新大陸一樣，所有渲染問題全部都有比js簡單數十倍的渲染方式\',\'即使對當時的我來說仍然因為不熟而切編碼切得亂七八糟，但還是成功完成了\',\'使用大量的陣列數據去做渲染，既保證了網頁的維護性，又可以正常被爬蟲搜尋\',\'於是我一邊將公司常態編輯的各種網頁模板化，一邊學習更多的編碼\',\'直到現在，目前工作的內容對我而言已經輕而易舉，有很多的時間可以去鑽研更多的技術了'],
                ['你現在在嘗試朝哪些目標前進？', '我想做全端，我想弄出酷酷的功能性平台\',\'正在努力學習react.js，想製作一個用於商用委託的平台'],
            ];
        }



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
            [<?php echo $Welcome; ?>]
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