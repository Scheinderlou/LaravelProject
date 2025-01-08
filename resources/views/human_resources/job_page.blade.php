@extends('layouts.masters')

@section('title', 'Job - page')

@section('content')

    <div class="container mx-auto p-6">
        <div class="flex gap-2 mb-4">
            <button class="px-6 py-2 text-white bg-[#001F3F] rounded-md hover:bg-blue-600 transition""
                data-modal-toggle="add-job-modal">Add Job</button>
        </div>
        <div class="overflow-x-auto my-6 bg-[#008080] shadow-lg rounded-[14px]">
            <table class="min-w-full text-left border-collapse">
                <thead>
                    <tr>
                        <th class="px-6 py-3 text-sm font-medium text-black text-center">Job ID</th>
                        <th class="px-6 py-3 text-sm font-medium text-black text-center">Job Title</th>
                        <th class="px-6 py-3 text-sm font-medium text-black text-center">Base Salary</th>
                        <th class="px-6 py-3 text-sm font-medium text-black text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($jobs as $job)
                    <tr>
                        <td class="px-6 py-3 text-center text-md text-black">{{$job->job_id}}</td>
                        <td class="px-6 py-3 text-center text-md text-black">{{$job->job_title}}</td>
                        <td class="px-6 py-3 text-center text-md text-black">{{$job->base_salary}}</td>
                        <td class="px-6 py-3 text-center">
                            <button
                                class="inline-block px-2 py-1 text-xs font-bold text-white bg-red-600 rounded hover:bg-red-700">
                                Delete
                            </button>
                            <button data-modal-toggle="edit-job-modal"
                                class="inline-block px-2 py-1 text-xs font-bold text-white bg-[#EDA841] rounded hover:bg-[#e09c3a]">
                                Edit
                            </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        <!-- Add Job Modal -->
        <div id="add-job-modal" tabindex="-1" aria-hidden="true"
            class="hidden fixed inset-0 flex justify-center items-center z-50 text-white backdrop-blur-sm">
            <div class="relative p-4 w-full max-w-2xl">
                <div class="relative rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                        <h2 class="text-xl font-semibold">Add Job</h2>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="add-job-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <form method="POST" action="{{ route('addJob.store') }}" class="p-4 md:p-5">
                        @csrf
                        <div class="mb-5">
                            <label for="job_title" class="block text-sm font-medium">Job Title</label>
                            <input type="text" id="job_title" name="job_title"
                                class="bg-gray-400 text-black block w-full px-4 py-2 mt-1 rounded" required>
                        </div>
                        <div class="mb-5">
                            <label for="base_salary" class="block text-sm font-medium">Base Salary</label>
                            <input type="number" id="base_salary" name="base_salary"
                                class="bg-gray-400 text-black block w-full px-4 py-2 mt-1 rounded" required>
                        </div>
                        <div class="flex justify-end gap-4">
                            <button type="submit" class="px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">Save
                                Changes</button>
                            <button type="button" class="px-4 py-2 bg-red-600 text-white rounded hover:bg-red-700"
                                data-modal-toggle="add-job-modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Edit Job Modal -->
        <div id="edit-job-modal" tabindex="-1" aria-hidden="true"
            class="hidden fixed inset-0 flex justify-center items-center z-50 backdrop-blur-sm">
            <div class="relative p-6 w-full max-w-3xl dark:bg-gray-700 text-white rounded-lg shadow-lg">
                <div class="flex items-center justify-between pb-4 border-b border-white">
                    <h2 class="text-xl font-semibold">Edit Job Details</h2>
                    <button type="button"
                        class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                        data-modal-toggle="edit-job-modal">
                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                            viewBox="0 0 14 14">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                        </svg>
                    </button>
                </div>
                <form class="pt-4" method="POST" action="{{ route('editJobPost', $job->job_id) }}">
                    @csrf
                    @method('PUT')
                    <div class="grid grid-cols-2 gap-6">
                        <div class="flex flex-col">
                            <label for="edit_job_id" class="text-sm font-medium mb-1">Job ID</label>
                            <input type="text" id="edit_job_id" name="job_id"
                                class="block w-full px-4 py-2 bg-gray-400 text-red-500 border border-gray-300 rounded-md shadow-md"
                                value="{{ $job->job_id }}" placeholder="Enter Job ID" disabled>
                        </div>

                        <div class="flex flex-col">
                            <label for="edit_job_title" class="text-sm font-medium mb-1">Job Title</label>
                            <input type="text" id="edit_job_title" name="job_title"
                                class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                value="{{ old('job_title', $job->job_title) }}" placeholder="Enter Job Title">
                        </div>

                        <div class="flex flex-col">
                            <label for="edit_base_salary" class="text-sm font-medium mb-1">Base Salary</label>
                            <input type="number" id="edit_base_salary" name="base_salary"
                                class="block w-full px-4 py-2 bg-gray-100 text-black border border-gray-300 rounded-md shadow-md"
                                value="{{ old('base_salary', $job->base_salary) }}" placeholder="Enter Base Salary">
                        </div>
                    </div>

                    <div class="flex justify-end gap-4 mt-6">
                        <button type="submit"
                            class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                            Save
                        </button>
                        <button type="button"
                            class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                            data-modal-toggle="edit-job-modal">
                            Cancel
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
