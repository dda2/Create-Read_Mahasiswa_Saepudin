@extends('templates.default')

@section('content')
    <div class="row">
        <div class="col-lg-6">
            <form action="{{ route('signup') }}" class="form-vertical" method="POST">
                <div class="form-group {{ $errors->has('name') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Name</label>
                    <input type="text" name="name" id="name" class="form-control" value="{{ Request::old('name')?: '' }}">
                    @if ($errors->has('name'))
                        <span class="help-block">{{ $errors->first('name') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('email') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Email</label>
                    <input type="text" name="email" id="email" class="form-control" value="{{ Request::old('email')?: '' }}">
                    @if ($errors->has('email'))
                        <span class="help-block">{{ $errors->first('email') }}</span>
                    @endif
                </div>
                <div class="form-group {{ $errors->has('password') ? ' has-error' : '' }}">
                    <label for="" class="control-label">Password</label>
                    <input type="password" name="password" id="password" class="form-control" value="">
                    @if ($errors->has('password'))
                        <span class="help-block">{{ $errors->first('password') }}</span>
                    @endif
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-default">Daftar</button>
                </div>
                <input type="hidden" name="_token" value="{{ Session::token() }}">
            </form>
        </div>
    </div>
@stop