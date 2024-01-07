<x-form-section submit="updatePassword">
    <x-slot name="title">
        <span class="dark:text-bone-600">Zaktualizuj hasło</span>
    </x-slot>

    <x-slot name="description">
        <span class="dark:text-stone-50">Upewnij się że używasz długiego i bezpiecznego hasła</span>
    </x-slot>

    <x-slot name="form">
        <div class="col-span-6 sm:col-span-4">
            <x-label for="current_password" value="Aktualne hasło" />
            <x-input id="current_password" type="password" class="mt-1 block w-full" wire:model="state.current_password" autocomplete="current-password" />
            <x-input-error for="current_password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password" value="Nowe hasło" />
            <x-input id="password" type="password" class="mt-1 block w-full" wire:model="state.password" autocomplete="new-password" />
            <x-input-error for="password" class="mt-2" />
        </div>

        <div class="col-span-6 sm:col-span-4">
            <x-label for="password_confirmation" value="Powtórz hasło" />
            <x-input id="password_confirmation" type="password" class="mt-1 block w-full" wire:model="state.password_confirmation" autocomplete="new-password" />
            <x-input-error for="password_confirmation" class="mt-2" />
        </div>
    </x-slot>

    <x-slot name="actions">
        <x-action-message class="mr-3" on="saved">
            <i class="fa-solid fa-floppy-disk mr-2"></i>Zapisano
        </x-action-message>

        <x-button>
            <i class="fa-regular fa-floppy-disk mr-2"></i>Zapisz
        </x-button>
    </x-slot>
</x-form-section>