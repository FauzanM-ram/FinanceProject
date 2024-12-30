<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    {{ __("You're logged in!") }}
                </div>
                <div class="overflow-x-auto">
                <table class="w-[90%] mx-auto mb-5 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 border border-collapse border-gray-200">
                <thead>
                    <tr class="bg-gray-100 dark:bg-gray-700">
                        <th class="w-[5%] border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                        <th class="border border-gray-300 px-4 py-2">Jumlah Pengeluaran</th>
                        <th class="border border-gray-300 px-4 py-2">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="border border-gray-300 px-4 py-2">1</td>
                        <td class="border border-gray-300 px-4 py-2">Data 2</td>
                        <td class="border border-gray-300 px-4 py-2">Data 3</td>
                    </tr>
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
