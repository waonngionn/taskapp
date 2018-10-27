<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ env('APP_NAME') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div class="container align-middle mt-5">
    <h1 class="display-6 d-inline">タスク一覧</h1>
    <input type="button" class="btn btn-primary d-inline ml-5 mb-3 pl-4 pr-4" value="新規登録">
    <div class="row">
      <table class="table">
        @foreach($tasks as $task)
        <tr>
          <td>
            <button type="button" class="btn btn-outline-secondary">完了</button>
          </td>
          <td>
            <p class="lead text-secondary">{{$task->title}}</p>
          </td>
          <td>
            <button type="button" class="btn btn-outline-secondary">編集</button>
          </td>
          <td>
            <button type="button"  class="btn btn-outline-danger">削除</button>
          </td>
        </tr>
        @endforeach
      </table>
    </div>
  </div>
  <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
