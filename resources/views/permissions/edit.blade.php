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

                    <form class="mt-4" action="{{route('permission.update', ['permission' => $permission->id])}}" method="post" autocomplete="off">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label for="name">Permissão</label>
                            <input type="text" class="form-control input-lg" placeholder="Nome da Permissão" id="name" name="name" value="{{old('name') ?? $permission->name}}">
                        </div>                        
                        <button class="btn btn-lg btn-block btn-success">Atualizar Permissão</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div> 
@endsection