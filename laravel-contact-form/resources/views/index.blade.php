<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="/css/reset.css">
  <link rel="stylesheet" href="/css/style.css">
  <title>COACHTECH</title>
</head>

<body>
  <h1>トップページ</h1>
  <form action="/thanks" method="post">
    @csrf
    <p>氏名</p>
    <input type="text" name="name">
    <p>メールアドレス</p>
    <input type="text" name="email">
    <button>送信する</button>
  </form>
</body>

</html>