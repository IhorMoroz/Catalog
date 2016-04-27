<form class="addCategory form-horizontal" action="{{ url('/admin/category/add') }}" method="POST">
    <input type="hidden" name="_token" value="{{csrf_token()}}"/>
    <h2>Добавление Категории</h2>
    <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">Название</label>
        <div class="col-sm-10">
            @if($errors->first('addNameCategory'))
                <p style="color:red;">{{$errors->first('addNameCategory')}}</p>
            @endif
            <input type="text" name="addNameCategory" class="form-control" id="inputEmail3" placeholder="Название">
        </div>
    </div>
    <div class="form-group">
        <label for="inputPassword3" class="col-sm-2 control-label">Url Адрес</label>
        <div class="col-sm-10">
            @if($errors->first('addUrlCategory'))
                <p style="color:red;">{{$errors->first('addUrlCategory')}}</p>
            @endif
            <input type="text" name="addUrlCategory" class="form-control" id="inputPassword3" placeholder="Url Адрес">
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
            <button type="submit" class="btn btn-default">Добавить</button>
        </div>
    </div>
</form>
