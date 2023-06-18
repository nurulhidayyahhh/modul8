@extends('layouts.app')
@section('content')
    <div class="container-sm my-5">
        <form action="{{ route('barangs.update', ['barang' => $barang->id]) }}" method="POST">
            @csrf
            @method('put')
            <div class="row justify-content-center">
                <div class="p-5 bg-light rounded-3 col-xl-6">
                    <div class="mb-3 text-center">
                        <i class="bi-person-circle fs-1"></i>
                        <h4>Edit Barang</h4>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 mb-3">
                            <label for="kodeBrg" class="form-label">Kode</label>
                            <input class="form-control  @error('kodeBrg') is-invalid @enderror" type="text"
                                name="kodeBrg" id="kodeBrg"
                                value="{{ $errors->any() ? old('kodeBrg') : $barang->kodebrg }}"
                                placeholder="Enter Kode">
                            @error('kodeBrg')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="namaBrg" class="form-label">Nama Barang</label>
                            <input class="form-control @error('namaBrg') is-invalid @enderror" type="text"
                                name="namaBrg" id="namaBrg"
                                value="{{ $errors->any() ? old('namaBrg') : $barang->namabrg }}"
                                placeholder="Enter Nama Barang">
                            @error('namaBrg')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="desk" class="form-label">Desk</label>
                            <input class="form-control @error('desk') is-invalid @enderror" type="text" name="desk"
                                id="desk" value="{{ $errors->any() ? old('desk') : $barang->desk }}"
                                placeholder="Enter desk">
                            @error('desk')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-6 mb-3">
                            <label for="harga" class="form-label">Harga</label>
                            <input class="form-control @error('harga') is-invalid @enderror" type="text" name="harga"
                                id="harga" value="{{ $errors->any() ? old('harga') : $barang->harga }}"
                                placeholder="Enter Harga">
                            @error('harga')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                        <div class="col-md-12 mb-3">
                            <label for="satuan" class="form-label">Satuan</label>
                            <select name="satuan" id="satuan" class="form-select">
                                @php
                                    $selected = '';
                                    if ($errors->any()) {
                                        $selected = old('satuan');
                                    } else {
                                        $selected = $barang->satuanbrg;
                                    }
                                @endphp
                                @foreach ($satuann as $satuan)
                                    <option value="{{ $satuan->id }}" {{ $selected == $satuan->id ? 'selected' : '' }}>
                                        {{ $satuan->code . ' - ' . $satuan->name }}
                                    </option>
                                @endforeach
                            </select>
                            @error('satuan')
                                <div class="text-danger"><small>{{ $message }}</small></div>
                            @enderror
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-6 d-grid">
                            <a href="{{ route('barangs.index') }}" class="btn btn-outline-dark btn-lg mt-3">
                                <i class="bi-arrow-left-circle me-2"></i> Cancel</a>
                        </div>
                        <div class="col-md-6 d-grid">
                            <button type="submit" class="btn btn-dark btn-lg mt-3">
                                <i class="bi-check-circle me-2"></i> Edit</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
@endsection
