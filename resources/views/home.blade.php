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
          {{-- <h1 class="text-3xl font-bold tracking-tight text-gray-900">
              Dashboard
            </h1> --}}
        <h1 class="text-3xl font-bold">
            Under the Sea
            </h1>
            Save water, save the world!
      </div>
    </header>
    <main>
      <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        <!-- Your content -->
        {{-- <p>Welcome to my page!</p> --}}
        <hr>
        <h1>Your daily Challenge!</h1>
        <input type="checkbox" id="vehicle1" name="vehicle1" value="Bike">
<label for="vehicle1"> I have a bike</label><br>
<input type="checkbox" id="vehicle2" name="vehicle2" value="Car">
<label for="vehicle2"> I have a car</label><br>
<input type="checkbox" id="vehicle3" name="vehicle3" value="Boat">
<label for="vehicle3"> I have a boat</label><br>
        <p>14 October 2024</p>
        <p>World condition right now: 70%</p>
        <p>Water crisis in africa: 3.3 mil</p>
        <p>Let's fight this together!</p>
      </div>
    </main>
  </div>
</body>
</html>
