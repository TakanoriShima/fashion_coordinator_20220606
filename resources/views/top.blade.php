@extends('layouts.app')
@section('title', '会員制写真投稿サイト')
@section('content')
<nav class="navbar navbar-light bg-light">
  <div class="container-fluid">
    <form class="d-flex">
      <input class="form-control me-2" type="search" placeholder="キーワードから探す" aria-label="Search">
      <button class="btn btn-outline-success" type="submit">Search</button>
    </form>
  </div>
</nav>
<div id="carouselExampleInterval" class="carousel slide" data-ride="carousel" data-interval="5000" data-wrap="true" data-pause="false">
  <ul class="carousel-indicators">
    <li data-target="carouselExampleInterval" data-slide-to="0" class="active"></li>
    <li data-target="carouselExampleInterval" data-slide-to="1"></li>
    <li data-target="carouselExampleInterval" data-slide-to="2"></li>
  </ul>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="images/summer.JPEG" class="d-block" alt="夏">
    </div>
    <div class="carousel-item">
      <a href="https://463562886d4946f2839bc7cc4695e0bb.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/accessory.html">
        <img src="images/accessory.JPEG" class="d-block" alt="アクセサリー">
      </a>  
    </div>
    <div class="carousel-item">
      <a href="https://463562886d4946f2839bc7cc4695e0bb.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/denim.html">
        <img src="images/denim1.jpg" class="d-block" alt="デニム1">
      </a>  
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <!--<span class="visually-hidden">Previous</span>-->
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <!--<span class="visually-hidden">Next</span>-->
  </button>
</div>
<div>
  <h2>イチオシ</h2>
  <ul id="onepress">
    <li class="one">
      <a href="https://463562886d4946f2839bc7cc4695e0bb.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/tshirt.html">
      <img src="images/Tshirt.JPEG" alt="Tシャツ">
      </a>
    </li>
    <li class="one">
      <a href="https://463562886d4946f2839bc7cc4695e0bb.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/denim.html">
      <img src="images/denim1.jpg" alt="デニム">
      </a>
    </li>
    <li class="one">
      <a href="https://463562886d4946f2839bc7cc4695e0bb.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/accessory.html">
      <img src="images/accessory.JPEG" alt="アクセサリー">
      </a>
    </li>
  </ul>
</div>
<div class="category">
  <h2>カテゴリから探す</h2>
  <ul class="category">
    <li>
      <img src="images/whiteT.jpg" alt="トップス">
      <h3>トップス</h3>
    </li>
    <li>
      <img src="images/denim.jpeg" alt="パンツ">
      <h3>パンツ</h3>
    </li>
    <li>
      <img src="images/skirt.webp" alt="スカート">
      <h3>スカート</h3>
    </li>
    <li>
      <img src="images/dress.webp" alt="ワンピース">
      <h3>ワンピース</h3>
    </li>
    <li>
      <img src="images/coat.webp" alt="アウター">
      <h3>アウター</h3>
    </li>
  </ul>
</div>
<div>
  <h2>ランキング</h2>
  <!--いいね数が多いランキング-->
</div>
@endsection