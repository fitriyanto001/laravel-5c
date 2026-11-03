<?php

namespace App\Http\Controllers;

use App\Models\Periode;
use Illuminate\Http\Request;

class PeriodeController extends Controller
{
    public function index()
    {
        $semua_periode = Periode::all();

        return view('periode.index', compact('semua_periode'));
    }

    public function create()
    {
        return view('periode.create');
    }

    public function store(Request $request)
    {
        $data = $request->validate([
            'periode' => ['required', 'string', 'max:50'],
            'singkatan' => ['required', 'string', 'max:10', 'unique:periode,singkatan'],
        ], [
            'periode.required' => 'Nama periode wajib diisi.',
            'singkatan.required' => 'Singkatan wajib diisi.',
            'singkatan.unique' => 'Singkatan sudah dipakai periode lain.',
        ]);

        $data['status'] = $request->boolean('status');

        Periode::create($data);

        return redirect()->route('periode.index')
            ->with('success', 'Periode berhasil ditambahkan.');
    }

    public function edit(Periode $periode)
    {
        return view('periode.edit', compact('periode'));
    }

    public function update(Request $request, Periode $periode)
    {
        $data = $request->validate([
            'periode' => ['required', 'string', 'max:50'],
            'singkatan' => ['required', 'string', 'max:10', 'unique:periode,singkatan,' . $periode->id],
        ], [
            'periode.required' => 'Nama periode wajib diisi.',
            'singkatan.required' => 'Singkatan wajib diisi.',
            'singkatan.unique' => 'Singkatan sudah dipakai periode lain.',
        ]);

        $data['status'] = $request->boolean('status');

        $periode->update($data);

        return redirect()->route('periode.index')
            ->with('success', 'Periode berhasil diubah.');
    }

    public function destroy(Periode $periode)
    {
        $periode->delete();

        return redirect()->route('periode.index')
            ->with('success', 'Periode berhasil dihapus.');
    }
}