<div class="card">
    <img src="{{ $imagePath }}" alt="{{ $imageAlt }}" class="card-img-top">
    <div class="card-body">
        <h4>{{ $title }}</h4>
        <div class="details">
            {{ $details }}
        </div>
        <a href="{{ $buttonLink }}" class="btn btn-lg btn-whatsapp" rel="noopener noreferrer">
            {{ $buttonText }}
        </a>
    </div>
</div>
