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
    $name = $_POST["fio"];
    $phone = $_POST["phoneNumber"];
    $sum = $_POST["price"];
    $date = $_POST["date"];
    $cur = $_POST["btn_tab active"];

    echo "Отладка: введенны данные: имя - ". $name;
    echo "телефон - " . $phone . "сумма - " . $sum . "дата - " . $date;

    $zak = "INSERT INTO t_Client (fio, phone) VALUES ('$name', '$phone')";
    $conn->query($zak);
    $client_id = mysqli_insert_id($conn);
    
    $mainOrder = "INSERT INTO t_OrderMain (client_id, totalSumm, date) VALUES (".$client_id.", '$sum', '$date')";
    $conn->query($mainOrder);
    $mainOrder_id = mysqli_insert_id($conn);

    if(isset($_POST['form_1'])){
        $form = $_POST['form_1'];
        foreach($form as $item){
            $Slave = "INSERT INTO t_OrderSlave (gadjet_id, master_id, vid_rabot, mainOrder_id) VALUES ('Стиральная машина', 1, '".$item."', ".$mainOrder_id.")";
            $conn->query($Slave);
        };   
    }

    if(isset($_POST['form_2'])){
        $form = $_POST['form_2'];
        foreach($form as $item){
            $Slave = "INSERT INTO t_OrderSlave (gadjet_id, master_id, vid_rabot, mainOrder_id) VALUES ('Посудомоечная машина', 2,'".$item."', ".$mainOrder_id.")";
            $conn->query($Slave);
        };   
    }

    ?>
</body>
</html>