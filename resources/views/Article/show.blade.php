<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>show DATA</title>
</head>
<body>
        <li>ID      : {{$article->id}}</li>
        <li>TITLE   : {{$article->title}}</li>
        <li>DETAILS : {{$article->details}}</li>
        <li>DATE    : {{$article->date}}</li>
        <li>AUTHOR  : {{$article->author}}</li>
        <li>COVER   : {{$article->cover}}</li>
        <li>VIEW    : {{$article->view}}</li>

</body>
</html>