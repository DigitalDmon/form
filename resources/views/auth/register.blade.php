{{-- x-layout COME FROM components -> layout.blade.php, INSIDE WE CAN ADD WHEREVER WE WANT --}}
<x-layout>

    <div class="form-container">

        <h2 class="text-center text-2xl font-bold">Formulario de Evento iTECH</h2>
        <p class="text-center text-base">Be part of us!</p>

        <form action="{{ route('auth.store') }}" method="POST">
            @csrf
            @include('auth.form_register')
            <button class="bg-blue-500 text-white font-bold my-2 py-1 rounded hover:bg-blue-700"
                    type="submit"
                    name="submitButton"
            >
                Send
            </button>
        </form>

    </div>

</x-layout>
