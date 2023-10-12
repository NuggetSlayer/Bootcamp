@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'dashboard__form__inpu rounded-md shadow-sm']) !!}>
