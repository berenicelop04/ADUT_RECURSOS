<x-guest-layout>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <!-- Name -->
        <div>
            <x-input-label for="name" :value="__('Name')" />
            <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>
         <!-- ape_paterno -->
         <div>
            <x-input-label for="ape_paterno" :value="__('Appellido Paterno')" />
            <x-text-input id="ape_paterno" class="block mt-1 w-full" type="text" ape_paterno="ape_paterno" :value="old('ape_paterno')" required autofocus autocomplete="ape_paterno" />
            <x-input-error :messages="$errors->get('ape_paterno')" class="mt-2" />
        </div>
         <!-- ape_paterno -->
         <div>
            <x-input-label for="ape_materno" :value="__('Appellido Materno')" />
            <x-text-input id="ape_materno" class="block mt-1 w-full" type="text" ape_materno="ape_materno" :value="old('ape_materno')" required autofocus autocomplete="ape_materno" />
            <x-input-error :messages="$errors->get('ape_materno')" class="mt-2" />
        </div>

        <!-- Género
    
         <div class="mt-4">
            <x-input-label for="gender" :value="__('gender')" />
            <select name="gender" id="gender" class="block mt-1 w-full" :value="old('gender')" required autofocus>
                    @foreach ($data as $item)
                        <option value="{{ $item->genderId}}">{{ $item->descripcion }}</option>
                    @endforeach
            <select>
            <x-input-error :messages="$errors->get('gender')" class="mt-2" />           
        </div>
        -->
        
       <!-- Tipo de Usuario -->
       <div class="mt-4">
            <x-input-label for="role" :value="__('Tipo de usuario')" />
            <select id="role" class="block mt-1 w-full" name="role" required>
            @foreach ($dataRol as $item)
                <option value="{{ $item->id_rol}}">{{ $item->rol }}</option>
            @endforeach
                
            </select>
            <x-input-error :messages="$errors->get('role')" class="mt-2" />
        </div>

        <!-- Campos extras -->
        <div class="mt-4" id="additional_fields" style="display: none;">

            <!-- Carrera -->
            <div id="carrera_field">
                <x-input-label for="carrera" :value="__('Carrera')" />
                <select id="carrera" class="block mt-1 w-full" name="carrera" required>
                        @foreach ($dataCarrera as $item)
                            <option value="{{ $item->id_carrera}}">{{ $item->carrera }}</option>
                        @endforeach
                </select>
                <x-input-error :messages="$errors->get('carrera')" class="mt-2" />
            </div>

        </div>

        <!-- Carrera 
        <div class="mt-4">
            <x-input-label for="carrera" :value="__('carrera')" />
            <select name="carrera" id="carrera" class="block mt-1 w-full" :value="old('carrera')" required autofocus>
                    @foreach ($dataCarrera as $item)
                        <option value="{{ $item->id_carrera}}">{{ $item->carrera }}</option>
                    @endforeach
            <select>
            <x-input-error :messages="$errors->get('carrera')" class="mt-2" />           
        </div>
        -->
        
        <!-- Email Address -->
        <div class="mt-4">
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required autocomplete="username" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-4">
            <x-input-label for="password" :value="__('Password')" />

            <x-text-input id="password" class="block mt-1 w-full"
                            type="password"
                            name="password"
                            required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-4">
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

            <x-text-input id="password_confirmation" class="block mt-1 w-full"
                            type="password"
                            name="password_confirmation" required autocomplete="new-password" />

            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="flex items-center justify-end mt-4">
            <a class="underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800" href="{{ route('login') }}">
                {{ __('Already registered?') }}
            </a>

            <x-primary-button class="ms-4">
                {{ __('Registrase') }}
            </x-primary-button>
        </div>
    </form>
    <!-- JS -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            function showAdditionalFields() {
                var role = document.getElementById('role').value;

                //Mostrar el campo adicional correspondiente al tipo de usuario seleccionado
                if (role === '1') {
                    document.getElementById('carrera_field').style.display = 'block';

                } else if (role === '3') {
                    document.getElementById('carrera_field').style.display = 'none'; //Ocultar otro campo
                } else {
                    document.getElementById('carrera_field').style.display = 'none';
                }

                if (role === '1' || role === '3') {
                    document.getElementById('additional_fields').style.display = 'block';
                } else {
                    document.getElementById('additional_fields').style.display = 'none';
                }
            }

            //Mostrar los campos adicionales al cargar la página si hay un valor seleccionado por defecto
            showAdditionalFields();

            //Agregar el evento change al campo de selección de rol
            document.getElementById('role').addEventListener('change', function() {
                showAdditionalFields();
            });
        });
    </script>
</x-guest-layout>
