<?php

// тип содержимого - jpg
header('Content-Type: image/jpeg;');

// открытие файла с картинкой и связываем его с идентификатором $im
$im = imagecreatefromjpeg("./1.jpg");

// создание цвета текста
$text_color = imagecolorallocate($im, 255, 255, 255);
$font = __DIR__."/arial.ttf";
$text = "ЕГЭ ПО РИСОВАНИЮ";
// прорисовка строки текста шрифтом (латиница!) 5 в координаты 5, 5
#imagestring($im, 5, 250, 350,  "ВОТ БЫ БИЛА ИГЭ ПО РИСОВАНИЮ", $text_color);
imagettftext($im, 36, 0, 65, 380, $text_color, $font, $text );
// вывод изображения в браузер
imagejpeg($im);

imagedestroy($im);
?>