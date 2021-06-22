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

                            <a class="text-success" href="{{route('user.create')}}">+ Cadastrar Usuário</a>

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
                                        <th>Usuário</th>
                                        <th>Ações</th>
                                    </tr>
                                </head>
                                <tbody>                                    
                                        @if($users->count() > 0)
                                            @foreach($users as $user)
                                            <tr>
                                                <td>{{$user->id}}</td>
                                                <td>{{$user->name}}</td>
                                                <td>
                                                    <a class="mr-3 btn btn-sm btn-outline-success" href="{{route('user.edit',['user' => $user->id])}}">Editar</a>
                                                    <a class="mr-3 btn btn-sm btn-outline-info" href="">Perfil</a>
                                                    <form class="" action="{{route('user.destroy',['user' => $user->id])}}" method="post">
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