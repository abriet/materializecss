<!DOCTYPE html>
<html lang="br">
  <head>
    <meta charset="utf-8">
    <title>Alexandre Briet Rusilas</title>
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link type="text/css" rel="stylesheet" href="css/materialize.min.css"  media="screen,projection"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <style media="screen">
      body{
        background: url('http://wallpapercave.com/wp/Iw471VJ.jpg') no-repeat fixed;
        background-size: cover;
      }
      .menu{
        background: transparent;
        box-shadow: none;
      }
      @media screen and (max-width: 960px) {
        .menu{
          margin-bottom: 150px;
        }
      }
      .right li a:hover{
        background: none;
        color:#d65151;
        transition: 1.5s;
      }
      nav .brand-logo{
      }
      nav ul{
        margin-top: 50px;
        margin-bottom: 70px;
      }
      .principal{
        background-color: rgba(0,0,0,0.7);
        clear: both;
        color: white;
      }

      .navgacao{
        text-align: right;
        font-size: 12px;
      }
      footer.page-footer{
        background: rgba(0,0,0,0.7);
      }
      footer.page-footer .footer-copyright{
        background-color:rgba(51,51,51,1);
      }

      .collapsible-header{
        background-color:#222;
        border:0;
      }
      .collapsible-body{
        border:0;
      }
    </style>
  </head>
  <body>
    <br><br>
    <div class="container">

        <nav class="menu">
          <div class="nav-wrapper">
            <a href="#!" class="brand-logo"><img class="circle responsive-img" src="https://static1.squarespace.com/static/557db6cbe4b02f16630eb0c1/576dff0b440243ef1aa88880/576e0670e58c62d50f90c7f2/1466828403068/highreso2_Logo+NASA.png" style="width:150px;" alt="Logo"></a>
            <a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
            <ul class="right hide-on-med-and-down">
              <li><a href="#"><i class="material-icons left">info_outline</i>Inicio</a></li>
              <li><a href="#"><i class="material-icons left">polymer</i>Serviços</a></li>
              <li><a href="#"><i class="material-icons left">code</i>Portifolio</a></li>
              <li><a href="#"><i class="material-icons left">chat</i>Contato</a></li>
            </ul>
            <ul class="side-nav" id="mobile-demo">
              <li><a href="#"><i class="material-icons left">info_outline</i>Inicio</a></li>
              <li><a href="#"><i class="material-icons left">polymer</i>Serviços</a></li>
              <li><a href="#"><i class="material-icons left">code</i>Portifolio</a></li>
              <li><a href="#"><i class="material-icons left">chat</i>Contato</a></li>
            </ul>
          </div>
        </nav>

        <div class="row">
            <div class="col s12 principal">
              <h1>Quem somos?</h1>
              <p>Nada</p>


              <ul class="collapsible popout" data-collapsible="accordion">
                <li>
                  <div class="collapsible-header"><i class="material-icons">filter_drama</i>First</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">place</i>Second</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
                <li>
                  <div class="collapsible-header"><i class="material-icons">whatshot</i>Third</div>
                  <div class="collapsible-body"><span>Lorem ipsum dolor sit amet.</span></div>
                </li>
              </ul>

            </div>
        </div>


        <div class="row">
          <footer class="page-footer">
            <div class="container">
              <div class="row">
                <div class="col l6 s12">
                  <h5 class="white-text">NASA</h5>
                  <p class="grey-text text-lighten-4">Você sabia que este não é e nunca será o site oficial da NASA?</p>
                </div>
                <div class="col l4 offset-l2 s12">
                  <h5 class="white-text">Links</h5>
                  <ul>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 1</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 2</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 3</a></li>
                    <li><a class="grey-text text-lighten-3" href="#!">Link 4</a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="footer-copyright">
              <div class="container">
              © 2017 Copyright - Todos direitos reservados
              <a class="grey-text text-lighten-4 right" href="#!">Termos de uso</a>
              </div>
            </div>
          </footer>
        </div>
    </div>
    <script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>
    <script type="text/javascript" src="js/materialize.min.js"></script>
    <script type="text/javascript">
      $(".button-collapse").sideNav();

      $(document).ready(function(){
      $('.slider').slider();
      });

      $(document).ready(function(){
      $('.parallax').parallax();
      });
      $(document).ready(function(){
  $('.collapsible').collapsible();
  });
    </script>
  </body>
</html>
