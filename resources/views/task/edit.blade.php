@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">
            {{ __('task.edit.header') }}
        </h1>

        {{ html()
            ->form('PATCH', route('tasks.update', $task))
            ->attribute('class', 'w-50')
            ->open() }}
        @include('task.form')
        {{ html()->form()->close() }}
    </div>
@endsection
