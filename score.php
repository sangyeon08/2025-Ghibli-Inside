<?php
$nickName = $_POST['nickName'];  
$type = $_POST['types'];        
$questionNum = $_POST['questionNum'];

$characters = explode(',', $type); 
$conn = mysqli_connect('localhost','root','111111','msg_itshow');

if (!$conn) {
    die("DB 연결 실패: " . mysqli_connect_error());
}

foreach($characters as $value) {
    $value = trim($value);
    $sql = "UPDATE msg_itshow SET $value = $value + 1 WHERE nickName = '$nickName'";
    mysqli_query($conn, $sql);
}

if ($questionNum < 12) {
    $next = $questionNum + 1;
    header("Location: Question_$next.php?name=" . urlencode($nickName));
    exit;
}

$charList = ['ponyo','may','sosuke','sophie','haku','chihiro','totoro','howl'];
$columns = implode(", ", $charList);

$sql = "SELECT $columns FROM msg_itshow WHERE nickName = '$nickName'";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result);

$max_Score = max($row);

$max_Characters = array_keys($row, $max_Score);

$selected = $max_Characters[array_rand($max_Characters)];

$sql = "UPDATE msg_itshow SET max_score = '$selected' WHERE nickName = '$nickName'";
mysqli_query($conn, $sql);

header("Location: result_$selected.php?name=" . urlencode($nickName));
exit;
?>
