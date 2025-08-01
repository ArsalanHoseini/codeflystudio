@extends('admin.layouts.app')

@section('content')
    <h1>مدیریت کاربران</h1>

    @if(session('success'))
        <div style="color: green">{{ session('success') }}</div>
    @endif

    <table>
        <thead>
            <tr>
                <th>نام</th>
                <th>ایمیل</th>
                <th>نقش فعلی</th>
                <th>تغییر نقش</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)
                <tr>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->roles->pluck('name')->implode(', ') }}</td>
                    <td>
                        <form method="POST" action="{{ route('admin.users.updateRole', $user) }}">
                            @csrf
                            <select name="role">
                                @foreach($roles as $role)
                                    <option value="{{ $role->name }}" {{ $user->hasRole($role->name) ? 'selected' : '' }}>
                                        {{ $role->name }}
                                    </option>
                                @endforeach
                            </select>
                            <button type="submit">اعمال</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
@endsection
