<?php
    $ch = curl_init('https://www.citilink.ru/catalog/mobile/notebooks');

    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
    curl_setopt($ch, CURLOPT_NOBODY, false);
    curl_setopt($ch, CURLOPT_HEADER, true);

    $result = curl_exec($ch);

    preg_match_all('/href="(.*?)" title="Ноутбук/u',$result, $matches);
    print_r($matches[1]);
    curl_close($ch);
    $sale = fopen("Sale.txt", 'w+');
    for ($i = 0;$i<count($matches[1]); $i++){
        $ch = curl_init($matches[1][$i]);

        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        curl_setopt($ch, CURLOPT_NOBODY, false);
        curl_setopt($ch, CURLOPT_HEADER, true);

        $resalt1 = curl_exec($ch);

        preg_match('/"productName":"(.*?)","categoryName"/', $resalt1, $matches1);
        preg_match('/"Операционная система":"(.*?)","/', $resalt1, $matches2);
        preg_match('/<ins class="num">(.*?)<\/ins><ins class="rub">руб.</u', $resalt1, $matches3);

        fwrite($sale, "  $i.".$matches1[1]);
        fwrite($sale, '  Операционная система:'.$matches2[1]);
        fwrite($sale, '  Цена:'.$matches3[1]."\r\n");

        curl_close($ch);
    }
    fclose($sale);
?>
