<div class="container mx-auto p-6">
    <h1 class="text-3xl font-bold mb-4">Top 100 Cryptocurrencies</h1>

    <table class="min-w-full bg-white border border-gray-300">
        <thead>
            <tr class="w-full bg-gray-200 text-gray-600 uppercase text-sm leading-normal">
                <th class="py-3 px-6 text-left">#</th>
                <th class="py-3 px-6 text-left">Name</th>
                <th class="py-3 px-6 text-left">Price</th>
                <th class="py-3 px-6 text-left">Market Cap</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cryptos as $index => $crypto)
            <tr class="border-b border-gray-300">
                <td class="py-3 px-6">{{ $index + 1 }}</td>
                <td class="py-3 px-6">
                    <!-- <a href="#" wire:click.prevent="$dispatch('showCrypto', '{{ $crypto['id'] }}')" class="text-blue-500 hover:underline">
                        <img src="{{ $crypto['image'] }}" alt="{{ $crypto['name'] }}" class="inline-block h-6 w-6 mr-2">
                        {{ $crypto['name'] }}
                    </a> -->
                    <a href="#" wire:click.prevent="$emit('showCrypto', '{{ $crypto['id'] }}')" class="text-blue-500 hover:underline">
                        <img src="{{ $crypto['image'] }}" alt="{{ $crypto['name'] }}" class="inline-block h-6 w-6 mr-2">
                        {{ $crypto['name'] }}
                    </a>

                </td>
                <td class="py-3 px-6">${{ number_format($crypto['current_price'], 2) }}</td>
                <td class="py-3 px-6">${{ number_format($crypto['market_cap']) }}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
