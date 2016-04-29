@if(!empty($category))
    <div class="listCategory">
        <h2>Категории</h2>
        <div class="infoBox">
            <div class="count">Всего - <span>{{count($category)}}</span></div>
        </div>
        <table class="table table-bordered">
            <tr>
                <th>#</th>
                <th>Редактировать</th>
                <th>Удалить</th>
                <th>Название</th>
                <th>Url</th>
            </tr>
            <?php $i = 1;?>
            @foreach($category as $item)
                <tr>
                    <td>{{$i}}</td>
                    <td><a href="#"><span class="glyphicon glyphicon-pencil"></span></a></td>
                    <td><a href="#"><span class="glyphicon glyphicon-trash"></span></a></td>
                    <td>{{$item->name}}</td>
                    <td>{{$item->url}}</td>
                </tr>
                <?php $i++;?>
            @endforeach
        </table>
    </div>
@else
    <div class="center">
        <h3 class="red">Категорий ёще не существует!</h3>
        <a href="/admin/category/add" class="btn btn-success">Добавить</a>
    </div>
@endif
