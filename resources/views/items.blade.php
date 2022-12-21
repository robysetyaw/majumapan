@extends('layouts.main')
@section('container')
<button type="button" class="btn btn-light">tambah</button>
<br><br>
@foreach ($items as $item)
<article class="mb-5 border-bottom pb-4">
    <p> {{ $item->name }} </p>
    <p> {{ $item->total }}</p>
</article>   
@endforeach
@endsection