@extends('layouts.main')
@section('container')
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3>POINT 1 CUSTOMERS</h3>
        </div>
    </div>
    <form action="{{ url('/customers') }}" method="POST">
        @csrf
        <div class="row align-items-center mb-3">
            <div class="col-1">
                <label for="alamat" class="col-form-label">Pilih Alamat</label>
            </div>
            <div class="col-3">
                <select class="form-select" id="alamat" name="alamat">
                    <option value="">Pilih</option>
                    <option value="Jakarta">Jakarta</option>
                    <option value="all">All</option>
                </select>
            </div>
            <div class="col-2">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </div>
    </form>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col" class="bg-secondary text-light">No</th>
                        <th scope="col" class="bg-secondary text-light">Nama</th>
                        <th scope="col" class="bg-secondary text-light">Phone</th>
                        <th scope="col" class="bg-secondary text-light">Address</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $loop->iteration }}</th>
                            <td>{{ $item->name }}</td>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
    </div>
@endsection
