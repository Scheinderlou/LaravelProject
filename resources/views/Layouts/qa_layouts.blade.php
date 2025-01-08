<!DOCTYPE html>
<html lang="en">

<head>
    <title>@yield('title')</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="h-screen">
        <div class="bg-[#D9D9D9] flex h-full">
            <aside class="w-64 bg-[#333333] text-white flex flex-col p-4">
                <h1 class="text-2xl font-bold mb-6">
                    Quality Management
                </h1>
                <nav class="space-y-4">
                    <a href="{{ route('qa_checks') }}"
                        class="block py-2 px-4 rounded-[16px] hover:text-black hover:bg-[#F3F4F6]">Quality
                        Management</a>
                    <a href="{{ route('defects_page') }}"
                        class="block py-2 px-4 rounded-[16px] hover:text-black hover:bg-[#F3F4F6]">Defects</a>
                    <a href="{{ route('tp_page') }}"
                        class="block py-2 px-4 rounded-[16px] hover:text-black hover:bg-[#F3F4F6]">
                        Protocol Management</a>
                </nav>
            </aside>

            <div class="flex-1 flex flex-col">
                <header class="bg-[#333333] shadow p-4 flex items-center justify-between">
                    <h2 class="text-xl text-white font-semibold">Welcome, Admin</h2>
                    <div class="flex items-center space-x-4">
                        <button
                            class="bg-[#111111] text-white hover:text-black px-4 py-2 rounded-[16px] hover:bg-white">Logout</button>
                    </div>
                </header>

                <main class="p-6 flex-1 overflow-y-auto">
                    @yield('content')
                </main>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/pop-up.js') }}"></script>

</body>

</html>
