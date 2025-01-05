@extends('layouts.masters')

@section('title', 'View - Page')

@section('content')

    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold text-gray-700 mb-3">HR Payroll</h2>
        <div class="flex justify-between items-center mb-6">
            <div class="flex gap-2">
                <a href="{{ route('payroll_page') }}">
                    <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                        Create payroll
                    </button>
                </a>

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

        <div class="p-6 ">
            <h2 class="text-2xl font-bold text-center mb-6">Performances</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
                <div class="bg-[#008080] p-4 rounded shadow">
                    <h3 class=" font-semibold text-center">Head Count</h3>
                    <p class="text-3xl font-bold text-center">7</p>
                </div>
                <div class="bg-[#008080] p-4 rounded shadow">
                    <h3 class=" font-semibold text-center">Gross Salary</h3>
                    <p class="text-3xl font-bold text-center">P14,200.45</p>
                </div>
                <div class="bg-[#008080] p-4 rounded shadow">
                    <h3 class=" font-semibold text-center">Net Pay</h3>
                    <p class="text-3xl font-bold text-center">P7,245.00</p>
                </div>
                <div class="bg-[#008080] p-4 rounded shadow">
                    <h3 class=" font-semibold text-center">Deduction Amount</h3>
                    <p class="text-3xl font-bold text-center">P4,600.00</p>
                </div>
                <div class="bg-[#008080] p-4 rounded shadow">
                    <h3 class=" font-semibold text-center">Average Performance Task</h3>
                    <p class="text-3xl font-bold text-center">48.7</p>
                </div>
                <div class="bg-[#008080] p-4 rounded shadow">
                    <h3 class=" font-semibold text-center">Average Sick Leave</h3>
                    <p class="text-3xl font-bold text-center">2</p>
                </div>
                <div class="bg-[#008080] p-4 rounded shadow">
                    <h3 class=" font-semibold text-center">Net Pay Current Month</h3>
                    <p class="text-3xl font-bold text-center">P1,400.00</p>
                </div>
                <div class="bg-[#008080] p-4 rounded shadow">
                    <h3 class=" font-semibold text-center">Net Pay Previous Month</h3>
                    <p class="text-3xl font-bold text-center">P4,345.00</p>
                </div>
            </div>

            {{-- Charts Section  --}}
            <div class="mt-6 grid grid-cols-1 md:grid-cols-2 gap-4 mb-6">
                <!-- Bar Chart -->
                <div class="bg-[#008080] p-4 rounded shadow">
                    <h3 class="text-lg font-bold text-center mb-4">Average Gross Salary by Each Department</h3>
                </div>

                {{-- Pie Chart  --}}
                <div class="bg-[#008080] p-4 rounded shadow">
                    <h3 class="text-lg font-bold text-center mb-4">Employee Gender Distribution</h3>
                </div>
            </div>
            <div class="mx-auto">
                <table class="min-w-full text-left text-md rounded-[14px] bg-[#008080]">
                    <thead>
                        <tr>
                            <th class="border-none px-4 py-2">Staff ID</th>
                            <th class="border-none px-4 py-2">Full Name</th>
                            <th class="border-none px-4 py-2">Bank</th>
                            <th class="border-none px-4 py-2">Account No.</th>
                            <th class="border-none px-4 py-2">Total Deduction</th>
                            <th class="border-none px-4 py-2">NetPay</th>
                            <th class="border-none px-4 py-2">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border-none px-4 py-2">1</td>
                            <td class="border-none px-4 py-2">Jezekiel Javier</td>
                            <td class="border-none px-4 py-2">XYZ Bank</td>
                            <td class="border-none px-4 py-2">123456</td>
                            <td class="border-none px-4 py-2">$200</td>
                            <td class="border-none px-4 py-2">$1,750</td>
                            <td class="p-4">
                                <span class="inline-block px-2 py-1 text-xs font-bold text-green-200 bg-green-800 rounded">
                                    Paid
                                </span>
                                <span class="inline-block px-2 py-1 text-xs font-bold text-green-200 bg-red-800 rounded">
                                    Delete
                                </span>
                                <button data-modal-toggle="crud-modal"
                                    class="inline-block px-2 py-1 text-xs font-bold text-white bg-[#EDA841] rounded">
                                    Edit
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <div id="crud-modal" tabindex="-1" aria-hidden="true"
                    class="hidden fixed inset-0 flex justify-center items-center z-50 text-white backdrop-blur-sm">
                    <div class="relative p-4 w-full max-w-2xl max-h-full"> <!-- Increased max-width -->
                        <div class="relative rounded-lg shadow dark:bg-gray-700">
                            <div
                                class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                                <div class="w-full">
                                    <h2 class="text-xl font-semibold">Editing Payroll for Staff ID <span
                                            class="text-red-500">1</span></h2>
                                </div>
                                <button type="button"
                                    class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                    data-modal-toggle="crud-modal">
                                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 14 14">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                    </svg>
                                </button>
                            </div>
                            <form class="p-4 md:p-5">
                                <div class="flex gap-6">
                                    <div class="w-1/2">
                                        <h3 class="text-lg font-semibold mb-4">Employee Details</h3>
                                        <p class="mb-5">
                                            <span class="font-semibold">Full Name:</span> Jezekiel Javier
                                        </p>
                                        <p class="mb-5">
                                            <span class="font-semibold">Bank:</span> XYZ Bank
                                        </p>
                                        <p class="mb-5">
                                            <span class="font-semibold">Account Number:</span> 123456
                                        </p>
                                    </div>

                                    <!-- Form Section -->
                                    <div class="w-1/2 space-y-4">
                                        <div>
                                            <label for="deduction" class="block text-sm font-medium">Total
                                                Deduction</label>
                                            <input type="number" id="deduction" name="deduction" value="200"
                                                class="mt-1 block w-full border-gray-700 text-black  bg-[#D1D5DB] rounded-md shadow-md mb-3">
                                        </div>

                                        <div>
                                            <label for="netpay" class="block text-md mb-3 font-medium">Net Pay</label>
                                            <input type="number" id="netpay" name="netpay" value="1750"
                                                class="mt-1 block w-full border-gray-700 text-black  bg-[#D1D5DB] rounded-md shadow-md mb-3">
                                        </div>

                                        <div>
                                            <label for="status" class="block text-md mb-3 font-medium">Status</label>
                                            <select id="status" name="status"
                                                class="mt-1 block w-full border-gray-700 text-black rounded-md shadow-md mb-3 bg-[#D1D5DB]">
                                                <option value="Paid" selected>Paid</option>
                                                <option value="Unpaid">Unpaid</option>
                                            </select>
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
                                        data-modal-toggle="crud-modal">
                                        Cancel
                                    </button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
                <div class="mt-6 flex justify-end gap-4">
                    <button class="bg-[#001F3F] text-white px-6 py-3 rounded-md hover:bg-blue-600 transition">
                        Export Payroll Report
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
