<x-app-layout>
        <div class="max-w-xl mt-6 ml-7 sm:px-6 w-1/3">
            <div class="ml-5 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center ">
                        <h2 class="text-white text-xl font-semibold">Total Pengeluaran</h2>
                        <h2 class="text-white text-xl font-bold py-2 px-4 mr-5 rounded "">
                        Rp {{ number_format($totalPengeluaran, 0, ',', '.') }}
                        </p>
                    </div>
                </div>
            </div>
        </div>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-white text-2xl font-semibold">Data Keuangan</h2>
                        <a href="{{ route('finance.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 mr-5 rounded">
                            Tambah Data
                        </a>
                    </div>

                    @if (session('success'))
                        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative mb-4">
                            {{ session('success') }}
                        </div>
                    @endif

                    <div class="overflow-x-auto">
                    <table class="w-[95%] mx-auto mb-5 bg-white dark:bg-gray-800 text-gray-900 dark:text-gray-100 border border-collapse border-gray-200">
                            <thead>
                                <tr class="bg-gray-100 dark:bg-gray-700">
                                    <th class="w-[5%] border border-gray-300 px-4 py-2">No</th>
                                    <th class="border border-gray-300 px-4 py-2">Tanggal</th>
                                    <th class="border border-gray-300 px-4 py-2">Jumlah Pengeluaran</th>
                                    <th class="border border-gray-300 px-4 py-2">Keterangan</th>
                                    <th class="border border-gray-300 px-4 py-2">Aksi</th>
                                </tr>
                            </thead>
                            <tbody class="text-center">
                                @foreach ($finances as $index => $finance)
                                <tr class="hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="border border-gray-300 px-4 py-2">{{ $index + 1 }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ date('d/m/Y', strtotime($finance->tanggal)) }}</td>
                                    <td class="border border-gray-300 px-4 py-2">Rp {{ number_format($finance->jumlah_pengeluaran, 0, ',', '.') }}</td>
                                    <td class="border border-gray-300 px-4 py-2">{{ $finance->keterangan }}</td>
                                    <td class="border border-gray-300 px-4 py-2 flex justify-center items-center gap-3">
                                        <a href="{{ route('finance.edit', $finance->id) }}" class="text-indigo-600 hover:text-indigo-900 py-2 px-4 border border-indigo-500 rounded-lg text-sm font-semibold hover:bg-indigo-500 hover:text-white transition ease-in-out duration-150">
                                            Edit
                                        </a>
                                        <!-- <form action="{{ route('finance.destroy', $finance->id) }}" method="POST" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="text-red-600 hover:text-red-900 py-2 px-4 border border-red-500 rounded-lg text-sm font-semibold hover:bg-red-500 hover:text-white transition ease-in-out duration-150" onclick="return confirm('Apakah Anda yakin ingin menghapus data ini?')">
                                                Hapus
                                            </button>
                                        </form> -->
                                        <form action="{{ route('finance.destroy', $finance->id) }}" method="POST" class="inline" id="delete-form-{{ $finance->id }}">
                                            @csrf
                                            @method('DELETE')
                                            <button type="button" class="text-red-600 hover:text-red-900 py-2 px-4 border border-red-500 rounded-lg text-sm font-semibold hover:bg-red-500 hover:text-white transition ease-in-out duration-150" onclick="confirmDelete({{ $finance->id }})">
                                                Hapus
                                            </button>
                                        </form>

                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="mt-4">
                        {{ $finances->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script>
    function confirmDelete(id) {
        Swal.fire({
            title: 'Apakah Anda yakin?',
            text: "Data ini akan dihapus secara permanen!",
            icon: 'warning',
            showCancelButton: true,
            cancelButtonText: 'Batal',
            confirmButtonText: 'Hapus',
            confirmButtonColor: '#d33',
            cancelButtonColor: '#3085d6',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                document.getElementById('delete-form-' + id).submit();
            }
        });
    }
</script>

</x-app-layout>