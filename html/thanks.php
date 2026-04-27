<?php
session_start();

$name = $_POST['name'];
$email = $_POST['email'];
$password = $_POST['password'];
$errors = [];

if ($name === '') {
    $errors[] = '名前を入力してください。';
} else {
    if (mb_strlen($name) < 3) {
        $errors[] = '名前は三文字以上で入力してください。';
    }
}

if ($password === '') {
    $errors[] = 'パスワードを入力してください。';
} else {
    if (mb_strlen($password) < 5) {
        $errors[] = 'パスワードは五文字以上で入力してください。';
    }
}

if ($email === '') {
    $errors[] = 'メールアドレスを入力してください。';
}

if (!empty($errors)) {
    $_SESSION['errors'] = $errors;
    header('Location: index.php');
    exit;
}



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