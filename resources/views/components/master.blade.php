@props(['type'])
<x-header :typ2="$type" />
<x-sidbare />
{{ $slot }}
<x-footer />
