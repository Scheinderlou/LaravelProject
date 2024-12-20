@extends('layouts.masters')

@section('title', 'Home - Page')

@section('content')

    <div class="container mx-auto p-6">
        <h2 class="text-3xl font-bold text-gray-700 mb-3">HR Payroll</h2>
        <div class="flex justify-between items-center mb-6">
            <div class="flex gap-2">
                <a href="{{ route('payroll_hr') }}">
                    <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                        Create payroll
                    </button>
                </a>
                <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                    Edit
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
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="border-none px-4 py-2">2</td>
                            <td class="border-none px-4 py-2">John Mark Genela</td>
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
                            </td>
                        </tr>
                    </tbody>
                    <tr>
                        <td class="border-none px-4 py-2">3</td>
                        <td class="border-none px-4 py-2">Jomarie Vicada</td>
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
                        </td>
                    </tr>
                </table>

                <div class="mt-6 flex justify-end gap-4">
                    <button class="bg-[#001F3F] text-white px-6 py-3 rounded-md hover:bg-blue-600 transition">
                        Export Payroll Report
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
