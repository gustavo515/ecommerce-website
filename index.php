<?php

session_start();

include("includes/db.php");
include("includes/header.php");
include("functions/functions.php");
include("includes/main.php");

?>


  <!-- Cover -->
  <main>
    <div class="hero">
      <a href="shop.php" class="btn1">Todos os produtos
</a>
    </div>
    <!-- Main -->
    <div class="wrapper">
            <h1>Coleções<h1>
            
      </div>



    <div id="content" class="container"><!-- container Starts -->

    <div class="row"><!-- row Starts -->

    <?php

    getPro();

    ?>

    </div><!-- row Ends -->

    </div><!-- container Ends -->
    <!-- FOOTER -->
    <footer class="page-footer">

      <div class="footer-nav">
        <div class="container clearfix">

          <div class="footer-nav__col footer-nav__col--info">
            <div class="footer-nav__heading">Informação</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">A marca</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Loja local</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Serviço</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Privacidade &amp; cookies</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Site map</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--whybuy">
            <div class="footer-nav__heading">Why buy from us</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Shipping &amp; returns</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Secure shipping</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Testimonials</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Award winning</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Ethical trading</a>
              </li>
            </ul>
          </div>

          <div class="footer-nav__col footer-nav__col--account">
            <div class="footer-nav__heading">Sua Conta</div>
            <ul class="footer-nav__list">
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Login</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Registrar</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Carrinho</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Catálogo</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Rastreie um pedido</a>
              </li>
              <li class="footer-nav__item">
                <a href="#" class="footer-nav__link">Atualizar informação</a>
              </li>
            </ul>
          </div>


          <div class="footer-nav__col footer-nav__col--contacts">
            <div class="footer-nav__heading">Contact details</div>
            <address class="address">
            Head Office: BuyBuy.<br>
            369 Rua dos bobos, SP.
          </address>
            <div class="phone">
              Telephone:
              <a class="phone__number" href="tel:0123456789">0123-456-789</a>
            </div>
            <div class="email">
              Email:
              <a href="mailto:support@yourwebsite.com" class="email__addr">support@yourwebsite.com</a>
            </div>
          </div>

        </div>
      </div>

      <div class="banners">
        <div class="container clearfix">

          <div class="banner-award">
            <span>BUYBUY</span><br> 
          </div>

          <div class="banner-social">
            <a href="#" class="banner-social__link">
            <i class="icon-facebook"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-twitter"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-instagram"></i>
          </a>
            <a href="#" class="banner-social__link">
            <i class="icon-pinterest-circled"></i>
          </a>
          </div>

        </div>
      </div>

      <div class="page-footer__subline">
        <div class="container clearfix">

          <div class="copyright">
            &copy; 2018 Avenue Fashion&trade;
          </div>

          <div class="developer">
            Dev by Yasser Dalouzi
          </div>

          <div class="designby">
            Design by Yasser Dalouzi
          </div>

        </div>
      </div>
    </footer>
</body>

</html>
