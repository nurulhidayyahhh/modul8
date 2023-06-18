<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Satuan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pageTitle = 'Barang List';
        // ELOQUENT
        $barangs = Barang::get();
        return view('barang.index', [
            'pageTitle' => $pageTitle,
            'barangs' => $barangs
        ]);

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $pageTitle = 'Create Barang';
        // ELOQUENT
        $satuann = Satuan::all();
        return view('barang.create', compact('pageTitle', 'satuann'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'kodeBrg' => 'required',
            'namaBrg' => 'required',
            'desk' => 'required',
            'harga' => 'required|numeric',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = new Barang;
        $barang->kodebrg = $request->kodeBrg;
        $barang->namabrg = $request->namaBrg;
        $barang->desk = $request->desk;
        $barang->harga = $request->harga;
        $barang->satuanbrg = $request->satuan;
        $barang->save();
        return redirect()->route('barangs.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $pageTitle = 'Barang Detail';
        // ELOQUENT
        $barang = Barang::find($id);
        return view('barang.show', compact('pageTitle', 'barang'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $pageTitle = 'Edit Barang';
        // ELOQUENT
        $satuann = Satuan::all();
        $barang = Barang::find($id);
        return view('barang.edit', compact(
            'pageTitle',
            'satuann',
            'barang'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $messages = [
            'required' => ':Attribute harus diisi.',
            'numeric' => 'Isi :attribute dengan angka'
        ];
        $validator = Validator::make($request->all(), [
            'kodeBrg' => 'required',
            'namaBrg' => 'required',
            'desk' => 'required',
            'harga' => 'required|numeric',
        ], $messages);
        if ($validator->fails()) {
            return redirect()->back()->withErrors($validator)->withInput();
        }
        // ELOQUENT
        $barang = Barang::find($id);
        $barang->kodebrg = $request->kodeBrg;
        $barang->namabrg = $request->namaBrg;
        $barang->desk = $request->desk;
        $barang->harga = $request->harga;
        $barang->satuanbrg = $request->satuan;
        $barang->save();
        return redirect()->route('barangs.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        // ELOQUENT
        Barang::find($id)->delete();
        return redirect()->route('barangs.index');
    }
}
