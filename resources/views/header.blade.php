<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  @yield('title')

  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
<link rel="stylesheet" href="/style.css">
<link rel="stylesheet" href="/header.css">
<link rel="stylesheet" href="/bootstrap/css/bootstrap.css">
<link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">

</head>
<body>
   <header>
      <div class='container'>
        <div class='mobile_nav'>
          <button class='burger' title='Open and close menu'>
            <span class='mobile_nav__label'>Open and close menu</span>
            <div class='top stripe'></div>
            <div class='middle stripe'></div>
            <div class='bottom stripe'></div>
          </button>
        </div>
        <div class='mobile_menu' style="z-index:100000;">
          <nav>
            <ul>
              <li class='visited'>
                <a href='/home'>Home</a>
              </li>
              <li>
                <a href='/toplist'>Toplista</a>
              </li>
              <li>
                <a href='/forum'>Forum</a>
              </li>
              <li>
                <a href='/blog'>Blog</a>
              </li>
              <li>
                <a href='/contact'>Kontakt</a>
              </li>
            </ul>
          </nav>
        </div>
        <div class='logo' style="text-align: justify;">
          <span>Tirix</span>
        </div>
        <nav class='head_nav'>
          <ul>
            <li class='visited'>
              <a href='/home'>Home</a>
            </li>
            <li>
              <a href='/toplist'>Toplista</a>
            </li>
            <li>
              <a href='/forum'>Forum</a>
            </li>
            <li>
              <a href='/blog'>Blog</a>
            </li>
            <li>
              <a href='/contact'>Kontakt</a>
            </li>
          </ul>
        </nav>
        <div class='icons'>
          <div class='block'>
            <a class='notification' href='?notifiacitons' title='Notifications'>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><path d="M149.996,0C67.157,0,0.001,67.161,0.001,149.997S67.157,300,149.996,300s150.003-67.163,150.003-150.003    S232.835,0,149.996,0z M149.999,232.951c-10.766,0-19.499-8.725-19.499-19.499h38.995    C169.497,224.226,160.765,232.951,149.999,232.951z M215.889,193.9h-0.005v-0.001c0,7.21-5.843,7.685-13.048,7.685H97.16    c-7.208,0-13.046-0.475-13.046-7.685v-1.242c0-5.185,3.045-9.625,7.42-11.731l4.142-35.753c0-26.174,18.51-48.02,43.152-53.174    v-13.88c0-6.17,5.003-11.173,11.176-11.173c6.17,0,11.173,5.003,11.173,11.173V92c24.642,5.153,43.152,26.997,43.152,53.174    l4.142,35.758c4.375,2.109,7.418,6.541,7.418,11.726V193.9z"/></svg>
            </a>
          </div>
          <div class='block'>
            <a class='user_profile' href='?user_profile' title='User profile'>
              <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 299.997 299.997">
               <path d="M149.996,0C67.157,0,0.001,67.158,0.001,149.997c0,82.837,67.156,150,149.995,150s150-67.163,150-150    C299.996,67.156,232.835,0,149.996,0z M150.453,220.763v-0.002h-0.916H85.465c0-46.856,41.152-46.845,50.284-59.097l1.045-5.587    c-12.83-6.502-21.887-22.178-21.887-40.512c0-24.154,15.712-43.738,35.089-43.738c19.377,0,35.089,19.584,35.089,43.738    c0,18.178-8.896,33.756-21.555,40.361l1.19,6.349c10.019,11.658,49.802,12.418,49.802,58.488H150.453z"></path></svg>
            </a>
          </div>
        </div>
      </div>
    </header>
    <main>
    </main>
  @yield('content')

<!-- partial -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script  src="/script.js"></script>
<script  src="/header.js"></script>

</body>
</html>

