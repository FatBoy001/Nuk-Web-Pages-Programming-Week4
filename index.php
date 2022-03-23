<html>
    <head><!-- 把機器讀取內容放head -->
        <link href="css/member.css" rel="stylesheet"><!-- 透過css對網頁進行美化 -->
        <link href="/img/icon.jpg" rel="icon">
        <title>登入</title>
        <meta http-equiv="Content-Language" content="zh-TW">
        <meta http-equiv="Content-Type" content="text/php; charset=utf-8">
        <meta name="keywords" content="墾丁,墾丁三日,kanding,travel,travel taiwan">
        <meta name="description" content="會員登入">
        <meta name="author" content="FatBoy001">
        <meta name="distribution" content="Taiwan">
    </head>
    <body>
       
        <div class="contain"><h1>
            <font color="White">
                <?php
                    echo "<body bgcolor='#FAE8E0'>";
                ?>
                <center><spam style="color:White;border: 2px white dashed;font-size:72px;">登入</spam></center>
                <hr color="white">
                <center>
                    <table style="color:white; font-size:30px;" bordercolor="white">
                        <form action="/chickAccount.php" method="post" enctype="multipart/form-data"><!--get會把全部變數與訊息顯示出來在url-->
                        
                            <tr>
                                <th>帳號:</th><th><input type="text" name="account"></th>
                            </tr>
                            <tr>
                                <th>密碼:</th><td><input type="password" name="pwd"></td>
                            </tr>
                            <tr>
                                <th></th><th><input type="submit" value="登入" style="width:100%;"></th>
                            </tr>
                        </form>
                        <tr>
                            <th></th><th><a href="register.php"><button style="width:100%;">註冊</button></a></th>
                        </tr>
                    </table>
                    
                   
                </center>               
                <hr color="white">
            </font>
            </br>
        </h1></div>
    </body>       
</html>
