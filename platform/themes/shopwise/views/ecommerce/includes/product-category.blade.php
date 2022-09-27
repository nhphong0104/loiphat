@php
    $categoriesRequest = request()->input('categories', []);
    $urlCurrent = URL::current();
    $categories = ProductCategoryHelper::getAllProductCategories()
                        ->where('status', \Botble\Base\Enums\BaseStatusEnum::PUBLISHED)
                        ->whereIn('parent_id', [0, null])
                        ->loadMissing(['slugable', 'children:id,name,parent_id', 'children.slugable']);
@endphp
<div class="widget">
    <h5 class="widget_title">{{ __('Product Categories') }}</h5>
    <ul class="ps-list--categories">
        @foreach($categories as $category)
            <li class="@if ($urlCurrent == $category->url || (!empty($categoriesRequest && in_array($category->id, $categoriesRequest)))) current-menu-item @endif @if ($category->children->count()) menu-item-has-children @endif">
                <a href="{{ $category->url }}">{{ $category->name }}</a>
                @if ($category->children->count())
                    @include(Theme::getThemeNamespace() . '::views.ecommerce.includes.sub-categories', ['children' => $category->children])
                @endif
            </li>
        @endforeach
    </ul>
</div>
