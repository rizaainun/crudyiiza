@extends('layouts.master')

@section('content')
    <div class="container">
        <a class="btn btn-primary" href="/mahasiswa/create">Add Data</a>
        <table class="table table-hover">
<tr>
<th>ID</th>
<th>NAMA</th>
<th>NIM</th>
<th>JURUSAN</th>
<th>JENIS KELAMIN</th>
<th>ALAMAT</th>
<th>AKSI</th>
</tr>
@php
    $no = 1;
@endphp
@foreach ($mahasiswa as $sw)
<tr>
<th scope="sw">{{ $no++ }}</th>
<td>{{$sw->nama}}</td>
<td>{{$sw->nim}}</td>
<td>{{$sw->jurusan}}</td>
<td>{{$sw->jenis_kelamin}}</td>
<td>{{$sw->alamat}}</td>
<td>
<div class="btn-group" role="group" aria-label="Basic example">    
                        <a class="btn btn-warning" href="/mahasiswa/{{$sw->id}}/edit">Edit</a>
                            <form action="/mahasiswa/{{$sw->id}}" method="POST">
                            @csrf
                                @method('delete')
                                <input class="btn btn-light" type="submit" value="Delete">
                            </form>
                    </div>
                    </td>
                </tr>
        @endforeach
    </table>
        </div>
@endsection