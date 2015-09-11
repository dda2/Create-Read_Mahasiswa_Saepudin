@extends('templates/default')

@section('content')
    <h3>Tambah Mahasiswa</h3>
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('tambah.mahas.post') }}" class="form-vertical" method="POST">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Nama Mahasiswa</label>
                    <input type="text" name="name" id="email" class="form-control" value="{{ Request::old('name')?: '' }}">
                    @if ($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('address') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Alamat</label>
                    <textarea name="address" id="" cols="30" rows="3" class="form-control">{{ Request::old('address')?: '' }}</textarea>
                    @if ($errors->has('address'))
                        <span class="help-block">{{ $errors->first('address') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('department') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Jurusan</label>
                    <input type="text" name="department" id="email" class="form-control" value="{{ Request::old('department')?: '' }}">
                    @if ($errors->has('department'))
                        <span class="help-block">{{ $errors->first('department') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('phone_number') ? ' has-error' : '' }}">
                    <label for="" class="control-label">No Handphone</label>
                    <input type="text" name="phone_number" id="email" class="form-control" value="{{ Request::old('phone_number')?: '' }}">
                    @if ($errors->has('phone_number'))
                        <span class="help-block">{{ $errors->first('phone_number') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">Tambah</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@stop