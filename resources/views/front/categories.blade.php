@foreach($categories as $category)
<li class="level0 nav-13 level-top parent">
	<a href="{{ url('category/'.base64_encode($category->id)) }}"  class="level-top">
        <em class="fa fa-angle-right"></em><span>{{ ucwords($category->category) }}</span>
    </a>
    @if(!$category->children->isEmpty())
    {{ dd($category->children) }}
    <ul class="level1">
        @include('front.categories', ['categories' => $category->children])
    </ul>
    @endif
</li>
@endforeach
