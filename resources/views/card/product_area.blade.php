<div class="product1 col-4">
    <div class="product-photo">
        @foreach($otherPhotos as $ph)
            @if($ph->id=="$product->id")
                @if($ph->name=='first')
                    <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
                @endif
            @endif
        @endforeach
    </div>
    <div class="product-info">
        <a href="{{route('product',$product->id)}}">{{ $product->name }}</a>
        <h4>{{ $product->price }}грн</h4>
    </div>
    <form action="{{route('basketAdd',$product->id)}}" method="POST">
        @csrf
    <button>Купити</button>
    </form>

</div>
