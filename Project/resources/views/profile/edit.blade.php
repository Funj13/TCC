@extends('layouts.main')

@section('title', 'Hotel')


@section('content')
@section('topnav')
@endsection
@guest
    <br><br><br>
    <!-- tela usuario sem login -->
    <div class="card ">
        <h1 class="text-align"><a>Faça login para visualizar seus pedidos.</a></h1>
    </div>

    <br><br><br><br><br><br>
@endguest

<div class="cadastroQuarto border" class="theme">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-profile-information-form')
                </div>
            </div>

            <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.update-password-form')
                </div>
            </div>
    
            <div class="p-4 sm:p-8 shadow sm:rounded-lg">
                <div class="max-w-xl">
                    @include('profile.partials.delete-user-form')
                </div>
            </div>
        </div>
    </div>


    @endsection
