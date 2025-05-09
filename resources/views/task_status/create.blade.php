@extends('layouts.app')

@section('content')
    <section class="bg-white dark:bg-gray-900">
        <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
            <div class="grid col-span-full">
                <h1 class="mb-5">Создать статус</h1>

                <form method="POST" action="{{ route('task_statuses.store') }}">
                    @csrf
                    <label for="name">{{ 'Имя' }}</label>
                    <input type="text" name="name" class="rounded border-gray-300 w-1/3">
                    @error('name')
                    <div class="text-rose-600">{{ $message }}</div>
                    @enderror
                    <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                        {{ __('Создать') }}
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection
