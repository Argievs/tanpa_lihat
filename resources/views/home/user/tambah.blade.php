@extends('layouts.master')
@section('title', 'user')
@section('content')
<div class="content-wrapper">
    <div class="content">
        <div class="container-fluid">
            <dov class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3>Halaman Tambah User</h3>
                            <a class="btn btn-warning" href="/user">Kembali</a>
                        </div>
                        <div class="card-body">
                            <form action="/user/simpan" method="post">
                                @csrf
                                <div class="mb-3">
                                    <label for="" class="form-label">Name</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="name"
                                        id="name"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Email</label>
                                    <input
                                        type="text"
                                        class="form-control"
                                        name="email"
                                        id="email"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Password</label>
                                    <input
                                        type="password"
                                        class="form-control"
                                        name="password"
                                        id="password"
                                        aria-describedby="helpId"
                                        placeholder=""
                                    />
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <div class="mb-3">
                                    <label for="" class="form-label">Role</label>
                                    <select name="role" id="role" class="form-control">
                                        <option value="admin">admin</option>
                                        <option value="karyawan">karyawan</option>
                                    </select>
                                    <small id="helpId" class="form-text text-muted">Help text</small>
                                </div>
                                <button class="btn btn-primary" type="submit">Simpan</button>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </dov>
        </div>
    </div>
</div>
@endsection