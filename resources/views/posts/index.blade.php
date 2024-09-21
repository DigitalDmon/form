{{-- x-layout COME FROM components -> layout.blade.php, INSIDE WE CAN ADD WHEREVER WE WANT --}}
<x-layout>

    <h1 class="welcome-text">Welcome !</h1>

    {{-- THIS IS ONLY AVAILABLE FOR THE AUTHENTICATED USERS --}}
    @auth
        <h1>Logged successfully</h1>
    @endauth

    @guest
        <h1>Guest user</h1>
    @endguest

</x-layout>
