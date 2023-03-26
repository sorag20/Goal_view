<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Pile-up</title>
    <link rel="stylesheet" href="/css/app.css">
  </head>
  <body>
    <div class="container">
      <div class="container-header">
        <h1>目標リスト</h1>
        <a href="/Goal_view/register" class="new-button">+ 登録</a>
      </div>
      <div class="kinds">
        <li>
      
    </li>
      </div>
      <ul class="table-body">
        <span>　　　目標</span>
        <span >　　　　達成したい値</span>
      <span >　　　達成済みの値</span>
      <span >　　　割合</span>
        @foreach ($records as $record)
        <li>
            <div class="book-data">
                <div class="book-data">
                    <span class="name-column">{{$record->name}}</span>
                    <span class="total-pages-column">{{$record->total_pages }}</span>
                   <span class="finished-pages-column">{{$record->finished_pages}}</span>
                    <?php $parcent=$record->finished_pages/$record->total_pages*100;?>
                    <span class="percent-column"><?php echo $parcent?>%</span>
            </div>
            @endforeach
        </li>
      </ul>
    </div>
  </body>
</html>