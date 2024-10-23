<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Drop By Drop</title>
  <!-- @vite('resources/css/app.css') -->
</head>
<body>
  <h1 class="text-3xl font-bold underline">
    Hello Again! This is Login Page.
  </h1>

  <h1>login page</h1>

<form method="post" action="{{ url('/logincheck') }}">
    @csrf
    <div>
        <a>email</a>
        <input name="email_input" />
    </div>
    <div>
        <a>password</a>
        <input name="password_input" />
    </div>
    <button type="submit">sign in</button>
</form>

<a href="{{ url('/register') }}">sign up</a>
</body>
</html>