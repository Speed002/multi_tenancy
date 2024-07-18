<x-mail::message>
# Your magic login link

{{-- The body of your message. --}}

<x-mail::button :url="$url">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
