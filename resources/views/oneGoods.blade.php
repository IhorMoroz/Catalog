<div class="oneGoods">
    <h2>{{$goods[0]->name}}</h2>
    <div class="fotoBox">
        <img src="/img/{{$goods[0]->image}}" alt="{{$goods[0]->name}}">
    </div>
    <div class="descGoods">

        <div class="desc">
            {{$goods[0]->description}}
        </div>
        <div class="allInfo">
            <table>
                <tr>
                    <td><p class="key">Артикл</p></td>
                    <td><p class="item">- {{$goods[0]->article}}</p></td>
                </tr>
                <tr>
                    <td><p class="key">Размер</p></td>
                    <td><p class="item">- {{$goods[0]->size}}</p></td>
                </tr>
                <tr>
                    <td><p class="key">Цена</p></td>
                    <td><p class="item">- {{$goods[0]->price}}грн</p></td>
                </tr>
                <tr>
                    <td><p class="key">Пол</p></td>
                    <td><p class="item">
                            @foreach($sex as $item)
                                @if($item->id == $goods[0]->sex_id)
                                    - {{$item->name}}
                                @endif
                            @endforeach
                        </p>
                    </td>
                </tr>
                <tr>
                    <td><p class="key">Сезон</p></td>
                    <td><p class="item">
                            @foreach($seasons as $item)
                                @if($item->id == $goods[0]->season_id)
                                    - {{$item->name}}
                                @endif
                            @endforeach
                        </p>
                    </td>
                </tr>
                <tr>
                    <td><p class="key">Материал</p></td>
                    <td><p class="item">- Ткань</p></td>
                </tr>
                <tr>
                    <td><p class="key">Статус</p></td>
                    <td><p class="item">
                            @if($goods[0]->active)
                                - Виден
                            @else
                                - Невиден
                            @endif
                        </p>
                    </td>
                </tr>
            </table>

        </div>
    </div>
</div>
