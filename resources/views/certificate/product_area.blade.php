<div class="product">
    <div class="product-photo">
        @foreach($photos as $ph)
            @if($ph->id=="$product->id")
                    <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
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
        </div>
    </div>
</div>
