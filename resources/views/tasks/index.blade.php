<head>
  <meta charset="utf-8">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ env('APP_NAME') }}</title>
  <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
  <div class="container">
    <h1 class="text title">タスク一覧</h1>
    <a href="" class="btn btn_create">新規登録</a>
    <div class="row">
      <table class="table_task">
        @foreach($tasks as $task)
        <tr class="tr">
          <td class="td_btn">
            <a href="" class="btn btn_done">完了</a>
          </td>
          <td>
            <p class="text p_tasktitle">{{$task->title}}</p>
          </td>
          <td class="td_btn">
            <a href="" class="btn btn_edit">編集</a>
          </td>
          <td class="td_btn">
            <a href="" class="btn btn_delete">削除</a>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
</body>
