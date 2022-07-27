@props(['products'])

<div class="filter__search">
    <div class="search-select-container">
        <select class="selectize-singular-linked search-select" placeholder="{{ __('Поиск по ключевой информации') }}">
            <option></option>
            @foreach($products as $product)
                <option value="{{ $product->id }}">{{ $product->title }}</option>
            @endforeach
        </select>
    </div>

    <span class="material-icons-outlined search-select__icon">search</span>
</div>