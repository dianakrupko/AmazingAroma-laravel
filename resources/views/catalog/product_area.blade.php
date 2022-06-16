@if(!$product->certificate)
<div class="product col-6 col-md-4">


    @foreach($photos as $ph)
        @if($ph->id=="$product->id")
            @if($ph->name=='first')
                <img class="image" src="{{ $ph->way }}" alt="{{ $ph->name }}">
            @endif

        @endif
    @endforeach
    <div class="product-info">
        <a href="{{route('product',$product->id)}}">{{ $product->name }}</a>
        <h4>{{ $product->price }}грн</h4>
    </div>
        <form action="{{route('basketAdd',$product->id)}}" method="POST">
            @csrf
            <button>Купити</button>
        </form>
</div>
@endif
