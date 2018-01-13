<!DOCTYPE html>
<html lang="en">
@include('layout.frontend.particals.head')



<body class="cms-index-index cms-home-page">
    <!-- mobile menu -->

@include('layout.frontend.particals.mobile_menu')



        <!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
<!-- Header -->
@include('layout.frontend.particals.header')


<!-- end header -->
<!-- Navigation -->

@include('layout.frontend.particals.nav')


<!-- end nav -->



<!-- minhanh-header -->

<!-- minhanh-content-start -->

@yield('content')

<!-- minhanh-content-end -->
<!-- minhanh-footer -->


<!-- Brand Logo -->
@include('layout.frontend.comman.brand_logo')



<!-- End Brand Logo -->

<!-- Footer -->
@include('layout.frontend.comman.footer')


</div> 
<!-- End Footer -->

<!-- jquery js -->

@include('layout.frontend.particals.jquery')

<!-- Hot Deals Timer 1-->

<!--Newsletter Popup Start-->
<!-- <div id="myModal" class="modal fade">
    <div class="modal-dialog newsletter-popup">
        <div class="modal-content">
            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <div class="modal-body">
                <h4 class="modal-title">NEWSLETTER SIGNUP</h4>
                <form id="newsletter-form" method="post" action="#">
                    <div class="content-subscribe">
                        <div class="form-subscribe-header">
                            <label>Subscribe to be the first to know about Sales, Events, and Exclusive Offers!</label>
                        </div>
                        <div class="input-box">
                            <input type="text" class="input-text newsletter-subscribe" title="Sign up for our newsletter" name="email" placeholder="Enter your email address">
                        </div>
                        <div class="actions">
                            <button class="button-subscribe" title="Subscribe" type="submit">Subscribe</button>
                        </div>
                    </div>
                </form>
                <div class="subscribe-bottom">
                    <input name="notshowpopup" id="notshowpopup" type="checkbox"> Don’t show this popup again </div>
                </div>
            </div>
        </div>
    </div> -->
    <!--End of Newsletter Popup-->
</body>

</html>