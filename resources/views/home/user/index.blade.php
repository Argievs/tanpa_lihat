@extends('layouts.master')
@section('title', 'user')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>halaman Data User</h3>
                            <a class="btn btn-primary" href="/user/tambah">Tambah</a>
                        </div>
                        <div class="card-body">
                          <div class="table-responsive">
                            <table class="table table-primary" id="datatable">
                            <thead>
                                <th scope="col">No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Email</th>
                                <th scope="col">Role</th>
                                <th scope="col">Action</th>
                            </thead>
                            <tbody>
                                @foreach($user as $user)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $user->name }}</td>
                                    <td>{{ $user->email }}</td>
                                    <td>{{ $user->role }}</td>
                                    <td>
                                        <a class="btn btn-warning" href="user/{{ $user->id }}/show">Edit</a>
                                        <a class="btn btn-danger" href="user/{{ $user->id }}/delete"
                                            onclick="return confirm('Yakin mau dihapus??')">Hapus</a>
                                    </td>
                                </tr>
                                @endforeach
                                
                            </tbody>
                            </table>
                          </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection