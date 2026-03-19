@php
    $clients = \App\Models\Client::all();
    if($clients->isEmpty()) {
        return; // Don't render anything if no clients exist
    }
@endphp

<style>
    /* Customers Slider Section */
    .customers-section {
        padding: 40px 0;
        background: linear-gradient(135deg, #ab010f, #4c5a69, #3804c5 80%);    
        overflow: hidden;
        position: relative;
        width: 100%;
    }
    
    .customers-container {
        width: 100%;
        position: relative;
    }
    
    .section-header {
        text-align: center;
        margin-bottom: 40px;
        padding: 0 20px;
    }
    
    .section-header h2 {
        font-size: 3.5rem;
        color: #ffffff;
        margin-bottom: 1rem;
        font-weight: 900;
        font-family: 'Arial Black', Arial, sans-serif;
        letter-spacing: 2px;
        text-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
    }
    
    .section-header p {
        font-size: 1.8rem;
        color: #ffffff;
        font-weight: 600;
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.3);
        margin: 0;
    }
    
    .customers-slider {
        position: relative;
        overflow: hidden;
        width: 100%;
        padding: 20px 0;
    }
    
    .slider-wrapper {
        display: flex;
        animation: slideAnimation 25s linear infinite;
        width: fit-content;
    }
    
    .slider-wrapper:hover {
        animation-play-state: paused;
    }
    
    .customer-slide {
        flex: 0 0 auto;
        margin: 0 30px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 150px;
        height: 150px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        backdrop-filter: blur(10px);
        border: 1px solid rgba(255, 255, 255, 0.2);
        transition: all 0.3s ease;
        overflow: hidden;
        position: relative;
    }
    
    .customer-slide:hover {
        transform: scale(1.05);
        background: rgba(255, 255, 255, 0.15);
        border-color: rgba(255, 255, 255, 0.3);
    }
    
    .customer-slide img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 85%;
        height: 85%;
        object-fit: contain;
        transition: all 0.3s ease;
        border-radius: 50%;
        background: rgba(255, 255, 255, 0.05);
        padding: 8px;
    }
    
    .customer-slide:hover img {
        transform: translate(-50%, -50%) scale(1.05);
        background: rgba(255, 255, 255, 0.1);
    }
    
    @keyframes slideAnimation {
        0% {
            transform: translateX(0);
        }
        100% {
            transform: translateX(-50%);
        }
    }
    
    .customers-slider:hover .slider-wrapper {
        animation-play-state: paused;
    }
    
    @media (max-width: 768px) {
        .section-header h2 {
            font-size: 2.5rem;
        }
        
        .section-header p {
            font-size: 1.4rem;
        }
        
        .customer-slide {
            margin: 0 25px;
            width: 120px;
            height: 120px;
        }
        
        .customer-slide img {
        }
    }
    
    @media (max-width: 480px) {
        .customer-slide {
            margin: 0 20px;
            width: 100px;
            height: 100px;
        }
        
        .customer-slide img {
        }
    }
</style>

<section class="customers-section">
    <div class="customers-container">
        <div class="section-header">
            <h2>{{ app()->getLocale() == 'ar' ? 'عملاؤنا' : 'Our Clients' }}</h2>
            <p>{{ app()->getLocale() == 'ar' ? 'نفتخر بالعمل مع أفضل الشركات والمؤسسات' : 'We are proud to work with the best companies and institutions' }}</p>
        </div>
        
        <div class="customers-slider">
            <div class="slider-wrapper">
                <!-- First set of clients -->
                @foreach($clients as $client)
                <div class="customer-slide">
                    @if($client->website_url)
                        <a href="{{ $client->website_url }}" target="_blank" rel="noopener noreferrer">
                            @if($client->image)
                                <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->name }}">
                            @else
                                <span class="text-white text-center text-sm font-medium">{{ $client->name }}</span>
                            @endif
                        </a>
                    @else
                        @if($client->image)
                            <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->name }}">
                        @else
                            <span class="text-white text-center text-sm font-medium">{{ $client->name }}</span>
                        @endif
                    @endif
                </div>
                @endforeach
                `
                <!-- Duplicate clients for continuous animation -->
                @foreach($clients as $client)
                <div class="customer-slide">
                    @if($client->website_url)
                        <a href="{{ $client->website_url }}" target="_blank" rel="noopener noreferrer">
                            @if($client->image)
                                <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->name }}">
                            @else
                                <span class="text-white text-center text-sm font-medium">{{ $client->name }}</span>
                            @endif
                        </a>
                    @else
                        @if($client->image)
                            <img src="{{ asset('storage/' . $client->image) }}" alt="{{ $client->name }}">
                        @else
                            <span class="text-white text-center text-sm font-medium">{{ $client->name }}</span>
                        @endif
                    @endif
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
