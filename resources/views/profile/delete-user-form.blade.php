<x-action-section>
    <x-slot name="title">
        <span class="dark:text-bone-600">Usuwanie</span>
    </x-slot>

    <x-slot name="description">
        <span class="dark:text-stone-50">Pernamentnie usuń konto</span>
    </x-slot>

    <x-slot name="content">
        <div class="max-w-xl text-sm text-gray-600">
            Kiedy usuwasz konto wsztstkie twoje informacje, zamówienia zostaną permanentnie usunięte. Zanim usuniesz konto pobierz wszystkie potrzebne dane które chcesz zachować
        </div>

        <div class="mt-5">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
            <i class="fa-solid fa-trash mr-2"></i>Usuń konto
            </x-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-dialog-modal wire:model.live="confirmingUserDeletion">
            <x-slot name="title">
                Usuń konto
            </x-slot>

            <x-slot name="content">
                Czy na pewno chcesz usunąć konto? W momenicie usuwania konta twoje dane zostaną permanentnie usunięte. Proszę wpisz hasło jeśli na pewno chcesz usunąć konto

                <div class="mt-4" x-data="{}" x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="mt-1 block w-3/4" autocomplete="current-password" placeholder="{{ __('Password') }}" x-ref="password" wire:model="password" wire:keydown.enter="deleteUser" />

                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    Anuluj
                </x-secondary-button>

                <x-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    Usuń konto
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>