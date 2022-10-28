<?php
    $date = '31-12-2020';
    echo "<p>Date: $date</p>";
    $date = join('.', array_reverse(explode('-', $date)));
    echo "<p>Changed date: $date</p><br/>";

    $str = 'london is the capital of great britain';
    echo "<p>Before changing: $str</p>";
    $str = ucwords($str);
    echo "<p>After changing: $str</p><br/>";

    $password = '8letters';
    echo "<p>Password: $password</p>";
    if (strlen($password) >= 7 && strlen($password) <= 12) {
        echo "<p>Correct Password</p>";
    } else echo "<p>Invalid Password</p>";
    $password = 'mem';
    echo "<p>Changed Password: $password</p>";
    if (strlen($password) >= 7 && strlen($password) <= 12) {
        echo "<p>Correct Password</p><br/>";
    } else echo "<p>Invalid Password</p><br/>";

    $string = '1a2b3c4b5d6e7f8g9h0';
    echo "<p>String: $string</p>";
    $string = preg_replace('/\d/', '', $string);
    echo "<p>Without numbers: $string</p>";

    $text = explode(' ', "Главным фактором языка РНР является практичность. РНР должен предоставить программисту средства для быстрого и эффективного решения поставленных задач. Практический характер РНР обусловлен пятью важными характеристиками: традиционностью, простотой, эффективностью, безопасностью, гибкостью. Существует еще одна «характеристика», которая делает РНР особенно привлекательным: он распространяется бесплатно! Причем, с открытыми исходными кодами ( Open Source ). Язык РНР будет казаться знакомым программистам, работающим в разных областях. Многие конструкции языка позаимствованы из Си, Perl. Код РНР очень похож на тот, который встречается в типичных программах на С или Pascal. Это заметно снижает начальные усилия при изучении РНР. PHP — язык, сочетающий достоинства Perl и Си и специально нацеленный на работу в Интернете, язык с универсальным (правда, за некоторыми оговорками) и ясным синтаксисом. И хотя PHP является довольно молодым языком, он обрел такую популярность среди web-программистов, что на данный момент является чуть ли не самым популярным языком для создания web-приложений (скриптов).");
    $rows = [];
    $i = 0;
    foreach ($text as $word) {
        if (!$rows[$i]) $rows[$i] = '';
        if (mb_strlen($rows[$i]) + mb_strlen($word) > 80) $i++;
        else $rows[$i] .= $word.' ';
    }

    echo "<pre>";
    print_r($rows);
    echo "</pre><br/>";

    $equalRows = [];
    foreach ($rows as $i => $row) {
        $row = ltrim($row);
        $difference = 80 - mb_strlen($row);
        $spaces = count(explode(' ', $row)) - 1;
        $div = floor($difference / $spaces);
        $mod = $difference % $spaces;
        $newRow = '';
        $i = 0;

        foreach (explode(' ', $row) as $word) {
            $newRow .= $word.' '.str_repeat(' ', $i < $mod ? 1 : 0);
            $i++;
        }

        $equalRows[] = rtrim($newRow);
    }

    echo "<pre>";
    print_r($equalRows);
    echo "</pre><br/>";
?>