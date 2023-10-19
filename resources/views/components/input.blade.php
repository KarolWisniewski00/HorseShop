@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-gray-300 focus:border-bone-500 focus:ring-bone-500 rounded-md shadow-sm']) !!}>
