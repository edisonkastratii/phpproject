<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        <?php 
            $greeting = "Hello"
            $name = "Edison";
            echo $greeting . $name;

            echo "Hello" ."World";
        ?>

        <?php 
            $name = "Dark Metter";
            $read = true;

            if($read){
                $message = "Your have read $name";
            }else{
                $message = "You have NOT read $name";
            }
        ?>

        <h1>
            <?php echo $message; ?>
            <? = $message ?> 
        </h1>
    </h1>
</body>
</html>