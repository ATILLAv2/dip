<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = mysqli_connect("chuc.caseum.ru:33333", "st_2_18_28", "63567181", "is_2_18_st28_VKR");
    /* $inser = "INSERT INTO crash (name, profile, type) VALUES ('$1', '$1', '$1')";
    $conn->query($inser); */
    if(isset($_POST['form_2'])){
        $form = $_POST['form_2'];
        foreach($form as $item) echo $item."<br />";   
    }
    ?>
</body>
</html>