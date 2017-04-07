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
        Listagem dos Posts
    </h1>

    <table class="table table-hover">
        <tr>
            <th>Id</th>
            <th>Titulo</th>
            <th>Descricao</th>
            <th width="100px">Ações</th>
        </tr>

       @can('view_post')
        @forelse($posts as $post)
        <tr>
            <td>{{$post->id}}</td>
            <td>{{$post->title}}</td>
            <td>{{$post->description}}</td>
            <td>
                <a href="{{route('painel.posts.edit', ['id' => $post->id])}}" class="edit">
                    <i class="fa fa-pencil-square-o"></i>
                </a>
                <a href="{{route('painel.posts.delete', ['id' => $post->id])}}" class="delete">
                    <i class="fa fa-trash"></i>
                </a>
            </td>
        </tr>
        @empty
        <tr><td colspan="90"><p>Nenhum Resultado</p></td></tr>
        @endforelse
       
       @endcan

    </table>


   {{$posts->render()}}
</div>

@endsection