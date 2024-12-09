<?php 
    $names = ["Shubham","Animesh", "Shoaib 10"];
    $string = "12312312 12313 asdfadjzshdlashd ajskdhaskdh alsdhl $names[1]'<br>'";
    $string_single_comma = '12312312 12313 asdfadjzshdlashd ajskdhaskdh alsdhl added by $names[1]';

    echo $string.'<br>'; //Used Echo
    echo $string_single_comma.'<br>'; //Used Echo

    print($string); 
    var_dump($string);

    echo "<br>Strlen:". strlen($string);
    echo "<br>Word Count:". str_word_count($string)."<br>";
    

    $x = "Hello World!<br>";
    echo strtoupper($x);//Uppercase
    echo strtolower($x);//Lowercase
    echo str_replace("World","PHP",$x)."";//Replace
    //echo strrev($x);//Reverse a String
    echo trim($x);
    $y = explode(" ", $x);
    echo "<pre>";
    print_r($y);
?>