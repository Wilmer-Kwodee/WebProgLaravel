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
    <x-navbar/>
    <header class="p-12 text-start pl-24">
        <h1 class="text-7xl font-bold text-cyan-500">Proof that you did <br/> the challenge? 🤨</h1>
        <div class="text-gray-400 text-4xl">Let the Community  judge</div>
        <div class="max-w-md mb-10">
            <div class="flex items-center justify-center w-full">
              <label for="image-upload" class="flex flex-col items-center justify-center w-full h-48 border-2 border-dashed border-gray-300 rounded-lg cursor-pointer bg-gray-50 hover:bg-gray-100">
                <div class="flex flex-col items-center justify-center">
                  <svg class="w-10 h-10 mb-3 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18M10 8h4m-2 12h.01"></path>
                  </svg>
                  <p class="mb-2 text-sm text-gray-500">
                    <span class="font-semibold">Click to upload</span> or drag and drop
                  </p>
                  <p class="text-xs text-gray-500">PNG, JPG, GIF (Max 2MB)</p>
                </div>
                <input id="image-upload" type="file" class="hidden" accept="image/*" />
              </label>
            </div>
            <button class="w-1/6 mx-auto rounded-full bg-backgroundColor px-5 py-3 text-sm font-medium text-white bg-cyan-500 hover:bg-cyan-700" type="submit">Post!</button>
        </div>
    </header>
</body>
<x-footer/>
</html>
