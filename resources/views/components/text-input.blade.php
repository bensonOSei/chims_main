@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-none focus:border-none focus:ring-0 rounded-md p-2', 'placeholder' => '']) !!}>
