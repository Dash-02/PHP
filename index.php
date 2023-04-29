<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?="PHP";?></title>
</head>

<body>

    <?php

        $hello = 'hello!';
        echo $hello;
    ?>
    <br>
    <?php
        echo date(DATE_RSS);
    ?>
    <br>
    <?php
    // рандомное значение
        if(mt_rand(0,1)){
            ?>
            <div style="color: purple">Purple</div>
            <?php
        } else {
            ?>
            <div style="color: pink">Pink</div>
            <?php
        } 
        #подключение второго файла:
        include 'second.php';
        ?>
        <?php
            $num = 911;
            $text = 'I wash my';
            $endText = 'Porsche';

            print $text.$endText.$num;

            //arrays
            $numbers = [2, 5, 4, 7, 8];
            $mix = [34, 67, 'one'];
            print_r($mix);

            array(5, 7, 3);

            $arr = [
                'banana' => 2,
                'cherry' => 'berry',
                'strawberry'
            ];

            print_r($arr);
        ?>
</body>

</html>