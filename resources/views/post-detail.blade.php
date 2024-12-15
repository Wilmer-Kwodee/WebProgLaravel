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

    <div class="flex flex-col justify-center items-center px-48 py-10 space-y-2">
        <p class="text-3xl font-bold text-gray-800">{{ $post['title'] }}</p>

        @if ($post['image'])
            <img class="w-auto h-64 object-cover" src={{$post['image']}} alt="Image not found" />
        @endif

        <p class="text-lg text-gray-700">{{ $post['body'] }}</p>
    </div>


    {{ $post }}

    <form action="{{ url('/addReply') }}" method="POST" class="px-48 py-5 space-y-3">
        @csrf
        <input type="hidden" name="postId" value={{ $post['id'] }} />
        <div class="flex space-x-2">
            <input name="description" class="w-full p-3 border rounded" placeholder="Add your reply..."></input>

            <button type="submit" class="px-4 py-3 bg-cyan-500 text-white font-bold rounded hover:bg-cyan-700">
                Reply
            </button>
        </div>
    </form>

    @foreach ($post['reply'] as $reply)
        {{ $reply }}
    @endforeach


    </div>
</body>
</html>
