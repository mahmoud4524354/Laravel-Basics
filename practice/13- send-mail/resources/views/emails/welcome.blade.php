<x-mail::message>
    # Introduction
    <x-mail::table>
        | Laravel       | Table         | Example  |
        | ------------- |:-------------:| --------:|
        | Col 2 is      | Centered      | $10      |
        | Col 3 is      | Right-Aligned | $20      |
    </x-mail::table>
    This is the body of your message. Here you can provide more details or instructions.

    <x-mail::button :url="'https://example.com'">
        Click Here
    </x-mail::button>

    Thanks,<br>
    {{ config('app.name') }}
</x-mail::message>
