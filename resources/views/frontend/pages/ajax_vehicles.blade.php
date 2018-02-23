@foreach($products as $product)
<option value="{{ $product->slug }}">{{ $product->name }}</option>
@endforeach