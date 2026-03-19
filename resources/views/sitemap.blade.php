@php
echo '<?xml version="1.0" encoding="UTF-8"?>';
@endphp
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9" 
        xmlns:xsi="http://www.w3.org/2001/XMLSchema-instance" 
        xsi:schemaLocation="http://www.sitemaps.org/schemas/sitemap/0.9 http://www.sitemaps.org/schemas/sitemap/0.9/sitemap.xsd" 
        xmlns:image="http://www.google.com/schemas/sitemap-image/1.1" 
        xmlns:video="http://www.google.com/schemas/sitemap-video/1.1" 
        xmlns:xhtml="http://www.w3.org/1999/xhtml">
    
    <!-- Homepage - Highest Priority -->
    <url>
        <loc>https://eventtimesa.com</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>daily</changefreq>
        <priority>1.0</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com?lang=en" />
        <xhtml:link rel="alternate" hreflang="x-default" href="https://eventtimesa.com" />
        <image:image>
            <image:loc>https://eventtimesa.com/assets/images/logo-even.jpeg</image:loc>
            <image:title>وقت الحدث - Event Time Saudi Arabia</image:title>
            <image:caption>الشريك الاستراتيجي الرائد في المملكة العربية السعودية لتجهيز المؤتمرات والمعارض والفعاليات والخيام الأوروبية الفاخرة</image:caption>
        </image:image>
    </url>
    
    <!-- Services Page - High Priority -->
    <url>
        <loc>https://eventtimesa.com/services</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/services" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/services?lang=en" />
    </url>
    
    <!-- Service Detail Pages - High Priority with Images -->
    @php
        $services = \App\Models\Service::where('status', true)->orderBy('updated_at', 'desc')->get();
    @endphp
    @foreach($services as $service)
    <url>
        <loc>{{ 'https://eventtimesa.com/service-details/' . $service->slug }}</loc>
        <lastmod>{{ $service->updated_at->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="{{ 'https://eventtimesa.com/service-details/' . $service->slug }}" />
        <xhtml:link rel="alternate" hreflang="en" href="{{ 'https://eventtimesa.com/service-details/' . $service->slug }}?lang=en" />
        @if($service->image)
        <image:image>
            <image:loc>{{ asset('event/public/' . $service->image) }}</image:loc>
            <image:title>{{ app()->getLocale() == 'ar' ? $service->title_ar : $service->title_en }}</image:title>
            <image:caption>{{ app()->getLocale() == 'ar' ? $service->description_ar : $service->description_en }}</image:caption>
        </image:image>
        @endif
    </url>
    @endforeach
    
    <!-- Conference Services - Specialized Pages -->
    <url>
        <loc>https://eventtimesa.com/services/conference-setup</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/services/conference-setup" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/services/conference-setup?lang=en" />
    </url>
    
    <!-- European Tents - Specialized Pages -->
    <url>
        <loc>https://eventtimesa.com/services/european-tents</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/services/european-tents" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/services/european-tents?lang=en" />
    </url>
    
    <!-- Exhibition Services - Specialized Pages -->
    <url>
        <loc>https://eventtimesa.com/services/exhibition-setup</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/services/exhibition-setup" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/services/exhibition-setup?lang=en" />
    </url>
    
    <!-- Wedding Services - Specialized Pages -->
    <url>
        <loc>https://eventtimesa.com/services/wedding-tents</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.9</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/services/wedding-tents" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/services/wedding-tents?lang=en" />
    </url>
    
    <!-- Gallery Page - Medium Priority with Images -->
    <url>
        <loc>https://eventtimesa.com/gallery</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/gallery" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/gallery?lang=en" />
    </url>
    
    <!-- Products Page - Medium Priority -->
    <url>
        <loc>https://eventtimesa.com/products</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/products" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/products?lang=en" />
    </url>
    
    <!-- Contact Page - Medium Priority -->
    <url>
        <loc>https://eventtimesa.com/contact</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/contact" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/contact?lang=en" />
    </url>
    
    <!-- Quote Request Page - Medium Priority -->
    <url>
        <loc>https://eventtimesa.com/quote</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.8</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/quote" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/quote?lang=en" />
    </url>
    
    <!-- About Page - Low Priority -->
    <url>
        <loc>https://eventtimesa.com/about</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.7</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/about" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/about?lang=en" />
    </url>
    
    <!-- Location-Based Pages - SEO for Cities -->
    <url>
        <loc>https://eventtimesa.com/riyadh-events</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/riyadh-events" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/riyadh-events?lang=en" />
    </url>
    
    <url>
        <loc>https://eventtimesa.com/jeddah-events</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/jeddah-events" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/jeddah-events?lang=en" />
    </url>
    
    <url>
        <loc>https://eventtimesa.com/dammam-events</loc>
        <lastmod>{{ now()->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.8</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="https://eventtimesa.com/dammam-events" />
        <xhtml:link rel="alternate" hreflang="en" href="https://eventtimesa.com/dammam-events?lang=en" />
    </url>
    
    <!-- Blog/News Pages - If Available -->
    @php
        $blogs = \App\Models\Blog::where('status', true)->orderBy('updated_at', 'desc')->get() ?? collect();
    @endphp
    @foreach($blogs as $blog)
    <url>
        <loc>{{ 'https://eventtimesa.com/blog/' . $blog->slug }}</loc>
        <lastmod>{{ $blog->updated_at->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>weekly</changefreq>
        <priority>0.7</priority>
        <xhtml:link rel="alternate" hreflang="ar" href="{{ 'https://eventtimesa.com/blog/' . $blog->slug }}" />
        <xhtml:link rel="alternate" hreflang="en" href="{{ 'https://eventtimesa.com/blog/' . $blog->slug }}?lang=en" />
        @if($blog->image)
        <image:image>
            <image:loc>{{ asset('blog/' . $blog->image) }}</image:loc>
            <image:title>{{ app()->getLocale() == 'ar' ? $blog->title_ar : $blog->title_en }}</image:title>
            <image:caption>{{ app()->getLocale() == 'ar' ? $blog->excerpt_ar : $blog->excerpt_en }}</image:caption>
        </image:image>
        @endif
    </url>
    @endforeach
    
    <!-- Client Portfolio Pages -->
    @php
        $clients = \App\Models\Client::where('is_active', true)->orderBy('updated_at', 'desc')->get() ?? collect();
    @endphp
    @foreach($clients as $client)
    @if($client->website_url)
    <url>
        <loc>{{ $client->website_url }}</loc>
        <lastmod>{{ $client->updated_at->format('Y-m-d\TH:i:s+00:00') }}</lastmod>
        <changefreq>monthly</changefreq>
        <priority>0.6</priority>
        @if($client->image)
        <image:image>
            <image:loc>{{ asset('evnet/public/storage/' . $client->image) }}</image:loc>
            <image:title>{{ $client->name }}</image:title>
            <image:caption>عميل من عملاء وقت الحدث - Event Time Saudi Arabia Client</image:caption>
        </image:image>
        @endif
    </url>
    @endif
    @endforeach
    
</urlset>
