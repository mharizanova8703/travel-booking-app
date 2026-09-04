document.addEventListener('DOMContentLoaded', () => {
    document.querySelectorAll('[wire\\:click^="toggleWishlist"]').forEach((button) => {
        button.addEventListener('click', () => {
            const action = button.getAttribute('wire:click');
            const destination = action.match(/'([^']+)'/)?.[1] ?? 'Destination';
            const icon = button.querySelector('svg');
            const saved = !button.dataset.saved;

            if (saved) {
                button.dataset.saved = 'true';
                icon?.classList.add('fill-rose-500', 'text-rose-500');
            } else {
                delete button.dataset.saved;
                icon?.classList.remove('fill-rose-500', 'text-rose-500');
            }

            window.dispatchEvent(new CustomEvent('toast', {
                detail: {
                    message: `${destination} ${saved ? 'saved to' : 'removed from'} your wishlist`,
                    type: saved ? 'success' : 'neutral',
                },
            }));
        });
    });
});
