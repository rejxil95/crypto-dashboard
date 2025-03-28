<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\Http;

class CryptoDetail extends Component
{
    // Property to store the details of a selected cryptocurrency
    public $crypto;

    // Livewire event listener that listens for the 'showCrypto' event
    protected $listeners = ['showCrypto'];

    /**
     * Fetches cryptocurrency details when the 'showCrypto' event is triggered.
     *
     * @param string $cryptoId The ID of the cryptocurrency (e.g., 'bitcoin', 'ethereum').
     */

    public function showCrypto($cryptoId)
    {
        // Make an API request to get detailed information about the selected cryptocurrency
        $response = Http::get("https://api.coingecko.com/api/v3/coins/{$cryptoId}");

        // Convert the API response to an array and store it in the `$crypto` property
        $this->crypto = $response->json(); // Store the response in $crypto
    }

    /**
     * Renders the component's Blade view.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        // Debugging to check if the component is being rendered
        // dd($this->crypto);  // This should output null if no crypto has been selected yet

        return view('livewire.crypto-detail'); // Load the Livewire Blade view for displaying details
    }
}
