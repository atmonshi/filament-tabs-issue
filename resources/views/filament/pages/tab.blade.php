<x-filament-panels::page>
    <div>
        <form wire:submit="create">
            {{ $this->form }}

            <div class="text-center my-4">
                <x-filament::button type="submit">
                    Submit
                </x-filament::button>
            </div>
        </form>

        <x-filament-actions::modals />
    </div>
</x-filament-panels::page>
