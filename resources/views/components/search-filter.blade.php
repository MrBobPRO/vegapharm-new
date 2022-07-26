@props(['products'])

<div class="filter__search">
    <div class="search-select-container">
        <select class="selectize-singular search-select" placeholder="Поиск по ключевой информации">
            <option></option>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->title }}</option>
            @endforeach
        </select>
    </div>

    <span class="material-icons-outlined search-select__icon">search</span>
</div>