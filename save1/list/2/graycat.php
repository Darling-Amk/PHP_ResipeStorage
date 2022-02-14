<?php

$im = imagecreatefromjpeg("./cat.jpg");
  


// устанавливаем тип содержимого 
header('content-type: image/jpeg');
imagefilter($im, IMG_FILTER_GRAYSCALE);

// вывод изображения на экран 
imagejpeg($im);
  
// очистка памяти 
imagedestroy($im);

?>
