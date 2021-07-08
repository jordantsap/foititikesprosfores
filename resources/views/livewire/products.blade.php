<div>
    @if ($products)
                <div class="row">
                        @foreach ($products as $product)
                            <div class="col-sm-12 col-md-3 col-lg-3 text-center">
                                <a href="{{ route('product', $product->id) }}">
                                    <img class="img-responsive rounded" style="width:100%;height:150px;"
                                        src="{{ asset($product->image) }}" alt="{{ $product->title }}">
                                    <h2>{{ Str::limit($product->title, 20) }}</h2>
                                </a>
                                <h3><b>{{ __('Κατηγορία') }}</b> <br>
                                    <a href="{{ url('category'), $product->category->id }}">
                                        {{ $product->category->title }}</a>
                                </h3>
                                <h4><b>{{ __('Εταιρεία') }}</b>
                                    <a
                                        href="{{ $product->company ? url('company', $product->company->id) : 'none' }}"><br>{{ Str::limit($product->company ? $product->company->title : 'No Company', 12) }}</a>
                                </h4>
                                <h4 class="col-sm-12 text-center"><b>{{ __('Τιμή') }}</b> <br>€ {{ $product->price }}
                                </h4>
                                <form id="{{ $product->id }}-cartstore" action="{{ url('cart.store') }}" method="post">
                                    {{ csrf_field() }}
                                    <input type="hidden" name="id" value="{{ $product->id }}">
                                    <input type="hidden" name="title" value="{{ $product->title }}">
                                    <input type="hidden" name="price" value="{{ $product->price }}">
                                    <input id="{{ $product->id }}-btn" type="submit" class="btn btn-info btn-block"
                                        value="{{ __('single.addtocart') }}">
                                </form>
                                <script type="text/javascript">
                                    function formSubmit() {
                                        alert("{{ __('form.cartconfirm') }}");
                                        $("#cartstore").submit();
                                    }

                                </script>
                                <br>
                            </div>
                                @endforeach
                            </div>
                            {{-- <br> --}}
            @else
                <div class="d-flex justify-content-center noresults">
                    <h1 class="align-middle"><b>{{ __('page.noresults') }}</b></h1>
                </div>
                @endif


                <div class="d-flex justify-content-center">
                    {{ $products->links() }}
                </div>
</div>
