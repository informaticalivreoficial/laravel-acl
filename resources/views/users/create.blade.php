@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card">
                <div class="card-header">Painel</div>
                <div class="card-body">

                    <a class="text-success" href="{{route('user.index')}}">← Voltar para a Listagem</a>

                    @if($errors)
                        @foreach($errors->all() as $error)
                            <div class="alert alert-danger mt-4" role="alert">
                                {{$error}}
                            </div>
                        @endforeach
                    @endif

                    <form class="mt-4" action="{{route('user.store')}}" method="post" autocomplete="off">
                        @csrf
                        <div class="form-group">
                            <label for="name">Usuário</label>
                            <input type="text" class="form-control input-lg" placeholder="Nome do Usuário" id="name" name="name" value="{{old('name')}}">
                        </div>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control input-lg" placeholder="Email do Usuário" id="email" name="email" value="{{old('email')}}">
                        </div>
                        <div class="form-group">
                            <label for="senha">Senha</label>
                            <input type="password" class="form-control input-lg" placeholder="Senha do Usuário" id="senha" name="password" value="{{old('password')}}">
                        </div>
                        <button class="btn btn-lg btn-block btn-success">Cadastrar Usuário</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection