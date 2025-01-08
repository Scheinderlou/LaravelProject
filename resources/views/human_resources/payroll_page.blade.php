@extends('layouts.hr_layouts')

@section('title', 'Payroll - Page')

@section('content')


    <div class="container mx-auto p-6">
        <div class="mx-auto p-2 flex flex-col mb-2">
            <div class="flex justify-between items-center">
                <h1 class="text-3xl font-bold text-gray-700">Payroll System</h1>
                <a href="{{ route('view_page') }}">
                    <button class="bg-[#001F3F] text-white px-6 py-3 rounded hover:bg-blue-600 transition">
                        Back
                    </button>
                </a>
            </div>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-2 gap-6">
            <!-- Personal Data -->
            <div class="p-6 bg-[#008080] rounded-lg">
                <h2 class="font-semibold text-lg mb-4">Personal Data</h2>
                <div class="grid grid-cols-2 gap-4 ">
                    <input placeholder="Staff ID" class="p-2 shadow rounded bg-[#D1D5DB]  " />
                    <input placeholder="First Name" class="p-2 rounded bg-[#D1D5DB]" />
                    <input placeholder="Last Name" class="p-2 rounded bg-[#D1D5DB]" />
                    <input placeholder="Department" class="p-2 rounded bg-[#D1D5DB]" />

                    <select class="p-2 rounded bg-[#D1D5DB] text-gray-400">
                        <option>Status</option>
                        <option>Paid</option>
                        <option>Unpaid</option>
                    </select>
                    <input placeholder="Position" class="p-2 rounded bg-[#D1D5DB]" />

                </div>
            </div>

            <div class="p-6 bg-[#008080] rounded-lg">
                <h2 class="font-semibold text-lg mb-4">Bank Detail</h2>
                <div class="grid grid-cols-2 gap-4">
                    <select class="p-2 rounded bg-[#D1D5DB] text-gray-400">
                        <option>Month</option>
                    </select>
                    <select class="p-2 rounded bg-[#D1D5DB] text-gray-400">
                        <option>Year</option>
                    </select>
                    <input placeholder="Bank Name" class="p-2 rounded bg-[#D1D5DB]" />
                    <input placeholder="Account Number" class="p-2 rounded bg-[#D1D5DB]" />
                    <input placeholder="Account Name" class="p-2 rounded bg-[#D1D5DB]" />
                    <input placeholder="Phone Number" class="p-2 rounded bg-[#D1D5DB]" />
                </div>
            </div>
        </div>

        <div class="mt-6 grid grid-cols-1 lg:grid-cols-2 gap-6">
            <div class="p-6 bg-[#008080] rounded-lg">
                <h2 class="font-semibold text-lg mb-4">Monthly Entries</h2>
                <div class="grid grid-cols-2 gap-4">
                    <input placeholder="Basic Salary" class="p-2 rounded bg-[#D1D5DB]" />
                    <input placeholder="Housing Allowance" class="p-2 rounded bg-[#D1D5DB]" />
                    <input placeholder="Transport Allowance" class="p-2 rounded bg-[#D1D5DB]" />
                    <select class="p-2 rounded bg-[#D1D5DB] text-gray-400">
                        <option>Over-time Stipend</option>
                    </select>
                </div>
            </div>
            <div class="p-6 bg-[#008080] rounded-lg">
                <h2 class="font-semibold text-lg mb-4">Deduction</h2>
                <div class="grid grid-cols-2 gap-4">
                    <input placeholder="Salary Advance" class="p-2 rounded bg-[#D1D5DB]" />
                    <input placeholder="Contributory Pension" class="p-2 rounded bg-[#D1D5DB]" />
                    <input placeholder="Tax" class="p-2 rounded bg-[#D1D5DB]" />
                    <input placeholder="National Housing Fund" class="p-2 rounded bg-[#D1D5DB]" />
                    <input placeholder="Total Deduction" class="p-2 rounded bg-[#D1D5DB]" />
                </div>
            </div>
        </div>

        <div class="flex justify-end space-x-2 mt-4">
            <button class="px-4 py-2 bg-[#001F3F] text-white rounded">Submit</button>

        </div>
    </div>


@endsection
