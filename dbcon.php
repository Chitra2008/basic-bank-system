<?php

$conn = mysqli_connect("localhost","root","","bank");


        $sql = "CREATE TABLE `bank`.`users` (
    `id` int(3) NOT NULL,
    `name` text NOT NULL,
    `email` varchar(30) NOT NULL,
    `balance` int(8) NOT NULL
  ) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;";
  
    $run = mysqli_query($conn,$sql);

    $sql = " INSERT INTO `bank`.`users` (`id`, `name`, `email`, `balance`) VALUES (1, 'Chitra Goswami', 'chitra@gmail.com', 1000),
    (2, 'Anu Panchal', 'anu@gmail.com', 2000),
    (3, 'Aniket Dube', 'aniket@gmail.com', 3000),
    (4, 'Madhu Mule', 'madhu@gmail.com', 4000),
    (5, 'Devyani Rajput', 'devyani@gmail.com', 5000);



    $run = mysqli_query($conn,$sql);

    if($run)
    {
        echo "ok";
    }
    else{
        echo "not ok".mysqli_error($conn);
    }

?>