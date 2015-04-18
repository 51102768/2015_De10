<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>Mỡ shop</title>
    <link
      type="text/css"
      rel="stylesheet"
      href="{{ asset("bootstrap/dist/css/bootstrap.css") }}"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="{{ asset("bootstrap/dist/css/bootstrap.min.css") }}"
    />
    <link
		type="text/css"
      rel="stylesheet"
      href="{{ asset("bootstrap/dist/css/bootstrap.theme.min.css") }}"
    />
    <link
      type="text/css"
      rel="stylesheet"
      href="{{ asset("css/shared.css") }}"
    />
    <link 
      href='http://fonts.googleapis.com/css?family=Noto+Serif|Roboto+Slab&subset=latin,vietnamese' 
      rel='stylesheet' 
      type='text/css'
    />
    <script
      type="text/javascript"
      src="{{ asset("js/jquery-1.11.2.min.js") }}"
    ></script>
    <script
      type="text/javascript"
      src="{{ asset("bootstrap/js/modal.js") }}"
    ></script>
  </head>
  <body>
    @include('temp.header')
    <div class = "content">
    <div class = "container">
      <div class ="row" id = "wrapper-top">
        <div class = "col-md-3">
          <div class = "btn-group-vertical" role = "group" id = "menuSideBar">
            <div class = "btn-group">
              <button type = "button" class = "btn btn-default" id = "menuButton"><a href="#">Sản phẩm mới</a></button>
            </div>
            <div class = "btn-group">
              <button type = "button" class = "btn btn-default" id = "menuButton"><a href="#">Sản phẩm bán chạy</a></button>
            </div>
            <div class = "btn-group">
              <button type = "button" class = "btn btn-default" id = "menuButton"><a href="#">Sản phẩm được đề xuất</a></button>
            </div>
            <div class = "btn-group">
              <button type = "button" class = "btn btn-default" id = "menuButton"><a href="#">Sản phẩm khuyến mãi</a></button>
            </div>
            <div class = "btn-group">
              <button type = "button" class = "btn btn-default" id = "menuButton"><a href="#">Loa</a></button>
            </div>
            <div class = "btn-group">
              <button type = "button" class = "btn btn-default" id = "menuButton"><a href="#">Tai nghe</a></button>
            </div>
            <div class = "btn-group">
              <button type = "button" class = "btn btn-default" id = "menuButton"><a href="#">Máy nghe nhạc</a></button>
            </div>
            <div class = "btn-group">
              <button type = "button" class = "btn btn-default" id = "menuButton"><a href="#">Các sản phẩm khác</a></button>
            </div>
          </div>
        </div>
        <div class = "col-md-9">
          <div id = "myCarousel" class = "carousel slide" data-ride = "carousel"> 
            <!-- Indicator -->
            <ol class="carousel-indicators">
              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
              <li data-target="#myCarousel" data-slide-to="1"></li>
              <li data-target="#myCarousel" data-slide-to="2"></li>
              <li data-target="#myCarousel" data-slide-to="3"></li>
            </ol>

            <!-- Wrapper for slide -->
            <div class = "carousel-inner" role = "listbox">
              <div class = "item active">
                <a href="#"><img src="img\sanpham1.png" width="750px" height="650px"></a>
              </div>
              <div class = "item">
                <a href="#"><img src="img\product\Soundmax\2.1 Soundmax A820.png" width="750px" height="650px"></a>
              </div>
              <div class = "item">
                <a href="#"><img src="img\product\Soundmax\2.1 SOUNDMAX A2116.png" width="750px" height="650px"></a>
              </div>
              <div class = "item">
                <a href="#"><img src="img\product\PartyHouse\Professional\GT-A 1.jpg" width="750px" height="650px"></a>
              </div>
            </div>

            <!-- Left and right controls -->
            <a class="left carousel-control" href="#" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>
      </div>
      <div class = "row" id = "wrapper-middle">
        <div class = "col-md-3">
          <h3>Sản phẩm bán chạy</h3>
        </div>
        <div class = "col-md-9" id = "middleSlide">
        </div>
      </div>
      <div class = "row" id = "wrapper-middle-content">
        <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12 center" id = "pic-wrapper">
          <ul>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/PartyHouse/Professional/Amply-Karaoke-H-2-1.jpg" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/PartyHouse/Professional/Amply Karaoke SA-900EX 1.jpg" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/PartyHouse/Professional/GT-G2 1.jpg" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/PartyHouse/Karaoke/QS-10 1.jpg" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/PartyHouse/Karaoke/QS-10 2.jpg" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/Soundmax/4.1 SOUNDMAX A8900.png" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/Soundmax/4.1 Soundmax A5000.png" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/Soundmax/2.1 Soundmax A2729.png" class="img-responsive inline-block"></a>
            </li>
            </div>
          </ul>
        </div>
      </div> 
      <div class = "row" id = "bottom-wrapper">
        <div class = "col-md-3">
          <h3>Sản phẩm mới</h3>       
        </div>
        <div class = "col-md-9" id = "middleSlide">
        </div>
      </div>
      <div class = "row" id = "wrapper-bottom-content">
        <div class = "col-xs-12 col-sm-12 col-md-12 col-lg-12 center" id = "pic-wrapper">
          <ul>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/PartyHouse/Professional/Amply-Karaoke-H-2-1.jpg" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/PartyHouse/Professional/Amply Karaoke SA-900EX 1.jpg" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/PartyHouse/Professional/GT-G2 1.jpg" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/PartyHouse/Karaoke/QS-10 1.jpg" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/PartyHouse/Karaoke/QS-10 2.jpg" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/Soundmax/4.1 SOUNDMAX A8900.png" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/Soundmax/4.1 Soundmax A5000.png" class="img-responsive inline-block"></a>
            </li>
            </div>
            <div id = "imagebox">
            <li>
              <a href="#"><img src="img/product/Soundmax/2.1 Soundmax A2729.png" class="img-responsive inline-block"></a>
            </li>
            </div>
          </ul>
        </div>
      </div> 
    </div>
    </div>
    @include('temp.footer')
  </body>
</html>