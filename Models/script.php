<?php


$conn=mysqli_connect('localhost','root','','ctxh1');


if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
echo "Connected successfully";

$time = time();
mysqli_query($conn, 
"UPDATE thongke SET alltime = alltime + day, year = year + day, month = month + day, week = week + day, yesterday = day, day = 0");

if(date('z', $time) == '0') {
    //Ngày đầu tiên trong năm
    mysqli_query($conn, "UPDATE count_views SET year = 0, month = 0, week = 0");
}
else {
    if(date('j', $time) == '1') {
        //Ngày đầu tiên trong tháng
        mysqli_query($conn, "UPDATE count_views SET month = 0, week = 0");
     }
     else {
         if(date('D', $time) == 'Mon') {
             //Ngày đầu tiên trong tuần (Thứ hai)
             mysqli_query($conn, "UPDATE count_views SET week = 0");
         }
     }
}
?>