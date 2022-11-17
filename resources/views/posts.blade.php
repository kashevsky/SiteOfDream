
<!doctype html>
<html lang="en">
<head>
<meta charset="utf-8"> 
<title>Посты</title>
<link rel="stylesheet" type="text/css" href="/style.css">
</head>
<body>
<div class="content">
<h1>Посты</h1>
<div class="posts">
@foreach ($posts as $post)
<div class="post">
<h2>{{$post->title}}</h2>
<img src = "{{$post->image}}">
<p>{{$post->description}}</p>
</div>    
@endforeach



</div>
</div>
</body>
</html>