<div class="megamenu container">
    <div class="row">
        <div class="col-sm-12">
            <ul class="dropdown-menu text-center" aria-labelledby="productCategoryMenu">
                {{-- <li class="list-group-item">
                    <a href=" {{ url('products') }}">Όλα τα Προϊόντα</a>
                </li>
                <li class="divider"></li> --}}

                {{-- <br> --}}
                @foreach ($categories as $category)
                    {{-- <div class=""> --}}
                        <!--d-flex justify-content-around-->
                        <ul class="list-group">
                            <li class="list-group-item droprightct">
                                <a class="disabled" href="{{ route('category', $category->slug) }}" id="categoryTypeMenu"
                                    /*data-bs-toggle="dropdown"*/ aria-expanded="false">{{ $category->title }}</a>
                                @if ($category->types)
                                    <ul class="dropdown-menu text-center" aria-labelledby="categoryTypeMenu">
                                        @foreach ($category->types as $type)
                                            <li class="list-group-item">
                                                <a href="{{ route('types', $type->slug) }}">{{ $type->title }}</a>
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </li>
                        </ul>
                    {{-- </div> --}}
                @endforeach

            </ul>

        </div>
    </div>
</div>
