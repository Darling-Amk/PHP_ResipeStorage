<?php
// black back
$im = imagecreatetruecolor(200, 200);

// цвета rgb
$blue = imagecolorallocate($im, 0, 0, 255);
$red = imagecolorallocate($im, 255, 0, 0);
$green = imagecolorallocate($im, 0, 255, 0);

// координаты прямоугольника + макет + цвет
imagefilledrectangle ($im, 120, 170, 70, 120, $blue); //залитый прямоугольник

// координаты центра эллипса + макет + цвет + ширина, высота
imagefilledellipse($im, 100, 100, 40, 40, $red); //залитый круг

// массив точек для треугольника
$values = array(
            80,  80,  // Point 1 (x, y)
            120,  80, // Point 2 (x, y)
            100,  50,  // Point 3 (x, y)
            );

// рисуем треугольник по точкам + макет + цвет
imagefilledpolygon($im, $values, 3, $green);

// прорисовка
header("Content-type: image/png");
imagepng($im);

// освобождение памяти
imagedestroy($im);

?>