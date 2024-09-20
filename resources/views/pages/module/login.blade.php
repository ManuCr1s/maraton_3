@extends('template.module')
@section('container')
<div class="wrapper wrapper-full-page">
    <div class="full-page login-page" data-color="secondary" data-image="{{asset('assets/img/full-screen-image-1.jpg')}}">

    <!--   you can change the color of the filter page using: data-color="blue | azure | green | orange | red | purple" -->
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-md-offset-4 col-sm-offset-3">
                        <form id="login">

                        <!--   if you want to have the card without animation please remove the ".card-hidden" class   -->
                            <div class="card card-hidden">
                                <div class="header text-center">MARATON - 2024</div>
                                <div class="content">
                                    <div class="form-group">
                                        <label>Usuario</label>
                                        <input type="email" placeholder="Enter email" class="form-control" id="user_login">
                                    </div>
                                    <div class="form-group">
                                        <label>Contraseña</label>
                                        <input type="password" placeholder="Password" class="form-control" id="user_password">
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <button type="submit" class="btn btn-fill btn-secondary btn-wd">INGRESAR DASHBOARD</button>
                                </div>
                            </div>

                        </form>

                    </div>
                </div>
            </div>
        </div>

    </div>

</div>
@endsection
@section('footer')
<script type="text/javascript">
        $().ready(function(){
            lbd.checkFullPageBackgroundImage();
            setTimeout(function(){
                // after 1000 ms we add the class animated to the login/register card
                $('.card').removeClass('card-hidden');
            }, 700)
        });
    </script>

@endsection