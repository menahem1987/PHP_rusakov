<?php
    //echo $a = md5(1234);
    session_start();
    $error = false;
    if (isset($_POST['auth'])){
    $_SESSION['login'] = $_POST['login'];
    $_SESSION['password'] = md5($_POST['password']);
    $error = true;
    }
    if (isset($_GET['f']) && $_GET['f']=='logout'){
        unset($_SESSION['login']);
        unset($_SESSION['password']);
    }
    $login = ['admin', 'moderator'];
    $password = ['202cb962ac59075b964b07152d234b70', '81dc9bdb52d04dc20036dbd8313ed055'];
    $auth = false;
    $iss = isset($_SESSION['login']) && isset($_SESSION['password']);
        for ($i = 0; $i < count($login); $i++) {
            if ($iss && $_SESSION['login'] === $login[$i] && $_SESSION['password'] === $password[$i]) {
                $auth = true;
                $error = false;
            }
        }
?>
<?php if($error){ ?> <p>Неверный логин и/или пароль</p> <?php } ?>
<?php if($auth){ ?>
    <p>"Hellow <?=$_SESSION['login']?>!"</p>
    <a href="index.php?f=logout">Выход</a>
<?php } else { ?>
<form name="auth" method="post" action="index.php">
    <p>
        <input type="text" name="login">
    </p>
    <p>
        <input type="text" name="password">
    </p>
    <p>
        <input type="submit" name="auth" value="Войти">
    </p>
</form>
<?php } ?>
