@extends('layouts.app')

@section('content')    
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-8">
                    <div class="card">
                        <div class="card-header">Painel</div>
                        <div class="card-body">

                            @if(session('status'))
                                <div class="alert alert-success" role="alert">
                                    {{session('status')}}
                                </div>
                            @endif

                            <a class="text-success" href="{{route('role.create')}}">+ Cadastrar Perfil</a>

                            @if($errors)
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger mt-4" role="alert">
                                        {{$error}}
                                    </div>
                                @endforeach
                            @endif

                            <table class="table table-striped mt-4">
                                <head>
                                    <tr>
                                        <th>#</th>
                                        <th>Perfil</th>
                                        <th>Ações</th>
                                    </tr>
                                </head>
                                <tbody>                                    
                                        @if($roles->count() > 0)
                                            @foreach($roles as $role)
                                            <tr>
                                                <td>{{$role->id}}</td>
                                                <td>{{$role->name}}</td>
                                                <td>
                                                    <a class="mr-3 btn btn-sm btn-outline-success" href="{{route('role.edit',['role' => $role->id])}}">Editar</a>
                                                    <a class="mr-3 btn btn-sm btn-outline-info" href="">Permissões</a>
                                                    <form class="d-inline" action="{{route('permission.destroy',['role' => $role->id])}}" method="post">
                                                        @csrf
                                                        @method('delete')
                                                        <input class="btn btn-sm btn-outline-danger" type="submit" value="Deletar">
                                                    </form>
                                                </td>
                                            </tr>
                                            @endforeach
                                        @endif                                    
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
@endsection