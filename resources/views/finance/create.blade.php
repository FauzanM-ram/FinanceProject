<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-semibold mb-6">Tambah Data Keuangan</h2>

                    <form method="POST" action="{{ route('finance.store') }}" class="space-y-6">
                        @csrf

                        <div>
                            <x-input-label for="tanggal" value="Tanggal" />
                            <x-text-input id="tanggal" 
                                type="date" 
                                name="tanggal"
                                class="mt-1 block w-full"
                                value="{{ old('tanggal') }}"
                                required />
                            <x-input-error :messages="$errors->get('tanggal')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="jumlah_pengeluaran" value="Jumlah Pengeluaran" />
                            <x-text-input id="jumlah_pengeluaran" 
                                type="number" 
                                name="jumlah_pengeluaran"
                                class="mt-1 block w-full"
                                value="{{ old('jumlah_pengeluaran') }}"
                                required />
                            <x-input-error :messages="$errors->get('jumlah_pengeluaran')" class="mt-2" />
                        </div>

                        <div>
                            <x-input-label for="keterangan" value="Keterangan" />
                            <textarea
                                id="keterangan"
                                name="keterangan"
                                class="mt-1 block w-full border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm"
                                required
                            >{{ old('keterangan') }}</textarea>
                            <x-input-error :messages="$errors->get('keterangan')" class="mt-2" />
                        </div>

                        <div class="flex items-center gap-4">
                            <x-primary-button>Simpan</x-primary-button>
                            <a href="{{ route('finance.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 border border-transparent rounded-md font-semibold text-xs text-gray-700 uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-400 active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                                Kembali
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>