<form class="addGoods form-horizontal" action="{{ url('/admin/goods/edit') }}" method="POST" enctype="multipart/form-data">
    <h2>Редактирование Товара</h2>
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <input type="hidden" name="id" value="{{$oldGoods->id}}"/>
    <div class="form-group">
        <label for="inputEmail1" class="col-sm-2 control-label">Артикт</label>
        <div class="col-sm-10">
            @if($errors->first('article'))
                <p style="color:red;">{{$errors->first('article')}}</p>
            @endif
            <input type="text" name="article" class="form-control" id="inputEmail1" placeholder="Артикт" value="{{$oldGoods->article}}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail2" class="col-sm-2 control-label">Название</label>
        <div class="col-sm-10">
            @if($errors->first('name'))
                <p style="color:red;">{{$errors->first('name')}}</p>
            @endif
            <input type="text" name="name" class="form-control" id="inputEmail2" placeholder="Название" value="{{$oldGoods->name}}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Описание</label>
        <div class="col-sm-10">
            @if($errors->first('description'))
                <p style="color:red;">{{$errors->first('description')}}</p>
            @endif
            <textarea name="description" rows="3" class="form-control">{{$oldGoods->description}}</textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword4" class="col-sm-2 control-label">Размер</label>
        <div class="col-sm-10">
            @if($errors->first('size'))
                <p style="color:red;">{{$errors->first('size')}}</p>
            @endif
            <input type="text" name="size" class="form-control" id="inputPassword4" placeholder="Размер" value="{{$oldGoods->size}}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword5" class="col-sm-2 control-label">Цена</label>
        <div class="col-sm-10">
            @if($errors->first('price'))
                <p style="color:red;">{{$errors->first('price')}}</p>
            @endif
            <input type="text" name="price" class="form-control" id="inputPassword5" placeholder="Цена" value="{{$oldGoods->price}}">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword6" class="col-sm-2 control-label">Изображение</label>
        <div class="col-sm-10">
            @if($errors->first('image'))
                <p style="color:red;">{{$errors->first('image')}}</p>
            @endif
            <input type="file" name="image" id="inputPassword6">
            <input type="hidden" name="oldImage" value="{{$oldGoods->image}}"/>
            <div style="width: 300px;height: 300px;overflow:hidden;">
                <img src="/img/{{$oldGoods->image}}" alt="">
            </div>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword7" class="col-sm-2 control-label">Подкатегория</label>
        <div class="col-sm-10">
            <select class="" name="unCategory">
                @foreach($unCategory as $item)
                    @if($oldGoods->un_category_id == $item->id)
                        <option selected value="{{$item->id}}">{{$item->name}}</option>
                    @else
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword7" class="col-sm-2 control-label">Пренадлежность</label>
        <div class="col-sm-10">
            <select class="" name="sex">
                @foreach($sex as $item)
                    @if($oldGoods->sex_id == $item->id)
                        <option selected value="{{$item->id}}">{{$item->name}}</option>
                    @else
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword7" class="col-sm-2 control-label">Отображение</label>
        <div class="col-sm-10">
            <select class="" name="active">
                <option value="1">Показывать</option>
                <option value="0">Скрыто</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword7" class="col-sm-2 control-label">Сезоны</label>
        <div class="col-sm-10">
            <select class="" name="seasons">
                @foreach($seasons as $item)
                    @if($oldGoods->season_id == $item->id)
                        <option selected value="{{$item->id}}">{{$item->name}}</option>
                    @else
                        <option value="{{$item->id}}">{{$item->name}}</option>
                    @endif
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
