@extends('layouts.masters')

@section('title', 'Home - Page')

@section('content')

    <body class="">
        <div class=" mx-auto p-6">
            <h2 class="text-2xl font-bold text-gray-700">HR Payroll</h2>

            <!-- Filters -->
            <div class="flex justify-end mb-6">
                <div class="grid grid-cols-1 sm:grid-cols-3 gap-2">
                    <input type="text"
                        class="text-sm py-2 px-4  border text-gray-600  border-gray-300 rounded focus:ring-2 focus:outline-none"
                        placeholder="Search bar">
                    <input type="date"
                        class="text-sm py-2 px-4 border border-gray-300 text-gray-600 rounded focus:ring-2 focus:outline-none">
                    <select
                        class="text-sm py-2 px-4 border border-gray-300 text-gray-600 rounded focus:ring-2 focus:outline-none">
                        <option value="">Filter by Status</option>
                    </select>

                </div>
            </div>
            <div class="gap-3">
                <a href="{{ route('payroll_hr') }}">
                    <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                        Create payroll
                    </button>
                </a>
                <button class="bg-[#001F3F] text-white px-4 py-2 text-sm rounded-md hover:bg-blue-600 transition">
                    Edit
                </button>
            </div>



            <div class="mx-auto p-8 ">
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
    </body>

@endsection
