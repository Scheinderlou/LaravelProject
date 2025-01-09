@extends('layouts.hr_layouts')

@section('title', 'Department - Page')

@section('content')
    @push('scripts')
        <script src="{{ asset('js/editdepartment.js') }}"></script> <!-- Linking the external script -->
    @endpush
    <div class="container mx-auto p-6">
        <div class="flex gap-2 mb-4">
            <button data-modal-toggle="add-department-modal"
                class="flex py-2 px-4 rounded-[16px] font-bold text-black hover:text-white transition duration-300">
                <img src="{{ asset('img/company.svg') }}" alt="Edit Icon" class="w-8 h-8 fill-current mr-2" />
                <span class="text-lg">Create Department Listing</span>
            </button>
        </div>
        <div class="overflow-x-auto my-6 shadow-lg bg-gray-100 rounded-lg">
            <table class="min-w-full text-left border-collapse border-gray-200">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-lg font-medium text-gray-800 text-center">Department ID</th>
                        <th class="px-6 py-3 text-lg font-medium text-gray-800 text-center">Department Name</th>
                        <th class="px-6 py-3 text-lg font-medium text-gray-800 text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($departments as $department)
                        <tr class="text-gray-800">
                            <td class="px-6 py-3 text-center text-md">{{ $department->department_id }}</td>
                            <td class="px-6 py-3 text-center text-md">{{ $department->department_name }}</td>
                            <td class="flex justify-center p-4 text-gray-800 ">
                                <button class="px-2 py-1 text-sm font-bold rounded flex items-center">
                                    <img src="{{ asset('img/delete.svg') }}" alt="Edit Icon"
                                        class="w-6 h-6 mr-2 fill-current" />
                                </button>
                                <button data-modal-toggle="edit-department-modal"
                                    class="px-2 py-1 text-sm font-bold rounded flex items-center">
                                    <img src="{{ asset('img/edit.svg') }}" alt="Edit Icon"
                                        class="w-6 h-6 mr-2 fill-current" />
                                </button>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <!--Add Department Modal-->
            <div id="add-department-modal" tabindex="-1" aria-hidden="true"
                class="hidden fixed inset-0 flex justify-center items-center z-50 backdrop-blur-sm">
                <div class="relative p-6 w-full max-w-2xl bg-[#555555]  text-white rounded-lg shadow-lg">
                    <div class="flex items-center justify-between pb-4 border-b border-white">
                        <h2 class="text-xl font-semibold">Add Department</h2>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                            data-modal-toggle="add-department-modal">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <form class="pt-4" method="POST" action="{{ route('addDepartment') }}">
                        @csrf
                        <div class="flex flex-col mb-4">
                            <label for="department_name" class="text-sm font-medium mb-1">Department Name</label>
                            <input type="text" id="department_name" name="department_name"
                                class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                placeholder="Enter Department Name">
                        </div>
                        <div class="flex justify-end gap-4 mt-6">
                            <button type="submit"
                                class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                                Save
                            </button>
                            <button type="button"
                                class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                                data-modal-toggle="add-department-modal">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <!--Edit Department Modal-->
            <div id="edit-department-modal" tabindex="-1" aria-hidden="true"
                class="hidden fixed inset-0 flex justify-center items-center z-50 backdrop-blur-sm">
                <div class="relative p-6 w-full max-w-2xl bg-[#555555]  text-white rounded-lg shadow-lg">
                    <div class="flex items-center justify-between pb-4 border-b border-white">
                        <h2 class="text-xl font-semibold">Edit Department</h2>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                            data-modal-toggle="edit-department-modal">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <form class="pt-4"
                        action="{{ route('updateDepartmentPost', ['department_id' => 'department_id_placeholder']) }}">
                        @csrf
                        @method ('PUT')
                        <div class="flex flex-col mb-4">
                            <label for="edit_department_id" class="text-sm font-medium mb-1">Department ID</label>
                            <input type="text" id="edit_department_id" name="department_id"
                                class="block w-full px-4 py-2 bg-[#CFCFCF] text-red-500 border border-gray-300 rounded-md shadow-md"
                                value="" disabled>
                        </div>
                        <div class="flex flex-col mb-4">
                            <label for="edit_department_name" class="text-sm font-medium mb-1">Department Name</label>
                            <input type="text" id="edit_department_name" name="department_name"
                                class="block w-full px-4 py-2 bg-[#F3F4F6] text-black border border-gray-300 rounded-md shadow-md"
                                value="" placeholder="Enter Department Name">
                        </div>
                        <div class="flex justify-end gap-4 mt-6">
                            <button type="submit"
                                class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                                Save
                            </button>
                            <button type="button"
                                class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                                data-modal-toggle="edit-department-modal">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>

@endsection
