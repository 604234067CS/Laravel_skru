<!DOCTYPE html>
<html lang="en">
   <head>
       <title>Laravel 6 - Article</title>
       <meta charset="UTF-8">
   </head>
   <body>
       <h1>{{ $title }}</h1>
       <p>{{ $subtitle }}</p>
        <ul>
            <li>ID : {{ $article->id }}</li>
            <li>Title : {{ $article->title }}</li>
            <li>Url : {{ $article->url }}</li>
            <li>Slug url : {{ $article->slug }}</li>
            <li>Target : {{ $article->target }}</li>
            <li>Detail  : {{ $article->details }}</li>
            <li>Author  : {{ $article->author }}</li>
            <li>Date  : {{ $article->date }}</li>
            <li>Counter View  : {{ $article->view }}</li>
            <li>Cover : {{ $article->cover }}</li>
            <li>Created at : {{ $article->created_at }}</li>
            <li>Udated at : {{ $article->updated_at }}</li>
        </ul>
        <a href="{{ route('articles') }}">Back</a>
   </body>
</html>