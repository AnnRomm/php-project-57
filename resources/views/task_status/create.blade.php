@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">{{ __('task_status.create.header') }}</h1>

        <div class="flex flex-col">
            {{ html()
                ->form('POST', route('task_statuses.store'))
                ->attribute('class', 'w-50')
                ->open() }}
            @include('task_status.form')
            {{ html()->form()->close() }}
        </div>
    </div>
@endsection

