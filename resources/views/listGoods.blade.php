<div class="listGoods">
    @if(!empty($list))
    <h2>{{$UncategoryName->name}}</h2>
    <div class="infoBox">
        <div class="count">Всего - <span>{{count($list)}}</span></div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Редактировать</th>
            <th>Удалить</th>
            <th>Артикл</th>
            <th>Название</th>
            <th>Отображение</th>
            <th>Цена</th>
        </tr>
        <?php $i = 1;?>
        @foreach($list as $item)
        <tr>
            <td>{{$i}}</td>
            <td><a href="/admin/goods/edit/{{$item->id}}"><span class="glyphicon glyphicon-pencil"></span></a></td>
            <td><a href="/admin/goods/delete/{{$item->id}}"><span class="glyphicon glyphicon-trash delAction"></span></a></td>
            <td>{{$item->article}}</td>
            <td><a href="{{$url.$item->id}}">{{$item->name}}</a></td>
            <td>
                @if($item->active)
                    Виден
                @else
                    Невиден
                @endif
            </td>
            <td>{{$item->price}}грн</td>
        </tr>
        <?php $i++;?>
        @endforeach
    </table>
    @else
        <div class="center">
            <h3 class="red">Товар с такой подкатегорией отсуцтвует!</h3>
            <a href="/admin/goods/add" class="btn btn-success">Добавить</a>
        </div>
    @endif
</div>
