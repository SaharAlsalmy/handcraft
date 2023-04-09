@props([
    'type'=>'text',
    'name',
    'value'=>'',


])

<div class="form-group">
    <input type="{{ $type }}"
           name="{{ $name }}"
           value="{{ old($name,$value) }}"
           {{-- attribute is a varible not define in components  --}}
           {{ $attributes->class([
             'form-control',
             'is-invalid' => $errors->has($name)

           ]) }}
>

@error($name)
<div class="text-danger">
    {{ $message }}
</div>
@enderror


</div>
