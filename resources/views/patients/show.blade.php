@extends('layouts.app', ['page' => 'patients-show'])

@section('main')
    <h1 class="patient-card-main-title styled-box">{{ $patient->name }}</h1>

    <div class="patient-card">
        <div class="patient-card__personal-info styled-box">
            <h2 class="patient-card__title">Сведения о пробанде</h2>
            <p><strong>Ф.И.О: </strong>{{ $patient->name }}</p>
            <p><strong>Дата рождения: </strong>{{ $patient->birthday->isoFormat('D MMMM Y') }}</p>
            <p><strong>Место рождения: </strong>{{ $patient->birth_place }}</p>
            <p><strong>Пол: </strong>{{ $patient->gender }}</p>
            <p><strong>Адрес: </strong>{{ $patient->address }}</p>
            <p><strong>Телефон: </strong>{{ $patient->phone }}</p>
            <p><strong>Место работы, профессия: </strong>{{ $patient->job }}</p>
            <p><strong>Национальность: </strong>{{ $patient->nationality }}</p>
            <p><strong>Возраст в котором началось заболевания: </strong>{{ $patient->desease_start_age }}</p>
        </div>

        <div class="patient-card__period styled-box">
            <h2 class="patient-card__title">Пренатальный период</h2>
            <p><strong>Номер беременности: </strong>{{ $patient->pregnancy_number }}</p>
            <p><strong>Возраст матери при рождении пробанда: </strong>{{ $patient->mother_age_while_birth }}</p>
            <p><strong>Возраст отца при рождении пробанда: </strong>{{ $patient->father_age_while_birth }}</p>
            <p><strong>Болезни матери вовремя беременности: </strong>{{ $patient->mother_deseases_on_pregnancy_period }}</p>
        </div>

        <div class="patient-card__development styled-box">
            <h2 class="patient-card__title">Развитие</h2>
            <p><strong>Вес и рост при рождении: </strong>{{ $patient->weight_and_hieght_after_birth }}</p>
            <p><strong>Начал сидеть: </strong>{{ $patient->start_sitting }}</p>
            <p><strong>Начал стоять: </strong>{{ $patient->start_standing }}</p>
            <p><strong>Начал ходить: </strong>{{ $patient->start_walking }}</p>
            <p><strong>Начал говорить: </strong>{{ $patient->start_speaking }}</p>
            <p><strong>Начал учёбу в школе: </strong>{{ $patient->start_school }}</p>
            <p><strong>Перенесенные заболевания: </strong>{{ $patient->past_illnesses }}</p>
        </div>

        <div class="patient-card__personal-info styled-box">
            <h2 class="patient-card__title">Обследования</h2>
            <p><strong>Рост: </strong>{{ $patient->survey_height }}</p>
            <p><strong>Вес: </strong>{{ $patient->survey_weight }}</p>
            <p><strong>Конститутция: </strong>{{ $patient->survey_constitution }}</p>

            <div class="patient-card__row">
                <div><strong>Голова: окружность: </strong>{{ $patient->head_circle }}</div>
                <div><strong>Голова: деформации: </strong>{{ $patient->head_deformations }}</div>
            </div>

            <div class="patient-card__row">
                <div><strong>Лицо: покровы: </strong>{{ $patient->face_covers }}</div>
                <div><strong>Лицо: деформация: </strong>{{ $patient->face_deformation }}</div>
            </div>

            <div class="patient-card__row">
                <div><strong>Шея: форма: </strong>{{ $patient->neck_form }}</div>
                <div><strong>Шея: подвижность: </strong>{{ $patient->neck_mobility }}</div>
            </div>

            <div class="patient-card__row">
                <div><strong>Грудь: окружность: </strong>{{ $patient->breast_circle }}</div>
                <div><strong>Грудь: деформация: </strong>{{ $patient->breast_deformation }}</div>
            </div>

            <div class="patient-card__row">
                <div><strong>Живот: деформации: </strong>{{ $patient->stomach_deformation }}</div>
                <div><strong>Грыжи и другие аномалии: </strong>{{ $patient->stomach_anomalies }}</div>
            </div>

            <div class="patient-card__row">
                <div><strong>Спина: деформация: </strong>{{ $patient->back_deformation }}</div>
                <div><strong>Спина: аномалии: </strong>{{ $patient->back_anomalies }}</div>
            </div>

            <p><strong>Верхние и нижние конечности: ограничение подвижности: </strong>{{ $patient->limbs_limited_mobility }}</p>
            <p><strong>Верхние и нижние конечности: деформации: </strong>{{ $patient->limbs_deformation }}</p>
        </div>

        <div class="patient-card__measurements styled-box">
            <h2 class="patient-card__title">Антропометрические измерения, см</h2>

            <table class="patient-card__table table">
                <thead>
                    <tr>
                        <th>Окружность</th>
                        <th>Справа</th>
                        <th>Слева</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Плечо</td>
                        <td>{{ $patient->shoulder_circle_right }}</td>
                        <td>{{ $patient->shoulder_circle_left }}</td>
                    </tr>

                    <tr>
                        <td>Предплечье</td>
                        <td>{{ $patient->forearm_circle_right }}</td>
                        <td>{{ $patient->forearm_circle_left }}</td>
                    </tr>

                    <tr>
                        <td>Запястье</td>
                        <td>{{ $patient->wrist_circle_right }}</td>
                        <td>{{ $patient->wrist_circle_left }}</td>
                    </tr>

                    <tr>
                        <td>Бедро</td>
                        <td>{{ $patient->hip_circle_right }}</td>
                        <td>{{ $patient->hip_circle_left }}</td>
                    </tr>

                    <tr>
                        <td>Голень</td>
                        <td>{{ $patient->shin_circle_right }}</td>
                        <td>{{ $patient->shin_circle_left }}</td>
                    </tr>

                    <tr>
                        <td>Щиколотка</td>
                        <td>{{ $patient->ankle_circle_right }}</td>
                        <td>{{ $patient->ankle_circle_left }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
@endsection
