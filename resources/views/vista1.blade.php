@extends('layouts.plantilla')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Bienvenido') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('Vista uno!') }}
                    <img src="https://www.ofiprix.com/blog/wp-content/uploads/2017/05/1876.jpg" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
