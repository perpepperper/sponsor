@extends('layouts.app')
@section('title'|'Adopt Page')
@section('content')
<div class="container-fluid spacing">
    <div class="row">
        @foreach($children as $child)
        <div class="col-12 col-sm-6 col-md-4 col-lg-4 col-xl-3 card-container">
            <div class="card">
            <img class="card-img-top" src="images/adoptpage/{{$child->image}}" alt="card_img1">
                <div class="card-body">
                    <p class="name">{{$child->child_fname . ' ' . $child->child_lname}}, {{$child->child_age}} y/o</p>                    
                    <div class="card-content">
                        <div class="row">
                            <div class="col-md-5">
                                <p class="label">Last seen:&nbsp</p>
                            </div>
                            <div class="col-md-7">
                                <p class="text">{{$child->child_location}}</p>
                            </div>
                            <div class="col-md-12">
                                <p class="text">{{$child->child_desc}}</p>
                            </div>
                            <div class="col-md-12 btn-card">
                                <a href="#" role="button" onclick="addId({{$child->id}})" class="btn btn-adopt" data-toggle="modal" data-target="#exampleModal">Adopt Me!</a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <div>Posted : {{Carbon\Carbon::parse($child->created_at)->format('F d, Y')}}</div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <form action="/adopt/save" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <input type="hidden" name="child_id" value="" class="child_id">
                <input type="hidden" name="id" value="0">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Apply for Adoption</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-12 upload-text">All uploads must be in image format (eg. jpg, png)</div>
                            <div class="col-12">
                                <div class="row">
                                    <div class=" col-6">
                                        <label class="input-label" for="firstName">First Name</label>
                                        <input type="text" name="first_name" class="form-control" id="firstName" placeholder="First Name" required>
                                    </div>
                                    <div class=" col-6">
                                        <label class="input-label" for="lastName">Last Name</label>
                                        <input type="text" name="last_name" class="form-control" id="lastName" placeholder="Last Name" required>
                                    </div>
                                    <div class=" col-6">
                                        <label class="input-label" for="age">Age</label>
                                        <input type="number" name="age" class="form-control" id="age" placeholder="Age" required>
                                    </div>
                                    <div class=" col-6">
                                        <label class="input-label" for="age">Contact</label>
                                        <input type="text" name="contact" class="form-control" id="age" placeholder="Contact" required>
                                    </div>
                                    <div class=" col-12">
                                        <label class="input-label" for="location">Address</label>
                                        <textarea class="form-control" name="address" id="location" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="tooltip" class="ref-tooltip" data-toggle="tooltip" data-placement="right" title="reference: https://philpad.com/how-to-adopt-a-child-in-the-philippines-adoption-requirements-procedures/ ">
                            <span class="fas fa-question-circle" aria-hidden="true"/>
                        </button>
                        <button type="button" class="btn btn-cancel" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-apply">Apply</button>
                    </div>

                </form>
            </div>
        </div>
    </div>
</div>

<style>
    .spacing {
        padding: 15px 30px;
    }
    .card {
        border: 2px solid #03A9F4;
        width: 100%;
        box-shadow: 0 10px 6px -6px #777;
    }
    
    .card-footer {
        background: #03A9F4;
        border-color: #03A9F4;
        color: #fff;
    }
    .name {
        text-align: center;
        font-size: 18px;
        font-weight: 600;
    }
    .text, .label {
        font-weight: 600;
    }
    .btn-card {
        display: flex;
        justify-content: center;
    }
    .btn-adopt {
        color: #03A9F4;
        background: transparent;
        border: 1px solid #03A9F4;
    }
    .btn-adopt:hover {
        color: #fff;
        background: #03A9F4;
    }
    .card-container {
        margin: 15px 0;
    }
    .modal-header {
        background: #03A9F4;
        color: #fff;
    }
    .close {
        color: #fff;
        opacity: 1;
    }
    .close:hover {
        color: #d9d9d9;
    }
    .modal-footer {
        border-top: 1px solid #03A9F4;
        justify-content: flex-start;
    }
    .btn-cancel {
        background: transparent;
        color: #03A9F4;
        border: 1px solid #03A9F4;
    }
    .btn-cancel:hover {
        background: #03A9F4;
        color: #fff;
    }
    .btn-apply {
        background: #03A9F4;
        color: #fff;
        border: 1px solid #03A9F4;
    }
    .btn-apply:hover {
        background: transparent;
        color: #03A9F4;
    }
    .upload-text {
        margin-bottom: 8px;
    }
    .upload-field {
        margin-bottom: 12px;
    }
    .ref-tooltip {
        margin-right: auto !important;
        border: none;
        background: transparent;
        font-size: 20px;
        color: #03A9F4;
        outline: none;
    }
</style>
@endsection
@section('js')
<script type="text/javascript">
    function addId(id)
    {
        $('.child_id').val(id);
    }   
</script>
@endsection