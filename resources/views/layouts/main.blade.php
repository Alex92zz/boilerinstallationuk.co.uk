<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">


    @yield('meta')

    <link rel="shortcut icon" type="image/x-icon" href="{{ asset("images/logo/logo-icon-red.jpg") }}">
    <link rel="stylesheet" href="{{ asset("css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{ asset("css/animations.css") }}">
    <link rel="stylesheet" href="{{ asset("css/fonts.css") }}">
    <link rel="stylesheet" href="{{ asset("css/main.css") }}" class="color-switcher-link">
    <script src="{{ asset("js/vendor/modernizr-2.6.2.min.js") }}"></script>

    <!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>
	<![endif]-->
<style>
.dark-overlay {
            content: "";
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.35); /* Adjust the opacity as needed */
        }
        figure > a > img {
     max-width: 400px;
 }
    </style>

</head>

<body>

    <!-- search modal -->
    <div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">
                <i class="rt-icon2-cross2"></i>
            </span>
        </button>
        <div class="widget widget_search">
            <form method="get" class="searchform search-form form-inline" action="./">
                <div class="form-group">
                    <input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
                </div>
                <button type="submit" class="theme_button">Search</button>
            </form>
        </div>
    </div>

    <!-- Unyson messages modal -->
    <div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
        <div class="fw-messages-wrap ls with_padding">
            <!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
            <!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

        </div>
    </div>
    <!-- eof .modal -->

    <!-- wrappers for visual page editor and boxed version of template -->
    <div id="canvas">
        <div id="box_wrapper">



    @include('components/navbar')


    <main>

        @yield('content')


    </main>


    @include('components/footer')

</div>
<!-- eof #box_wrapper -->
</div>
<!-- eof #canvas -->


    <script src="{{ asset("js/compressed.js") }}"></script>
    <script src="{{ asset("js/main.js") }}"></script>


    <script>
        // Function to decode obfuscated email address
        function decodeEmail() {
            const obfuscatedEmail = document.getElementById('obfuscated-email');
            const decodedEmail = obfuscatedEmail.innerHTML.replace(/&#(\d+);/g, (match, dec) => String.fromCharCode(dec));
            obfuscatedEmail.innerHTML = '<a href="mailto:' + decodedEmail + '">' + decodedEmail + '</a>';
        }

        function decodeEmail2() {
            const obfuscatedEmail = document.getElementById('obfuscated-email2');
            const decodedEmail = obfuscatedEmail.innerHTML.replace(/&#(\d+);/g, (match, dec) => String.fromCharCode(dec));
            obfuscatedEmail.innerHTML = '<a href="mailto:' + decodedEmail + '">' + decodedEmail + '</a>';
        }
    
        // Call the decodeEmail function to decode and replace the obfuscated email
        decodeEmail();
        decodeEmail2();
    </script>


    <script defer>
        // code to display a dialogue box after succesful form submission
        // this code uses Ajax and needs jQuery to function, make sure it is added after jquery and jQuery UI was imported, otherwise won't work
        $(function() {
            $('form').bind('submit', function() {
                $.ajax({
                    type: 'post',
                    url: '{{ route('contactForm.submit') }}',
                    data: $('form').serialize(),
                    success: function() {
                        $("form").trigger('reset');
                        $("#dialog").dialog();
                        $('#dialog').css({
                            'display': 'block'
                        });
                    }
                });
                return false;
            });
        });
    </script>

    @yield('scripts')
</body>

</html>
