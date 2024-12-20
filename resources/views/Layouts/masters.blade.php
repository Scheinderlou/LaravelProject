<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="h-screen">
        <div class="bg-[#D9D9D9] flex h-full">
            <aside class="w-64 bg-[#001F3F] text-white flex flex-col p-4">
                <a href="{{ route('home_page') }}" class="text-2xl font-bold mb-6">
                    HR
                </a>
                <nav class="space-y-4">
                    <a href="{{ route('employees_page') }}"
                        class="block py-2 px-4 rounded-[16px] hover:bg-blue-600">Employees</a>
                    <a href="{{ route('view_page') }}"
                        class="block py-2 px-4 rounded-[16px] hover:bg-blue-600">Payroll</a>
                    <a href="#" class="block py-2 px-4 rounded-[16px] hover:bg-blue-600">TBA</a>
                    <a href="#" class="block py-2 px-4 rounded-[16px] hover:bg-blue-600">TBA</a>
                    <a href="#" class="block py-2 px-4 rounded-[16px] hover:bg-blue-600">TBA</a>
                </nav>
            </aside>

            <div class="flex-1 flex flex-col">
                <!-- Top Navbar -->
                <header class="bg-[#001F3F] shadow p-4 flex items-center justify-between">
                    <h2 class="text-xl text-white font-semibold">Welcome, Admin</h2>
                    <div class="flex items-center space-x-4">
                        <input type="text" placeholder="Search..." class="border rounded-[16px] px-4 py-2">
                        <button
                            class="bg-blue-700 text-white px-4 py-2 rounded-[16px] hover:bg-blue-800">Logout</button>
                    </div>
                </header>

                <main class="p-6 flex-1 overflow-y-auto">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
</body>

</html>
