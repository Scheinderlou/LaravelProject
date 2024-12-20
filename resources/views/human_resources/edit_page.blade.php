@extends('layouts.masters')

@section('title', 'Edit - Page')

@section('content')

    <div class="container mx-auto p-6 bg-[#008080] shadow-lg rounded-md">
        <div class="flex justify-between items-center mb-4">
            <h2 class="text-xl font-semibold">Editing Payroll for Staff ID <span class="text-red-500">1</span></h2>
            <a href="{{ route('view_page') }}">
                <button class=" hover:text-white">
                    <svg fill="none" viewBox="0 0 24 24" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </a>
        </div>

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
                <form action="#" method="POST">
                    <div>
                        <label for="deduction" class="block text-sm font-medium">Total Deduction</label>
                        <input type="number" id="deduction" name="deduction" value="200"
                            class="mt-1 block w-full border-gray-700 bg-[#D1D5DB] rounded-md shadow-md mb-3">
                    </div>

                    <div>
                        <label for="netpay" class="block text-md mb-3 font-medium">Net Pay</label>
                        <input type="number" id="netpay" name="netpay" value="1750"
                            class="mt-1 block w-full border-gray-700   bg-[#D1D5DB] rounded-md shadow-md mb-3">
                    </div>

                    <div>
                        <label for="status" class="block text-md mb-3 font-medium">Status</label>
                        <select id="status" name="status"
                            class="mt-1 block w-full border-gray-700 rounded-md shadow-md mb-3 bg-[#D1D5DB]">
                            <option value="Paid" selected>Paid</option>
                            <option value="Unpaid">Unpaid</option>
                        </select>
                    </div>

                    <div class="flex justify-end gap-4 mt-6">
                        <button type="submit" class="px-6 py-2 text-white bg-green-600 rounded-md hover:bg-green-700">
                            Save Changes
                        </button>
                        <button type="reset" class="px-6 py-2 text-white bg-red-600 rounded-md hover:bg-red-700">
                            Reset
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
