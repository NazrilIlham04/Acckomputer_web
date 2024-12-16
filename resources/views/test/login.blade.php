<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body style="background-color: #133E87; display: flex; justify-content: center; align-items: center; height: 100vh;">
  <div class="login-card" style="width: 100%; max-width: 400px; background: white; padding: 30px; border-radius: 8px; box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);">
    <h3 class="text-center mb-4">Login</h3>
    <form method="POST" action="/login">
      @csrf
      <div class="mb-3">
        <label for="username" class="form-label">Username</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Masukkan username" required>
      </div>
      <div class="mb-3">
        <label for="password" class="form-label">Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Masukkan password" required>
      </div>
      <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" id="ingatsaya" name="ingatsaya">
        <label class="form-check-label" for="remember">Ingat saya</label>
      </div>
      <button type="submit" class="btn btn-primary w-100" style="background-color: #007bff; border: none;">Login</button>
      <div class="d-flex justify-content-between mt-3">
        <a href="#" style="font-size: 14px; text-decoration: none; color: #007bff;">Lupa password?</a>
        <a href="/register" style="font-size: 14px; text-decoration: none; color: #007bff;">Daftar</a>
      </div>
    </form>
  </div>
</body>
</html>
