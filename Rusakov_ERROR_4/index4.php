<?php
$email=false;
    class EmptyException extends Exception{
        
    }
    class LongException extends Exception{

    }
    class InvalidException extends Exception{

    }
    $email = $_POST['email'];
    if (isset($_POST['btne'])){
try {
    $reg = '/^[a-z][a-zA-Z0-9]*@[a-zA-Z0-9]*\.[a-z]+$/';
    if (!$email) {
        throw new EmptyException('E-mail не существует');
    }
    if (!preg_match($reg, $email)) {
        throw new InvalidException('E-mail указан не правильно');
    }
    if (strlen($email) > 250) {
        throw new LongException('E-mail слишком длинный');
    }
}
    catch (Exception $e){
    echo $e->getMessage();}
    }
?>
<form name="myform" action="index.php" method="post">
    <input type="text" name="email" value="<?=$email?>">
    <input type="submit" name="btne" value="Load">
</form>
