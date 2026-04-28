<?php
$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>送信完了</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <p>名前: <?php echo htmlspecialchars($name); ?></p>
    <p>メールアドレス: <?php echo htmlspecialchars($email); ?></p>
    <p>パスワード: <?php echo htmlspecialchars($password); ?></p>
</body>

</html>