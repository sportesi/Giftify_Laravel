<footer class="main-footer">
    <section class="footer-contain">
        <article class="footer-nav">

            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/productos">Productos</a></li>
                <li><a href="/preguntas">Preguntas frecuentes</a></li>
                @if (!Auth::check())
                  <li><a href="/registro">Registrarse</a></li>
                @endif
                <li><a href="#">Contacto</a></li>
            </ul>
        </article>
        <article class="social-logos" id="social-logos">
          <a href="https://www.facebook.com/" new class="ion-social-facebook"> </a>
          <a href="https://twitter.com/" new class="ion-social-twitter"></a>
        </article>
    </section>
</footer>
