<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pile-up</title>
    <link rel="stylesheet" href="/css/app.css">

  </head>
  <body>
    <%- include('header');%>
    <div class="container">
      <div class="container-header">
        <h1>本の編集</h1>
      </div>
      <div class="book-form-wrapper">
        <form action="/update/<%= book.id %>" method="post">
          <p>本の題名</p>
          <input type="text" name="name" value="<%= book.name %>">
          <p>総ページ数</p>
          <input type="text" name="total_pages" value="<%= book.total_pages %>">
          <p>読み進めたページ数</p>
          <input type="text" name="finished_pages" value="<%= book.finished_pages %>">
          <input   type="submit" value="更新する">
        </form>
      </div>
      <a href="/list" class="cancel-button">もどる</a>
    </div>
  </body>
</html>