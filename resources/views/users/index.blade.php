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

                            <a class="text-success" href="">+ Cadastrar Recurso</a>

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
                                        <th>Recurso</th>
                                        <th>Ações</th>
                                    </tr>
                                </head>
                                <tbody>
                                    <tr>
                                        <td></td>
                                        <td></td>
                                        <td></td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>    
@endsection