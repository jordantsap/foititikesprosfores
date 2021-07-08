<div>
    <nav class="navbar">
        <ul class="nav navbar-nav list-group d-flex justify-content-center">
            <li class="list-group-item text-center list-group-item-filters">
                <h1>Φίλτρα</h1></li>
            <li class="list-group-item text-center list-group-item-price-filters"><h4>Τιμές</h4></li>
            <li wire:click="lowpricefirst" class="list-group-item text-center">
                <label for="lowprice"> Χαμηλές πρώτα
                    &nbsp<input type="checkbox" name="lowpricefirst" class="">
                </label>
            </li>
            <li class="list-group-item text-center">
                <label for="lowprice"> Υψηλές πρώτα
                    &nbsp<input type="checkbox" name="highpricefirst" class="minimal">
                </label>
            </li>
            <li class="list-group-item text-center">
                <label for="pricerange"> 1-100 Ευρω
                    <br><input type="checkbox" name="pricerange" class="minimal">
                </label>
            </li>
            <li class="list-group-item text-center">
                <label for="pricerange"> 101-200 Ευρω
                    <br><input type="checkbox" name="pricerange" class="minimal">
                </label>
            </li>

            <hr class="list-group-item-filters">

            <li class="list-group-item text-center">
                <h2>Κατηγορίες</h2>
            </li>
            <li class="list-group-item text-center list-group-item-companies-filters">
                <a href="{{ route('categories') }}">Όλες</a>
            </li>
            @foreach ($categories as $category)
                <li class="list-group-item text-center">
                    <a href="{{ route('category', $category->id) }}" class="align-middle">
                        {{ $category->title }}
                    </a>
                </li>
            @endforeach
            {{-- <li class="list-group-item text-center list-group-item-category-filters">
                <script>
                    document.write('<a href="' + document.referrer + '">{{ __('page.backlink') }}</a>');

                </script>
            </li> --}}
        {{-- </ul>
        <ul class="nav navbar-nav list-group d-flex justify-content-center"> --}}

            <hr class="list-group-item-filters">
                        <li class="list-group-item text-center list-group-item-companies-filters"><h3>Καταστήματα</h3></li>

            @if ($companies)
                @foreach ($companies as $company)
                    <li class="list-group-item text-center">
                        <a href="{{ route('company', $company->id) }}" class="align-middle">
                            {{ $company->title }}
                        </a>
                    </li>
                @endforeach
            @else
                <li class="list-group-item text-center">No Companies available</li>
            @endif

        </ul>

    </nav>

</div>
