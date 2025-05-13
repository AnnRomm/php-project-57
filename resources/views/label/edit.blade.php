@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">
            {{ __('label.edit.header') }}
        </h1>

        <form action="{{ route('labels.update', $label) }}" method="POST" class="w-50">
            @csrf
            @method('PATCH')

            <div class="flex flex-col">
                <div>
                    <label for="name">{{ __('label.edit.name') }}</label>
                </div>
                <div class="mt-2">
                    <input type="text" name="name" id="name" value="{{ old('name', $label->name) }}" class="rounded border-gray-300 w-1/3">
                </div>
                @error('name')
                <div class="text-rose-600">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <label for="description">{{ __('label.edit.description') }}</label>
                </div>
                <div class="mt-2">
                    <textarea name="description" id="description" class="rounded border-gray-300 w-1/3 h-32" cols="50" rows="10">{{ old('description', $label->description) }}</textarea>
                </div>
                @error('description')
                <div class="text-rose-600">{{ $message }}</div>
                @enderror

                <div class="mt-2">
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('label.edit.button') }}
                    </button>
                </div>
            </div>
        </form>
    </div>
@endsection
