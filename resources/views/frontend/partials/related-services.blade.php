<!-- Sub Services Section -->
<section class="sub-services py-5">
    <div class="container">
        <div class="section-header text-center mb-5">
            <h2 class="section-title">Sub Services</h2>
            <div class="divider">
                <span class="dot"></span>
            </div>
        </div>
        
        @if($service->subServices->count() > 0)
        <div class="row">
            @foreach($service->subServices as $subService)
            <div class="col-lg-3 col-md-6 mb-4">
                <div class="product-card">
                    <div class="product-image">
                        <img src="{{ Storage::url($subService->image) }}" alt="{{ $subService->title }}">
                    </div>
                    <div class="product-info">
                        <h3>{{ $subService->title }}</h3>
                        <a href="{{ route('frontend.services.show', $subService->id) }}" class="view-more-btn">View more →</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
        @else
        <div class="text-center text-muted">
            <p>No sub-services available for this service.</p>
        </div>
        @endif
    </div>
</section>

<style>
/* Sub Services Section Styles */
.sub-services {
    padding: 4rem 0;
    background-color: #fff;
}

.section-header {
    margin-bottom: 3rem;
}

.section-title {
    color: #ff0000;
    font-size: 2.5rem;
    font-weight: 700;
    margin-bottom: 1rem;
    text-align: center;
}

.divider {
    display: flex;
    justify-content: center;
    align-items: center;
    margin-top: 15px;
}

.divider .dot {
    width: 12px;
    height: 12px;
    background-color: #ff0000;
    border-radius: 50%;
    position: relative;
}

.divider .dot::before,
.divider .dot::after {
    content: '';
    position: absolute;
    height: 2px;
    background-color: #ff0000;
    width: 50px;
    top: 50%;
    transform: translateY(-50%);
}

.divider .dot::before {
    right: 20px;
}

.divider .dot::after {
    left: 20px;
}

/* Product Card Styles */
.product-card {
    background: #fff;
    border: 1px solid #e0e0e0;
    transition: all 0.3s ease;
    height: 100%;
}

.product-card:hover {
    box-shadow: 0 5px 15px rgba(0,0,0,0.1);
}

.product-image {
    position: relative;
    width: 100%;
    height: 250px;
    overflow: hidden;
}

.product-image img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    transition: transform 0.3s ease;
}

.product-card:hover .product-image img {
    transform: scale(1.05);
}

.product-info {
    padding: 1.5rem;
    text-align: center;
}

.product-info h3 {
    font-size: 1.25rem;
    color: #333;
    margin-bottom: 1rem;
    font-weight: 600;
}

.view-more-btn {
    display: inline-block;
    padding: 8px 20px;
    background-color: #000;
    color: #fff;
    text-decoration: none;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.view-more-btn:hover {
    background-color: #ff0000;
    color: #fff;
}

@media (max-width: 991px) {
    .section-title {
        font-size: 2rem;
    }
}

@media (max-width: 767px) {
    .product-image {
        height: 200px;
    }
}
</style>
