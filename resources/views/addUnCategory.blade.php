<form class="addCategory form-horizontal" action="{{ url('/admin/uncategory/add') }}" method="POST">
    <h2>Добавление Под Категории</h2>
    @if(!empty($parentCategory))
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Родительская Категория</label>
        <div class="col-sm-10">
            <select class="" name="category">
                @foreach($parentCategory as $item)
                    <option value="{{$item->id}}">{{$item->name}}</option>
                @endforeach
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Название</label>
        <div class="col-sm-10">
            @if($errors->first('name'))
                <p style="color:red;">{{$errors->first('name')}}</p>
            @endif
            <input type="text" name="name" class="form-control" id="inputEmail3" placeholder="Название">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Url Адрес</label>
        <div class="col-sm-10">
            @if($errors->first('url'))
                <p style="color:red;">{{$errors->first('url')}}</p>
            @endif
            <input type="text" name="url" class="form-control" id="inputPassword3" placeholder="Url Адрес">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Добавить</button>
        </div>
    </div>
    @else
        <a href="/admin/category/add" class="btn btn-default">Добавить Категорию</a>
    @endif
</form>
