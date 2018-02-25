@php
$vehicle= DB::table('vehicles')->where('slug', $product->parent)->first();
@endphp

<img style="display:inline-block" src="{{ $product->image }}" alt="{{ $product->name }}" class="img-responsive">
<a class="text-center text-uppercase downbtn" style="display:block" href="{{ $vehicle->url }}"> Download catalog tại đây</a>