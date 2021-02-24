@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
            <h1 class="display-4 fw-normal">Arquivo Musical</h1>
            <p class="lead fw-normal">Suas faixas e álbuns preferidos em um só lugar.</p><br>

            @if (Auth::guest())
                <a class="btn btn-link" href="{{ url('login') }}">Começar</a>
            @else
                <a href="{{ url('tracks/inserir') }}" class="btn btn-outline-primary">Cadastrar Faixas</a>
                <a href="{{ url('albums/inserir') }}" id="albuns" class="btn btn-outline-secondary">Cadastrar Álbuns</a>
            @endif

        </div>
    </div>  
</div>

<!-- 
    <div class="position-relative overflow-hidden p-3 p-md-5 m-md-3 text-center">
        <div>
            <h1 class="display-4 fw-normal">Arquivo Musical</h1>

            <p class="lead fw-normal">Suas faixas e álbuns preferidos em um só lugar.</p><br>

            @if (Auth::guest())
                <a href="{{ url('login') }}" class="btn btn-outline-primary">Começar</a>
            @else
                <a href="{{ url('tracks/inserir') }}" class="btn btn-outline-primary">Cadastrar Faixas</a>
                <a href="{{ url('albums/inserir') }}" id="albuns" class="btn btn-outline-secondary">Cadastrar Álbuns</a>
            @endif
        </div>
    </div> -->
@stop