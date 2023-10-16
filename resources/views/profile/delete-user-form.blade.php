<x-action-section>
    <x-slot name="title">
        {{ __('Eliminar Conta') }}
    </x-slot>

    <x-slot name="description">
        {{ __('Eliminna permanentemente a tua conta.') }}
    </x-slot>


    <x-slot name="content">

        <div class="max-w-xl text-sm text-gray-600">
            {{ __('Após a eliminação da sua conta, todos os seus recursos e dados serão eliminados permanentemente. Antes de eliminar a sua conta, por favor, descarregue quaisquer dados ou informações que deseje manter.') }}
        </div>
        <div class="mt-5">
            <x-danger-button wire:click="confirmUserDeletion" wire:loading.attr="disabled">
                {{ __('Eliminar conta') }}
            </x-danger-button>
        </div>

        <!-- Delete User Confirmation Modal -->
        <x-dialog-modal wire:model.live="confirmingUserDeletion">
            <x-slot name="title">
                {{ __('Eliminar conta') }}
            </x-slot>

            <x-slot name="content">
                {{ __('Tem a certeza de que deseja eliminar a sua conta? Uma vez que a sua conta seja eliminada, todos os seus recursos e dados serão eliminados permanentemente. Por favor, introduza a sua palavra-passe para confirmar que pretende eliminar permanentemente a sua conta.') }}

                <div class="mt-4" x-data="{}"
                    x-on:confirming-delete-user.window="setTimeout(() => $refs.password.focus(), 250)">
                    <x-input type="password" class="mt-1 block w-3/4" autocomplete="current-password"
                        placeholder="{{ __('Password') }}" x-ref="password" wire:model="password"
                        wire:keydown.enter="deleteUser" />

                    <x-input-error for="password" class="mt-2" />
                </div>
            </x-slot>

            <x-slot name="footer">
                <x-secondary-button wire:click="$toggle('confirmingUserDeletion')" wire:loading.attr="disabled">
                    {{ __('Cancelar') }}
                </x-secondary-button>

                <x-danger-button class="ml-3" wire:click="deleteUser" wire:loading.attr="disabled">
                    {{ __('Eliminar conta') }}
                </x-danger-button>
            </x-slot>
        </x-dialog-modal>
    </x-slot>
</x-action-section>
