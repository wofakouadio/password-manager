@extends('templates.main')

@section('content')

<div class="row">

    <div class="col-12">

        <h1 class='float-left'>Users</h1>
        <a class='btn btn-md btn-success float-right' href='{{ route('admin.users.create') }}' role='button'>Add User</a>

    </div>

</div>



<div class="card">
 
    <table class="table">
        <thead>
            <tr>
                <th>#ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($users as $user)

                <tr>
                    <td scope="row">{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>
                        <a class='btn btn-sm btn-primary' href='{{ route('admin.users.edit', $user->id) }}' role='button'>Edit</a>

                        <button type='button' 
                        class='btn btn-sm btn-danger'
                        onclick="confirm('Are you sure of deleting this user{{ $user->name }}?'); event.preventDefault(); 
                        document.getElementById('delete-user-form-{{ $user->id }}').submit();">Delete</button>

                        <form action="{{ route('admin.users.destroy', $user->id) }}" method="POST" style='display:none' id="delete-user-form-{{ $user->id }}">
                            @csrf
                            @method('DELETE')
                        </form>

                    </td>
                </tr>

            @endforeach
            
        </tbody>
    </table>

    {{ $users->links() }}

</div>

@endsection