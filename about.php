<!DOCTYPE html>
<head>
    <?php 
        $title = "Info about us";
        require_once "blocks/head.php";
    ?>
</head>
<body>
    <?php require_once "blocks/header.php";?>
    
    <div id="wrapper">
        <div id="leftCol">
            <div id="about_us">
                <h2>Info about us</h2>
                <p>Этот сайт выполнен в качестве домашнего задания (домашнего 
                проекта студентом КА ШАГ, курс PHP. Он не преследует цели
                получения прибыли, продвижения каких-ибо продуктов и прочих 
                целей. При подготовке даного сайта
                были использованы верстка html и подключенные стили СSS. Все
                статьи подгружаются из базы данных динамически. Также здесь 
                использован JS и AJAX</p>
            </div>
        </div>
        <?php require_once "blocks/rightCol.php";?>
    </div>
    
    <?php require_once "blocks/footer.php";?>
    
</body>


