<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="UTF-8">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Icons -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous">

  </head>

  <body>

    <ul class="nav">
         <li class="nav-item">
            <a class="nav-link active" href="#" style ="font-size: 60px">
            <i class="fas fa-home"></i>HOME</a>
        </li>
        <li>
            <div class= "ber" style = "font-size: 60px; ">|</div>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="192.168.10.10/mention"style ="font-size: 60px">
            <i class="far fa-bell"></i>Mention</a>
        </li>
        <li>
            <div class= "ber" style = "font-size: 60px;">|</div>
        </li>
        <li>
            <a class="nav-link" href="#"style ="font-size: 60px">
            <i class="far fa-envelope"></i>Messages</a>
        </li>
        <li>
            <div class= "ber" style = "font-size: 60px;">|</div>
        </li>
        <li>
            <a class="nav-link" href="#"style ="font-size: 60px">
            <i class="fas fa-search"></i>
            <input class="kensaku" type="search" name="search" style ="font-size: 30px; mergin: 0 0 0 10;"placeholder="タグ検索">
            <input class="botan" type="submit" style ="font-size: 30px; mergin: 0 0 0 10;"name="search" value="検索">
        </li>
        
    </ul>

  </body>
</html>