@php
    $isEdit = isset($taskStatus) && $taskStatus->exists;
    $prefix = $isEdit ? 'task_status.edit' : 'task_status.create';
@endphp
@csrf

<div class="flex flex-col">

    {{-- Name --}}
    <div>
        {{ html()
        ->label(__($prefix . '.name'), 'name')
    }}
    </div>

    {{-- Description --}}
    <div class="mt-2">
    {{ html()
        ->text('name', old('name', $taskStatus->name ?? ''))
        ->id('name')
        ->value(old('name', $taskStatus->name ?? ''))
        ->class('rounded border-gray-300 w-1/3') }}
    </div>
    <x-error-message name="name" />

    {{-- Submit --}}
    <x-submit-button>
        {{ $buttonText ?? __($prefix . '.button') }}
    </x-submit-button>
</div>
