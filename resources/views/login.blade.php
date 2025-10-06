<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Smart Helmet - Login</title>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&family=Permanent+Marker&display=swap" rel="stylesheet">
  @vite(['resources/css/app.css', 'resources/css/styles.css', 'resources/js/app.js'])
</head>
<body>
  <div class="page-wrap">
    <div class="frame">
      <div class="left">
        <div class="card">
          <h2 class="title">Log in account</h2>
          <p class="subtitle">Masuk dengan email dan password Anda</p>

          <form method="POST" action="{{ route('login.submit') }}">
            @csrf
            <label class="field-label">Email</label>
            <input type="email" id="email" name="email" class="underline-input" required>

            <label class="field-label">Password</label>
            <input type="password" id="password" name="password" class="underline-input" required>

            <button class="btn" type="submit">Log In</button>

            <p class="small">
              By clicking continue, you agree to our <strong>Terms of Service</strong> and <strong>Privacy Policy</strong>
            </p>
          </form>
        </div>
      </div>

      <div class="right">
        <div class="hero">
          <h1 class="brand">Smart<br>Helmet</h1>
          <div class="illustration">
            <img src="{{ asset('images/logo.jpg') }}" alt="Logo">
          </div>
        </div>
      </div>
    </div>
  </div>
</body>
</html>
