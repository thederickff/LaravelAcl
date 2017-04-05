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
        <b>{{$role->name}}</b> Permissions
    </h1>

    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Name</th>
            <th>Label</th>
            <th>Ações</th>
        </tr>

        @forelse($permissions as $permissions)
        <tr>
            <td>{{$permissions->id}}</td>
            <td>{{$permissions->name}}</td>
            <td>{{$permissions->label}}</td>
            <td>
                <a href="{{route('painel.permissions.delete', ['id' => $permissions->id])}}" class="delete">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @empty
        <tr><td colspan="90"><p>Nenhum Resultado</p></td></tr>
        @endforelse

    </table>
</div>

@endsection