<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Web Programming</title>
  <!-- @vite('resources/css/app.css') -->
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Welcome to our world, This is Register Page.
  </h1>
  <h1>register page</h1>

<form method="post" action="{{ url('/signup') }}">
    @csrf
    <div>
        <a>name</a>
        <input name="name_input" />
    </div>
    <div>
        <a>email</a>
        <input name="email_input" />
    </div>
    <div>
        <a>password</a>
        <input name="password_input" />
    </div>
    <button type="submit">make acc</button>
</form>
</body>
</html>