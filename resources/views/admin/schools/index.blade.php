@extends ('layout.page')

@section('subheader')
    <x-subheader title="Управление списком школ"/>
@endsection

@section ('content')
    <div class="container">
        <x-tables.filters clear-href="{{ route('admin.schools.view') }}">
            @include('admin.schools._index._search')
        </x-tables.filters>

        <x-card>
            <x-slot name="title">{{ __('Школы') }}</x-slot>
            <x-slot name="toolbar">
                <x-inputs.button-link link="{{ route('admin.schools.create') }}" title="{{ __('Новая школа') }}" icon="la-plus"/>
            </x-slot>

            <x-tables.status/>

            @if ($schools->count() > 0)
                @include('admin.schools._index._table')
            @else
                <x-tables.empty-alert text="{{ __('По вашему запросу не найдено ни одной школы.') }}"></x-tables.empty-alert>
            @endif
        </x-card>
    </div>
@endsection
