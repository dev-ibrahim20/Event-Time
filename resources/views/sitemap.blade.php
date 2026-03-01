@php
echo '<?xml version="1.0" encoding="UTF-8"?>';
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" 
        xmlns:xhtml="http://www.w3.org/1999/xhtml">
    
    <!-- Homepage -->
    <url>
        <loc>{{ url('/') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>1.0</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="{{ url('/') }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ url('/?lang=en') }}"/>
    </url>
    
    <!-- Services Page -->
    <url>
        <loc>{{ url('/services') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.9</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="{{ url('/services') }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ url('/services?lang=en') }}"/>
    </url>
    
    <!-- Gallery Page -->
    <url>
        <loc>{{ url('/gallery') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="{{ url('/gallery') }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ url('/gallery?lang=en') }}"/>
    </url>


    {{-- Products Page --}}

    <url> 
        <loc>{{ url('/products') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="{{ url('/products') }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ url('/products?lang=en') }}"/>
    </url>
    
    {{-- <!-- Quote Page -->
    <url>
        <loc>{{ url('/quote') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="{{ url('/quote') }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ url('/quote?lang=en') }}"/>
    </url> --}}
    
    <!-- Contact Page -->
    <url>
        <loc>{{ url('/contact') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="{{ url('/contact') }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ url('/contact?lang=en') }}"/>
    </url>
    
    <!-- About Page -->
    <url>
        <loc>{{ url('/about') }}</loc>
        <lastmod>{{ date('Y-m-d') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.5</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="{{ url('/about') }}"/>
        <xhtml:link rel="alternate" hreflang="en" href="{{ url('/about?lang=en') }}"/>
    </url>
    
</urlset>
