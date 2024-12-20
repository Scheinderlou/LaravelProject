@extends('layouts.masters')

@section('title', 'Home - Page')

@section('content')

    <div class="container mx-auto p-6 ">
        <table class="min-w-full text-left text-md rounded-[14px] bg-[#008080]">
            <thead>
                <tr>
                    <th class="px-6 py-3">Staff</th>
                    <th class="px-6 py-3">Name</th>
                    <th class="px-6 py-3">Position</th>
                    <th class="px-6 py-3">Department</th>
                    <th class="px-6 py-3">Status</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-6 py-3">1</td>
                    <td class="px-6 py-3">Javier Jezekiel</td>
                    <td class="px-6 py-3">Software Engineer</td>
                    <td class="px-6 py-3">IT</td>
                    <td class="p-4">
                        <span class="inline-block px-3 py-2 text-xs font-bold text-green-200 bg-green-800 rounded">
                            Active
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-3">2</td>
                    <td class="px-6 py-3">Genela Jhon Mark</td>
                    <td class="px-6 py-3">HR Manager</td>
                    <td class="px-6 py-3">HR</td>
                    <td class="p-4">
                        <span class="inline-block px-3 py-2 text-xs font-bold text-green-200 bg-green-800 rounded">
                            Active
                        </span>
                    </td>
                </tr>
                <tr>
                    <td class="px-6 py-3">3</td>
                    <td class="px-6 py-3">Lagahid Cyvielle</td>
                    <td class="px-6 py-3">Accountant</td>
                    <td class="px-6 py-3">Finance</td>
                    <td class="p-4">
                        <span class="inline-block px-3 py-2 text-xs font-bold text-green-200 bg-red-900 rounded">
                            On Leave
                        </span>
                    </td>
                </tr>
            </tbody>


        </table>
    </div>
@endsection
