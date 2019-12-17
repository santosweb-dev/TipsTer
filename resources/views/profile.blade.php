@extends('layouts.app')

@section('title', 'Tipster | Perfil')

@section('content')


<div class="app-content content">
    <div class="content-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    @if (Auth::user()->avatar  == '')
                        <img src="{{asset('storage/users/user-default.png')}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                    @else
                        <img src="{{asset('storage/users/'.Auth::user()->avatar )}}" style="width:150px; height:150px; float:left; border-radius:50%; margin-right:25px;">
                    @endif
                    <h2>{{Auth::user()->name}}'s {{ __('Perfil') }}</h2>
                    <form enctype="multipart/form-data" action="{{route('perfil.update')}}" method="POST">
                        <label>Atualizar imagem do perfil</label>
                        <input type="file" name="avatar">
                        <input type="hidden" name="_token" value="{{ csrf_token() }}">
                        <input type="submit" class="pull-right btn btn-sm btn-success">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


@endsection