<?php 
$db_server = "localhost";
$db_username = "root";
$db_pass = " ";
$db_name = "bai2";

//Connect 
$dbh = mysqli_connect('localhost','root','');
if (!$dbh)
    die ("Not connect:" .mysqli_error());
if (!mysqli_select_db($dbh,'bai2'))
    die ("Not found database:" . mysqli_error());

//Create table lsgd
$sql_stml = "CREATE table lsgd(
    maGD varchar(10) not null PRIMARY key,
    ngayGD date,
    loaiGD varchar(50),
    sotien float,
    mota varchar(50)
    );";
$result = mysqli_query($dbh,$sql_stml);
if(!$result){
    die ("Create failed:" . mysqli_error());}
else {
    echo "Create success";
}

//Insert giao dịch vào table lsgd
    $sql_stml = "INSERT INTO `lsgd` (`maGD`, `ngayGD`, `loaiGD`, `sotien`, `mota`)";
    $sql_stml .= "VALUES ('GD001','2023-05-07','rút tiền','500','rút tiền ATM'),
    ('GD002','2023-06-17','rút tiền','600','rút tiền ATM'),
    ('GD003','2023-08-07','rút tiền','700','rút tiền ATM'),
    ('GD004','2023-10-12','chuyển tiền','550','chuyển tiền ATM'),
    ('GD005','2023-11-08','chuyển tiền','200','chuyển tiền ATM')";
    $result = mysqli_query($dbh,$sql_stml);
    if (!$result) {
        die("Add failed: " . mysqli_error());
    } else {
        echo "Add success";
    }

// Update số tiền của MaGD GD003
$sql_stml = "UPDATE `lsgd` set `sotien` ='1000'";
$sql_stml .= "where `maGD` = 'GD003'";
$result = mysqli_query($dbh,$sql_stml);
if (!$result) {
    die("Update failed: " .mysqli_error());
} else {
    echo "Update success";
}

//Delete giao dịch có MaGD GD005
    $sql_stml = "DELETE from `lsgd` where `maGD` = 'GD005'";
    $result = mysqli_query($dbh, $sql_stml);
    if (!$result) {
        die("delete failed: " .mysqli_error());
    } else {
        echo "delete success";
    }

//Select 
$sql_stml = "SELECT * from lsgd";
$result = mysqli_query($dbh, $sql_stml);
if (!$result)
die("select failed: " .mysqli_error());
$rows = mysqli_num_rows($result);
if($rows){
    while($row =mysqli_fetch_array($result)) {
        echo 'maGD: ' .$row['maGD'] . '<br>';
        echo 'ngayGD: ' .$row['ngayGD'] . '<br>';
        echo 'loaiGD: ' .$row['loaiGD'] . '<br>';
        echo 'sotien: ' .$row['sotien'] . '<br>';
        echo 'mota: ' .$row['mota'] . '<br>';
    }
}

//Create table dssp
$sql_stml = "CREATE table dssp(
    maSP varchar(10) not null PRIMARY key,
    tenSP varchar(50),
    giaban float,
    soluongtonkho int
    );";
$result = mysqli_query($dbh,$sql_stml);
if(!$result){
    die ("Create failed:" . mysqli_error());}
else {
    echo "Create success";
}

//Insert sp mới
$sql_stml = "INSERT INTO `dssp` (`maSP`, `tenSP`, `giaban`, `soluongtonkho`)";
$sql_stml .= "VALUES ('SP006','Điện thoại Samsung Galaxy A52','6500000','20')";
$result = mysqli_query($dbh,$sql_stml);
if (!$result) {
    die("Add failed: " . mysqli_error());
} else {
    echo "Add success";
}
?>
