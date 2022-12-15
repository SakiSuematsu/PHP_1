<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>いろいろお試し（入力画面）</title>
</head>

<body>
  <form action="todo_txt_create.php" method="POST">
    <fieldset>
      <legend>textファイル書き込み型todoリスト（入力画面）</legend>
      <a href="todo_txt_read.php">一覧画面</a>
      <div>
        todo: <input type="text" name="todo">
      </div>
      <div>
        deadline: <input type="date" name="deadline">
      </div>
      <div>
        gakunen:  
      <input type="radio" name="gakunen" value="１年生">１年生
      <input type="radio" name="gakunen" value="２年生">２年生
      <input type="radio" name="gakunen" value="３年生">３年生
      <input type="radio" name="gakunen" value="４年生">４年生
      <input type="radio" name="gakunen" value="５年生">５年生
      <input type="radio" name="gakunen" value="６年生">６年生    
      </div>

      <div>
        <button>submit</button>
      </div>
    </fieldset>
  </form>

</body>

</html>