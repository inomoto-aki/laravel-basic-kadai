<<<<<<< HEAD
<!DOCTYPE html>
<html lang="ja">
  <head>
    <mate charset="UTF-8">
      <mate name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Larael基礎</title>
  </head>
  <body>
    <h1>投稿一覧</h1>
    <table>
      <tr>
        <th>タイトル</th>
        <th>本文</th>
        <th>作成日時</th>
        <th>更新日時</th>
      </tr>
      @foreach($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->created_at }}</td>
        <td>{{ $post->updated_at }}</td>
      </tr>
      @endforeach
    </table>
  </body>
=======
<!DOCTYPE html>
<html lang="ja">
  <head>
    <mate charset="UTF-8">
      <mate name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Larael基礎</title>
  </head>
  <body>
    <h1>投稿一覧</h1>
    <table>
      <tr>
        <th>タイトル</th>
        <th>本文</th>
        <th>作成日時</th>
        <th>更新日時</th>
      </tr>
      @foreach($posts as $post)
      <tr>
        <td>{{ $post->id }}</td>
        <td>{{ $post->title }}</td>
        <td>{{ $post->content }}</td>
        <td>{{ $post->created_at }}</td>
        <td>{{ $post->updated_at }}</td>
      </tr>
      @endforeach
    </table>
  </body>
>>>>>>> f63ad69 (Add axios package)
</html>