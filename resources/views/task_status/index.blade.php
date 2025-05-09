@extends('layouts.app')

@section('content')
    <div class="grid max-w-screen-xl px-4 pt-20 pb-8 mx-auto lg:gap-8 xl:gap-0 lg:py-16 lg:grid-cols-12 lg:pt-28">
        <div class="grid col-span-full">
            <h1 class="mb-5">Статусы</h1>

        @auth
            <div>
                <a href="{{ route('task_statuses.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    {{ __('Создать статус') }}
                </a>
            </div>
        @endauth

        <table class="mt-4">
            <thead class="border-b-2 border-solid border-black text-left">
            <tr>
                <th>{{ __('ID') }}</th>
                <th>{{ __('Имя') }}</th>
                <th>{{ __('Дата создания') }}</th>
                @auth
                    <th>{{ __('Действия') }}</th>
                @endauth
            </tr>
            </thead>
            <tbody>
            @foreach ($taskStatuses as $status)
                <tr class="border-b border-dashed text-left">
                    <td>{{ $status->id }}</td>
                    <td>{{ $status->name }}</td>
                    <td>{{ $status->created_at->format('d.m.Y') }}</td>
                    @auth
                        <td>
                            <form action="{{ route('task_statuses.destroy', $status->id) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" onclick="return confirm('{{ __('task_status.index.delete_confirm') }}')" class="text-red-600 hover:text-red-900">
                                    {{ __('Удалить') }}
                                </button>
                            </form>
                            <a href="{{ route('task_statuses.edit', $status->id) }}" class="text-blue-600 hover:text-blue-900">
                                {{ __('Обновить') }}
                            </a>
                        </td>
                    @endauth
                </tr>
            @endforeach
            </tbody>
        </table>
        <div class="mt-4">
            {{ $taskStatuses->links() }}
        </div>
    </div>
@endsection
