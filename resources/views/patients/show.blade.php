@extends('layouts.app', ['page' => 'patients-show'])

@section('main')
    <div class="prehead prehead--intended styled-box">
        @include('layouts.breadcrumbs', [
            'crumbs' => ['Медицинская карта пациента'],
        ])
    </div>

    <div class="patient-card styled-box">
        <p><strong>Ф.И.О: </strong>{{ $patient->name }}</p>
        <p><strong>Адрес: </strong>{{ $patient->address }}</p>
        <p><strong>День рождения: </strong>{{ $patient->birthday->isoFormat('D MMMM Y') }}</p>
    </div>
@endsection
