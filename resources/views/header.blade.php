
<header>
    <section class="header">
        <article class="logo">
            <a href="index.php"><img src="imgs/logo2.png" alt="logo" /></a>
        </article>
        <div class="menus">
            <article>
                <nav class="second-nav">
                  <div class="">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} loginContrasena">
                            <label for="email" class="col-md-4 control-label">E-Mail</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  autofocus>
                                <div class="errors">

                                @if ($errors->login->has('email'))
                                        <strong style="color: #f00;">{{ $errors->login->first('email') }} </strong>
                                @endif
                              </div>
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} loginContrasena">
                            <label for="password" class="col-md-4 control-label">Contraseña</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control" name="password" >
                                <div class="errors">
                                      @if ($errors->login->has('password'))
                                        <strong style="color: #f00;">{{ $errors->login->first('password') }}</strong>
                                      @endif
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                          <div class="col-md-8 col-md-offset-4">
                            <button type="submit" class="btn btn-primary">
                              Login
                            </button>

                            <a class="btn btn-link" href="{{ url('/password/reset') }}">
                              Olvidate tu contraseña?
                            </a>
                          </div>
                        </div>
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        Recordarme<input type="checkbox" name="remember">
                                    </label>
                                </div>
                            </div>
                        </div>

                    </form>
                  </div>
                </nav>
            </article>
            <span class="ion-navicon-round" style="color: 000"></span>
            <nav class="main-nav">
                <img src="" alt="" />

                <ul class="nav-resp">
                    <li><a href="/">Home</a></li>
                    <li><a href="/registro">Registrarse</a></li>
                    <li><a href="#">Store</a></li>
                    <li><a href="#">Contact</a></li>
                    <li>
                        <input type="text" name="name" value="">
                        <button type="button" name="button" class="sbutton">Search</button>
                    </li>
                </ul>
            </nav>
        </div>
        </article>
    </section>
</header>
