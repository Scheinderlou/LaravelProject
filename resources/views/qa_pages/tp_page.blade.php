@extends('Layouts.qa_layouts')

@section('title', 'Defects - Page')

@section('content')
    <div class="container mx-auto my-6 ">
        <button class="px-6 py-2 bg-[#111111] mb-6 text-white hover:text-black rounded-md hover:bg-white"
            data-modal-toggle="add-protocol-modal">
            Add Protocol
        </button>
        <div class="p-6 bg-gray-100 shadow-md rounded-[14px]">
            <div class="flex justify-between items-center mb-6">
                <h1 class="text-2xl font-bold">Protocol Management</h1>

            </div>
            <table class="min-w-full border-collapse ">
                <thead>
                    <tr>
                        <th class=" px-4 py-2 text-sm font-medium text-center">Protocol ID</th>
                        <th class=" px-4 py-2 text-sm font-medium text-center">Protocol Name</th>
                        <th class=" px-4 py-2 text-sm font-medium text-center">Description</th>
                        <th class=" px-4 py-2 text-sm font-medium text-center">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class=" px-4 py-2 text-center">1</td>
                        <td class=" px-4 py-2 text-center">Lagahid Cyvielle</td>
                        <td class=" px-4 py-2 text-center">this is for bullshit purposes</td>
                        <td class=" px-4 py-2 text-center">
                            <button
                                class="inline-block px-2 py-1 text-xs font-bold text-white bg-[#EDA841] rounded hover:bg-[#e09c3a]"
                                data-modal-toggle="edit-protocol-modal">
                                Edit
                            </button>
                            <button
                                class="inline-block px-2 py-1 text-xs font-bold text-white bg-red-600 rounded hover:bg-red-700">
                                Delete
                            </button>
                        </td>
                    </tr>
                    <tr>
                        <td class=" px-4 py-2 text-center">2</td>
                        <td class=" px-4 py-2 text-center">Protocol B</td>
                        <td class=" px-4 py-2 text-center">Description of Protocol B</td>
                        <td class=" px-4 py-2 text-center">
                            <button
                                class="inline-block px-2 py-1 text-xs font-bold text-white bg-[#EDA841] rounded hover:bg-[#e09c3a]"
                                data-modal-toggle="edit-protocol-modal">
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
    <!-- Add Protocol Modal -->
    <div id="add-protocol-modal" tabindex="-1" aria-hidden="true"
        class="hidden fixed inset-0 z-50 flex items-center justify-center backdrop-blur-sm">
        <div class="bg-[#777777] rounded-lg shadow-lg w-96 p-6">
            <div class="flex items-center justify-between pb-4 border-b border-gray-300 mb-6">
                <h2 class="text-xl font-semibold">Add protocol</h2>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                    data-modal-toggle="add-protocol-modal">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <form>
                <div class="mb-4">
                    <label for="protocol-id" class="block text-sm font-medium mb-2">Protocol ID</label>
                    <input type="text" id="protocol-id" class="w-full px-4 py-2 border bg-gray-50 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="protocol-name" class="block text-sm font-medium mb-2">Protocol Name</label>
                    <input type="text" id="protocol-name" class="w-full px-4 py-2 border bg-gray-50 rounded-md">
                </div>
                <div class="mb-4">
                    <label for="protocol-description" class="block text-sm font-medium mb-2">Description</label>
                    <textarea id="protocol-description" class="w-full px-4 py-2 border bg-gray-50 rounded-md"></textarea>
                </div>
                <div class="flex justify-end gap-2">
                    <button type="button" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                        data-modal-toggle="add-protocol-modal">
                        Cancel
                    </button>
                    <button type="submit"
                        class="px-4 py-2 bg-green-600 text-white rounded-md hover:bg-green-700">Add</button>
                </div>
            </form>
        </div>
    </div>

    <!-- Edit Protocol Modal -->
    <div id="edit-protocol-modal" tabindex="-1" aria-hidden="true"
        class="fixed inset-0 z-50 flex items-center justify-center backdrop-blur-sm hidden">
        <div class="bg-[#777777] rounded-lg shadow-lg w-96 p-6">
            <div class="flex items-center justify-between pb-4 border-b border-gray-300 mb-6">
                <h2 class="text-xl font-semibold">Edit Protocol</h2>
                <button type="button"
                    class="text-gray-400 bg-transparent hover:bg-gray-200 rounded-lg text-sm w-8 h-8 flex justify-center items-center"
                    data-modal-toggle="edit-protocol-modal">
                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                    </svg>
                </button>
            </div>
            <form>
                <div class="mb-4">
                    <label for="edit-protocol-id" class="block text-sm font-medium mb-2">Protocol ID</label>
                    <input type="text" id="edit-protocol-id" class="w-full px-4 py-2  bg-gray-50 rounded-md"
                        value="1" disabled>
                </div>
                <div class="mb-4">
                    <label for="edit-protocol-name" class="block text-sm font-medium mb-2">Protocol Name</label>
                    <input type="text" id="edit-protocol-name" class="w-full px-4 py-2 bg-gray-50 rounded-md"
                        value="Protocol">
                </div>
                <div class="mb-4">
                    <label for="edit-protocol-description" class="block text-sm font-medium mb-2">Description</label>
                    <textarea id="edit-protocol-description" class="w-full px-4 py-2 bg-gray-50 rounded-md"></textarea>
                </div>
                <div class="flex justify-end gap-4 mt-6">
                    <button type="submit"
                        class="px-4 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                        Save Changes
                    </button>
                    <button type="button" class="px-4 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                        data-modal-toggle="edit-protocol-modal">
                        Cancel
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
