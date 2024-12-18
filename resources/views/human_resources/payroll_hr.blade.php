@extends('layouts.masters')

@section('title', 'Home - Page')

@section('content')

    <body class="bg-[#008080]">
        <div class="mx-auto p-2 flex flex-col mb-2">
            <div class="flex justify-between items-center">
                <h1 class="text-4xl font-bold">Payroll System</h1>
                <a href="{{ route('payroll_view') }}">
                    <button class="bg-[#001F3F] text-white px-6 py-3 rounded hover:bg-blue-600 transition">
                        Back
                    </button>
                </a>
            </div>
        </div>

        <div class="flex justify-end text-center mb-6">
            <div class="p-5 bg-[#008080] rounded-lg">
                <h2 class="font-bold text-md mb-2">Cyvielle Lagahid</h2>
                <div class="flex flex-col items-center">
                    <!-- Replace placeholder with an image -->
                    <img src="{{ asset('img/test.jpg') }}" alt="Profile Picture"
                        class="w-28 h-28 object-cover rounded-lg mb-3 border-none">
                    <div class="flex space-x-2">
                        <button class="px-2 py-1 bg-[#001F3F] text-white rounded text-sm">Import</button>
                        <button class="px-2 py-1 bg-[#001F3F] text-white rounded text-sm">Save</button>
                        <button class="px-2 py-1 bg-[#001F3F] text-white rounded text-sm">Delete</button>
                    </div>
                </div>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Personal Data -->
            <div class="p-6 bg-[#008080] rounded-lg">
                <h2 class="font-semibold text-lg mb-4">Personal Data</h2>
                <div class="grid grid-cols-2 gap-4 ">
                    <input placeholder="Staff ID" class="p-2 border rounded bg-[#D1D5DB] " />
                    <input placeholder="First Name" class="p-2 border rounded bg-[#D1D5DB]" />
                    <input placeholder="Last Name" class="p-2 border rounded bg-[#D1D5DB]" />
                    <select class="p-2 border rounded bg-[#D1D5DB] text-gray-400">
                        <option>Sex</option>
                        <option>Male</option>
                        <option>Female</option>
                    </select>
                    <input placeholder="Department" class="p-2 border rounded bg-[#D1D5DB]" />
                    <select class="p-2 border rounded bg-[#D1D5DB] text-gray-400">
                        <option>Scale</option>
                    </select>
                    <select class="p-2 border rounded bg-[#D1D5DB] text-gray-400">
                        <option>Status</option>
                        <option>Paid</option>
                        <option>Unpaid</option>
                    </select>
                </div>
            </div>

            <div class="p-6 bg-[#008080] rounded-lg">
                <h2 class="font-semibold text-lg mb-4">Bank Detail</h2>
                <div class="grid grid-cols-2 gap-4">
                    <select class="p-2 border rounded bg-[#D1D5DB] text-gray-400">
                        <option>Month</option>
                    </select>
                    <select class="p-2 border rounded bg-[#D1D5DB] text-gray-400">
                        <option>Year</option>
                    </select>
                    <input placeholder="Bank Name" class="p-2 border rounded bg-[#D1D5DB]" />
                    <input placeholder="Account Number" class="p-2 border rounded bg-[#D1D5DB]" />
                    <input placeholder="Account Name" class="p-2 border rounded bg-[#D1D5DB]" />
                    <input placeholder="Phone Number" class="p-2 border rounded bg-[#D1D5DB]" />
                </div>
            </div>
        </div>

        <div class="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="p-6 bg-[#008080] rounded-lg">
                <h2 class="font-semibold text-lg mb-4">Monthly Entries</h2>
                <div class="grid grid-cols-2 gap-4">
                    <input placeholder="Basic Salary" class="p-2 border rounded bg-[#D1D5DB]" />
                    <input placeholder="Housing Allowance" class="p-2 border rounded bg-[#D1D5DB]" />
                    <input placeholder="Transport Allowance" class="p-2 border rounded bg-[#D1D5DB]" />
                    <select class="p-2 border rounded bg-[#D1D5DB] text-gray-400">
                        <option>Over-time Stipend</option>
                    </select>
                </div>
            </div>
            <div class="p-6 bg-[#008080] rounded-lg">
                <h2 class="font-semibold text-lg mb-4">Deduction</h2>
                <div class="grid grid-cols-2 gap-4">
                    <input placeholder="Salary Advance" class="p-2 border rounded bg-[#D1D5DB]" />
                    <input placeholder="Contributory Pension" class="p-2 border rounded bg-[#D1D5DB]" />
                    <input placeholder="Tax" class="p-2 border rounded bg-[#D1D5DB]" />
                    <input placeholder="National Housing Fund" class="p-2 border rounded bg-[#D1D5DB]" />
                    <input placeholder="Total Deduction" class="p-2 border rounded bg-[#D1D5DB]" />
                </div>
            </div>
        </div>

        <div class="flex justify-end space-x-2 mt-4">
            <button class="px-4 py-2 bg-[#001F3F] text-white rounded">Submit</button>

        </div>
        </div>
    </body>
@endsection
