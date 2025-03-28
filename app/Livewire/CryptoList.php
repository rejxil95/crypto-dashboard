<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;


class CryptoList extends Component
{
    // Property to store the fetched cryptocurrency data
    public $cryptos = [];
    // The `mount` method runs automatically when the component is initialized
    public function mount()
    {
        // Make an HTTP GET request to the CoinGecko API to fetch cryptocurrency market data
        $response = Http::get('https://api.coingecko.com/api/v3/coins/markets', [
            'vs_currency' => 'usd',
            'order' => 'market_cap_desc',
            'per_page' => 100,
            'page' => 1,
            'sparkline' => false,
        ]);

        // Convert the response to an array and store it in the `$cryptos` property
        $this->cryptos = $response->json();
    }

    // The `render` method returns the Blade view that should be displayed
    public function render()
    {
        return view('livewire.crypto-list'); // Load the corresponding Livewire Blade component
    }

    // public function render()
    // {
    //     return view('livewire.crypto-list');
    // }
}
