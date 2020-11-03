@foreach
($products as $product)
<p> {{ $product->name }} </p>
<p> {{ $product->price}} </p>
<p> {{ $product->description}} </p>
@endforeach