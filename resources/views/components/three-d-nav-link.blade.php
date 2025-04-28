@props(['href', 'active'])

@php
$classes = ($active ?? false)
            ? 'three-d-nav-link active'
            : 'three-d-nav-link';
@endphp

<a href="{{ $href }}" {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>

<style>
    .three-d-nav-link {
        position: relative;
        display: inline-block;
        padding: 0.5rem 1rem;
        font-weight: 500;
        color: #6B7280;
        transition: all 0.3s ease;
        transform-style: preserve-3d;
    }

    .three-d-nav-link:hover {
        color: #4F46E5;
        transform: translateY(-2px) rotateX(10deg);
    }

    .three-d-nav-link.active {
        color: #4F46E5;
        transform: translateY(-2px) rotateX(10deg);
    }

    .three-d-nav-link::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 100%;
        height: 2px;
        background-color: #4F46E5;
        transform: scaleX(0);
        transform-origin: right;
        transition: transform 0.3s ease;
    }

    .three-d-nav-link:hover::after,
    .three-d-nav-link.active::after {
        transform: scaleX(1);
        transform-origin: left;
    }
</style> 