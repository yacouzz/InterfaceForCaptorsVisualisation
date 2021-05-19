<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"
      integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{asset('styles.css')}}" />
    @yield('style')
    <title>R&T IOT Panel</title>
  </head>
  <body id="body">
    <div class="containy">
      

      @yield('content')

      <div id="sidebar">
        <div class="sidebar__title">
          <div class="sidebar__img">
            <img style="border-radius: 50px;" src="{{asset('assets/logo.jpg')}}" alt="logo" />
            <h1 style="margin-left: 10px;">Rabah H</h1>
          </div>
          <i
            onclick="closeSidebar()"
            class="fa fa-times"
            id="sidebarIcon"
            aria-hidden="true"
          ></i>
        </div>

        <div class="sidebar__menu">
          <div class="sidebar__link active_menu_link">
            <i class="fa fa-home"></i>
            <a href="#">Panneau de contrôle</a>
          </div>
          
          <div class="sidebar__link">
           
            <a href="#">PH & EC</a>
          </div>
          <div class="sidebar__link">
           
            <a href="#">Température & Hum</a>
          </div>
          <div class="sidebar__link">
          
            <a href="#">Débit &  Luminosité</a>
          </div>
          <div class="sidebar__link">
           
            <a href="#">Niveau d'Eau</a>
          </div>
          
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
    @yield('script')
  </body>
</html>
