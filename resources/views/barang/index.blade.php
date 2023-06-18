@extends('layouts.app')
@section('content')
    <div class="container mt-4">
        <div class="row mb-0">
            <div class="col-lg-9 col-xl-10">
                <h4 class="mb-3">{{ $pageTitle }}</h4>
            </div>
            <div class="col-lg-3 col-xl-2">
                <div class="d-grid gap-2">
                    <a href="{{ route('barangs.create') }}" class="btn
btn-info">Create Barang</a>
                </div>
            </div>
        </div>
        <hr>
        <div class="table-responsive border p-3 rounded-3">
            <table class="table table-bordered table-hover table-striped
mb-0 bg-white">
                <thead>
                    <tr>
                        <th>Kode</th>
                        <th>Nama Barang</th>
                        <th>Description</th>
                        <th>Harga</th>
                        <th>Satuan</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($barangs as $barang)
                        <tr>
                            <td>{{ $barang->kodebrg }}</td>
                            <td>{{ $barang->namabrg }}</td>
                            <td>{{ $barang->desk }}</td>
                            <td>{{ $barang->harga }}</td>
                            <td>{{ $barang->satuan->name }}</td>
                            <td>@include('barang.actions')</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@endsection
