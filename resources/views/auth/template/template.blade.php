<html>
    @include('templates.head')

    <body>
        <div class="login">
            <div class="login-header">
                <img src="{{url("assets/painel/imgs/acl-brancapng")}}")}}" alt="acl" class="logo-login">
            </div>

            @yield('content-form')


        </div>
    </body>
</html>