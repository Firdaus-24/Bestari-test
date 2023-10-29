@extends('layouts.main')

@section('container')
    <div class="row">
        <div class="col-lg-12 text-center">
            <h3>Sends</h3>
        </div>
    </div>
    <div class="row">
        <div class="col-lg-12">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th scope="col">Nama</th>
                        <th scope="col">Phone</th>
                        <th scope="col">Address</th>
                        <th scope="col">Order ID</th>
                        <th scope="col">Order Code</th>
                        <th scope="col">No Resi</th>
                        <th scope="col">Shipment Code</th>
                        <th scope="col">Status</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)
                        <tr>
                            <th scope="row">{{ $item->name }}</th>
                            <td>{{ $item->phone }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->resi_number }}</td>
                            <td>{{ $item->code }}</td>
                            <td>{{ $item->status }}</td>
                        </tr>
                    @endforeach

                </tbody>
            </table>

        </div>
    </div>
@endsection
