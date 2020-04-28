<?php
    $array = array(
                'her1'=>array(
                    'her2'=>array(
                        'her3'=>array(
                            'her4'=>array(
                                    'Ivan' => "23",
                                    'Koni' => '43'
                                    )
                            )
                    )
            )
    );
    $sa = function($ar) {echo '<pre>'; print_r($ar); echo '</pre>';};
    print_r ($sa($array));
?>
<form method="post">
    <br><br>
    <input type="number" name="name" value="<?=$a?>"> <br><br><br>
</form>