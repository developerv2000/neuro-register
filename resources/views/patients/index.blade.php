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

    <div class="prehead prehead--intended styled-box">
        @include('layouts.breadcrumbs', [
            'crumbs' => ['Всего пациентов ' . $patients->total()],
        ])

        <div class="prehead__actions">
            <a class="button button--action " href="{{ route('patients.create') }}">
                <span class="button__icon material-symbols-outlined">add</span>
                <span class="button__text">Добавить</span>
            </a>
        </div>
    </div>

    {{-- Table --}}
    <table class="table">
        {{-- Head start --}}
        <thead>
            <tr>
                <th width="260">Ф.И.О</th>
                <th width="140">Дата рождения</th>
                <th width="430">Адрес</th>
                <th width="160">Дата добавления</th>
                <th width="130">Действия</th>
            </tr>
        </thead> {{-- Head end --}}

        {{-- Body Start --}}
        <tbody>
            @foreach ($patients as $patient)
                <tr>
                    <td>{{ $patient->name }}</td>
                    <td>{{ $patient->birthday?->isoformat('DD MMM Y') }}</td>
                    <td>{{ $patient->address }}</td>
                    <td>{{ $patient->created_at->isoformat('DD MMM Y HH:mm:ss') }}</td>

                    <td>
                        <div class="table__actions">
                            <a class="table__button table__button--view" href="{{ route('patients.show', $patient->id) }}" title="Посмотреть">
                                <span class="material-symbols-outlined">visibility</span>
                            </a>

                            @if (request()->user()->is_admin)
                                <a class="table__button table__button--edit" href="{{ route('patients.edit', $patient->id) }}" title="Редактировать">
                                    <span class="material-symbols-outlined">edit</span>
                                </a>

                                <button class="table__button table__button--destroy" data-item-id="{{ $patient->id }}" title="Удалить">
                                    <span class="material-symbols-outlined">delete</span>
                                </button>
                            @endif
                        </div>
                    </td>
                </tr>
            @endforeach
        </tbody> {{-- Body end --}}
    </table>

    {{-- Pagination --}}
    {{ $patients->links('layouts.pagination') }}

    {{-- Destroy modal --}}
    <div class="modal modal--single-destroy">
        <div class="modal__overlay"></div>

        <div class="modal__inner">
            <div class="modal__box">
                <form class="modal__form" action="{{ route('patients.destroy') }}" method="POST" data-on-submit="show-spinner">
                    @csrf
                    @method('DELETE')
                    <input type="hidden" name="id" value="0">

                    <div class="modal__header">
                        <p class="modal__header-title">Удалить</p>
                        <button class="modal__dismiss" type="button" data-action="hide-modal">
                            <span class="material-symbols-outlined">close</span>
                        </button>
                    </div>

                    <div class="modal__body">
                        Вы уверены что хотите удалить?
                    </div>

                    <div class="modal__footer">
                        <button class="button button--cancel" type="button" data-action="hide-modal">Отмена</button>
                        <button class="button button--danger" type="submit">Удалить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
