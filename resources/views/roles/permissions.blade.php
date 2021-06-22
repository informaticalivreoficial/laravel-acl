@extends('layouts.app')

@section('content')    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">Painel</div>
                        <div class="card-body">

                            <a class="text-success" href="{{route('role.index')}}">← Voltar para a Listagem</a>

                            @if($errors)
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger mt-4" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif

                            <h2 class="mt-4">Permissões para {{$role->name}}</h2>

                            @if($permissions->count() > 0)
                            <form class="mt-3" action="{{route('role.permissionsSync', ['role' => $role->id])}}" method="post">
                                @csrf
                                @method('PUT')
                                @foreach($permissions as $permission) 
                                    <div class="custom-control custom-checkbox py-1">
                                        <input type="checkbox" class="custom-control-input" id="{{$permission->id}}" name="{{$permission->id}}" {{($permission->can == '1' ? 'checked' : '')}}>
                                        <label class="custom-control-label" for="{{$permission->id}}">{{$permission->name}}</label>
                                    </div>                                                                        
                                @endforeach
                                <button class="btn btn-lg btn-block btn-success mt-4">Sincronizar Perfil</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>    
@endsection