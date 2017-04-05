<html>

    @include('templates.head')

    <body>
        <div class="menu">
            <ul class="menu col-md-12">
                <li class="col-md-2 text-center">
                    <a href="/painel">
                        <img src="{{url("assets/painel/imgs/acl-branca.png")}}" alt="LaraMuic" class="logo">
                    </a>
                </li>
                <li class="col-md-2 text-center">
                    <a href="/painel/users">
                        <img src="{{url("assets/painel/imgs/perfil-acl.png")}}" alt="Meu Perfil" class="img-menu">
                        <h1>Usuários</h1>
                    </a>
                </li>
                <li class="col-md-2 text-center">
                    <a href="/painel/posts">
                        <img src="{{url("assets/painel/imgs/noticias-acl.png")}}" alt="Estilos" class="img-menu">
                        <h1>Notícias</h1>
                    </a>
                </li>
                <li class="col-md-2 text-center">
                    <a href="/painel/roles">
                        <img src="{{url("assets/painel/imgs/funcao-acl.png")}}" alt="Albuns" class="img-menu">
                        <h1>Funções</h1>
                    </a>
                </li>
                <li class="col-md-2 text-center">
                    <a href="/painel/permissions">
                        <img src="{{url("assets/painel/imgs/permissao-acl.png")}}" alt="Musicas" class="img-menu">
                        <h1>Permissões</h1>
                    </a>
                </li>
                <li class="col-md-2 text-center">
                    <a href="/logout">
                        <img src="{{url("assets/painel/imgs/sair-acl.png")}}" alt="Sair" class="img-menu">
                        <h1>Sair</h1>
                    </a>
                </li>
            </ul>
        </div><!--Menu-->

       
        <!--Content Dinâmico-->
        @yield('content')
        
        <div class="clear"></div>

        <div class="footer actions">
            <div class="container text-center">
                <p class="footer">EspecializaTi - Todos os direitos reservados</p>
            </div>
        </div>


        <!--jQuery-->
        <script src="//code.jquery.com/jquery-1.12.0.min.js"></script>

        <!-- Latest compiled and minified JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
    </body>

</html>