<?php
 $db_type ='mysql';
 $db_host ="localhost";
 $user_name = "root";
 $user_pass ="";
 $db_name ="bai2";

 //Connect
$conn = new PDO("$db_type:host=$db_host;dbname=$db_name",$user_name,$user_pass);
if ($conn) {
    echo "Connected to the $db_host successfully!";
}

//Create table lsgd
 $stmt = $conn->prepare ('CREATE table if not exists `lsgd`(
    `MaGD` varchar(10) not null primary key ,
    `NgayGD`  date,
    `LoaiGD`  varchar(50),
    `Sotien` float,
    `Mota`varchar(50)
     )');
  $result = $stmt -> execute();
 if (!$result){
 die("Create failed: " . mysqli_error()); 
 } else {
     echo "Create success";
 };

 //Insert giao dịch vào table lsgd
$stmt= $conn->prepare('INSERT INTO `lsgd` (`MaGD`, `NgayGD`, `LoaiGD`, `Sotien`,`Mota`)
VALUE (?, ?, ?, ?, ?)');
$data1 = array('GD001','2023-05-07','rút tiền','500','rút tiền ATM');
$data2 = array('GD002','2023-06-17','rút tiền','600','rút tiền ATM');
$data3 = array('GD003','2023-08-07','rút tiền','700','rút tiền ATM');
$data4 = array('GD004','2023-10-12','chuyển tiền','550','chuyển tiền ATM');
$data5 = array('GD005','2023-11-08','chuyển tiền','200','chuyển tiền ATM');
$result1=$stmt-> execute($data1);
if (!$result1) {
    die("Add failed: " . mysql_error()); 
} else {
    echo "Add success";
}
$result2=$stmt-> execute($data2);
if (!$result2) {
    die("Add failed: " . mysql_error()); 
} else {
    echo "Add success";
}
$result3=$stmt-> execute($data3);
if (!$result3) {
    die("Add failed: " . mysql_error()); 
} else {
    echo "Add success";
}
$result4=$stmt-> execute($data4);
if (!$result4) {
    die("Add failed: " . mysql_error()); 
} else {
    echo "Add success";
}
$result5=$stmt-> execute($data5);
if (!$result5) {
    die("Add failed: " . mysql_error()); 
} else {
    echo "Add success";
};

//Update số tiền của MaGD GD003
$stmt = $conn->prepare("UPDATE `lsgd` SET `Sotien`=? WHERE `MaGD`=?");
$data = ['1000','GD003'];
$result=$stmt-> execute($data);
if (!$result) {
    die("Update failed: " . mysql_error()); 
} else {
    echo "Update success";
};

//Delete giao dịch có MaGD GD005:
$stmt= $conn->prepare("DELETE FROM  `lsgd` WHERE `MaGD`=?");
$data = ['GD005'];
$result=$stmt-> execute($data);
if (!$result) {
    die("Delete failed: " . mysql_error()); 
} else {
    echo "Delete success";
};

//Create table DSSP:
$stmt = $conn->prepare ('CREATE table if not exists `dssp`(
    `MaSP` varchar(10) not null primary key ,
    `TenSP`  varchar(50),
    `Giaban`  float,
    `Soluongtonkho` int
     )');
  $result = $stmt -> execute();
 if (!$result){
 die("Create failed: " . mysqli_error()); 
 } else {
     echo "Create success";
 };

 //Insert sp mới:
$stmt= $conn->prepare('INSERT INTO `dssp` (`MaSP`, `TenSP`, `Giaban`, `Soluongtonkho`)
VALUE (?, ?, ?, ?)');
$data = array('SP006','Điện thoại Samsung Galaxy A52','6500000','20');
$result=$stmt-> execute($data);
if (!$result) {
    die("Add failed: " . mysql_error()); 
} else {
    echo "Add success";
};
?>