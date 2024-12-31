<?php

namespace App\Http\Controllers;

use App\Models\Finance;
use Illuminate\Http\Request;

class FinanceController extends Controller
{
    public function index()
    {
        $finances = Finance::orderBy('tanggal', 'desc')->paginate(10);
        $totalPengeluaran = Finance::sum('jumlah_pengeluaran');
        
        return view('dashboard', compact('finances','totalPengeluaran'));
    }

    public function create()
    {
        return view('finance.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah_pengeluaran' => 'required|numeric',
            'keterangan' => 'required|string|max:255',
        ]);

        Finance::create($request->all());
        return redirect()->route('dashboard')
            ->with('success', 'Data keuangan berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $finance = Finance::findOrFail($id);
        return view('finance.edit', compact('finance'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'tanggal' => 'required|date',
            'jumlah_pengeluaran' => 'required|numeric',
            'keterangan' => 'required|string|max:255',
        ]);

        $finance = Finance::findOrFail($id);
        $finance->update($request->all());

        return redirect()->route('dashboard')
            ->with('success', 'Data keuangan berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $finance = Finance::findOrFail($id);
        $finance->delete();

        return redirect()->route('dashboard')
            ->with('success', 'Data keuangan berhasil dihapus.');
    }
}