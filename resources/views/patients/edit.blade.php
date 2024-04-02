@extends('layouts.app', ['page' => 'patients-edit'])

@section('main')
    <div class="prehead prehead--intended styled-box">
        @include('layouts.breadcrumbs', [
            'crumbs' => ['Редактировать пациента'],
        ])

        <div class="prehead__actions">
            <button class="button button--action" type="submit" form="create-form">
                <span class="button__icon material-symbols-outlined">add</span>
                <span class="button__text">Сохранить</span>
            </button>
        </div>
    </div>

    <form class="form main-form edit-form" action="{{ route('patients.update', $item->id) }}" method="POST" id="edit-form">
        @csrf
        @method('PATCH')

        <div class="form__divider">
            @include('form-components.edit.text-input', [
                'label' => 'Имя',
                'attribute' => 'name',
                'required' => true,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Адрес',
                'attribute' => 'address',
                'required' => false,
            ])

            <input class="input" type="date" name="birthday" value="{{ $item->birthday->isoFormat('Y-MM-D') }}">
        </div>

        <x-form.submit class="main-form__submit">Сохранить</x-form.submit>
    </form>
@endsection
