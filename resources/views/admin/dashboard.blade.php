@extends('admin.layouts.master')
@section('content')
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header pr-3 pl-3 pt-3">
                <h4 class="card-title">Adoption Requests</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                        <thead class=" text-primary">
                            <th>Child Name</th>
                            <th>Adopter's Name</th>
                            <th>Adopter's Contact</th>
                            <th>Actions</th>
                        </thead>
                        <tbody>
                            @foreach($children as $child)
                            <tr>
                                <td>{{$child->child_fname . ' ' . $child->child_lname}}</td>
                                <td>{{$child->person->first_name . ' ' . $child->person->last_name}}</td>
                                <td>{{$child->person->contact}}</td>
                                <td>
                                    <form action="/backend/adopt/action" method="POST">
                                        {{csrf_field()}}
                                        <input type="hidden" name="id" value="{{$child->id}}">
                                        <input type="hidden" name="person_id" value="{{$child->person->id}}">
                                        <button class="btn btn-info" name="action" value="1"><i class="now-ui-icons ui-1_check"></i></button>
                                        <button class="btn btn-danger" name="action" value="0"><i class="now-ui-icons ui-1_simple-remove"></i></button>
                                    </form>
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
@endsection