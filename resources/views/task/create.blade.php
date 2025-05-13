@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">
            {{ __('task.create.header') }}
        </h1>

        <form method="POST" action="{{ route('tasks.store') }}" class="w-50">
            @csrf
            <div class="flex flex-col">
                <div>
                    <label for="name">{{ __('task.create.name') }}</label>
                </div>
                <div class="mt-2">
                    <input type="text" name="name" id="name" value="{{ old('name') }}" class="rounded border-gray-300 w-1/3">
                </div>
                @error('name')
                <div class="text-rose-600">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <label for="description">{{ __('task.create.description') }}</label>
                </div>
                <div class="mt-2">
                    <textarea name="description" id="description" cols="50" rows="10" class="rounded border-gray-300 w-1/3 h-32">{{ old('description') }}</textarea>
                </div>
                @error('description')
                <div class="text-rose-600">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <label for="status_id">{{ __('task.create.status_id') }}</label>
                </div>
                <div class="mt-2">
                    <select name="status_id" id="status_id" class="rounded border-gray-300 w-1/3">
                        <option value="">----------</option>
                        @foreach ($taskStatuses as $id => $name)
                            <option value="{{ $id }}" @selected(old('status_id') == $id)>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>
                @error('status_id')
                <div class="text-rose-600">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <label for="assigned_to_id">{{ __('task.create.assigned_to_id') }}</label>
                </div>
                <div class="mt-2">
                    <select name="assigned_to_id" id="assigned_to_id" class="rounded border-gray-300 w-1/3">
                        <option value="">----------</option>
                        @foreach ($users as $id => $name)
                            <option value="{{ $id }}" @selected(old('assigned_to_id') == $id)>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-2">
                    <label for="labels">{{ __('task.create.labels') }}</label>
                </div>
                <div class="mt-2">
                    <select name="labels[]" id="labels" multiple class="rounded border-gray-300 w-1/3 h-32">
                        @foreach ($labels as $id => $name)
                            <option value="{{ $id }}" @selected(collect(old('labels'))->contains($id))>{{ $name }}</option>
                        @endforeach
                    </select>
                </div>

                <div class="mt-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('task.create.button') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
