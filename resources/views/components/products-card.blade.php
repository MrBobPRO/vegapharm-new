@props(['product'])

<div class="product-card product-card--{{ $product->prescription ? 'rx' : 'otc' }}">
    <img class="product-card__image" src="{{ asset('img/products/' . $product->image) }}" alt="{{ $product->title }}">
    <h3 class="product-card__title">{{ $product->title }}</h3>
    <span class="product-card__prescription">{{ $product->prescription ? 'RX' : 'OTC' }}</span>
    <p class="product-card__description">{{ $product->description }}</p>
    <span class="material-icons-outlined product-card__icon">arrow_forward</span>
</div>