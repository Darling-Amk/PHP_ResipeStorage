<a href="../../index.php">Назад </a>
    <hr>
<?php

    if(isset($_FILES['file'])) {
        $file = $_FILES['file'];
        $path = __DIR__."\\donloads\\"; //Директория для загружаемых файлов

        if (move_uploaded_file($file['tmp_name'], $path.$file['name'])) {

            echo "Файл {$file['name']} успешно загружен!<br>";
            echo "Постоянное имя файла:{$file['name']}<br>";
            echo "tmp_name: {$file['tmp_name'] }<br>";
            echo '<a href="upload.html">Загрузить ещё один файл</a>';

        } else {
            echo 'Не удалось загрузить файл <br>Попробуйте снова:';
            echo '<a href="upload.html">Загрузить ещё раз </a>';
        }
    }
    ?>
