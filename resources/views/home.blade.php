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
    <main class="bg-white shadow">
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
          {{-- <h1 class="text-3xl font-bold tracking-tight text-gray-900">
              Dashboard
            </h1> --}}
            <h1 class="text-8xl font-bold text-cyan-600">
              Drop by Drop
            </h1>
            <p class="mt-3 text-lg text-cyan-600">Save water, save the world!</p>
        </div>
        <img src="{{url('/ocean.png')}}" style="width: 100%"/>
        
      <div>
        <img src="{{ url('/home 01-no-text.png') }}">
      </div>

      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <h1 class="mt-16 text-7xl font-bold text-cyan-400">Your daily Challenge!</h1>
        <div id="challenges">
          @foreach ($challenges as $challenge)
          <article class="py-3 max-w-screen-md border-b border-gray-300">
            <input type="checkbox" class="challenge-checkbox" id="challenge{{ $loop->index }}" name="challenge{{ $loop->index }}" value="{{ $challenge['challenge'] }}">
            <label class="text-2xl" for="challenge{{ $loop->index }}">{{ $challenge['challenge']}}</label>
          </article>
          @endforeach
        </div>
        {{-- @if()        
        @else
        @endif --}}
        <p class="text-2xl italic text-gray-500">(please login first to view your daily challenges...)</p>

        <div id="congrats-message" style="display: none;">
          <br/>
          <h1 class="text-5xl font-bold text-green-500">Challenge Completed! Congratulations!!!</h1>
          <p>Share this happy moment with the community!</p>
          <br/>
          <a href="community" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Share with community -></a>
        </div>

        </br>
        </br>
        </br>
        <h1 class="text-2xl font-bold">14 October 2024</h1>
        <p>World condition right now: 70%</p>
        <p>Water crisis in africa: 3.3 mil</p>
        <p>Climate index: 7.31</p>
        </br>
        </br>
        </br>
        <h1 class="text-2xl font-bold">Let's fight this together!</h1>
        
        <br/>
        <br/>
      </div>
    </main>
  </div>

  <script>
    const checkboxes = document.querySelectorAll('.challenge-checkbox');
    const congratsMessage = document.getElementById('congrats-message');
    const challenges = document.getElementById('challenges');

    checkboxes.forEach(checkbox => {
      checkbox.addEventListener('change', () => {
        if (Array.from(checkboxes).every(cb => cb.checked)) {
            challenges.style.display = 'none';
          congratsMessage.style.display = 'block';
        } else {
          congratsMessage.style.display = 'none';
        }
      });
    });
  </script>
</body>
</html>
