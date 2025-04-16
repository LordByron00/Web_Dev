<x-layout>
    <x-slot:title>
        Messages
    </x-slot:title>
    @foreach ($messages as $message)
        <div class="mb4">
            <h2 class="mb-1">Sender: {{ $message->sender_name }}</h2>
            <p>Message: {{ $message->message }}</p> 
        </div>
    @endforeach
</x-layout>
