@props(['category' => null, 'product' => null, 'commande' => null])
<div class="sidebar">
    <div class="top">
        {{-- <img src="{{asset('images/smartphone.png')}}" class="logo" alt=""> --}}
        logo
    </div>
    <div class="mid">
        <ul>
            <li><a class="{{ $category }}" href="{{ route('category.index') }}"><i
                        class="bi bi-bookmarks"></i><span>Category</span></a></li>
            <li><a class="{{ $product }}" href="{{ route('product.index') }}"><i
                        class="bi bi-bag"></i><span>Product</span></a></li>
            <li><a class="" href=""><i class="bi bi-file-text"></i><span>Commande</span></a></li>
        </ul>
    </div>
    <div class="bottom">bottom</div>
</div>
