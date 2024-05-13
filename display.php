<?php

    $GoHome = '';
    
    class displayFunction 
    {

        
        public function GoHome_set ($Level) {
            for ($i=0; $i < $Level; $i++) { 
                $GLOBALS['GoHome'] .= '../';
            }
        }

        public function headWrite () {
            $GLvar = $GLOBALS['GoHome'];
            echo '
                <link href="'.$GLvar.'bootstrap/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
                <script src="'.$GLvar.'bootstrap/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
                
                <link href="'.$GLvar.'css/base.css" rel="stylesheet">
                <link href="'.$GLvar.'css/element.css" rel="stylesheet">
            ';
        }

        public function footer () {
            $GLvar = $GLOBALS['GoHome'];
            echo "
                <script>
                    // 获取 <div> 元素
                    var pageDisplay = document.getElementById('PageDisplay');
                    let width =  pageDisplay.offsetWidth;
                    document.documentElement.style.setProperty('--PageDisplayWidth', width + 'px');
                
                    window.addEventListener('resize', function() {
                    let width =  pageDisplay.offsetWidth;
                    document.documentElement.style.setProperty('--PageDisplayWidth', width + 'px');
                });
                </script>
            ";
        }

        public function navBar(){
            $GLvar = $GLOBALS['GoHome'];
            echo'
            <div style="height: 56px;width:100%;"></div>
            <nav id="TopBar" class="navbar navbar-expand-sm navbar-dark" aria-label="Third navbar example">
                <div class="container-fluid">
                <a class="navbar-brand" href="'.$GLvar.'.">盼掌-殷</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample03" aria-controls="navbarsExample03" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            
                <div class="collapse navbar-collapse" id="navbarsExample03">
                    <ul class="navbar-nav me-auto mb-2 mb-sm-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="'.$GLvar.'gallery">gallery</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="'.$GLvar.'">Link</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link disabled" aria-disabled="true">Disabled</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="'.$GLvar.'" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</a>
                        <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="'.$GLvar.'">Action</a></li>
                        <li><a class="dropdown-item" href="'.$GLvar.'">Another action</a></li>
                        <li><a class="dropdown-item" href="'.$GLvar.'">Something else here</a></li>
                        </ul>
                    </li>
                    </ul>
                </div>
                </div>
            </nav>
            ';
        }

        public function MwolfKillerBG(){
            $GLvar = $GLOBALS['GoHome'];
            echo'
                <div class="backgroundBox">
                    <div></div>
                    <div class="video-background">
                        <video autoplay loop muted>
                            <source src="https://wolf-test-box.s3.ap-northeast-1.amazonaws.com/HarlerArt/video_gif/background.mp4" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>
            ';
        }

        public function TalkFunction(){
            echo '
                <script>
                let TalkBoxTimeOutIds = [];
                function clearAllTimeouts() {
                    for (let i = 0; i < TalkBoxTimeOutIds.length; i++) {
                        clearTimeout(TalkBoxTimeOutIds[i]);
                    }
                    TalkBoxTimeOutIds = [];
                }  
                function printSentenceByWord(arr) {
                    function WriteTextList(text , Time){
                    AllCount += Time;
                    let timeoutId = setTimeout(() => {
                        ssa.innerHTML += text;
                    }, AllCount);
                    TalkBoxTimeOutIds.push(timeoutId);
                    console.log(AllCount)
                    }
                    let ssa = document.getElementById("TalkingToUser");
                    clearAllTimeouts()
                    let AllCount = 0;
                    arr.forEach( OneCircle => {
                        ssa.innerHTML = "";
                        OneCircle.forEach(str => {
                            for (let count = 0; count < str.length; count++) {
                                WriteTextList(str.slice(count , count + 1), 100)
                            }
                            WriteTextList("<br>", 500)
                        });
                    });
                }
                </script>
            ';
        }
        
    }

    $DisplayFunction = new displayFunction();

    


    

    

    



?>




