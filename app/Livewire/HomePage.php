<?php

namespace App\Livewire;

use Livewire\Attributes\Layout;
use Livewire\Component;

#[Layout('components.layouts.app', ['title' => 'Curated stays, unforgettable journeys'])]
class HomePage extends Component
{
    public array $wishlist = [];

    public function toggleWishlist(string $destination): void
    {
        if (in_array($destination, $this->wishlist, true)) {
            $this->wishlist = array_values(array_diff($this->wishlist, [$destination]));
            $this->dispatch('toast', message: "$destination removed from your wishlist", type: 'neutral');

            return;
        }

        $this->wishlist[] = $destination;
        $this->dispatch('toast', message: "$destination saved to your wishlist", type: 'success');
    }

    public function render()
    {
        return view('livewire.home-page', [
            'destinations' => [
                ['Amalfi Coast', 'Italy', 'Coastal', 289, '4.96', 'https://images.unsplash.com/photo-1533104816931-20fa691ff6ca?auto=format&fit=crop&w=900&q=85', 'Sunlit villages & secret coves'],
                ['Kyoto', 'Japan', 'Culture', 214, '4.92', 'https://images.unsplash.com/photo-1493976040374-85c8e12f0c0e?auto=format&fit=crop&w=900&q=85', 'Temples, tea & timeless streets'],
                ['Banff', 'Canada', 'Nature', 248, '4.89', 'https://images.unsplash.com/photo-1501785888041-af3ef285b470?auto=format&fit=crop&w=900&q=85', 'Wild peaks & turquoise lakes'],
                ['Marrakech', 'Morocco', 'Culture', 176, '4.94', 'https://images.unsplash.com/photo-1597212618440-806262de4f6b?auto=format&fit=crop&w=900&q=85', 'Riads, souks & desert skies'],
                ['Santorini', 'Greece', 'Coastal', 315, '4.91', 'https://images.unsplash.com/photo-1570077188670-e3a8d69ac5ff?auto=format&fit=crop&w=900&q=85', 'Caldera views & slow sunsets'],
                ['Tulum', 'Mexico', 'Tropical', 195, '4.87', 'https://images.unsplash.com/photo-1507525428034-b723cf961d3e?auto=format&fit=crop&w=900&q=85', 'Jungle calm & Caribbean blue'],
            ],
        ]);
    }
}
