<!doctype html>
<html class="h-full bg-gray-100">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>✨ Web Programming ✨</title>
  @vite('resources/css/app.css')
  <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>

<body class="h-full">
  <div class="min-h-full">
    <x-navbar/>
    <header class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          <h1 class="text-3xl font-bold tracking-tight text-gray-900">
            Community
            </h1>
            <br/>
            <a href="/newpost" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">+ New Post</a>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        @foreach ($posts as $post)
            <article class="py-8 max-w-screen-md border-b border-gray-300">
                <h2 class="mb-1 text-3xl tracking-tight font-bold text-gray-900">{{ $post['title']}}</h2>
                <p class="my-4 font-light">{{ $post['body']}}</p>
                <a href="">Read more</a>
            </article>
        @endforeach
      </div>
    </main>
  </div>
</body>
</html>
