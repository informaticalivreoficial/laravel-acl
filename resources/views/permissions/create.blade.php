@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Painel</div>
                <div class="card-body">

                    <a class="text-success" href="{{route('permission.index')}}">← Voltar para a Listagem</a>

                    @if($errors)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger mt-4" role="alert">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif

                    <form class="mt-4" action="{{route('permission.store')}}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="name">Nome da Permissão</label>
                            <input type="text" class="form-control input-lg" placeholder="Nome da Permissão" id="name" name="name" value="{{old('name')}}">
                        </div>                        
                        <button class="btn btn-lg btn-block btn-success">Cadastrar Permissão</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection