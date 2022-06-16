<div class="product">
    <div class="product-photo">
        @foreach($photos as $ph)
            @if($ph->id=="$product->id")
                @if($ph->name=='second')
                    <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                @endif
            @endif
        @endforeach
    </div>
    <div class="product-information">
        <div class="name-product">
            <a href="{{route('product',$product->id)}}">{{$product->name}}</a>
        </div>
        <p>{{$product->price}}грн</p>
        <div class="product-button">
            <form action="{{route('basketAdd',$product->id)}}" method="POST">
                @csrf
            <button type="submit">В корзину</button>
            </form>
            <form action="{{route('favoriteRemove',$product->id)}}" method="POST">
                @csrf
            <button>Видалити</button>
            </form>
        </div>
    </div>
</div>
