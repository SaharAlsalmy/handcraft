@props([
    'name',
    'value'=>'',
    'placeholder'=>"Enter ....",
])



<textarea
name="{{ $name }}"
{{ $attributes->class([
    'form-control',
    'is-invalid' => $errors->has($name)
]) }}
placeholder="{{ $placeholder }}"
>{{ old($name, $value) }}
</textarea>

@error($name)
<div class="text-danger">
    {{ $message }}
</div>
@enderror

