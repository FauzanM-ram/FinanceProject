<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Selamat datang,') }} {{ Auth::user()->name }} 
        </h2>
    </x-slot>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="overflow-x-auto">
                <table class="w-[90%] mx-auto mt-4 mb-5 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 border border-collapse border-gray-200">
                <thead>
                    <tr class="bg-gray-100 dark:bg-gray-700">
                        <th class="w-[5%] border border-gray-300 px-4 py-2">No</th>
                        <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                        <th class="border border-gray-300 px-4 py-2">Jumlah Pengeluaran</th>
                        <th class="border border-gray-300 px-4 py-2">Keterangan</th>
                        <th class="w-[25%] border border-gray-300 px-4 py-2">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                @foreach ($finances as $finance)
                    <tr class="hover:bg-gray-50 dark:hover:bg-gray-600">
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $finance->id_data }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ \Carbon\Carbon::parse($finance->tanggal)->format('d-m-Y') }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $finance->jumlah_pengeluaran }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">{{ $finance->keterangan }}</td>
                        <td class="border border-gray-300 px-4 py-2 text-center">
                        <a href="#" class="inline-block px-4 py-2 text-white bg-yellow-500 hover:bg-yellow-600 rounded-md"><i class="fa-solid fa-pencil"></i> Edit</a>
                        <a href="#" class="inline-block px-4 py-2 ml-2 text-white bg-red-500 hover:bg-red-600 rounded-md"><i class="fa-solid fa-trash-can"></i> Hapus</a>
                        </td>
                    </tr>
                @endforeach
                </tbody>
                </table>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
