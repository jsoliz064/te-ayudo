@extends('layouts.adminLTE')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('INICIO') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    {{ __('You are logged in!') }}
                    
                </div>
                @auth
                    <img src="{{auth()->user()->facebook_perfil()}}" alt="">
                    {{-- //{{auth()->user()->facebook_perfil()}} --}}
                    @endauth
            </div>
        </div>
    </div>
</div>
@endsection
