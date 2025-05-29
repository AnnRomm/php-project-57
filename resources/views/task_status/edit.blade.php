@extends('layouts.app')

@section('content')
            <div class="grid col-span-full">
                <h1 class="mb-5">
                    {{ __('task_status.edit.header') }}
                </h1>

                {{ html()
                    ->form('PATCH', route('task_statuses.update', $taskStatus))
                    ->attribute('class', 'w-50')
                    ->open() }}
                @include('task_status.form')
                {{ html()->form()->close() }}
            </div>
@endsection
