<html>
<body>
<ul>
    @foreach($products as $product)
        <li> {{ $product->name }} (£{{ number_format($product->price, 2) }})
            <a href="{{ route('scan', $product->product_code) }}">Scan</a>
        </li>
    @endforeach

</ul>
</body>
<b>Total: ${{ number_format($total_price, 2)}}</b>
</html>
