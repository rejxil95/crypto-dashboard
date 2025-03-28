<div>
    @if ($crypto)
        <h2 class="text-xl font-bold">{{ $crypto['name'] }}</h2>
        <p>Symbol: {{ strtoupper($crypto['symbol']) }}</p>
        <p>Current Price: ${{ number_format($crypto['market_data']['current_price']['usd'], 2) }}</p>
    @else
        <p>Select a cryptocurrency to see details.</p>
    @endif
</div> <!-- Single root element wrapping everything -->
