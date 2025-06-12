<?php
$nickName = $_POST['username'];
$conn = mysqli_connect('localhost','root','111111','msg_itshow');

$sql="insert into msg_itshow(nickName) values('$nickName')"; // 닉네임

mysqli_query($conn,$sql);
// mysqli_query("insert into msg_ITSHOW values(nickName) values('$Name')",$conn);
mysqli_close($conn);

header("Location:Question_1.php?name=".urlencode($nickName));
exit;
?>
