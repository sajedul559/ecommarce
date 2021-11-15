@extends('home')

@section('content')

<div class="container">
   
</div>

<!-- Single Products -->
<div class="small-container single-product">
    <div class="row">
        <div class="col-2">
            <img src="{{ asset('images/gallery-1.jpg')}}" width="100%" id="ProductImg">

            <div class="small-img-row">
                <div class="small-img-col">
                    <img src="{{ asset('images/gallery-1.jpg')}}" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('images/gallery-2.jpg')}}" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('images/gallery-3.jpg')}}" width="100%" class="small-img">
                </div>
                <div class="small-img-col">
                    <img src="{{ asset('images/gallery-4.jpg')}}" width="100%" class="small-img">
                </div>
            </div>

        </div>
        <div class="col-2">
            <p>Home / T-Shirt</p>
            <h1>Red Printed T-Shirt by HRX</h1>
            <h4>$50.00</h4>
            <select>
                <option>Select Size</option>
                <option>XXL</option>
                <option>XL</option>
                <option>L</option>
                <option>M</option>
                <option>S</option>
            </select>
            <input type="number" value="1">
            <a href="" class="btn">Add To Cart</a>

            <h3>Product Details <i class="fa fa-indent"></i></h3>
            <br>
            <p>Give your summer wardrobe a style upgrade with the HRX Men's Active T-Shirt. Team it with a pair of
                shorts for your morning workout or a denims for an evening out with the guys.</p>
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
        <div class="col-4">
            <img src="{{ asset('images/product-9.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-10.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-11.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
        <div class="col-4">
            <img src="{{ asset('images/product-12.jpg')}}">
            <h4>Red Printed T-Shirt</h4>
            <div class="rating">
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star"></i>
                <i class="fa fa-star-o"></i>
            </div>
            <p>$50.00</p>
        </div>
    </div>
</div>



<!-- javascript -->

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