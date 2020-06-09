<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ログイン画面</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body style="background-color: #FFFFF0;">
  <div class="container">
    <header class="my-5">
      <nav style="display: flex;">
        <div>
          <a href="read.php" style="text-decoration: none;color:black; " onmouseover="this.style.fontWeight='bolder'" onmouseout="this.style.fontWeight='lighter'">かけいぼ</a>
        </div>

      </nav>
    </header>

    <form action="login_act.php" method="POST">
      <legend>ログイン</legend>

      <div class="form-group">
        user_id: <input class="form-control" type="text" name="user_id">
      </div>
      <div class="form-group">
        password: <input class="form-control" type="text" name="password">
      </div>
      <div class="form-group">
        <button>Login</button>
      </div>
      <a href="register.php">or register</a>

    </form>
  </div>
</body>

</html>
