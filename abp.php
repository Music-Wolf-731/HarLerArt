<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        body {overflow:hidden;width:100vw ; height : 100vh;margin:0;}
        iframe{width:100% ; height : 100%;}
    </style>
</head>
<body>
    <iframe id="myFrame" src="https://www.roly-taiwan.com/calculator/" frameborder="0"></iframe>
</body>


<script>
    // 获取 iframe 元素
    var iframe = document.getElementById('myFrame');
    // 获取 iframe 中的 Window 对象
    var iframeWindow = iframe.contentWindow;

    // 在 iframe 内部页面加载完成后添加 hashchange 事件监听器
    iframeWindow.addEventListener('hashchange', function() {
      // 获取当前页面的 URL
      var currentPageUrl = iframeWindow.location.href;
      console.log('Current page URL:', currentPageUrl);

      // 在这里处理页面切换事件，你可以根据 currentPageUrl 执行相应的操作
    });
    console.log(document.getElementById('myFrame').contentDocument)
    console.log(console.log(document.getElementById('myFrame').contentWindow.document))
  </script>
</html>