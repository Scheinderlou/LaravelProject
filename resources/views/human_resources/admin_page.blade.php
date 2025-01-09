@extends('layouts.hr_layouts')

@section('title', 'Admin - Page')

@section('content')

    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-5">
            <div class="bg-[#333333] shadow p-4 rounded-[16px]">
                <h3 class="text-lg text-gray-50 font-bold">Total Employees</h3>
                <p class="text-2xl text-gray-50 font-semibold mt-2">52</p>
            </div>

            <div class="bg-[#333333] shadow p-4 rounded-[16px]">
                <h3 class="text-lg text-gray-50 font-bold">Total Jobs</h3>
                <p class="text-2xl text-gray-50 font-semibold mt-2">12</p>
            </div>

            <div class="bg-[#333333] shadow p-4 rounded-[16px]">
                <h3 class="text-lg text-gray-50 font-bold">Total Department</h3>
                <p class="text-2xl text-gray-50 font-semibold mt-2">8</p>
            </div>
        </div>
        <div class="flex gap-2 mb-4">
            <button data-modal-toggle="add-employee-modal"
                class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                Create employee
            </button>
            <a href="{{ route('view_page') }}">
                <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                    Manage payroll
                </button>
            </a>
        </div>

        <table class="min-w-full text-left text-md rounded-[14px] bg-[#333333]">
            <thead>
                <tr>
                    <th class="px-6 py-3 text-gray-50 font-medium">Staff</th>
                    <th class="px-6 py-3 text-gray-50 font-medium">Name</th>
                    <th class="px-6 py-3 text-gray-50 font-medium">Position</th>
                    <th class="px-6 py-3 text-gray-50 font-medium">Department</th>
                    <th class="px-6 py-3 text-gray-50 font-medium">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
                    <tr>
                        <td class="px-6 py-3">{{ $result->employee_id }}</td>
                        <td class="px-6 py-3">{{ $result->name }}</td>
                        <td class="px-6 py-3">{{ $result->job_title }}</td>
                        <td class="px-6 py-3">{{ $result->department_name }}</td>
                        <td class="p-4">
                            <button class="inline-block px-2 py-1 text-xs font-bold text-green-200 bg-red-500 rounded">
                                Delete
                            </button>
                            <button data-modal-toggle="edit-employee-modal"
                                class="inline-block px-2 py-1 text-xs font-bold text-green-200 bg-[#EDA841] rounded">
                                Edit
                            </button>
                        </td>
                    </tr>
                @endforeach()
            </tbody>

            <!-- Add Employee Modal -->
            <div id="add-employee-modal" tabindex="-1" aria-hidden="true"
                class="hidden fixed inset-0 flex justify-center items-center z-50 backdrop-blur-sm">
                <div class="relative p-6 w-full max-w-3xl dark:bg-gray-700 text-white rounded-lg shadow-lg">
                    <div class="flex items-center justify-between pb-4 border-b border-white">
                        <h2 class="text-xl font-semibold">Personal Data</h2>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                            data-modal-toggle="add-employee-modal">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <form class="pt-4">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="flex flex-col">
                                <label for="employee_id" class="text-sm font-medium mb-1">Employee ID</label>
                                <input type="text" id="employee_id" name="employee_id"
                                    class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                    placeholder="Enter Employee ID">
                            </div>
                            <div class="flex flex-col">
                                <label for="job_id" class="text-sm font-medium mb-1">Job ID</label>
                                <select id="job_id" name="job_id"
                                    class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md">
                                    <option value="" disabled selected>Job ID</option>
                                </select>
                            </div>

                            <div class="flex flex-col">
                                <label for="name" class="text-sm font-medium mb-1">Name</label>
                                <input type="text" id="name" name="name"
                                    class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                    placeholder="Enter Name">
                            </div>

                            <div class="flex flex-col">
                                <label for="email" class="text-sm font-medium mb-1">Email</label>
                                <input type="text" id="email" name="email"
                                    class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                    placeholder="Enter Email">
                            </div>

                            <div class="flex flex-col">
                                <label for="department_select" class="text-sm font-medium mb-1">Department</label>
                                <select id="department_select" name="department"
                                    class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md">
                                    <option value="" disabled selected>Select Department</option>
                                </select>
                            </div>
                            <div class="flex flex-col">
                                <label for="job_title_select" class="text-sm font-medium mb-1">Date of Birth</label>
                                <input type="date"
                                    class = "block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                    id="birthday" name="birthday">
                            </div>
                            <div class="flex flex-col">
                                <label for="password" class="text-sm font-medium mb-1">Password</label>
                                <input type="password" id="password" name="password"
                                    class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                    placeholder="Password">
                            </div>
                            <div class="flex flex-col">
                                <label for="address" class="text-sm font-medium mb-1">Address</label>
                                <input type="text" id="address" name="address"
                                    class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                    placeholder="Address">
                            </div>
                        </div>

                        <div class="flex justify-end gap-4 mt-6">
                            <button type="submit"
                                class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                                Save
                            </button>
                            <button type="button"
                                class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                                data-modal-toggle="add-employee-modal">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>

            <!-- Edit Employee Modal -->
            <div id="edit-employee-modal" tabindex="-1" aria-hidden="true"
                class="hidden fixed inset-0 flex justify-center items-center z-50 backdrop-blur-sm">
                <div class="relative p-6 w-full max-w-3xl dark:bg-gray-700 text-white rounded-lg shadow-lg">
                    <div class="flex items-center justify-between pb-4 border-b border-white">
                        <h2 class="text-xl font-semibold">Edit Employee Details</h2>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                            data-modal-toggle="edit-employee-modal">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <form class="pt-4">
                        <div class="grid grid-cols-2 gap-6">
                            <div class="flex flex-col">
                                <label for="edit_staff_id" class="text-sm font-medium mb-1">Staff ID</label>
                                <input type="text" id="edit_staff_id" name="staff_id"
                                    class="block w-full px-4 py-2 bg-gray-400 text-red-500 border border-gray-300 rounded-md shadow-md"
                                    value="1" placeholder="Enter Staff ID" disabled>
                            </div>

                            <div class="flex flex-col">
                                <label for="edit_name" class="text-sm font-medium mb-1">Name</label>
                                <input type="text" id="edit_name" name="name"
                                    class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                    value="Jezekiel Javier" placeholder="Enter Name">
                            </div>

                            <div class="flex flex-col">
                                <label for="edit_email" class="text-sm font-medium mb-1">Email</label>
                                <input type="text" id="edit_email" name="email"
                                    class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                    value="jez@example.com" placeholder="Enter Email">
                            </div>

                            <div class="flex flex-col">
                                <label for="edit_department" class="text-sm font-medium mb-1">Department</label>
                                <input type="text" id="edit_department" name="department"
                                    class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                    value="IT Department" placeholder="Enter Department">
                            </div>

                            <div class="flex flex-col">
                                <label for="edit_position" class="text-sm font-medium mb-1">Position</label>
                                <input type="text" id="edit_position" name="position"
                                    class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                    value="Software Developer" placeholder="Enter Position">
                            </div>
                        </div>

                        <div class="flex justify-end gap-4 mt-6">
                            <button type="submit"
                                class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                                Save
                            </button>
                            <button type="button"
                                class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                                data-modal-toggle="edit-employee-modal">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </table>
    </div>

@endsection
