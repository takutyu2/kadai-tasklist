<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <!-- ハンバーガーメニュー -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse-tasklist" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="/" class="navbar-brand">TaskList</a>
            </div>
            
            <!-- 通常メニュー -->
            <div class="collapse navbar-collapse" id="navbar-collapse-tasklist">
                <ul class="nav navbar-nav navbar-right">
                    @if (Auth::check())
                        <li>{!! link_to_route('tasks.create', '新規メッセージの投稿') !!}</li>
                    @else
                        <li>{!! link_to_route('signup.get', 'Signup') !!}</li>
                        <!-- ログインリンク置く -->
                        <li><a href="#">Login</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>