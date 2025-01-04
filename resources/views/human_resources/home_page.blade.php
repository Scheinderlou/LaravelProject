@extends('layouts.masters')

@section('title', 'Home - Page')

@section('content')
    <!-- Dashboard Content -->

    <div class="container mx-auto p-6">
        <div class="flex gap-2 mb-4">
            <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                Add employee
            </button>
            <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                Edit employee
            </button>
            <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                Add departments
            </button>
            <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                Add position
            </button>
            <a href="{{ route('view_page') }}">
                <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                    Manage payroll
                </button>
            </a>
        </div>
        <!-- Cards Section -->
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
        <div class="mt-6 bg-[#008080] shadow rounded-[16px]">
            <div class="p-4">
                <h3 class="text-lg font-bold">Recent Employees</h3>
            </div>
            <div class="overflow-x-auto">
                <table class="min-w-full text-left">
                    <thead>
                        <tr>
                            <th class="px-6 py-3">Staff</th>
                            <th class="px-6 py-3">Name</th>
                            <th class="px-6 py-3">Position</th>
                            <th class="px-6 py-3">Department</th>
                            <th class="px-6 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="px-6 py-3">1</td>
                            <td class="px-6 py-3">Javier Jezekiel</td>
                            <td class="px-6 py-3">Software Engineer</td>
                            <td class="px-6 py-3">IT</td>
                            <td class="p-4">
                                <span class="inline-block px-3 py-2 text-xs font-bold text-green-100 bg-green-700 rounded">
                                    Active
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">2</td>
                            <td class="px-6 py-3">Genela Jhon Mark</td>
                            <td class="px-6 py-3">HR Manager</td>
                            <td class="px-6 py-3">HR</td>
                            <td class="p-4">
                                <span class="inline-block px-3 py-2 text-xs font-bold text-green-100 bg-green-700 rounded">
                                    Active
                                </span>
                            </td>
                        </tr>
                        <tr>
                            <td class="px-6 py-3">3</td>
                            <td class="px-6 py-3">Lagahid Cyvielle</td>
                            <td class="px-6 py-3">Accountant</td>
                            <td class="px-6 py-3">Finance</td>
                            <td class="p-4">
                                <span class="inline-block px-3 py-2 text-xs font-bold text-white bg-red-900 rounded">
                                    On Leave
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>



@endsection
