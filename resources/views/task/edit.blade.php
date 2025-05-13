@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">
            {{ __('task.edit.header') }}
        </h1>

        <form action="{{ route('tasks.update', $task) }}" method="POST" class="w-50">
            @csrf
            @method('PATCH')

            <div class="flex flex-col">
                <div>
                    <label for="name">{{ __('task.edit.name') }}</label>
                </div>
                <div class="mt-2">
                    <input type="text" name="name" id="name" value="{{ old('name', $task->name) }}" class="rounded border-gray-300 w-1/3">
                </div>
                @error('name')
                <div class="text-rose-600">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <label for="description">{{ __('task.edit.description') }}</label>
                </div>
                <div class="mt-2">
                    <textarea name="description" id="description" class="rounded border-gray-300 w-1/3 h-32" cols="50" rows="10">{{ old('description', $task->description) }}</textarea>
                </div>
                @error('description')
                <div class="text-rose-600">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <label for="status_id">{{ __('task.edit.status_id') }}</label>
                </div>
                <div class="mt-2">
                    <select name="status_id" id="status_id" class="rounded border-gray-300 w-1/3">
                        <option value="" disabled selected>----------</option>
                        @foreach ($taskStatuses as $id => $status)
                            <option value="{{ $id }}" {{ old('status_id', $task->status_id) == $id ? 'selected' : '' }}>{{ $status }}</option>
                        @endforeach
                    </select>
                </div>
                @error('status_id')
                <div class="text-rose-600">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <label for="assigned_to_id">{{ __('task.edit.assigned_to_id') }}</label>
                </div>
                <div class="mt-2">
                    <select name="assigned_to_id" id="assigned_to_id" class="rounded border-gray-300 w-1/3">
                        <option value="" disabled selected>----------</option>
                        @foreach ($users as $id => $user)
                            <option value="{{ $id }}" {{ old('assigned_to_id', $task->assigned_to_id) == $id ? 'selected' : '' }}>{{ $user }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-2">
                    <label for="labels">{{ __('task.edit.labels') }}</label>
                </div>
                <div class="mt-2">
                    <select name="labels[]" id="labels" class="rounded border-gray-300 w-1/3 h-32" multiple>
                        @foreach ($labels as $id => $label)
                            <option value="{{ $id }}" {{ in_array($id, old('labels', $task->labels->pluck('id')->toArray())) ? 'selected' : '' }}>{{ $label }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('task.edit.button') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
