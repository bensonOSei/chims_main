@php
$class = 'input-field'
@endphp
<div {{ $attributes->merge(['class' => $class])}} >
    {{ $slot }}
</div>