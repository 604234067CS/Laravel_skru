<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>laravel 6 </title>
</head>
<body>
<ol>
    @foreach($articles as $article)
      <li>{{ $article->title}} 
          <a href= "{{ route('Article.show',[$article->id]) }}">ดูเพิ่มเติม</a>
      </li>
     @endforeach
  </ol>
</body>
</html>