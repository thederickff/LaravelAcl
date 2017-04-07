@extends('painel.templates.template')



@section('content')
<!--Filters and actions-->
<div class="actions">
    <div class="container">
        <a class="add" href="forms">
            <i class="fa fa-plus-circle"></i>
        </a>

        <form class="form-search form form-inline">
            <input type="text" name="pesquisar" placeholder="Pesquisar?" class="form-control">
            <input type="submit" name="pesquisar" value="Encontrar" class="btn btn-success">
        </form>
    </div>
</div>
<div class="clear"></div>

<div class="container">
    <h1 class="title">
        Users
    </h1>

    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Email</th>
            <th>Ações</th>
        </tr>

        @forelse($users as $user)
        <tr>
            <td>{{$user->id}}</td>
            <td>{{$user->name}}</td>
            <td>{{$user->email}}</td>
            <td>
                <a href="{{route('painel.users.roles', ['id' => $user->id])}}" class="roles">
                     <i class="fa fa-unlock"></i>
                </a>
                <a href="{{route('painel.users.edit', ['id' => $user->id])}}" class="edit">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="{{route('painel.users.delete', ['id' => $user->id])}}" class="delete">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @empty
        <tr><td colspan="90"><p>Nenhum Resultado</p></td></tr>
        @endforelse

    </table>


   {{$users->render()}}
</div>

@endsection