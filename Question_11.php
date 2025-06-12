<!-- 질문 11 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 11</title>
    <link rel="stylesheet" href="css/Question_11.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <img src="img/witch.png" id="witch">
    <img src="img/hand.png" id="hand">
    <div class="Question">
        <img src="img/Q_White.png" class="Q">
        <p>별빛을 안고 걷던 그때, <br>
            낡은 모자가 달린 마녀가 당신 앞에 나타납니다.<br> 
            “원한다면… 너의 소원을 하나 들어주마.”</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="11">

                <button name="types" value="ponyo,may, sosuke">바로 떠오른 소원을 말한다.</button><br>
                <button name="types" value="howl">“지금은 괜찮아요.”라고 말하며 고개를 젓는다.</button><br>
                <button name="types" value="sophie, chihiro">마음속에만 소원을 담고, 입 밖으로 내지 않는다.</button><br>
                <button name="types" value="haku">마녀에게 구체적으로 어떤 소원 인지에 대해 되묻는다.</button><br> <!-- 토토로 X -->
            </form>
    </div>
</body>

</html>