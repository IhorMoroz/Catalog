<form class="addGoods form-horizontal" action="{{ url('/admin/goods/add') }}" method="POST" enctype="multipart/form-data">
    <h2>Добавление Товара</h2>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="form-group">
        <label for="inputEmail1" class="col-sm-2 control-label">Артикт</label>
        <div class="col-sm-10">
            @if($errors->first('article'))
                <p style="color:red;">{{$errors->first('article')}}</p>
            @endif
            <input type="text" name="article" class="form-control" id="inputEmail1" placeholder="Артикт">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">Название</label>
        <div class="col-sm-10">
            @if($errors->first('name'))
                <p style="color:red;">{{$errors->first('name')}}</p>
            @endif
            <input type="text" name="name" class="form-control" id="inputEmail2" placeholder="Название">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Описание</label>
        <div class="col-sm-10">
            @if($errors->first('description'))
                <p style="color:red;">{{$errors->first('description')}}</p>
            @endif
            <textarea name="description" rows="3" class="form-control"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword4" class="col-sm-2 control-label">Размер</label>
        <div class="col-sm-10">
            @if($errors->first('size'))
                <p style="color:red;">{{$errors->first('size')}}</p>
            @endif
            <input type="text" name="size" class="form-control" id="inputPassword4" placeholder="Размер">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword5" class="col-sm-2 control-label">Цена</label>
        <div class="col-sm-10">
            @if($errors->first('price'))
                <p style="color:red;">{{$errors->first('price')}}</p>
            @endif
            <input type="text" name="price" class="form-control" id="inputPassword5" placeholder="Цена">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword6" class="col-sm-2 control-label">Изображение</label>
        <div class="col-sm-10">
            @if($errors->first('image'))
                <p style="color:red;">{{$errors->first('image')}}</p>
            @endif
            <input type="file" name="image" id="inputPassword6">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword7" class="col-sm-2 control-label">Подкатегория</label>
        <div class="col-sm-10">
            <select class="" name="unCategory">
                @foreach($unCategory as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword7" class="col-sm-2 control-label">Пренадлежность</label>
        <div class="col-sm-10">
            <select class="" name="sex">
                @foreach($sex as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword7" class="col-sm-2 control-label">Отображение</label>
        <div class="col-sm-10">
            <select class="" name="active">
                <option value="">Показывать</option>
                <option value="">Скрыто</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword7" class="col-sm-2 control-label">Сезоны</label>
        <div class="col-sm-10">
            <select class="" name="seasons">
                @foreach($seasons as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Добавить</button>
        </div>
    </div>
</form>
