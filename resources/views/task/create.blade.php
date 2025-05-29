@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">
            {{ __('task.create.header') }}
        </h1>

        {{ html()
            ->form('POST', route('tasks.store'))
            ->attribute('class', 'w-50')
            ->open() }}
        @include('task.form')
        {{ html()->form()->close() }}
    </div>
@endsection
