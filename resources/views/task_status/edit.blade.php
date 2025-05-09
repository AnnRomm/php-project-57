@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">
            {{ __('task_status.edit.header') }}
        </h1>

        <form method="POST" action="{{ route('task_statuses.update', $taskStatus) }}" class="w-50">
            @csrf
            @method('PATCH')

            <div class="flex flex-col">
                <div>
                    <label for="name">{{ __('task_status.edit.name') }}</label>
                </div>
                <div class="mt-2">
                    <input
                        type="text"
                        id="name"
                        name="name"
                        value="{{ old('name', $taskStatus->name) }}"
                        class="rounded border-gray-300 w-1/3"
                    >
                </div>

                @error('name')
                <div class="text-rose-600">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <button
                        type="submit"
                        class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    >
                        {{ __('task_status.edit.button') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
