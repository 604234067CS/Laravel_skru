<!DOCTYPE html>
<html lang="en">
   <head>
       <title>{{ $title }} - Laravel 6</title>
       <meta charset="UTF-8">
   </head>
   <body>
       <h1>{{ $title }}</h1>
       <p>{{ $subtitle }}</p>
       <p><a href="{{ route('article.add') }}">+ เพิ่มข้อมูล</a></p>
       <ol>
       @foreach ($articles as $article)
            <li>
                {{ $article->title }} 
                <a href="{{ route('article.show', [$article->id]) }}">ดูเพิ่มเติม</a> | 
                <a href="{{ route('article.edit', [$article->id]) }}">&#9998; แก้ไขรายการ</a> | 
                <form method="POST" action="{{ route('article.destroy', $article->id) }}" style="display:inline-block;">
                    {{ csrf_field() }}
                    {{ method_field('DELETE') }}
                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('ท่านต้องการลบรายการนี้ใช่หรือไม่ ?')">&times; ลบรายการ</button>
                </form>
            </li>
       @endforeach
       </ol>
   </body>
</html>
