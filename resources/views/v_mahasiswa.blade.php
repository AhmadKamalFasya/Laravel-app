@extends('layout/v_template')

@section('title', 'Mahasiswa | Zeph University')

@section('content')
<div class="container">
    <table class="table table-primary table-striped mt-3">
        <thead>
            <tr>
                <th scope="col">No.</th>
                <th scope="col">Foto</th>
                <th scope="col">Nama</th>
                <th scope="col">Fakultas</th>
                <th scope="col">Prodi</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th scope="row">1</th>
                <td><img src="{{asset('img/p1.jpg')}}" alt="" width="75"></td>
                <td>Otto</td>
                <td>@mdo</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td><img src="{{asset('img/p2.jpg')}}" alt="" width="75"></td>
                <td>Thornton</td>
                <td>@fat</td>
                <td>Thornton</td>
                <td>@fat</td>
            </tr>
        </tbody>
    </table>
</div>
@endSection