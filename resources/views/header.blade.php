
<header>
    <section class="header">
        <article class="logo">
            <a href="index.php"><img src="imgs/logo2.png" alt="logo" /></a>
        </article>
        <div class="menus">
            <article>
                <nav class="second-nav">
                  <div class="">
                    @if (Auth::check())
                      @include('headerLogueado')
                    @else
                      @include('headerLogin')
                    @endif
                  </div>
                </nav>
            </article>
            <span class="ion-navicon-round" style="color: 000"></span>
            <nav class="main-nav">
                <img src="" alt="" />

                <ul class="nav-resp">
                    <li><a href="/">Home</a></li>
                    <li><a href="/registro">Registrarse</a></li>
                    <li><a href="/productos">Store</a></li>
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
