@extends('layouts.masters')

@section('title', 'Home - Page')

@section('content')

    <body class="bg-[#D9D9D9]">
        <div class=" mx-auto p-6">
            <h2 class="text-2xl font-bold text-gray-700">HR Payroll</h2>

            <!-- Filters -->
            <div class="flex justify-end mb-6">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                    <input type="text"
                        class="text-sm py-2 px-4 border border-gray-300 rounded focus:ring-2 focus:outline-none"
                        placeholder="Search bar">
                    <input type="date"
                        class="text-sm py-2 px-4 border border-gray-300 rounded focus:ring-2 focus:outline-none">
                    <select class="text-sm py-2 px-4 border border-gray-300 rounded focus:ring-2 focus:outline-none">
                        <option value="">Filter by Status</option>
                        <option value="Paid">Paid</option>
                        <option value="Pending">Pending</option>
                        <option value="Overdue">Overdue</option>
                    </select>
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="min-w-full text-left rounded-[16px] bg-[#008080]">
                    <thead>
                        <tr>
                            <th class="px-8 py-4 border-0 text-lg font-bold">Payroll ID</th>
                            <th class="px-8 py-4 border-0 text-lg font-bold">Employee Name</th>
                            <th class="px-8 py-4 border-0 text-lg font-bold">Department</th>
                            <th class="px-8 py-4 border-0 text-lg font-bold">Deductions</th>
                            <th class="px-8 py-4 border-0 text-lg font-bold">Bonuses</th>
                            <th class="px-8 py-4 border-0 text-lg font-bold">Net Pay</th>
                            <th class="px-8 py-4 border-0 text-lg font-bold">Payment Date</th>
                            <th class="px-8 py-4 border-0 text-lg font-bold">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-4 border-none">1</td>
                            <td class="p-4 border-none">Javier Jezekiel</td>
                            <td class="p-4 border-none">Quality Assurance</td>
                            <td class="p-4 border-none">$200</td>
                            <td class="p-4 border-none">$500</td>
                            <td class="p-4 border-none">$2,300</td>
                            <td class="p-4 border-none">2024-08-01</td>
                            <td class="p-4 border-none">
                                <span class="inline-block px-4 py-2 text-sm font-bold text-green-800 bg-green-100 rounded">
                                    Paid
                                </span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="p-4 border-none">2</td>
                            <td class="p-4 border-none">Jhon Mark Genela</td>
                            <td class="p-4 border-none">Quality Assurance</td>
                            <td class="p-4 border-none">$200</td>
                            <td class="p-4 border-none">$500</td>
                            <td class="p-4 border-none">$2,300</td>
                            <td class="p-4 border-none">2024-08-01</td>
                            <td class="p-4 border-none">
                                <span class="inline-block px-4 py-2 text-sm font-bold text-green-800 bg-green-100 rounded">
                                    Paid
                                </span>
                            </td>
                        </tr>
                    </tbody>
                    <tbody>
                        <tr>
                            <td class="p-4 border-none">3</td>
                            <td class="p-4 border-none">Jomarie Vicada</td>
                            <td class="p-4 border-none">Quality Assurance</td>
                            <td class="p-4 border-none">$200</td>
                            <td class="p-4 border-none">$500</td>
                            <td class="p-4 border-none">$2,300</td>
                            <td class="p-4 border-none">2024-08-01</td>
                            <td class="p-4 border-none">
                                <span class="inline-block px-4 py-2 text-sm font-bold text-green-800 bg-green-100 rounded">
                                    Paid
                                </span>
                            </td>
                        </tr>
                    </tbody>
                </table>

                <!-- Export Button -->
                <div class="mt-6 flex justify-end">
                    <button class="bg-[#001F3F] text-white px-6 py-3 rounded hover:bg-blue-600 transition">
                        Export Payroll Report
                    </button>
                </div>
            </div>
        </div>
    </body>

@endsection
