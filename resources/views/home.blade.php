@extends('layouts.master')

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-default">
                <div id="welcome-text" class="panel-heading">Selamat Datang {{ Auth::user()->name }}</div>

                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif

                    Anda Berhasil Login...
                </div>
            </div>
        </div> <!-- end of col -->
    </div> <!-- end of row -->
</div> <!-- end of container -->
@endsection
