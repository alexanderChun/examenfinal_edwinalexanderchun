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

                    {{ __('Vista dos!') }}
                    <img src="https://images.adsttc.com/media/images/5b0d/d356/f197/cc9c/0800/0066/newsletter/Collage_PicMonkey.jpg?1527632717" alt="">
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
