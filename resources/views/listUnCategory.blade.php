<div class="listUnderCategory">
    <h2>Под Категории</h2>
    <div class="infoBox">
        <div class="count">Всего - <span>{{count($unCategory)}}</span></div>
    </div>
    <table class="table table-bordered">
        <tr>
            <th>#</th>
            <th>Редактировать</th>
            <th>Удалить</th>
            <th>Категория</th>
            <th>Название</th>
            <th>Url</th>
        </tr>
        <?php $i = 1;?>
        @foreach($unCategory as $item)
            <tr>
                <td>{{$i}}</td>
                <td><a href="#"><span class="glyphicon glyphicon-pencil"></span></a></td>
                <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                <td>
                    @foreach($parentCategory as $itemCategory)
                        @if($item->category_id == $itemCategory->id)
                            {{$itemCategory->name}}
                        @endif
                    @endforeach
                </td>
                <td>{{$item->name}}</td>
                <td>{{$item->url}}</td>
            </tr>
        <?php $i++;?>
        @endforeach
    </table>
</div>
