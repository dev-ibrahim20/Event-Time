@php
echo '<?xml version="1.0" encoding="UTF-8"?>';
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" xmlns:video="http://www.google.com/schemas/sitemap-video/1.1" xmlns:xhtml="https://eventtimesa.com/event/public/assets/images/logo-even.jpeg">
    
    <!-- Homepage -->
    <url>
        <loc>https://eventtimesa.com</loc>
        <lastmod>2023-04-24T12:45:21+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    
    <!-- Services Page -->
    <url>
        <loc>https://eventtimesa.com/services</loc>
        <lastmod>2023-04-24T12:45:21+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    
    <!-- Service Detail Pages -->
    @php
        $services = \App\Models\Service::where('status', true)->get();
    @endphp
    @foreach($services as $service)
    <url>
        <loc>{{ url('/service-details/' . $service->slug) }}</loc>
        <lastmod>2023-04-24T12:45:21+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    @endforeach
    
    <!-- Gallery Page -->
    <url>
        <loc>https://eventtimesa.com/gallery</loc>
        <lastmod>2023-04-24T12:45:21+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    
    <!-- Products Page -->
    <url>
        <loc>https://eventtimesa.com/products</loc>
        <lastmod>2023-04-24T12:45:21+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    
    <!-- Contact Page -->
    <url>
        <loc>https://eventtimesa.com/contact</loc>
        <lastmod>2023-04-24T12:45:21+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    
    <!-- About Page -->
    <url>
        <loc>https://eventtimesa.com/about</loc>
        <lastmod>2023-04-24T12:45:21+00:00</lastmod>
        <changefreq>daily</changefreq>
        <priority>0.8</priority>
    </url>
    
</urlset>
