@extends('Layouts.qa_layouts')

@section('title', 'Defects - Page')

@section('content')
    <div class="container mx-auto my-6">
        <div class="flex justify-between items-center mb-6">
            <button class="px-4 py-2 bg-[#111111] text-white hover:text-black rounded-md hover:bg-[#F3F4F6]"
                data-modal-toggle="add-defect-modal">
                Add Defect
            </button>
        </div>

        <div class="p-6 bg-gray-100 shadow-md rounded-[14px]">
            <h1 class="text-2xl font-bold mb-6">Defect Management</h1>
            <table class="min-w-full border-collapse">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-sm font-medium text-center">Defect ID</th>
                        <th class="px-4 py-2 text-sm font-medium text-center">Check ID</th>
                        <th class="px-4 py-2 text-sm font-medium text-center">Severity</th>
                        <th class="px-4 py-2 text-sm font-medium text-center">Resolution</th>
                        <th class="px-4 py-2 text-sm font-medium text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 text-center">1</td>
                        <td class="px-4 py-2 text-center">101</td>
                        <td class="px-4 py-2 text-center">High</td>
                        <td class="px-4 py-2 text-center">Pending</td>
                        <td class="px-4 py-2 text-center">
                            <button data-modal-toggle="edit-defect-modal"
                                class="inline-block px-2 py-1 text-xs font-bold text-white bg-[#EDA841] rounded hover:bg-[#e09c3a]">
                                Edit
                            </button>
                            <button
                                class="inline-block px-2 py-1 text-xs font-bold text-white bg-red-600 rounded hover:bg-red-700">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!--Add Defect Modal-->
    <div id="add-defect-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 flex justify-center items-center z-50 backdrop-blur-sm">
        <div class="relative p-6 w-full max-w-lg bg-[#777777] rounded-lg shadow-lg">
            <div class="flex items-center justify-between pb-4 border-b border-gray-300">
                <h2 class="text-xl font-semibold">Add Defect</h2>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center "
                    data-modal-toggle="add-defect-modal">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <form class="pt-4">
                <div class="flex flex-col mb-4">
                    <label for="defect_id" class="text-sm font-medium mb-1">Defect ID</label>
                    <input type="text" id="defect_id" name="defect_id"
                        class="block w-full px-4 py-2 border bg-[#D9D9D9] rounded-md">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="check_id" class="text-sm font-medium mb-1">Check ID</label>
                    <input type="text" id="check_id" name="check_id"
                        class="block w-full px-4 py-2 border bg-[#D9D9D9] rounded-md">
                </div>
                <div class="flex flex-col mb-4">
                    <label for="severity" class="text-sm font-medium mb-1">Severity</label>
                    <select id="severity" name="severity" class="block w-full px-4 py-2 border bg-[#D9D9D9] rounded-md">
                        <option value="Low">Low</option>
                        <option value="Medium">Medium</option>
                        <option value="High">High</option>
                    </select>
                </div>
                <div class="flex flex-col mb-4">
                    <label for="resolution" class="text-sm font-medium mb-1">Resolution</label>
                    <input type="text" id="resolution" name="resolution"
                        class="block w-full px-4 py-2 border bg-[#D9D9D9] rounded-md">
                </div>
                <div class="flex justify-end gap-4">
                    <button type="submit"
                        class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md">Save</button>
                    <button type="button" class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md"
                        data-modal-toggle="add-defect-modal">Cancel</button>
                </div>
            </form>
        </div>
    </div>
    <!-- Edit Defect Modal -->
    <div id="edit-defect-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 flex justify-center items-center z-50 backdrop-blur-sm">
        <div class="relative p-6 w-full max-w-2xl bg-[#777777] text-gray-900 rounded-lg shadow-lg">
            <div class="flex items-center justify-between pb-4 border-b border-gray-300">
                <h2 class="text-xl font-semibold">Edit Defect</h2>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                    data-modal-toggle="edit-defect-modal">
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
                        <label for="edit_defect_id" class="text-sm font-medium mb-1">Defect ID</label>
                        <input type="text" id="edit_defect_id" name="defect_id"
                            class="block w-full px-4 py-2 bg-[#D9D9D9] text-gray-700 border border-gray-300 rounded-md shadow-md"
                            value="1" placeholder="Enter Defect ID" disabled>
                    </div>

                    <div class="flex flex-col">
                        <label for="edit_check_id" class="text-sm font-medium mb-1">Check ID</label>
                        <input type="text" id="edit_check_id" name="check_id"
                            class="block w-full px-4 py-2 bg-[#D9D9D9] text-gray-900 border border-gray-300 rounded-md shadow-md"
                            value="101" placeholder="Enter Check ID">
                    </div>

                    <div class="flex flex-col">
                        <label for="edit_severity" class="text-sm font-medium mb-1">Severity</label>
                        <select id="edit_severity" name="severity"
                            class="block w-full px-4 py-2 bg-[#D9D9D9] text-gray-900 border border-gray-300 rounded-md shadow-md">
                            <option value="High" selected>High</option>
                            <option value="Medium">Medium</option>
                            <option value="Low">Low</option>
                        </select>
                    </div>
                    <div class="flex flex-col">
                        <label for="edit_resolution" class="text-sm font-medium mb-1">Resolution</label>
                        <input type="text" id="edit_resolution" name="resolution"
                            class="block w-full px-4 py-2 bg-[#D9D9D9] text-gray-900 border border-gray-300 rounded-md shadow-md"
                            value="Pending" placeholder="Enter Resolution">
                    </div>
                </div>
                <div class="flex justify-end gap-4 mt-6">
                    <button type="submit"
                        class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                        Save
                    </button>
                    <button type="button" class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                        data-modal-toggle="edit-defect-modal">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
