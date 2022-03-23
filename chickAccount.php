<html>
    <head><!-- 把機器讀取內容放head -->
        <link href="css/member.css" rel="stylesheet"><!-- 透過css對網頁進行美化 -->
        <link href="/img/icon.jpg" rel="icon">
        <title>登入失敗</title>
        <meta http-equiv="Content-Language" content="zh-TW">
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
        <meta name="keywords" content="墾丁,墾丁三日,kanding,travel,travel taiwan">
        <meta name="description" content="登入失敗">
        <meta name="author" content="FatBoy001">
        <meta name="distribution" content="Taiwan">
    </head>
    <body style="background:#FAE8E0;">
       
        <div class="contain"><h1>
            <font color="White">
                <center>
                    <?php          
                        echo "<hr color='white'>";
                        $account = $_POST["account"];
                        $pwd = $_POST["pwd"];
                        if($pwd=="a"){
                            echo "<a href='home.php' style='text-decoration:none;'><spam style='color:White; border: 2px white dashed;font-size:72px;'>登入成功(點擊進入)</spam></a>";
                        }else{
                            echo "<a href='index.php' style='text-decoration:none;'><spam style='color:White; border: 2px white dashed;font-size:72px;'>登入失敗(點擊返回)</spam></a>";
                        }
                    ?>    
                </center>               
                <hr color="white">
            </font>
        </h1></div>
    </body>       
</html>
