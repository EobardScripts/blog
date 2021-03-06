@if($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<label for="">Имя</label>
<input type="text" class="form-control" name="name" placeholder="Никнейм" value="@if(old('name')){{old('name')}}@else{{$user->name ?? ""}}@endif" required>

<label for="">Email</label>
<input type="text" class="form-control" name="email" placeholder="email" value="@if(old('email')){{old('email')}}@else{{$user->email ?? ""}}@endif" required>

<label>Роль</label>
    <select class="form-control" name="inputGroupSelectRole" id="inputGroupSelectRole[]">
        <option value="1" selected>Пользователь</option>
        <option value="2">Администратор</option>
    </select>

<label for="">Пароль</label>
<input type="password" class="form-control" name="password">

<label for="">Подтверждение пароля</label>
<input type="password" class="form-control" name="password_confirmation">

<hr />

<input class="btn btn-primary" type="submit" value="Создать">
