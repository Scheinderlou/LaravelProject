@extends('layouts.hr_layouts')

@section('title', 'Admin - Page')

@section('content')

    <div class="container mx-auto p-6">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6 mb-6">
            <div class="bg-gray-100 shadow p-4 rounded-[16px]">
                <h3 class="text-lg text-gray-800 font-bold flex items-center">
                    <img src="{{ asset('img/employee.svg') }}" alt="Edit Icon" class="w-8 h-8 fill-current mr-2" />
                    <span>Total Employee</span>
                </h3>
                <p class="text-2xl text-gray-800 font-semibold mt-2">
                    <?php
                    // Fetching count directly in the Blade file
                    use Illuminate\Support\Facades\DB;
                    
                    $employeeCount = DB::table('hr_employees_new')->count();
                    echo $employeeCount;
                    ?>
                </p>
            </div>

            <div class="bg-gray-100 shadow p-4 rounded-[16px]">
                <h3 class="text-lg text-gray-800 font-bold flex items-center">
                    <img src="{{ asset('img/job-search.svg') }}" alt="Edit Icon" class="w-8 h-8 fill-current mr-2" />
                    <span>Total Jobs</span>
                </h3>
                <p class="text-2xl text-gray-800 font-semibold mt-2">
                    <?php
                    
                    $jobsCount = DB::table('hr_jobs')->count();
                    echo $jobsCount;
                    ?>
                </p>
            </div>

            <div class="bg-gray-100 shadow p-4 rounded-[16px]">
                <h3 class="text-lg text-gray-800 font-bold flex items-center">
                    <img src="{{ asset('img/company.svg') }}" alt="Edit Icon" class="w-8 h-8 fill-current mr-2" />
                    <span>Total Department</span>
                </h3>
                <p class="text-2xl text-gray-800 font-semibold mt-2">
                    <?php
                    $employeeCount = DB::table('hr_departments')->count();
                    echo $employeeCount;
                    ?>
                </p>
            </div>
        </div>
        <div class="flex gap-4 items-center mb-6">
            <button data-modal-toggle="add-employee-modal"
                class="flex py-2 px-4 rounded-[16px] font-bold text-black hover:text-white transition duration-300">
                <img src="{{ asset('img/eye.svg') }}" alt="Edit Icon" class="w-8 h-8 fill-current mr-2" />
                <span class="text-lg">Create Employee</span>
            </button>
            <a href="{{ route('view_page') }}" class="inline-block">
                <button class="flex py-2 px-4 rounded-[16px] font-bold text-black hover:text-white transition duration-300">
                    <img src="{{ asset('img/payroll.svg') }}" alt="Edit Icon" class="w-8 h-8 fill-current mr-2" />
                    <span class="text-lg">Manage Payroll</span>
                </button>
            </a>
        </div>

        <table class="min-w-full text-left text-md font-large rounded-[14px] bg-gray-100 text-gray-800">
            <thead>
                <tr>
                    <th class="px-6 py-3">Staff</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Position</th>
                    <th class="px-6 py-3">Department</th>
                    <th class="px-6 py-3">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($results as $result)
                    <tr class="text-gray-800 font-medium">
                        <td class="px-6 py-3">{{ $result->employee_id }}</td>
                        <td class="px-6 py-3">{{ $result->name }}</td>
                        <td class="px-6 py-3">{{ $result->job_title }}</td>
                        <td class="px-6 py-3">{{ $result->department_name }}</td>
                        <td>
                            <button class="px-2 py-1 text-sm font-bold rounded items-center">
                                <img src="{{ asset('img/delete.svg') }}" alt="Edit Icon"
                                    class="w-6 h-6 mr-2 fill-current" />
                            </button>
                            <button data-modal-toggle="edit-employee-modal"
                                class="px-2 py-1 text-sm font-bold rounded items-center">
                                <img src="{{ asset('img/edit.svg') }}" alt="Edit Icon" class="w-6 h-6 fill-current" />
                            </button>
                        </td>
                    </tr>
                @endforeach()
            </tbody>

            <!-- Add Employee Modal -->
            <div id="add-employee-modal" tabindex="-1" aria-hidden="true"
                class="hidden fixed inset-0 flex justify-center items-center z-50 backdrop-blur-sm">
                <div class="relative p-6 w-full max-w-3xl bg-[#555555] text-white rounded-lg shadow-lg">
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
                    <form class="pt-4" method="POST" action="{{ route('display') }}">
                        @csrf
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
                                    @foreach ($jobs as $job)
                                        <option value="{{ $job->job_id }}">{{ $job->job_title }}</option>
                                    @endforeach
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
                                    @foreach ($departments as $department)
                                        <option value="{{ $department->department_id }}">
                                            {{ $department->department_name }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="flex flex-col">
                                <label for="job_title_select" class="text-sm font-medium mb-1">Date of Birth</label>
                                <input type="date"
                                    class = "block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                    id="birthday" name="birthday">
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
                <div class="relative p-6 w-full max-w-3xl bg-[#555555]  text-white rounded-lg shadow-lg">
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
                                    class="block w-full px-4 py-2 bg-[#CFCFCF] text-red-500 border border-gray-300 rounded-md shadow-md"
                                    value="1" placeholder="Enter Staff ID" disabled>
                            </div>

                            <div class="flex flex-col">
                                <label for="edit_name" class="text-sm font-medium mb-1">Name</label>
                                <input type="text" id="edit_name" name="name"
                                    class="block w-full px-4 py-2 bg-[#F3F4F6] text-black border border-gray-300 rounded-md shadow-md"
                                    value="Jezekiel Javier" placeholder="Enter Name">
                            </div>

                            <div class="flex flex-col">
                                <label for="edit_email" class="text-sm font-medium mb-1">Email</label>
                                <input type="text" id="edit_email" name="email"
                                    class="block w-full px-4 py-2 bg-[#F3F4F6] text-black border border-gray-300 rounded-md shadow-md"
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
