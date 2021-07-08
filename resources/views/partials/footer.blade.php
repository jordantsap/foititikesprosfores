<footer class="footer">
    <div class="footer-area">
        <div class="container">
            <div class="row section_gap">
                <div class="col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title large_title">Λίγα Λόγια</h4>
                        <p>
                            Προϊόντα από κάθε κατηγορία σε καταστήματα με τις καλύτερες τιμές
                        </p>
                        {{-- <p>
                            Σύγκριση των τιμών για το προϊόν που αναζητάς
                        </p> --}}
                        <p>
                            Συμβουλές για το σπίτι και αυτό που πραγματικά χρειάζεσαι
                        </p>
                        <p>
                            Ιδέες και tips για όσα θα ήθελες να ξέρεις
                        </p>
                        <p>
                            Πακέτα επίπλωσης και διακόσμησης του νέου σου σπιτιού
                        </p>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Πλοήγηση</h4>
                        <ul class="">
                            <li class="footer">
                                <a href="/">Home</a>
                            </li>
                            <li class="footer">
                                <a href="{{ url('blog') }}">Άρθρα</a>
                            </li>
                            <li class="footer">
                                <a href="{{ url('products') }}">Προϊόντα</a>
                            </li>
                            <li class="footer">
                                <a href="{{ url('contact') }}">Επικοινωνία</a>
                            </li>
                            <li class="footer">
                                <a href="{{ url('whoweare') }}">Ποιοί Είμαστε</a>
                            </li>
                            <li class="footer">
                                <a href="{{ url('partner-form') }}">Γινε Συνεργατης</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6">
                    <div class="single-footer-widget instafeed">
                        <h4 class="footer_title">Gallery</h4>
                        <ul class="list instafeed d-flex flex-wrap">
                            <!-- <li><img src="img/gallery/r1.jpg" alt=""></li>
              <li><img src="img/gallery/r2.jpg" alt=""></li>
              <li><img src="img/gallery/r3.jpg" alt=""></li>
              <li><img src="img/gallery/r5.jpg" alt=""></li>
              <li><img src="img/gallery/r7.jpg" alt=""></li>
              <li><img src="img/gallery/r8.jpg" alt=""></li> -->
                        </ul>
                    </div>
                </div>
                <div class="offset-lg-1 col-lg-3 col-md-6 col-sm-6">
                    <div class="single-footer-widget tp_widgets">
                        <h4 class="footer_title">Contact Us</h4>
                        <div class="ml-40">
                            <p class="sm-head">
                                <span class="fa fa-location-arrow"></span> Head Office
                            </p>
                            <p>123, Main Street, Your City</p>
                            <p class="sm-head">
                                <span class="fa fa-phone"></span> Phone Number
                            </p>
                            <p>
                                +123 456 7890
                                <br> +123 456 7890
                            </p>
                            <p class="sm-head">
                                <span class="fa fa-envelope"></span> Email <br>
                                <a href="mailto: abc@example.com">Send Email</a>
                            </p>
                            <p>


                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="copyright">
        <div class="container">
            <div class="row d-flex">
                <p class="col-lg-12 footer-text text-center">

                    Copyright &copy;
                    <!-- <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> -->
                    <script>
                        document.write(new Date().getFullYear());

                    </script> All rights reserved | Powered with <i class="fa fa-heart"
                        aria-hidden="true"></i> by
                    <a href="#" target="_blank">Zerone Hellas</a>
                </p>
            </div>
        </div>
    </div>
</footer>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
    integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ=="
    crossorigin="anonymous"></script>

{{-- @livewireScripts --}}

<script src={{ asset('js/bootstrap.min.js') }}></script>

<script src={{ asset('js/main.js') }}></script>
{{-- <script src={{ asset('js/app.js') }}></script> --}}


<script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
<link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script>
    @if (Session::has('message'))
        toastr.options.positionClass = 'toast-bottom-left';
        toastr.options.timeOut = 5000;
        toastr.options.extendedTimeOut = 400;
        toastr.options.showMethod = 'slideDown','fadeIn';
        toastr.options.hideMethod = 'slideUp','fadeOut';
        toastr.options.showDuration = 600;
        toastr.options.hideDuration = 600;
        toastr.options.closeDuration = 400;
        toastr.options.progressBar = true;

        var type = "{{ Session::get('alert-type', 'info') }}";
        switch(type){
        case 'info':
        toastr.info("{{ Session::get('message') }}");
        break;

        case 'warning':
        toastr.warning("{{ Session::get('message') }}");
        break;

        case 'success':
        toastr.success("{{ Session::get('message') }}");
        break;

        case 'error':
        toastr.error("{{ Session::get('message') }}");
        break;
        }
    @endif

</script>


<script>
    function lowerprice() {
        // $(document).ready(function() {
        // header("content-type:application/json");
        $("#lowerprice").click(function() {
            // $.ajaxSetup({
            //     headers: {
            //         'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            //     }
            // });
            $.ajax({
                url:"{{ route('lowerprice')}}",
                method: 'GET',
                data: {}
            });
            // {{ route('companies.index') }}
            // console.log('dghgdrtf');
        });
    // });
    }

</script>

</body>

</html>
