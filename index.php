<? 

@ob_start();

include_once('bd.php');


 ?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Document</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Caveat" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Pacifico|Source+Sans+Pro" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Neucha" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
</head>
<body>
    <div class="wrapp1">
        <div class="wrapp1_title t1">Самые высокие цены за клики</div>
        <div class="wrapp1_title t2">Быстрый вывод денег</div>
        <div class="wrapp1_title t3">Большой баланс проекта</div>

        <div class="wrapp1_text_zainteresovan">Быстрый старт</div>
        <div class="sadadq">.</div>
        <div class="main_img"><img class="main_img_img" src="img/main_naz.png" alt=""></div>



      <div class="wrapp1_form">

            <form action="" method="POST">
                <label>Вход в кабинет</label>
                <input type="text" placeholder="Логин" name="loglogin">
                 <input type="password" placeholder="Пароль" name="logpassword">
                <button type="submit" class="btn-danger wrapp1_form_button" name="logbtn">Войти</button>
            </form>
      </div>

    </div>

    <div class="wrapp2">

        <div class="wrapp2_text_top">Начните зарабатывать прямо сейчас</div>

        <div class="wrapp2_form">

            <form action="" method="POST">

                <div class="wraplabel">
                    <label for=""> Логин: </label> <br><br><br>
                    <label for=""> Пароль: </label> <br><br><br>
                    <label for=""> Еmail: </label><br><br><br>
                </div>
                <div class="wrappinput">
                    <input type="text" name="name">
                    <input type="password" name="password">
                    <input type="email" name="email">
                 </div>
           
                <div class="wrapp2_button">

                    <button class="button" type="submit" name="regbtn">Начать</button>
                </div>
            </form>

        </div>
    


    </div>

    <?


    if (isset($_POST['regbtn']))
    {

        $login = $_POST['name'];
        $password = $_POST['password'];
        $email = $_POST['email'];

        $sql = mysqli_query($connection,"INSERT INTO `users` (name,password,email) VALUES ('$login','$password','$email')");

        $_SESSION['player'] = $login;

    }


    if(isset($_POST['logbtn']))
    {
        $loglogin = $_POST['loglogin'];
        $logpassword = $_POST['logpassword'];

        $sql1 = mysqli_query($connection,"SELECT * FROM `users` WHERE `name` = '$loglogin' AND `password` = '$logpassword'");

         if (mysqli_num_rows($sql1)==0)
         {

            echo "Вы не зарегестрированы"; 
         } 

         else

         {

        
            $_SESSION['player'] = $loglogin;
            echo $_SESSION['player'];
         }

    }
/*
    $result = mysqli_query($connection, "SELECT * FROM `users`");

        while ($arr = mysqli_fetch_assoc($result))
        {
    echo $arr['name']. "<br>";

}
*/

?>
</body>
</html>
<?
   ob_end_flush();
?>