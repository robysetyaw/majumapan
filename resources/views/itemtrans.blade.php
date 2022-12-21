@extends('layouts.main')
@section('container')
<h4>Keluar Masuk Barang</h4>
<table class="table mt-3">
    <thead>
      <tr>
        <th scope="col">Kepada</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Berat</th>
        <th scope="col">Harga /kg</th>
        <th scope="col">Status</th>
        <th scope="col">Tanggal</th>
      </tr>
    </thead>
    <tbody>
    @foreach ($itemtrans as $itemtran)
    <tr>
        <td>{{ $itemtran->user->name }} </td>
        <td>{{ $itemtran->item->name }} </td>
        <td>{{ $itemtran->weight }}</td>
        <td>{{ $itemtran->kgprice }}</td>
        <td>{{ $itemtran->status }}</td>
        <td>{{ $itemtran->created_at }}</td>
      </tr>
    @endforeach  
    </tbody>
  </table>
    
@endsection