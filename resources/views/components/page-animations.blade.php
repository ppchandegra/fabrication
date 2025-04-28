@push('styles')
<style>
    .page-enter {
        opacity: 0;
        transform: translateY(20px);
    }

    .page-enter-active {
        opacity: 1;
        transform: translateY(0);
        transition: opacity 0.5s ease, transform 0.5s ease;
    }

    .fade-in {
        animation: fadeIn 1s ease-in;
    }

    .slide-up {
        animation: slideUp 0.8s ease-out;
    }

    .scale-in {
        animation: scaleIn 0.6s ease-out;
    }

    .rotate-in {
        animation: rotateIn 0.8s ease-out;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @keyframes slideUp {
        from { 
            opacity: 0;
            transform: translateY(50px);
        }
        to { 
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes scaleIn {
        from { 
            opacity: 0;
            transform: scale(0.9);
        }
        to { 
            opacity: 1;
            transform: scale(1);
        }
    }

    @keyframes rotateIn {
        from { 
            opacity: 0;
            transform: rotate(-10deg) scale(0.9);
        }
        to { 
            opacity: 1;
            transform: rotate(0) scale(1);
        }
    }

    .hover-3d {
        transition: transform 0.3s ease;
        transform-style: preserve-3d;
    }

    .hover-3d:hover {
        transform: translateZ(20px) rotateX(5deg) rotateY(5deg);
    }

    .floating {
        animation: floating 3s ease-in-out infinite;
    }

    @keyframes floating {
        0% { transform: translateY(0px); }
        50% { transform: translateY(-10px); }
        100% { transform: translateY(0px); }
    }
</style>
@endpush 