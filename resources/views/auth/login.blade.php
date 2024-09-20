{{-- x-layout COME FROM components -> layout.blade.php, INSIDE WE CAN ADD WHEREVER WE WANT --}}
<x-layout>

    <div class="form-login-container">

        <h2 class="text-center text-2xl font-bold">Login</h2>
        <p class="text-center text-base">We are happy to see you again!</p>

        <form action="" method="POST">
            @csrf
            @include('auth.form_login')
            <Button type="submit" class="bg-amber-300 p-1 my-2 rounded-2xl">Iniciar sesión</Button>
        </form>

        <div class="flex items-center justify-between">
            <hr class="w-full border-gray-300" />
            <span class="px-2 text-gray-500">O</span>
            <hr class="w-full border-gray-300" />
        </div>

        <div class="flex space-x-4">
            <Button class="w-full">GitHub</Button>
            <Button class="w-full">Twitter</Button>
            <Button class="w-full">Google</Button>
        </div>
        <p class="text-center text-sm text-gray-600">
            ¿No tienes una cuenta?
            <a href="{{ route('auth.register') }}" class="font-medium text-blue-600 hover:underline">
                Regístrate
            </a>
        </p>

    </div>

</x-layout>
