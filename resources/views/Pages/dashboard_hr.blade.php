<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HR Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body>
    <div class="h-screen">
        <div class="bg-[#D9D9D9] flex h-full">
                <aside class="w-64 bg-[#001F3F] text-white flex flex-col p-4">
                <h1 class="text-2xl font-bold mb-6">HR Dashboard</h1>
                <nav class="space-y-4">
                    <a href="#" class="block py-2 px-4 rounded-[16px] hover:bg-blue-600">Recruitment Metrics</a>
                    <a href="#" class="block py-2 px-4 rounded-[16px] hover:bg-blue-600">Employees</a>
                    <a href="#" class="block py-2 px-4 rounded-[16px] hover:bg-blue-600">Employee Engagement</a>
                    <a href="#" class="block py-2 px-4 rounded-[16px] hover:bg-blue-600">Training and
                        Development</a>
                    <a href="#" class="block py-2 px-4 rounded-[16px] hover:bg-blue-600">Workforce
                        Demographics</a>
                    <a href="#" class="block py-2 px-4 rounded-[16px]-[16px] hover:bg-blue-600">Health and
                        Safety</a>
                </nav>
            </aside>

            <!-- Main Content -->
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

                <!-- Dashboard Content -->
                <main class="flex-1 p-6 overflow-y-auto">
                    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                        <div class="bg-[#008080] shadow p-4 rounded-[16px]">
                            <h3 class="text-lg font-bold">Total Employees</h3>
                            <p class="text-2xl font-semibold mt-2">152</p>
                        </div>

                        <div class="bg-[#008080] shadow p-4 rounded-[16px]">
                            <h3 class="text-lg font-bold">On Leave</h3>
                            <p class="text-2xl font-semibold mt-2">12</p>
                        </div>

                        <div class="bg-[#008080] shadow p-4 rounded-[16px]">
                            <h3 class="text-lg font-bold">Pending Requests</h3>
                            <p class="text-2xl font-semibold mt-2">8</p>
                        </div>

                        <div class="bg-[#008080] shadow p-4 rounded-[16px]">
                            <h3 class="text-lg font-bold">New Hires</h3>
                            <p class="text-2xl font-semibold mt-2">3</p>
                        </div>
                    </div>

                    <!-- Employee Table -->
                    <div class="mt-6 bg-[#008080] shadow  rounded-[16px]">
                        <div class="p-4 ">
                            <h3 class="text-lg font-bold">Recent Employees</h3>
                        </div>
                        <div class="overflow-x-auto">
                            <table class="min-w-full text-left">
                                <thead>
                                    <tr>
                                        <th class="px-6 py-3">Name</th>
                                        <th class="px-6 py-3">Position</th>
                                        <th class="px-6 py-3">Department</th>
                                        <th class="px-6 py-3">Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td class="px-6 py-3">Javier Jezekiel</td>
                                        <td class="px-6 py-3">Software Engineer</td>
                                        <td class="px-6 py-3">IT</td>
                                        <td class="px-6 py-3">Active</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-3">Genela Jhon Mark</td>
                                        <td class="px-6 py-3">HR Manager</td>
                                        <td class="px-6 py-3">HR</td>
                                        <td class="px-6 py-3">Active</td>
                                    </tr>
                                    <tr>
                                        <td class="px-6 py-3">Lagahid Cyvielle</td>
                                        <td class="px-6 py-3">Accountant</td>
                                        <td class="px-6 py-3">Finance</td>
                                        <td class="px-6 py-3">On Leave</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
</body>

</html>
