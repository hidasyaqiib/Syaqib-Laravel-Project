<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  @vite('resources/css/app.css')
</head>
<body class="bg-sky-900 flex justify-center items-center h-screen">
  <div class="bg-white p-8 rounded-lg shadow-md w-full max-w-md">
    <h1 class="text-2xl font-bold mb-4 text-center">Login</h1>
    <form class="space-y-4">
      <div>
        <label for="username" class="block font-medium mb-1">Username:</label>
        <input type="text" id="username" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-[#4caf50]" placeholder="Enter your username">
      </div>
      <div>
        <label for="password" class="block font-medium mb-1">Password:</label>
        <input type="password" id="password" class="w-full border border-gray-300 rounded-md px-3 py-2 focus:outline-none focus:ring focus:ring-[#4caf50]" placeholder="Enter your password">
      </div>
      <button type="submit" class="w-full bg-[#4caf50] hover:bg-[#43a047] text-white font-medium py-2 px-4 rounded-md focus:outline-none focus:ring focus:ring-[#43a047]">LOGIN</button>
    </form>
  </div>
</body>
</html>