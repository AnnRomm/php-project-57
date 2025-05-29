@php
    $isEdit = isset($label) && $label->exists;
    $prefix = $isEdit ? 'label.edit' : 'label.create';
@endphp
@csrf
<div class="flex flex-col">

    {{-- Name --}}
    <div>
        {{ html()
        ->label(__($prefix . '.name'), 'name')
        }}
    </div>
    <div class="mt-2">
        {{ html()
            ->text('name', old('name', $label->name ?? ''))
            ->id('name')
            ->value(old('name', $label->name ?? ''))
            ->class('rounded border-gray-300 w-1/3') }}
    </div>
    <x-error-message name="name" />

    {{-- Description --}}
    <div class="mt-2">
        {{ html()
            ->label(__($prefix . '.description'), 'description')
        }}
    </div>
    <div class="mt-2">
        {{ html()
            ->textarea('description', old('description', $label->description ?? ''))
            ->id('description')
            ->class('rounded border-gray-300 w-1/3 h-32')
            ->attribute('cols', 50)
            ->attribute('rows', 10) }}
    </div>
    <x-error-message name="description" />

    {{-- Submit --}}
    <x-submit-button>
        {{ $buttonText ?? __($prefix . '.button') }}
    </x-submit-button>
</div>
