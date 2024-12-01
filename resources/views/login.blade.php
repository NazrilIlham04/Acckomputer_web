<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Form</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background-color: #22177A;
      display: flex;
      justify-content: center;
      align-items: center;
      height: 100vh;
    }
    .login-card {
      width: 100%;
      max-width: 400px;
      background: white;
      padding: 30px;
      border-radius: 8px;
      box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }
    .login-card .btn-primary {
      background-color: #007bff;
      border: none;
    }
    .login-card .btn-primary:hover {
      background-color: #0056b3;
    }
  </style>
</head>
<body>
<div class="login-card">
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
    <button type="submit" class="btn btn-primary w-100">Login</button>
    </form>
</div>
</body>

