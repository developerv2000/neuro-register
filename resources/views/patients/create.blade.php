@extends('layouts.app', ['page' => 'patients-create'])

@section('main')
    <div class="prehead prehead--intended styled-box">
        @include('layouts.breadcrumbs', [
            'crumbs' => ['Добавить пациента'],
        ])

        <div class="prehead__actions">
            <button class="button button--action" type="submit" form="create-form">
                <span class="button__icon material-symbols-outlined">add</span>
                <span class="button__text">Добавить</span>
            </button>
        </div>
    </div>

    <form class="form main-form create-form" action="{{ route('patients.store') }}" method="POST" id="create-form">
        @csrf

        <div class="form__divider">
            @include('form-components.create.text-input', [
                'label' => 'Имя',
                'attribute' => 'name',
                'required' => true,
            ])

            @include('form-components.create.text-input', [
                'label' => 'Адрес',
                'attribute' => 'address',
                'required' => false,
            ])

            @include('form-components.create.text-input', [
                'label' => 'День рождения',
                'type' => 'date',
                'attribute' => 'birthday',
                'required' => false,
            ])
        </div>

        <x-form.submit class="main-form__submit">Добавить</x-form.submit>
    </form>
@endsection
