@extends('layouts.masters')

@section('title', 'Employees - Page')

@section('content')

    <div class="container mx-auto p-6 ">
        <div class="flex gap-2 mb-4">
            <button data-modal-toggle="crud-modal"
                class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
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
                <!-- Add Employee Modal -->
                <div id="crud-modal" tabindex="-1" aria-hidden="true"
                    class="hidden fixed inset-0 flex justify-center items-center z-50 backdrop-blur-sm">
                    <div class="relative p-6 w-full max-w-3xl dark:bg-gray-700 text-white rounded-lg shadow-lg">
                        <div class="flex items-center justify-between pb-4 border-b border-white">
                            <h2 class="text-xl font-semibold">Personal Data</h2>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                                data-modal-toggle="crud-modal">
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                    viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                        <form class="pt-4">
                            <div class="grid grid-cols-2 gap-6">
                                <!-- Staff ID -->
                                <div class="flex flex-col">
                                    <label for="staff_id" class="text-sm font-medium mb-1">Staff ID</label>
                                    <input type="text" id="staff_id" name="staff_id"
                                        class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                        placeholder="Enter Staff ID">
                                </div>

                                <!-- Name -->
                                <div class="flex flex-col">
                                    <label for="name" class="text-sm font-medium mb-1">Name</label>
                                    <input type="text" id="name" name="name"
                                        class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                        placeholder="Enter Name">
                                </div>

                                <!-- Email -->
                                <div class="flex flex-col">
                                    <label for="email" class="text-sm font-medium mb-1">Email</label>
                                    <input type="text" id="email" name="email"
                                        class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                        placeholder="Enter Email">
                                </div>

                                <!-- Department -->
                                <div class="flex flex-col">
                                    <label for="department" class="text-sm font-medium mb-1">Department</label>
                                    <input type="text" id="department" name="department"
                                        class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                        placeholder="Enter Department">
                                </div>

                                <!-- Position (Full Width) -->
                                <div class="flex flex-col">
                                    <label for="position" class="text-sm font-medium mb-1">Position</label>
                                    <input type="text" id="position" name="position"
                                        class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                        placeholder="Enter Position">
                                </div>

                                <!-- Status -->
                                <div class="flex flex-col">
                                    <label for="status" class="text-sm font-medium mb-1">Status</label>
                                    <select id="status" name="status"
                                        class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md">
                                        <option value="Active">Active</option>
                                        <option value="On Leave">On Leave</option>
                                        <option value="Resigned">Resigned</option>
                                    </select>
                                </div>
                            </div>

                            <!-- Buttons -->
                            <div class="flex justify-end gap-4 mt-6">
                                <button type="submit"
                                    class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                                    Save
                                </button>
                                <button type="button"
                                    class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                                    data-modal-toggle="crud-modal">
                                    Cancel
                                </button>
                            </div>
                        </form>
                    </div>
                </div>

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
