<?php
    class Valid{
        static function validEmail($email){
            if ($email==null){
                echo 'Email пуст';
            }
            elseif (filter_var($email, FILTER_VALIDATE_EMAIL) == false){
                echo ' Некорректный Email';
            }
            else echo $email;
    }
        static function validURL($url){
            if ($url==null){
                echo 'URL пуст';
            }
            elseif (filter_var($url, FILTER_VALIDATE_URL) == false){
                echo ' Некорректный URL';
            }
            else echo $url;
    }
    }
    $t = new Valid();
    $ma = 'a@a.ru';
    $t->validEmail("$ma");
    echo '<br>';
    $t->validURL('http://fsdadfa.ru');
?>
