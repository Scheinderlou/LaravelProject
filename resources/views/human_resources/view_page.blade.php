@extends('layouts.hr_layouts')

@section('title', 'View - Page')

@section('content')

    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold text-gray-700 mb-3">HR Payroll</h2>
        <div class="flex justify-between items-center mb-6">
            <div class="flex gap-2">
                <button
                    data-modal-toggle = "add-payroll-modal"class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                    Create payroll
                </button>
            </div>

            <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                <input type="text"
                    class="text-sm py-2 px-4 border text-gray-600 border-gray-300 rounded-md focus:ring-2 focus:outline-none"
                    placeholder="Search bar">
                <input type="date"
                    class="text-sm py-2 px-4 border border-gray-300 text-gray-600 rounded-md focus:ring-2 focus:outline-none">
                <select
                    class="text-sm py-2 px-4 border border-gray-300 text-gray-600 rounded-md focus:ring-2 focus:outline-none">
                    <option value="">Filter by Status</option>
                </select>
            </div>
        </div>

        <table class="min-w-full text-left text-lg rounded-[14px] bg-[#333333]">
            <thead>
                <tr class = "text-gray-50 text-center">
                    <th class="border-none px-4 py-2">Employee ID</th>
                    <th class="border-none px-4 py-2">Payroll ID</th>
                    <th class="border-none px-4 py-2">Deductions</th>
                    <th class="border-none px-4 py-2">Bonuses</th>
                    <th class="border-none px-4 py-2">Net Pay</th>
                    <th class="border-none px-4 py-2">Payment Date</th>
                    <th class="border-none px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                <tr class = "text-gray-50 text-center text-md">
                    <td class="border-none px-4 py-2">101</td>
                    <td class="border-none px-4 py-2">1</td>
                    <td class="border-none px-4 py-2">$200</td>
                    <td class="border-none px-4 py-2">$500</td>
                    <td class="border-none px-4 py-2">$1,750</td>
                    <td class="border-none px-4 py-2">2025-01-09</td>

                    <td class="flex justify-center gap-2 p-4 text-gray-50 ">
                        <button class="inline-block px-2 py-1 text-xs font-bold bg-red-600 rounded">
                            Delete
                        </button>
                        <button data-modal-toggle="edit-payroll-modal"
                            class="inline-block px-2 py-1 text-xs font-bold bg-[#EDA841] rounded">
                            Edit
                        </button>
                    </td>
                </tr>
            </tbody>
        </table>
        <!--Add Payroll-->
        <div id="add-payroll-modal" tabindex="-1" aria-hidden="true"
            class="hidden fixed inset-0 flex justify-center items-center z-50 text-white backdrop-blur-sm">
            <div class="relative p-4 w-full max-w-2xl max-h-full"> <!-- Increased max-width -->
                <div class="relative rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <div class="w-full">
                            <h2 class="text-xl font-semibold">Payroll Entry</h2>
                        </div>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="add-payroll-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <div class="p-6">
                        <div class="grid grid-cols-2 gap-4">
                            <input placeholder="Payroll ID" class="p-2 shadow rounded bg-[#D1D5DB]" />
                            <input placeholder="Employee ID" class="p-2 rounded bg-[#D1D5DB]" />
                            <input placeholder="Deductions" class="p-2 rounded bg-[#D1D5DB]" />
                            <input placeholder="Bonuses" class="p-2 rounded bg-[#D1D5DB]" />
                            <input placeholder="Net Pay" class="p-2 rounded bg-[#D1D5DB]" />
                            <input placeholder="Payment Date" class="p-2 rounded bg-[#D1D5DB]" />
                        </div>
                        <div class="flex justify-end gap-4 mt-6">
                            <button type="submit"
                                class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                                Save
                            </button>
                            <button type="button"
                                class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                                data-modal-toggle="add-payroll-modal">
                                Cancel
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--Edit payroll-->
        <div id="edit-payroll-modal" tabindex="-1" aria-hidden="true"
            class="hidden fixed inset-0 flex justify-center items-center z-50 text-white backdrop-blur-sm">
            <div class="relative p-4 w-full max-w-2xl max-h-full">
                <div class="relative rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <div class="w-full">
                            <h2 class="text-xl font-semibold">Editing Payroll for Staff ID <span
                                    class="text-red-500">1</span></h2>
                        </div>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="edit-payroll-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <form class="p-4 md:p-5">
                        <div class="flex gap-6">
                            <div class="w-1/2">
                                <h3 class="text-lg font-semibold mb-4">Employee Details</h3>
                                <p class="mb-5">
                                    <span class="font-semibold">Name:</span> Jezekiel Javier
                                </p>
                                <p class="mb-5">
                                    <span class="font-semibold">Department:</span> IT Department
                                </p>
                                <p class="mb-5">
                                    <span class="font-semibold">Position:</span> Software Developer
                                </p>

                            </div>

                            <div class="w-1/2 space-y-4">
                                <div class="flex flex-col">
                                    <label for="deduction" class="text-sm font-medium mb-1">Total Deduction</label>
                                    <input type="number" id="deduction" name="deduction"
                                        class="block w-full px-4 py-2 bg-gray-400 text-black border border-gray-300 rounded-md shadow-md"
                                        value="200">
                                </div>

                                <div class="flex flex-col">
                                    <label for="netpay" class="text-sm font-medium mb-1">Net Pay</label>
                                    <input type="number" id="netpay" name="netpay" value="1750"
                                        class="block w-full px-4 py-2 bg-gray-400 text-black border border-gray-300 rounded-md shadow-md">
                                </div>
                                <div class="flex flex-col">
                                    <label for="bonus" class="text-sm font-medium mb-1">Bonus</label>
                                    <input type="number" id="netpay" name="bonus" value=""
                                        class="block w-full px-4 py-2 bg-gray-400 text-black border border-gray-300 rounded-md shadow-md">
                                </div>
                            </div>
                        </div>

                        <div class="flex justify-end gap-4 mt-6">
                            <button type="submit"
                                class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                                Save
                            </button>
                            <button type="button"
                                class="px-6 py-2 bg-red-600 hover:bg-red-700 text-white rounded-md shadow-md"
                                data-modal-toggle="edit-payroll-modal">
                                Cancel
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
