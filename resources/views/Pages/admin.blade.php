<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
    {{-- @vite('resources/css/app.css') --}}

</head>

<body class=" bg-[#D9D9D9] flex items-center justify-center h-screen m-0">
    <div class="bg-slate-700 p-6 rounded-lg shadow-lg w-80 text-center">
        <h1 class="text-2xl font-bold text-white mb-6">Login</h1>
        <form action="authenticate.php" method="POST" class="space-y-4">
            <div class="text-left">
                <label for="username" class="block text-sm font-medium text-gray-400"></label>
                <input type="text" name="username" id="username" placeholder="Username" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <div class="text-left">
                <label for="password" class="block text-sm font-medium text-gray-400"></label>
                <input type="password" name="password" id="password" placeholder="Password" required
                    class="w-full px-3 py-2 border border-gray-300 rounded-md text-sm focus:outline-none focus:ring focus:ring-blue-300">
            </div>
            <button type="submit"
                class="w-full px-4 py-2 bg-blue-600 text-white rounded-md text-lg font-semibold hover:bg-blue-700 transition">
                Login
            </button>
        </form>
    </div>
</body>

</html>
