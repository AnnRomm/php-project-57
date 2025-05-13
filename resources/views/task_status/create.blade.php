@extends('layouts.app')

@section('content')
            <div class="grid col-span-full">
                <h1 class="mb-5">{{ __('task_status.create.header') }}</h1>

                <div class="flex flex-col">
                    <form method="POST" action="{{ route('task_statuses.store') }}">
                        @csrf
                        <div>
                            <label for="name">{{ __('task_status.create.name') }}</label>
                        </div>

                        <div class="mt-2">
                        <input type="text" name="name" class="rounded border-gray-300 w-1/3">
                        </div>
                        @error('name')
                        <div class="text-rose-600">{{ $message }}</div>
                        @enderror
                        <div class="mt-2">
                            <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                {{ __('task_status.create.button') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
@endsection
