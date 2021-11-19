@extends('home')

@section('content')

<div class="container">
   
</div>
<!-- Single Products -->
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="{{ asset($image[0])}}" width="100%" id="ProductImg">

            <div class="small-img-row">
               
                @if(isset($image[1]))
                <div class="small-img-col">
                    <img src="{{ asset($image[1])}}"  width="100%" class="small-img">
                </div>
                @endif @if(isset($image[2]))
                <div class="small-img-col">
                    <img src="{{ asset($image[1])}}"  width="100%" class="small-img">
                </div>
                @endif @if(isset($image[3]))
                <div class="small-img-col">
                    <img src="{{ asset($image[1])}}"  width="100%" class="small-img">
                </div>
                @endif
               
            </div>

        </div>
        <div class="col-2">
            <p> Category:{{$product->category->category_name}}</p>
            <h1>{{$product->name}}</h1>
            <h4>Price:{{$product->price}}</h4>
            <form action="/add-to-cart" method="POST">
                @csrf 
                <select name="size">
                    <option value="">Select Size</option>
                    <option value="XXL">XXL</option>
                    <option value="XL">XL</option>
                    <option value="L">L</option>
                    <option value="M">M</option>
                    <option value="S">S</option>
                </select>
                <input type="hidden" name="pid"  value="{{ $product->id }}">
                <input type="hidden" name="price"  value="{{ $product->price }}">
                <input type="hidden" name="name"  value="{{ $product->name }}">

                <label for="">Amount</label>
                <input type="text" name="quantity" value="1" onchange="validateAmount($this.value, {{ $product->id }})">
                <button type="submit" class="btn">Add To Cart</button>
          </form>

            <h3>Product Details <i class="fa fa-indent"></i></h3>
            <br>
            <p>{{$product->details}}</p>
        </div>
    </div>
</div>
<!-- title -->
<div class="small-container">
    <div class="row row-2">
        <h2>Related Products</h2>
        <p>View More</p>
    </div>
</div>
<!-- Products -->
<div class="small-container">
    <div class="row">
        @foreach($relatedProducts as $related)
        <div class="col-4">
            <a href="{{url('/product/details/'.$related->id)}}">   <img src="{{ asset(explode('|',$related->image)[0])}}"></a>
            <h4>{{$related->name}}</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>{{$related->price}}</p>
        </div>
        @endforeach
      
    </div>
</div>



<!-- javascript -->
<script type="text/javascript" src="/js/custom.js"></script>

<script>
    var MenuItems = document.getElementById("MenuItems");
    MenuItems.style.maxHeight = "0px";
    function menutoggle() {
        if (MenuItems.style.maxHeight == "0px") {
            MenuItems.style.maxHeight = "200px"
        }
        else {
            MenuItems.style.maxHeight = "0px"
        }
    }
</script>

<!-- product gallery -->
<script>
    var ProductImg = document.getElementById("ProductImg");
    var SmallImg = document.getElementsByClassName("small-img");

    SmallImg[0].onclick = function () {
        ProductImg.src = SmallImg[0].src;
    }
    SmallImg[1].onclick = function () {
        ProductImg.src = SmallImg[1].src;
    }
    SmallImg[2].onclick = function () {
        ProductImg.src = SmallImg[2].src;
    }
    SmallImg[3].onclick = function () {
        ProductImg.src = SmallImg[3].src;
    }

</script>


@endsection