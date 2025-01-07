<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-[#D9D9D9]">
    <div class="flex w-screen m-0">
        <div class="container mx-auto my-6 p-6 bg-[#008080] rounded-lg shadow-lg">
            <div class="flex justify-between items-center mb-4">
                <div class="text-3xl font-bold mx-auto text-center">Payroll System</div>
                <button class="px-4 py-2 bg-red-600 hover:bg-red-700 rounded-md shadow-md">
                    Logout
                </button>
            </div>
            <div class="flex flex-col lg:flex-row gap-6 items-center p-4">
                <div>
                    <h2 class="text-2xl font-bold mb-3 ">Jezekiel Javier</h2>
                    <p class="mb-3">Staff ID: <span class="text-red-500">1</span></p>
                    <p class=" mb-3 ">Email: Jezekiel.javier@gmail.com</p>
                    <p class="mb-3">Department: XYZ Department</p>
                    <p class="mb-3">Position: Software Developer</p>
                </div>
            </div>

            <div class="mt-6">
                <div class="container mx-auto my-6 p-6 bg-[#008080] rounded-lg shadow-lg">
                    <h3 class="text-xl font-bold mb-4">Payroll History</h3>
                    <table class="min-w-full text-left text-md rounded-[14px] bg-[#008080]">
                        <thead>
                            <tr>
                                <th class="border-none px-4 py-2">Month</th>
                                <th class="border-none px-4 py-2">NetPay</th>
                                <th class="border-none px-4 py-2">Total Deduction</th>
                                <th class="border-none px-4 py-2">Bonus</th>
                                <th class="border-none px-4 py-2">Pay Period</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="border-none px-4 py-2">January 2025</td>
                                <td class="border-none px-4 py-2">$1,750</td>
                                <td class="border-none px-4 py-2">$200</td>
                                <td class="border-none px-4 py-2">$500</td>
                                <td class="border-none px-4 py-2">
                                    January 1, 2025 - January 31, 2025
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="flex justify-end gap-4 mt-6">
                    <button data-modal-toggle="edit-info-modal"
                        class="px-6 py-2 bg-blue-600 hover:bg-blue-700 text-white rounded-md shadow-md">
                        Edit Information
                    </button>
                    <button data-modal-toggle="add-payroll-modal"
                        class="px-6 py-2 bg-green-600 hover:bg-green-700 text-white rounded-md shadow-md">
                        Add Payroll Entry
                    </button>
                </div>
            </div>
            <!--Edit Information-->
            <div id="edit-info-modal" tabindex="-1" aria-hidden="true"
                class="hidden fixed inset-0 flex justify-center items-center z-50 text-white backdrop-blur-sm">
                <div class="relative p-4 w-full max-w-2xl">
                    <div class="relative rounded-lg shadow dark:bg-gray-700">
                        <div class="flex items-center justify-between p-4 border-b rounded-t dark:border-gray-600">
                            <h2 class="text-xl font-semibold">Edit Employee Information</h2>
                            <button type="button"
                                class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                                data-modal-toggle="edit-info-modal">
                                <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                    fill="none" viewBox="0 0 14 14">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                                </svg>
                            </button>
                        </div>
                        <form action="#" method="POST" class="p-4 md:p-5">
                            <div class="mb-5">
                                <label for="employee_name" class="block text-sm font-medium">Employee Name</label>
                                <input type="text" id="employee_name" name="employee_name" value="Jezekiel Javier"
                                    class="bg-gray-400 text-black block w-full px-4 py-2 mt-1 rounded" required>
                            </div>
                            <div class="mb-5">
                                <label for="employee_email" class="block text-sm font-medium">Employee Email</label>
                                <input type="email" id="employee_email" name="employee_email"
                                    value="jezekiel@email.com"
                                    class="bg-gray-400 text-black block w-full px-4 py-2 mt-1 rounded" required>
                            </div>
                            <div class="flex justify-end gap-4">
                                <button type="submit" class="px-6 py-2 bg-blue-600 text-white rounded-md">Save
                                    Changes</button>
                                <button type="button" class="px-6 py-2 bg-red-600 text-white rounded-md"
                                    data-modal-toggle="edit-info-modal">Cancel</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

            <!--Add payroll modal-->
            <div id="add-payroll-modal" tabindex="-1" aria-hidden="true"
                class="hidden fixed inset-0 flex justify-center items-center z-50 text-white backdrop-blur-sm">
                <div class="relative rounded-lg shadow dark:bg-gray-700">
                    <div class="flex items-center justify-between p-4 md:p-5 border-b rounded-t dark:border-gray-600">
                        <h2 class="text-xl font-semibold">Add Payroll Entry for Staff ID <span
                                class="text-red-500">1</span>
                        </h2>
                        <button type="button"
                            class="text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm w-8 h-8 ms-auto inline-flex justify-center items-center dark:hover:bg-gray-600 dark:hover:text-white"
                            data-modal-toggle="add-payroll-modal">
                            <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                                viewBox="0 0 14 14">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6" />
                            </svg>
                        </button>
                    </div>
                    <form action="#" method="POST" class="p-4 md:p-5">
                        <div class="flex gap-6">
                            <div class="w-1/2">
                                <h3 class="text-lg font-semibold mb-4">Employee Details</h3>
                                <div class="mb-4">
                                    <label for="employee_id" class="text-sm font-medium">Employee ID</label>
                                    <input type="text" id="employee_id" name="employee_id" value="1"
                                        class="bg-gray-400 text-red-500 block w-full px-4 py-2 mt-1 rounded" disabled>
                                </div>
                                <div class="mb-4">
                                    <label for="employee_name" class="block text-sm font-medium">Employee Name</label>
                                    <input type="text" id="employee_name" name="employee_name"
                                        value="Jezekiel Javier"
                                        class="bg-gray-400 text-black block w-full px-4 py-2 mt-1 rounded " readonly>
                                </div>
                            </div>
                            <div class="w-1/2">
                                <h3 class="text-lg font-semibold mb-4">Payroll Details</h3>
                                <div class="mb-4">
                                    <label for="start_date" class="block text-sm font-medium">Pay Period Start
                                        Date</label>
                                    <input type="date" id="start_date" name="start_date"
                                        class="bg-gray-400 text-black block w-full px-4 py-2 mt-1 rounded" required>
                                </div>
                                <div class="mb-4">
                                    <label for="end_date" class="block text-sm font-medium">Pay Period End
                                        Date</label>
                                    <input type="date" id="end_date" name="end_date"
                                        class="bg-gray-400 text-black block w-full px-4 py-2 mt-1 rounded" required>
                                </div>
                                <div class="mb-4">
                                    <label for="net_pay" class="text-sm font-medium">Net Pay</label>
                                    <input type="number" id="net_pay" name="net_pay"
                                        class="bg-gray-400 text-black block w-full px-4 py-2 mt-1 rounded " required>
                                </div>
                                <div class="mb-4">
                                    <label for="total_deductions" class="text-sm font-medium">Total Deductions</label>
                                    <input type="number" id="total_deductions" name="total_deductions"
                                        class="bg-gray-400 text-black block w-full px-4 py-2 mt-1 rounded " required>
                                </div>
                                <div class="mb-4">
                                    <label for="bonus" class="text-sm font-medium">Bonus</label>
                                    <input type="number" id="bonus" name="bonus"
                                        class="bg-gray-400 text-black block w-full px-4 py-2 mt-1 rounded " required>
                                </div>
                            </div>
                        </div>
                        <div class="flex justify-end gap-4">
                            <button type="submit" class="px-6 py-2 bg-green-600 text-white rounded-md">Save
                                Entry</button>
                            <button type="button" class="px-6 py-2 bg-red-600 text-white rounded-md"
                                data-modal-toggle="add-payroll-modal">Cancel</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/pop-up.js') }}"></script>
</body>

</html>
