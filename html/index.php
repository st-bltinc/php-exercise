<?php
session_start();
$errors = $_SESSION['errors'] ?? [];
unset($_SESSION['errors']);
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>お問い合わせ</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php if (!empty($errors)): ?>
        <ul>
            <?php foreach ($errors as $e): ?>
                <li><?= htmlspecialchars($e, ENT_QUOTES, 'UTF-8') ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
    <form method="POST" action="thanks.php">
        <label for="name">名前</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="email">メールアドレス</label><br>
        <input type="email" id="email" name="email"><br>
        <label for="password">パスワード</label><br>
        <input type="password" id="password" name="password"><br>
        <button type="submit" value="送信">送信</button>
    </form>
</body>

</html>