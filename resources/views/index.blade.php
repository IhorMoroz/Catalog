<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Admin</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
    <link rel="stylesheet" href="/css/main.css">
    <script src="/js/jquery.min.js" charset="utf-8"></script>
    <script src="/js/bootstrap.min.js" charset="utf-8"></script>
    <script src="/js/jquery.selectric.js" charset="utf-8"></script>
</head>
<body>
<div class="App">
    <div class="topBar">
        <div class="smallBox titleApp">
            <h3>Панель администратора</h3>
        </div>
        <div class="bigBox">
            <form method="POST">
                <input type="text" class="form-control" placeholder="#er44edc">
                <button type="submit" class="btn btn-info">Поиск</button>
            </form>
        </div>
        <div class="smallBox exit">
            <a href="/logout">выход</a>
        </div>
    </div>
    <aside class="leftBar">
        <div class="box">
            <a href="/admin/category/add" class="btn btn-success add">+ Категорию</a>
            <a href="/admin/uncategory/add" class="btn btn-success add">+ Подкатегорию</a>
            <a href="/admin/goods/add" class="btn btn-success add">+ Товар</a>
        </div>
        <div class="box">
            <?php $i = 1;?>
            @foreach($categoryMenu as $k => $v)
            <div class="panel panel-default">
                <div class="panel-heading blue-panel" role="tab" id="heading{{$i}}">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$i}}" aria-expanded="true" aria-controls="collapse{{$i}}">
                            {{$k}} <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapse{{$i}}" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading{{$i}}">
                    <div class="">
                        @if(count($v) >= 1)
                            @foreach($v as $item)
                            <a href="{{$item[1]}}" class="navLink">{{$item[0]}}</a>
                            @endforeach
                        @endif
                    </div>
                </div>
            </div>
            <?php $i++;?>
            @endforeach
        </div>
        <div class="box">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="heading3">
                    <h4 class="panel-title">
                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse3" aria-expanded="true" aria-controls="collapse3">
                            Показать <span class="caret"></span>
                        </a>
                    </h4>
                </div>
                <div id="collapse3" class="panel-collapse collapse " role="tabpanel" aria-labelledby="heading3">
                    <div class="">
                        <a href="#" class="navLink">text1</a>
                        <a href="#" class="navLink">text2</a>
                        <a href="#" class="navLink">text3</a>
                    </div>
                </div>
            </div>
        </div>
    </aside>
    <section class="content">
        {!! $content !!}
    </section>
</div>

<script type="text/javascript">
    $(function(){
        $('select').selectric();
    });
</script>
</body>
</html>
