<x-layout.app>
        <x-container>
            <x-card title="Register">
                <x-form :route="route('register')" post id="register-form">
                    <x-input name="name" placeholder="Name" value="{{ old('name') }}" />
                    <x-input name="email" placeholder="Email" value="{{ old('email') }}" />
                    <x-input name="email_confirmation" placeholder="Email Confirmation" />
                    <x-input name="password" type="password" placeholder="Senha" />
                </x-form>
                <x-slot:actions>
                    <x-button form="register-form">Registrar</x-button>
                </x-slot:actions>
            </x-card>
        </x-container>
    </x-layout.app>
