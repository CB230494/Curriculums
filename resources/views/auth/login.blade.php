<x-guest-layout>

    <!-- Título de la página -->
    <div class="text-center">
        <h1 class="text-3xl font-bold text-white mt-4">Generador de Currículums</h1>
    </div>

    <!-- Estado de sesión -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <!-- Dirección de correo electrónico -->
        <div>
            <x-input-label for="email" :value="__('Correo electrónico')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Contraseña -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Contraseña')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="current-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Recordarme -->
        <div class="recordarme-container">
            <label for="remember_me" class="recordarme-label">
                <input id="remember_me" type="checkbox" class="recordarme-checkbox" name="remember">
                <span class="recordarme-text">{{ __('Recordarme') }}</span>
            </label>
        </div>

        <!-- Enlace para recuperar contraseña -->
        <div class="flex items-center justify-end mt-4">
            @if (Route::has('password.request'))
                <a class="recuperar-password-link" href="{{ route('password.request') }}">
                    {{ __('¿Olvidaste tu contraseña?') }}
                </a>
            @endif
        </div>

        <style>
            /* Estilo personalizado */
            .recordarme-container {
                margin-top: 1rem;
            }

            .recordarme-label {
                display: inline-flex;
                align-items: center;
            }

            .recordarme-checkbox {
                border-radius: 0.375rem; /* border-radius similar al original */
                background-color: #1a202c; /* Similar a dark:bg-gray-900 */
                border: 1px solid #4b5563; /* border-gray-300 */
                color: #6366f1; /* text-indigo-600 */
                box-shadow: 0 0 0 1px rgba(156, 163, 175, 0.1); /* shadow-sm */
                transition: border-color 0.2s ease, box-shadow 0.2s ease;
            }

            .recordarme-checkbox:focus {
                border-color: #4c51bf; /* focus:ring-indigo-500 */
                box-shadow: 0 0 0 2px rgba(99, 102, 241, 0.2); /* focus:ring-indigo-500 */
            }

            .recordarme-text {
                margin-left: 0.5rem;
                font-size: 0.875rem;
                color: #d1d5db; /* dark:text-gray-400 */
            }

            .recuperar-password-link {
                text-decoration: underline;
                font-size: 0.875rem;
                color: #4b5563; /* dark:text-gray-400 */
                transition: color 0.3s ease;
            }

            .recuperar-password-link:hover {
                color: #1a202c; /* dark:hover:text-gray-100 */
            }
        </style>

        <!-- Botón de inicio de sesión -->
        <x-primary-button class="ms-3">
            {{ __('Iniciar sesión') }}
        </x-primary-button>
    </form>
</x-guest-layout>
