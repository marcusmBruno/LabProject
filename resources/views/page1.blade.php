@extends('layout.app')

@section('page-content')
<div>
    <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 mt-10">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                   Name
                </th>
                <th scope="col" class="px-6 py-3">
                    Course
                </th>
                <th scope="col" class="px-6 py-3">
                    Section
                </th>
                <th scope="col" class="px-6 py-3">
                    Actions
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    John Doe
                </th>
                <td class="px-6 py-4">
                    BSIT
                </td>
                <td class="px-6 py-4">
                    4-2
                </td>
                <td class="px-6 py-4">
                    <a class="px-2 py-1 rounded-sm bg-blue-400 text-black"  href=""> View </a>
                </td>
            </tr>
            <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Jane Doe
                </th>
                <td class="px-6 py-4">
                    BSFT
                </td>
                <td class="px-6 py-4">
                    3-1
                </td>
                <td class="px-6 py-4">
                    <a class="px-2 py-1 rounded-sm bg-blue-400 text-black"  href=""> View </a>
                </td>
            </tr>
            <tr class="bg-white dark:bg-gray-800">
                <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                    Jean Smith
                </th>
                <td class="px-6 py-4">
                    BSCE
                </td>
                <td class="px-6 py-4">
                    3-2
                </td>
                <td class="px-6 py-4">
                    <a class="px-2 py-1 rounded-sm bg-blue-400 text-black"  href=""> View </a>
                </td>
            </tr>
        </tbody>
    </table>
</div>

@endsection

