<div class="product">
    @foreach($photos as $ph)
        @if($ph->id=="$product->id")
            @if($ph->name=='first')
                <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
            @endif

        @endif
    @endforeach
    <div class="product-info">
        <a href="{{route('product',$product->id)}}" class="name11">{{$product->name}}</a>
        <h4 class="price11">{{$product->price}}грн</h4>
    </div>
</div>
