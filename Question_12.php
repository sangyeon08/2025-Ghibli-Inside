<!-- 질문 12 -->

<!DOCTYPE html>
<html lang="ko">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>질문 12</title>
    <link rel="stylesheet" href="css/Question_12.css" />
    <link rel="stylesheet" href="css/Question.css" />
</head>

<body>
    <img src="img/Exit.png" id="Exit">
    <div class="Question">
        <img src="img/Q_White.png" class="Q">
        <p>마녀가 사라지고, 그 자리엔 빛으로 된 길이 나타납니다. <br>
            그 길의 끝에, 어딘가 낯익은 존재가 서 있습니다.<br>
            “이제 뒤돌아보지 말고, 걸어가세요.”</p>
            <?php $nickName = $_GET['name']; ?>
            <form method="post" action="score.php">
                <input type="hidden" name="nickName" value="<?= htmlspecialchars($nickName) ?>">
                <input type="hidden" name="questionNum" value="12">

                <button name="types" value="haku,totoro, chihiro">그대로 앞으로 걷기 시작한다.</button><br>
                <button name="types" value="ponyo, sophie, sosuke">잠시 멈췄다가 고개를 끄덕이고 나아간다.</button><br>
                <button name="types" value="may, howl">호기심에 뒤를 돌아본 후 걸어 나간다.</button><br>
            </form>
    </div>
    <div class="stars">
        <script>
            const starsContainer = document.querySelector('.stars');

            for (let i = 0; i < 150; i++) {
                const star = document.createElement('div');
                star.className = 'star';
                star.style.top = `${Math.random() * 100}%`;
                star.style.left = `${Math.random() * 100}%`;
                star.style.animationDelay = `${Math.random() * 3}s`;
                starsContainer.appendChild(star);
            }
        </script>

    </div>
</body>

</html>