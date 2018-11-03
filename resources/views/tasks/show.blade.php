<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ env('APP_NAME') }}</title>
  <link rel="stylesheet" type="text/css" href="css/edit.css">
</head>
<body>
  <div class="container">
  <form action="" method="post">
    <h1 class="text title">タスク編集</h1>
      <input type="submit" href="" class="btn btn_save" value="編集を保存">
      <a href="" class="btn btn_delete">削除</a>
      <div class="row">
        {{csrf_field()}}
        <input type="text" name="title" class="text_box text_box_title" value="{{$task->title}}" />
        <textarea name="contents" class="text_box text_box_contents">{{$task->contents}}</textarea>
      </div>
    </form>
  </div>
</body>
