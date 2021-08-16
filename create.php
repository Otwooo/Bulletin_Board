<!DOCTYPE html>
<html lang="ko">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>한마디</title>
</head>
<body>
    <a href="create.php">create</a>
    <form action="create_process.php" method="post">
        <p>
            <input type="text" name="title" placeholder="Title">
        </p>
        <p>
            <textarea name="description" placeholder="description"></textarea>
        </p>
        <p>
            <input type="submit">
        </p>
    </form>
</body>
</html>