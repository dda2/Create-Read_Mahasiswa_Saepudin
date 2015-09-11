@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-md-12">
            <br><a href="{{ route('tambah.mahas') }}" class="btn btn-primary">Tambah</a>
            <br><br>
            <table class="table table-striped table-bordered">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>Jurusan</th>
                        <th>No Telephone</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($mahasiswa as $maha)
                    <tr>
                        <td> {{ $maha->id }} </td>
                        <td> {{ $maha->name }} </td>
                        <td> {{ $maha->address }} </td>
                        <td> {{ $maha->department }} </td>
                        <td> {{ $maha->phone_number }} </td>
                        <td>
                            <a href="" class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span> Edit</a>
                            <a href="" class="btn btn-danger"><span class="glyphicon glyphicon-erase"></span> Hapus</a>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop