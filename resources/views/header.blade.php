
<header>
    <section class="header">
        <article class="logo">
            <a href="index.php"><img src="/imgs/logo2.png" alt="logo" /></a>
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
                    <li class="searchbarBox">
                        <input type="text" name="name" value="">
                        <h4 class="ion-ios-search-strong"></h4>
                    </li>
                </ul>
            </nav>
        </div>
        </article>
    </section>
</header>
