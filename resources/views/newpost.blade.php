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
              New Post
            </h1>
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        <form method="post" action="{{ url('/addnew') }}" (yes, gausah di passing parameter apa apa)
        >
            @csrf
            <input name="title" placeholder="title..."></input>
            <input name="body" placeholder="body..."></input>
            <button type="submit">add new</button>
        </form>
      </div>
    </main>
  </div>
</body>
</html>
