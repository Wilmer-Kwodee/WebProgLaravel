<!doctype html>
<html class="h-full bg-gray-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drop By Drop</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body class="h-full">
  <div class="min-h-full">
    <x-navbar/>

    {{ $post }}
    {{ $post['title'] }}
    {{ $post['user']['name'] }}
    
    @foreach ($post['reply'] as $reply)
        {{ $reply }}
    @endforeach
    </div>
</body>
</html>
