<?php
mb_internal_encoding("utf8");

//mypage.phpからの動線以外は、『login_error.php』へリダイレクト
if (empty($_POST['from_mypage'])) {
    header("Location:login_error.php");
}

//セッションスタート
session_start();

?>

<!DOCTYPE HTML>
<html lang="ja">
    <head>
    <meta charset="UTF-8">
    <title>マイページ登録</title>
    <link rel="stylesheet" type="text/css" href="mypage_hensyu.css">
    </head>
    
    <body>

        <header>
            <img src="4eachblog_logo.jpg">
            <div class="logout"><a href="log_out.php">ログアウト</a></div>
        </header>

        <main>
            <div class="box">
                
                <h2>会員情報</h2>

               <div class="hello">
                   <?php echo "こんにちは!&emsp;".$_SESSION['name']."さん"; ?>
                </div>
                
                <form action="mypage_update.php" method="post">

                    <div class="profile_pic">
                        <img src="<?php echo $_SESSION['picture']; ?>">
                    </div>
                   
                    <div class="basic_info">
                        <div class="name">氏名：<input type="text" class="formbox" size="40" name="name" value="<?php echo $_SESSION['name']; ?>" required></div>

                        <div class="mail">メール：<input type="text" class="formbox" size="40" name="mail" value="<?php echo $_SESSION['mail']; ?>" pattern="^[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required></div>

                        <div class="password">パスワード：<input type="password" class="formbox" size="40" name="password" id="password" value="<?php echo $_SESSION['password']; ?>" pattern="^[a-zA-Z0-9]{6,}$" required></div>
                    </div>

                    <div class="comments">
                        <textarea rows="4" cols="50" name="comments" ><?php echo $_SESSION['comments']; ?></textarea>
                    </div>
                   
                    <div class="button_center">
                        <input type="submit" class="submit_button" size="35" value="この内容に変更する">
                    </div>
                </form>

            </div>

        </main>        


    </body>
    
    <footer>
        © 2018 InterNous.inc. All rights reserved
    </footer>
    
</html>