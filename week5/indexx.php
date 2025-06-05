<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>week5</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            padding: 20px;


    </style>
</head>
<body>

    <?php
     $connect = mysqli_connect('localhost', 'root', '', 'colors');
        if(!$connect){
            die( "Connection failed: " . mysqli_connect_error());
        }
        $query = 'SELECT * FROM colors';

        $colors = mysqli_query($connect, $query);
        

        if($colors){
            foreach($colors as $color){
                
                echo '<div class="' . $color['Name'] . '"' . ' style = "background-color: ' . $color['Hex'] . '"' . ' >' . $color['Hex'] . '</div>';
            }
        }
    ?>
    
</body>
</html>