@extends('layouts.admin')
@section('title','index role')
@section('content')
<div id="content" class="container-fluid">
    @if (\Session::has('message'))
    <div class="alert alert-success">
        {!! \Session::get('message') !!}
    </div>
    @else
            {!! \Session::get('not_delete_admin') !!}            
@endif
    <div class="card">
        <div class="card-header font-weight-bold d-flex justify-content-between align-items-center">
            <h5 class="m-0 ">Danh sách vai trò</h5>
            <div class="form-search form-inline">
                <form action="#">
                    <input type="" class="form-control form-search" placeholder="Tìm kiếm">
                    <input type="submit" name="btn-search" value="Tìm kiếm" class="btn btn-primary">
                </form>
            </div>
        </div>
        <div class="card-body">
            <div class="form-action form-inline py-3">
                <select class="form-control mr-1" id="">
                    <option>Chọn</option>
                    <option>Tác vụ 1</option>
                    <option>Tác vụ 2</option>
                </select>
                <input type="submit" name="btn-search" value="Áp dụng" class="btn btn-primary">
            </div>
            <table class="table table-striped table-checkall">
                <thead>
                    <tr>
                        <th scope="col">
                            <input name="checkall" type="checkbox">
                        </th>
                        <th scope="col">#</th>
                        <th scope="col">Vai trò</th>
                        <th scope="col">Mô tả</th>
                        <th scope="col">Ngày tạo</th>
                        <th scope="col">Tác vụ</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $i=0;
                @endphp
                @foreach ($roles as $role )
                <tr>
                    <td>
                        <input type="checkbox">
                    </td>
                  
                    <td scope="row">{{$i++}}</td>
                    <td> <a href="{{route('role.edit',$role->id)}}">{{$role->name}}</a></td>
                    <td>{{$role->description}}</td>
                    <td>{{$role->created_at}}</td>
                    <td>
                        <a href="{{route('role.edit',$role->id)}}" class="btn btn-success btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Edit"><i class="fa fa-edit"></i></a>
                        <a href="" class="btn btn-danger btn-sm rounded-0" type="button" data-toggle="tooltip" data-placement="top" title="Delete"><i class="fa fa-trash"></i></a>
                    </td>

                </tr>
                @endforeach
                </tbody>
            </table>
            
        </div>
    </div>
</div>

@endsection