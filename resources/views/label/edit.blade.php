@extends('layouts.app')

@section('content')
    <div class="grid col-span-full">
        <h1 class="mb-5">
            {{ __('label.edit.header') }}
        </h1>

        {{ html()
            ->form('PATCH', route('labels.update', $label))
            ->attribute('class', 'w-50')
            ->open() }}
        @include('label.form')
        {{ html()->form()->close() }}
    </div>
@endsection
