@props(['categories'])

<div class="filter__categories">
    <label for="categories-select">Категории</label>
    <div class="categories-select-container">
        <select class="selectize-singular categories-select" id="categories-select">
            <option>{{ __('Все препараты') }}</option>
            @foreach($categories as $category)
                <option value="{{ $category->id }}">{{ $category->title }}</option>
            @endforeach
        </select>

        <div class="categories-select__icon">
            <svg>
                <use href="#filter"></use>
            </svg>
        </div>
    </div>
</div>