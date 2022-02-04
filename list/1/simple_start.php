<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Первая лабораторная</title>
</head>
<body>
    <a href="../../index.php">Назад</a>
    <hr>

    <?php
    error_reporting(E_ERROR | E_PARSE);
    /* Описание скалярных переменных */

    $a      = 15;        # целое
    $fl     = 3.14;         # с плавающей точкой
    $boo     = false;         # boolean
    $str    = "stroka";     # строка
    $nol     = 0;
    $pusto    = "";

    $s1 = "Переменная a = $a \n";   # разбираемая строка
    $s2 = 'Переменная a = $a \n';   # неразбираемая строка

    /* Описание массива */

    $mas = array( "one" => TRUE,
            1   => -20,
            "three" => 3.14);
    $mas[]="two";
    $mas["four"]=4;

    /* Описание константы */

    define("HOST", "kappa.cs.karelia.ru");

    /* Вывод значения переменной на экран */


    $table = array();
    define(ROWS, 17);
    for($i=0;$i<ROWS;$i++){
        array_push($table,array());
    }

    //0
    array_push($table[0],"№<br> задания	","	Решение","Результат");
    
    //1
    array_push($table[1],1,'a = {$a}, <br>fl = {$fl},<br> boo = " .( ($boo==TRUE) ? "True":"False") <br>str = \"{$str}\"',"a = {$a},<br> fl = {$fl},<br> boo = " .( ($boo==TRUE) ? "True":"False"). ",<br>str = \"{$str}\"");
    
    //2
    error_reporting(E_ERROR | E_PARSE);
    array_push($table[2],2,'$a+$str',$a+$str);
    error_reporting(~E_ERROR | ~E_PARSE);

    //3
    array_push($table[3],3,'"? a > str :".( ($a>$str) ? "True":"False") . "<br>" . \'? a < str :\' . ( ($a<$str) ? "True":"False") . "<br>" . \'? a == str :\' . ( ($a==$str) ? "True":"False") . "<br>" . \'? a === str :\' . ( ($a===$str) ? "True":"False")', "? a > str :".( ($a>$str) ? "True":"False") . "<br>" . '? a < str :' . ( ($a<$str) ? "True":"False") . "<br>" . '? a == str :' . ( ($a==$str) ? "True":"False") . "<br>" . '? a === str :' . ( ($a===$str) ? "True":"False") );

    //4
    array_push($table[4],4,'\'? nol==pusto :\' . ( ($nol==$pusto) ? "True":"False")  <br> \'? nol===pusto :\'  ( ($nol===$pusto) ? "True":"False")', '? nol==pusto :' . ( ($nol==$pusto) ? "True":"False") . "<br>" . '? nol===pusto :' . ( ($nol===$pusto) ? "True":"False") );

    //5
    array_push($table[5],5,'{$s1},{$s2}',"{$s1}, {$s2}");

    //6
    error_reporting(E_ERROR | E_PARSE);
    array_push($table[6],6,'{$mas[\'one\']}, {$mas[2]}, .var_export($mas[3],True)' , "{$mas['one']}, {$mas[2]},".var_export($mas[3],True));
    error_reporting(~E_ERROR | ~E_PARSE);
    //7
    ob_start();
    var_dump($mas);
    array_push($table[7],7,'ob_start();<br>var_dump($mas);<br>ob_get_contents();<br>ob_end_clean();<br>',"<pre>".ob_get_contents()."</pre>");
    ob_end_clean();
    
    //8
    
    array_push($table[8],8,'strval($mas) .<br>[  implode(" , ",$mas)]', "" . strval($mas) ."<br>[".  implode(" , ",$mas)."]");


    //9
    $name="a";
    array_push($table[9],9,'$name="a";${$name}',${$name});
    
    //10
    $ref=&$a;
    $ref = 16;
    array_push($table[10],10,'$ref=&$a;$ref = 16;',$a);

    //11
    array_push($table[11],11,'HOST',HOST);

    //12
    # Для проклятых линкусоидов $file_list=`ls -a`;
    $file_list=`dir`;
    array_push($table[12],12,'$file_list=`ls -a`',$file_list);

    //13

    array_push($table[13],13,'($str.$nol + 1).=>.($str.$nol . 1)',"" . $str . $nol + 1 . '=>' . $str.$nol . "1");


    //14
    $line = __LINE__;
    $gyper = basename(__FILE__);
    array_push($table[14],14,' basename(__FILE__);<br>$line = __LINE__;',"<a href=$gyper>Строка $line </href>");


    //15
    $color = array("каждый"=>"красный",
        "охотник"=>"оранжевый",
        "желает"=>"желтый",
        "знать"=>"зеленый",
        "где"=>"голубой",
        "сидит"=>"синий",
        "фазан"=>"фиолетовый"
    );
    asort($color);
    $res = '<table border="5">';

    foreach($color as $key=>$d){
        $res.='<tr>'.'<td>'.$key.'</td>'.'<td>'.$d.'</td>'.'</tr>';
    }

    $res.='</table>';
    array_push($table[15],15,'Строго по плану',$res);
    
    //16
    function f_color($n = 0) {
        if($n % 2 == 0) 
            return "<font color = 'green'>Четное число </font><br>";
        
        return "<font color = 'red'> Нечетное число </font><br>";
        
    }
    array_push($table[16],16,'function f_color($n = 0){<br> &emsp; if($n % 2 == 0)<br> &emsp;&emsp;return "<font color = \'green\'> Четное число </font>";<br>&emsp;return "<font color = \'red\'> Нечетное число </font>";<br>}');
    array_push($table[16], ("Без параметра:" .f_color() ."C параметром 1:". f_color(1)."C параметром 2:" . f_color(2)));

    echo '<table border="5">';
    for($i=0;$i<ROWS;$i++){
        echo "</tr>";
        for ($j=0; $j < 3; $j++) { 
            echo "<td>";
            if(isset($table[$i][$j]))
                echo "{$table[$i][$j]}";
            else
                echo "-";
            echo "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
    ?>
    <hr>
    <p align = "right">Кручинин Никита 22203</p>
</body>
</html>