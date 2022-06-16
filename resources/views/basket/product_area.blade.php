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
    <div class="description">
        <a href="{{route('product',$product->id)}}">{{$product->name}}</a>
        <div class="number">
            <form action="{{route('basketSub',$product->id)}}" method="POST">
                @csrf
                <button type="submit"><span>-</span></button>
            </form>
            <div class="square">{{$product->pivot->count}}</div>
            <form action="{{route('basketAdd',$product->id)}}" method="POST">
                @csrf
                <button type="submit"><span>+</span></button>
            </form>
        </div>
        <h4>{{$product->getPriceForCount()}}грн</h4>
        <form action="{{route('basketRemove',$product->id)}}"  class="remove" method="POST">
            @csrf
            <button type="submit">Видалити</button>
        </form>
        <form action="{{route('basketRemove',$product->id)}}" method="POST">
            @csrf
        <button type="submit" class="delete"><img src="/img/basket/delete.svg" alt="delete"></button>
        </form>
    </div>
</div>
