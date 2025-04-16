<x-layout>
    <x-slot:title>
        Contact Us
    </x-slot:title>
    <form action="/contact" method="POST" novalidate>
        @csrf

        @if ($errors->any()) 
            <h2>Error</h2>
        @endif

        <div>
            <label for="name">Your name</label>
            <input type="text" name="sender_name" id="name">
        </div>
        <div>
            <label for="email">Your Email</label>
            <input type="email" name="sender_email" id="email" required>
        </div>
        <div>
            <label for="message">Your message</label>
            <input type="text" name="message" id="message">
        </div>
        <div>
            <input type="submit" value="Send">
        </div>
    </form>
</x-layout>