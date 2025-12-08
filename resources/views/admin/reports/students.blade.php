@extends ('layout.page')

@section('subheader')
    <x-subheader title="Отчеты"/>
@endsection

@section ('content')
    <div class="container">
        <x-tables.filters clear-href="{{ route('admin.reports.students') }}">
            @include('admin.reports._students._search')
        </x-tables.filters>

        <x-card>
            <x-slot name="title">{{ __('Ученики') }}</x-slot>

            @if ($users->count() > 0)
                @include('admin.reports._students._table')
            @else
                <x-tables.empty-alert text="{{ __('По вашему запросу не найдено ни одного ученика.') }}"/>
            @endif
        </x-card>
    </div>
@endsection
