@php
    $isEdit = isset($task) && $task->exists;
    $prefix = $isEdit ? 'task.edit' : 'task.create';
@endphp
@csrf

<div class="flex flex-col">

    {{-- Name --}}
        <div>
            {{ html()
                ->label(__($prefix . '.name'), 'name') }}
        </div>
        <div class="mt-2">
            {{ html()->text('name', old('name', $task->name ?? ''))
                ->id('name')
                ->class('rounded border-gray-300 w-1/3') }}
        </div>
        <x-error-message name="name" />

    {{-- Description --}}
    <div class="mt-2">
        {{ html()
            ->label(__($prefix . '.description'), 'description') }}
    </div>
    <div class="mt-2">
        {{ html()->textarea('description', old('description', $task->description ?? ''))
            ->id('description')
            ->class('rounded border-gray-300 w-1/3 h-32')
            ->attribute('cols', 50)
            ->attribute('rows', 10) }}
    </div>
    <x-error-message name="description" />

    {{-- Status --}}
    <div class="mt-2">
        {{ html()
            ->label(__($prefix . '.status_id'), 'status_id') }}
    </div>
    <div class="mt-2">
        {{ html()
            ->select('status_id', $taskStatuses, old('status_id', $task->status_id ?? ''))
            ->id('status_id')
            ->class('rounded border-gray-300 w-1/3')
            ->placeholder('----------') }}
    </div>
    <x-error-message name="status_id" />

    {{-- Assigned To --}}
    <div class="mt-2">
        {{ html()
            ->label(__($prefix . '.assigned_to_id'), 'assigned_to_id') }}
    </div>
    <div class="mt-2">
        {{ html()
            ->select('assigned_to_id', $users, old('assigned_to_id', $task->assigned_to_id ?? ''))
            ->id('assigned_to_id')
            ->class('rounded border-gray-300 w-1/3')
            ->placeholder('----------') }}
    </div>

    {{-- Labels --}}
    <div class="mt-2">
        {{ html()
            ->label(__($prefix . '.labels'), 'labels') }}
    </div>
    <div class="mt-2">
        {{ html()
            ->select('labels[]', $labels, old('labels', isset($task) ? $task->labels->pluck('id')->toArray() : []))
            ->id('labels')
            ->class('rounded border-gray-300 w-1/3 h-32')
            ->multiple() }}
    </div>

    {{-- Submit --}}
    <x-submit-button>
        {{ $buttonText ?? __($prefix . '.button') }}
    </x-submit-button>
</div>
