<?php
    $email = false;
    class Valid
    {
        public static function validEmail($email){
        try{
            $reg = '/^[a-z][a-zA-Z0-9]*@[a-zA-Z0-9]*\.[a-z]+$/';
        if(empty($email)){
            throw new Exception('E-mail не указан');
        }
            elseif (!preg_match($reg, $email))throw new Exception('E-mail указан неправильно');
            elseif (strlen($email)>250)throw new Exception('Слишком длинный e-mail');
            else return true;
        }
        catch (Exception $ex) {
             echo $ex->getMessage();
            }
        }
    }
    $email = $_POST['email'];
    if (isset($_POST['btn'])){
    echo Valid::validEmail($email);}


?>
<form action="index.php" name="myform" method="post">
    <div>
        <input type="text" name="email" value="<?=$email?>">
        <input type="submit" name="btn" value="Проверка">
    </div>
</form>
