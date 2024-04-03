@extends('layouts.app', ['page' => 'patients-edit'])

@section('main')
    <div class="prehead prehead--intended styled-box">
        @include('layouts.breadcrumbs', [
            'crumbs' => ['Редактировать пациента'],
        ])

        <div class="prehead__actions">
            <button class="button button--action" type="submit" form="edit-form">
                <span class="button__icon material-symbols-outlined">add</span>
                <span class="button__text">Сохранить</span>
            </button>
        </div>
    </div>

    <form class="form main-form edit-form" action="{{ route('patients.update', $item->id) }}" method="POST" id="edit-form">
        @csrf
        @method('PATCH')

        <div class="form__divider">
            <h2 class="main-title">Сведения о пробанде</h2>
            @include('form-components.edit.text-input', [
                'label' => 'Имя',
                'attribute' => 'name',
                'required' => true,
            ])

            <x-form.group-validateable label="Дата рождения" error-name="birthday" required="0">
                <input class="input" type="date" name="birthday" value="{{ $item->birthday?->isoFormat('Y-MM-D') }}">
            </x-form.group-validateable>

            @include('form-components.edit.text-input', [
                'label' => 'Место рождения',
                'attribute' => 'birth_place',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Пол',
                'attribute' => 'gender',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Адрес',
                'attribute' => 'address',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Телефон',
                'attribute' => 'phone',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Место работы, профессия',
                'attribute' => 'job',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Национальность',
                'attribute' => 'nationality',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Возраст в котором началось заболевание',
                'attribute' => 'desease_start_age',
                'required' => false,
            ])
        </div>

        <div class="form__divider">
            <h2 class="main-title">Пренатальный период</h2>

            @include('form-components.edit.text-input', [
                'label' => 'Номер беременности',
                'attribute' => 'pregnancy_number',
                'type' => 'number',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Возраст матери при рождении пробанда',
                'attribute' => 'mother_age_while_birth',
                'type' => 'number',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Возраст отца при рождении пробанда',
                'attribute' => 'father_age_while_birth',
                'type' => 'number',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Болезни матери вовремя беременности',
                'attribute' => 'mother_deseases_on_pregnancy_period',
                'required' => false,
            ])
        </div>

        <div class="form__divider">
            <h2 class="main-title">Развитие</h2>

            @include('form-components.edit.text-input', [
                'label' => 'Вес и рост при рождении',
                'attribute' => 'weight_and_hieght_after_birth',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Начал сидеть',
                'attribute' => 'start_sitting',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Начал стоять',
                'attribute' => 'start_standing',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Начал ходить',
                'attribute' => 'start_walking',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Начал говорить',
                'attribute' => 'start_speaking',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Начал учёбу в школе',
                'attribute' => 'start_school',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Перенесенные заболевания',
                'attribute' => 'past_illnesses',
                'required' => false,
            ])
        </div>

        <div class="form__divider">
            <h2 class="main-title">Обследования</h2>

            @include('form-components.edit.text-input', [
                'label' => 'Рост',
                'attribute' => 'survey_height',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Вес',
                'attribute' => 'survey_weight',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Конститутция',
                'attribute' => 'survey_constitution',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Голова: окружность',
                'attribute' => 'head_circle',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Голова: деформации',
                'attribute' => 'head_deformations',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Лицо: покровы',
                'attribute' => 'face_covers',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Лицо: деформация',
                'attribute' => 'face_deformation',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Шея: форма',
                'attribute' => 'neck_form',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Шея: подвижность',
                'attribute' => 'neck_mobility',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Грудь: окружность',
                'attribute' => 'breast_circle',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Грудь: деформация',
                'attribute' => 'breast_deformation',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Живот: деформации',
                'attribute' => 'stomach_deformation',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Грыжи и другие аномалии',
                'attribute' => 'stomach_anomalies',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Спина: деформация',
                'attribute' => 'back_deformation',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Спина: аномалии',
                'attribute' => 'back_anomalies',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Верхние и нижние конечности: ограничение подвижности',
                'attribute' => 'limbs_limited_mobility',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Верхние и нижние конечности: деформации',
                'attribute' => 'limbs_deformation',
                'required' => false,
            ])
        </div>


        <div class="form__divider">
            <h2 class="main-title">Антропометрические измерения, см</h2>

            @include('form-components.edit.text-input', [
                'label' => 'Плечо справа',
                'attribute' => 'shoulder_circle_right',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Плечо слева',
                'attribute' => 'shoulder_circle_left',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Предплечье справа',
                'attribute' => 'forearm_circle_right',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Предплечье слева',
                'attribute' => 'forearm_circle_left',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Запястье справа',
                'attribute' => 'wrist_circle_right',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Запястье слева',
                'attribute' => 'wrist_circle_left',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Бедро справа',
                'attribute' => 'hip_circle_right',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Бедро слева',
                'attribute' => 'hip_circle_left',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Голень справа',
                'attribute' => 'shin_circle_right',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Голень слева',
                'attribute' => 'shin_circle_left',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Щиколотка справа',
                'attribute' => 'ankle_circle_right',
                'required' => false,
            ])

            @include('form-components.edit.text-input', [
                'label' => 'Щиколотка слева',
                'attribute' => 'ankle_circle_left',
                'required' => false,
            ])
        </div>

        <x-form.submit class="main-form__submit">Сохранить</x-form.submit>
    </form>
@endsection
