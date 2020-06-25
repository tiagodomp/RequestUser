@extends('layouts.app')

@section('content')
<div class="container my-5">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <table class="table table-striped table-dark">
                <thead>
                <tr>
                    <th scope="col">Nome</th>
                    <th scope="col">Idade</th>
                    <th scope="col">Cor</th>
                    <th scope="col">Info</th>
                </tr>
                </thead>
                <tbody>
                @if(!empty($data))
                    @foreach($data as $user)
                    <tr>
                        <th scope="row">{{$user->nome}}</th>
                        <td>{{$user->idade}}</td>
                        <td>{{$user->cor}}</td>
                        <td>{{$user->info}}</td>
                    </tr>
                    @endforeach
                @else
                    <tr>
                        <td colspan="4" class="text-center">carregando...</td>
                    </tr>
                @endif
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
