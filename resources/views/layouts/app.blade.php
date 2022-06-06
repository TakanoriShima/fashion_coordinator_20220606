<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="utf-8">
        <title> @yield('title')</title>
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css">
        <link rel="icon" href="{{ asset('images/favicon.ico')}} ">
        <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    </head>

    <body>
        <header>
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
              <!-- ホームへ戻るリンク。ブランドロゴなどを置く。 -->
              <a href="/" class="navbar-brand">P&amp;K</a>
              <!-- 横幅が狭いときに出るハンバーガーボタン -->
              <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                <span class="navbar-toggler-icon"></span>
              </button>
              <!--メニュー項目-->
              <div class="collapse navbar-collapse" id="nav-bar">
                <ul class="navbar-nav">
                　@if(Auth::check())
                      @if(Auth::user()->role === 2)
                      　<li class="nav-item active">
                          <a href="https://463562886d4946f2839bc7cc4695e0bb.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/mypage.html" class="nav-link">マイページ</a>
                        </li>
                        <li class="nav-item active">
                          <a href="#" class="nav-link">お気に入り</a>
                        </li>
                        <li class="nav-item active">
                          <a href="/posts/create" class="nav-link">投稿</a>
                        </li>
                        <li class="nav-item active">
                          <a href="/myposts" class="nav-link">投稿一覧</a>
                        </li>
                        <li class="nav-item active">
                          <a href="#" class="nav-link">メッセージ</a>
                        </li>
                      @else
                        <li class="nav-item active">
                          <a href="https://463562886d4946f2839bc7cc4695e0bb.vfs.cloud9.ap-northeast-1.amazonaws.com/_static/APP/companymypage.html" class="nav-link">マイページ</a>
                        </li>
                        <li class="nav-item active">
                          <a href="#" class="nav-link">メッセージ</a>
                        </li>
                        <li class="nav-item active">
                          <a href="#" class="nav-link">お客一覧</a>
                        </li>
                      @endif
                  <li class="nav-item">
                    <a href="/logout" class="nav-link">ログアウト</a>
                  </li>
                  @else
                  <li class="nav-item active">
                    <a href="/login" class="nav-link">ログイン</a>
                  </li>
                  <li class="nav-item active">
                    <a href="/signup" class="nav-link">新規会員登録</a>
                  </li>
                　@endif
                </ul>
              </div>
            </nav>　　
        </header>
        
        <div class="container">
            @include('commons.flash_message')
            @include('commons.error_messages')
            
        </div>
        @yield('content')
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.7.2/js/all.js"></script>
        <script src="{{ asset('js/script.js') }}"></script>
    </body>
</html>