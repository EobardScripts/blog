@extends('admin.layouts.app_admin')

@section('content')
    <div class="container">
        @component('admin.components.breadcrumb')
            @slot('title') Редактирование пользователя @endslot
            @slot('parent') Главная @endslot
            @slot('active') Пользователи @endslot
        @endcomponent

        <hr />

        <form class="form-horizontal" action="{{route('admin.user_managment.user.update', $user)}}" method="post">
            @method('put')
            @csrf
            @include('admin.user_managment.users.partials.form')
        </form>

    </div>
@endsection
