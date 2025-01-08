@extends('Layouts.qa_layouts')

@section('title', 'Quality Management - Page')

@section('content')
    <div class="container mx-auto my-6">
        <div class="flex gap-2 mb-6">
            <button class="px-6 py-2 bg-[#111111] text-white hover:text-black rounded-md hover:bg-[#F3F4F6]"
                data-modal-toggle="add-check-modal">
                Add Check
            </button>
        </div>
        <div class=" p-6 bg-gray-100 shadow-lg rounded-[14px]">
            <h1 class="text-2xl font-bold mb-6">Check Management</h1>
            <table class="min-w-full border-collapse">
                <thead>
                    <tr>
                        <th class="px-4 py-2 text-sm font-medium text-center"> ID</th>
                        <th class="px-4 py-2 text-sm font-medium text-center">Product ID</th>
                        <th class="px-4 py-2 text-sm font-medium text-center">Protocol ID</th>
                        <th class="px-4 py-2 text-sm font-medium text-center">Tester ID</th>
                        <th class="px-4 py-2 text-sm font-medium text-center">Status</th>
                        <th class="px-4 py-2 text-sm font-medium text-center">Comments</th>
                        <th class="px-4 py-2 text-sm font-medium text-center">Check Date</th>
                        <th class="px-4 py-2 text-sm font-medium text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="px-4 py-2 text-center">1</td>
                        <td class="px-4 py-2 text-center">A123</td>
                        <td class="px-4 py-2 text-center">P567</td>
                        <td class="px-4 py-2 text-center">101</td>
                        <td class="px-4 py-2 text-center">Pending</td>
                        <td class="px-4 py-2 text-center">Requires review</td>
                        <td class="px-4 py-2 text-center">2025-01-08</td>
                        <td class="px-4 py-2 text-center">
                            <button data-modal-toggle="edit-check-modal"
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
    <!--Add-check-modal-->
    <div id="add-check-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 flex justify-center items-center z-50 backdrop-blur-sm">
        <div class="relative p-6 w-full max-w-3xl bg-[#777777] rounded-lg shadow-lg">
            <div class="flex items-center justify-between pb-4 border-b border-gray-300">
                <h2 class="text-xl font-semibold">Add Check</h2>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                    data-modal-toggle="add-check-modal">
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
                        <label for="product_id" class="text-sm font-medium mb-1">Product ID</label>
                        <input type="text" id="product_id" name="product_id"
                            class="block w-full px-4 py-2 bg-gray-50 border rounded-md shadow-sm"
                            placeholder="Enter Product ID">
                    </div>

                    <div class="flex flex-col">
                        <label for="protocol_id" class="text-sm font-medium mb-1">Protocol ID</label>
                        <input type="text" id="protocol_id" name="protocol_id"
                            class="block w-full px-4 py-2 bg-gray-50 border rounded-md shadow-sm"
                            placeholder="Enter Protocol ID">
                    </div>

                    <div class="flex flex-col">
                        <label for="check_date" class="text-sm font-medium mb-1">Check Date</label>
                        <input type="date" id="check_date" name="check_date"
                            class="block w-full px-4 py-2 bg-gray-50 border rounded-md shadow-sm">
                    </div>

                    <div class="flex flex-col">
                        <label for="tester_id" class="text-sm font-medium mb-1">Tester ID</label>
                        <input type="text" id="tester_id" name="tester_id"
                            class="block w-full px-4 py-2 bg-gray-50 border rounded-md shadow-sm"
                            placeholder="Enter Tester ID">
                    </div>

                    <div class="flex flex-col">
                        <label for="status" class="text-sm font-medium mb-1">Status</label>
                        <select id="status" name="status"
                            class="block w-full px-4 py-2 bg-gray-50 border rounded-md shadow-sm">
                            <option value="Pending">Pending</option>
                            <option value="Completed">Completed</option>
                            <option value="In Progress">In Progress</option>
                        </select>
                    </div>

                    <div class="flex flex-col">
                        <label for="comments" class="text-sm font-medium mb-1">Comments</label>
                        <textarea id="comments" name="comments" class="block w-full px-4 py-2 bg-gray-50 border rounded-md shadow-sm"></textarea>
                    </div>
                </div>

                <div class="flex justify-end gap-4 mt-6">
                    <button type="submit"
                        class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                        Add Check
                    </button>
                    <button type="button" class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                        data-modal-toggle="add-check-modal">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
    <!--Edit-check-modal-->
    <div id="edit-check-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 flex justify-center items-center z-50 backdrop-blur-sm">
        <div class="relative p-6 w-full max-w-3xl bg-[#777777] rounded-lg shadow-lg">
            <div class="flex items-center justify-between pb-4 border-b border-gray-300">
                <h2 class="text-xl font-semibold">Edit Check</h2>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                    data-modal-toggle="edit-check-modal">
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
                        <label for="edit_product_id" class="text-sm font-medium mb-1">Product ID</label>
                        <input type="text" id="edit_product_id" name="product_id"
                            class="block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm"
                            value="A123">
                    </div>

                    <div class="flex flex-col">
                        <label for="edit_protocol_id" class="text-sm font-medium mb-1">Protocol ID</label>
                        <input type="text" id="edit_protocol_id" name="protocol_id"
                            class="block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm"
                            value="P567">
                    </div>

                    <div class="flex flex-col">
                        <label for="edit_check_date" class="text-sm font-medium mb-1">Check Date</label>
                        <input type="date" id="edit_check_date" name="check_date"
                            class="block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm"
                            value="2025-01-08">
                    </div>

                    <div class="flex flex-col">
                        <label for="edit_tester_id" class="text-sm font-medium mb-1">Tester ID</label>
                        <input type="text" id="edit_tester_id" name="tester_id"
                            class="block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm"
                            value="101">
                    </div>

                    <div class="flex flex-col">
                        <label for="edit_status" class="text-sm font-medium mb-1">Status</label>
                        <select id="edit_status" name="status"
                            class="block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm">
                            <option value="Pending" selected>Pending</option>
                            <option value="Completed">Completed</option>
                            <option value="In Progress">In Progress</option>
                        </select>
                    </div>

                    <div class="flex flex-col">
                        <label for="edit_comments" class="text-sm font-medium mb-1">Comments</label>
                        <textarea id="edit_comments" name="comments"
                            class="block w-full px-4 py-2 bg-gray-50 border border-gray-300 rounded-md shadow-sm"></textarea>
                    </div>
                </div>

                <div class="flex justify-end gap-4 mt-6">
                    <button type="submit"
                        class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                        Save Changes
                    </button>
                    <button type="button" class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                        data-modal-toggle="edit-check-modal">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>

@endsection
