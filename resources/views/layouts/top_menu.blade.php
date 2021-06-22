@foreach ($categories as $category)

    @if ($category->children->where('published', 1)->count())
              <div class="dropdown" id="dropdownMenu">
{{--                   <button class="btn dropdown-toggle" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button">--}}
                       <a class="col btn dropdown-toggle" style="color: #3490dc" type="button" id="dropdownMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" role="button" href="{{url("/blog/category/$category->slug")}}">
                            {{$category->title}}
                       </a>
{{--                   </button>--}}
                   <div class="col dropdown-menu" role="menu" aria-labelledby="dropdownMenu">
                       <li role="presentation">
                           <a role="menuitem">
                               @include('layouts.top_menu', ['categories' => $category->children])
                           </a>
                       </li>
                   </div>


            @else
                <div>
                    {{--            <button class="btn" type="button" aria-haspopup="true" aria-expanded="false">--}}

                    <a class="col btn" style="color: #3490dc" href="{{url("/blog/category/$category->slug")}}">{{$category->title}}</a>
                    {{--            </button>--}}
                    @endif
                </div>
        @endforeach
