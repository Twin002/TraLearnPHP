<?php
 $db_type ='mysql';
 $db_host ="localhost";
 $user_name = "root";
 $user_pass ="";
 $db_name ="bai1";

 //Connect
$conn = new PDO("$db_type:host=$db_host;dbname=$db_name",$user_name,$user_pass);
if ($conn) {
    echo "Connected to the $db_host successfully!";
}

//Create table dssv
 $stmt = $conn->prepare ('CREATE table if not exists `dssv`(
    `MaSV` varchar(10) not null primary key ,
    `HoTen`  nvarchar(50) not null,
    `NgaySinh`  date,
    `LopHoc` varchar(10),
    `DTB` float
     )');
  $result = $stmt -> execute();
 if (!$result){
 die("Create failed: " . mysqli_error()); 
 } else {
     echo "Create success";
 };

 //Insert 5sv mới vào table dssv
$stmt= $conn->prepare('INSERT INTO `dssv` (`MaSV`, `HoTen`, `NgaySinh`, `LopHoc`,`DTB`)
VALUE (?, ?, ?, ?, ?)');
$data1 = array('SV001','Trần Thị A','2001-05-24','12C1','7.4');
$data2 = array('SV002','Trần Thị B','2002-03-22','11C3','9.6');
$data3 = array('SV003','Trần Thị C','2002-09-15','12C4','8.2');
$data4 = array('SV004','Trần Thị D','2003-10-12','10C3','7.9');
$data5 = array('SV005','Trần Thị E','2003-07-27','10B2','6.8');
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

//Update DTB của sv có MaSV SV001
$stmt = $conn->prepare("UPDATE `dssv` SET `DTB`=? WHERE `MaSV`=?");
$data = ['8.5','SV001'];
$result=$stmt-> execute($data);
if (!$result) {
    die("Update failed: " . mysql_error()); 
} else {
    echo "Update success";
};

//Delete sinh viên có MaSV SV003
$stmt= $conn->prepare("DELETE FROM  `dssv` WHERE `MaSV`=?");
$data = ['SV003'];
$result=$stmt-> execute($data);
if (!$result) {
    die("Delete failed: " . mysql_error()); 
} else {
    echo "Delete success";
};
?>
