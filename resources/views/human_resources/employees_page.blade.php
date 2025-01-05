@extends('layouts.masters')

@section('title', 'Employees - Page')

@section('content')

    <div class="container mx-auto p-6 ">
        <div class="flex gap-2 mb-4">
            <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                Add employee
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
        <table class="min-w-full text-left text-md rounded-[14px] bg-[#008080]">
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
                        <span class="inline-block px-2 py-1 text-xs font-bold text-green-200 bg-green-800 rounded">
                            Active
                        </span>
                        <a href="#">
                            <button class="inline-block px-2 py-1 text-xs font-bold text-green-200 bg-[#EDA841] rounded">
                                Edit
                            </button>
                        </a>
                    </td>

                </tr>
                <tr>
                    <td class="px-6 py-3">2</td>
                    <td class="px-6 py-3">Genela Jhon Mark</td>
                    <td class="px-6 py-3">HR Manager</td>
                    <td class="px-6 py-3">HR</td>
                    <td class="p-4">
                        <span class="inline-block px-2 py-1 text-xs font-bold text-green-200 bg-green-800 rounded">
                            Active
                        </span>
                        <a href="#">
                            <button class="inline-block px-2 py-1 text-xs font-bold text-green-200 bg-[#EDA841] rounded">
                                Edit
                            </button>
                        </a>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-3">3</td>
                    <td class="px-6 py-3">Lagahid Cyvielle</td>
                    <td class="px-6 py-3">Accountant</td>
                    <td class="px-6 py-3">Finance</td>
                    <td class="p-4">
                        <span class="inline-block px-2 py-1 text-xs font-bold text-green-200 bg-red-900 rounded">
                            On Leave
                        </span>
                        <a href="#">
                            <button class="inline-block px-2 py-1 text-xs font-bold text-green-200 bg-[#EDA841] rounded">
                                Edit
                            </button>
                        </a>
                    </td>

                </tr>
            </tbody>


        </table>
    </div>
@endsection
