@extends('layouts.main')


@section('meta')
<title>Boilers Page | Boiler Installation UK</title>
<meta name="description" content="Explore our range of boilers for sale, including installation services. We offer top-quality heating solutions to meet your needs in the UK.">
<meta name="keywords" content="boilers for sale, boiler installation, heating solutions, UK">
<meta name="author" content="Boiler Installation UK">

@endsection


@section('content')
    <section class="page_breadcrumbs ds parallax section_padding_top_50 section_padding_bottom_50">
        <div class="container">
            <div class="row">
                <div class="col-sm-12 text-center">
                    <h2 class="highlight">Boilers Page</h2>
                    <ol class="breadcrumb darklinks">
                        <li>
                            <a href="{{ route('home') }}">
                                Home
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('boilers') }}">Boilers</a>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    </section>

    @include('components.finance-available')
@include('components.boilers')
@endsection
