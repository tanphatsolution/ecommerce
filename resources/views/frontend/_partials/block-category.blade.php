<div class="block left-module">
    <p class="title_block">Danh mục</p>
    <div class="block_content">
        <!-- layered -->
        <div class="layered layered-category">
            <div class="layered-content">
                <ul class="tree-menu">
                    @foreach ($categories as $category)
                    <li @if ($isActive = $category->slug == Request::segment(2)) class="active" @endif>
                        <span></span><a href="{{route('category.slug',$category->slug)}}">{{$category->name}}</a>
                        @if (count($category->children))
                        <ul @if ($isActive) style="display:block" @endif>
                            @foreach ($category->children as $children)
                            <li><span></span><a href="{{route('category.slug',$children->slug)}}">{{$children->name}}</a></li>
                            @endforeach
                        </ul>
                        @endif
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
        <!-- ./layered -->
    </div>
</div>