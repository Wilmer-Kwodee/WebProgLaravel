<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Profile</title>
    @vite('resources/css/app.css')
    <link rel="stylesheet" href="https://rsms.me/inter/inter.css">
</head>
<body>
    <x-navbar/>
    {{-- <div class="h-[300px] bg-blue-950"></div> --}}
    <img class="brightness-50 h-[300px] w-screen" src="{{ asset('home 01-water-new.png') }}">
    <div id="section-1" class="p-16">
        <div class="flex gap-4 mb-10">
            <img class="h-32 w-32 rounded-full"
            src={{asset("profile-circle-icon-512x512-zxne30hp.png")}}
            alt="">
            <div class="flex flex-col gap-2">
                <p class="text-3xl font-bold text-cyan-400">
                    {{$currUser->name}}
                </p>
                <p>{{$currUser->email}}</p>
                <p>Joined at {{
                    substr($currUser->created_at, 0, 10)
                }}
                </p>
            </div>
        </div>
        <div class="mb-10">
            <p class="font-bold text-3xl">Challenges History:</p>
            <article class="py-3 my-6 w-[100%] bg-cyan-200 rounded-xl">
            <input 
                type="checkbox" 
                class="ml-4 challenge-checkbox" 
            />
            <label class="ml-4 text-2xl font-bold italic">Turn off taps when not in use</label>
            </article>
        </div>
        <div class="mb-10">
            <p class="font-bold text-3xl">My community posts:</p>
            {{-- <article class="my-6 max-w-sm rounded-lg overflow-hidden shadow-lg bg-white border border-gray-300">
                <div class="flex items-center p-4">
                    <img class="w-12 h-12 rounded-full border-2 border-blue-500"
                        src="https://via.placeholder.com/150" />
                    <div class="ml-4">
                        <div class="flex">
                            <p class="text-lg font-bold text-gray-800">username</p>
                            <p class="text-sm text-gray-500 ml-5 font-bold">5 mins</p>
                        </div>
                        <div>
                            <p class="text-md text-gray-800">Title</p>
                        </div>
                    </div>
                </div>
                <img class="w-full h-36 object-cover" src="" />
            </article> --}}
        </div>
    </div>
    <x-footer/>
</body>
</html>