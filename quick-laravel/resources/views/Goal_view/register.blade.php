<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Goal_view</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="sign">
      <div class="container">
        <div class="panel">
          <h2>目標の登録</h2>

          <form action="/register" method="post">
            @csrf
            <p>目標</p>
            <input type="text" name="name" id="name">
            <p>達成したい値</p>
            <input type="text" name="total_pages" id="topal_pages">
            <p>達成済みの値</p>
            <input type="text" name="finished_pages" id="finished_pages">
            <input type="submit" value="登録する">
            <a href="/Goal_view/list">一覧にもどる</a>
          </form>
          
        </div>
      </div>
    </div>
  </body>
</html>