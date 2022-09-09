<link rel="canonical" href="{{ url()->current() }}" />

@if($seo)
<title>{{ $seo->title }}</title>
<meta name="description" content="{{ $seo->meta_description }}">

<meta property="og:title" content="{{ $seo->title }}" />
<meta property="og:description" content="{{ $seo->meta_description }}" />

<meta property="og:type" content="website" />
<meta property="og:url" content="{{ url()->current() }}" />
<meta property="og:image" content="{{ asset('storage/'. $seo->og_image) }}" />
<meta property="og:image:secure_url" content="{{ asset('storage/'. $seo->og_image) }}" />
<meta property="og:image:type" content="image/jpeg" />
<meta property="og:image:width" content="2500" />
<meta property="og:image:height" content="600" />
@if($seo->og_image_alt)
    <meta property="og:image:alt" content="{{ asset('storage/'. $seo->og_image_alt) }}" />
@else
    <meta property="og:image:alt" content="{{ asset('storage/'. $seo->title) }}" />
@endif
<!-- Twitter Card data -->
<meta name="twitter:card" content="{{ asset('storage/'. $seo->twitter_card) }}">
<meta name="twitter:site" content="{{ url()->current() }}">
<meta name="twitter:creator" content="@MoveBorn">
<!-- Twitter summary card with large image must be at least 280x150px -->
<meta name="twitter:image" content="{{ asset('storage/'. $seo->og_image) }}">
@endif
