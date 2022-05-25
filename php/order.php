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
    /* echo $name;
    echo $phone; */

    $zak = "INSERT INTO t_Client (fio, phone) VALUES ('$name', '$phone')";
    $conn->query($zak);
    $client_id = mysqli_insert_id($conn);
    /* echo $client_id; */
    $mainOeder = "INSERT INTO t_OrderMain (client_id) VALUES (".$client_id.")";
    $conn->query($mainOeder);
    $mainOeder_id = mysqli_insert_id($conn);

    /* $last = "SELECT idOrder FROM t_order WHERE (idOrder = LAST_INSERT_ID());";*/
    if(isset($_POST['form_2'])){
        $form = $_POST['form_2'];
        foreach($form as $item){
            $Slave = "INSERT INTO t_OrderSlave (vid_rabot, mainOrder_id) VALUES ('".$item."', ".$mainOeder_id.")";
            $conn->query($Slave);
        };   
    }

    ?>
</body>
</html>