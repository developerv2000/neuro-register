@extends('layouts.app', ['page' => 'patients-index'])

@section('main')
    {{-- Search --}}
    <div class="search">
        <select class="selectize-singular--linked" placeholder="Поиск...">
            <option></option>
            @foreach ($searchItems as $item)
                <option value="{{ route('patients.show', $item->id) }}">{{ $item->name }}</option>
            @endforeach
        </select>
    </div>
@endsection
