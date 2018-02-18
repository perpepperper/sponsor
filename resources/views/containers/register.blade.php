@extends('layouts.app')
@section('title'|'Register Page')
@section('content')
<div class="container-fluid spacing">
    <div class="row">
        <div class="col-sm-6 col-md-6 main-wrapper">
            <h1 class="title title-1">Who can be adopted?</h1>
            <ul class="list">
                <li class="list-item">Any person below 18 who has been administratively or judicially declared available for adoption.</li>
                <li class="list-item">Legitimate son/daughter of one spouse by the other spouse.</li>
                <li class="list-item">An illegitimate son/daughter by a qualified adopter/s to improve his/her status to that of legitimacy.</li>
                <li class="list-item">A person of legal age if, prior to the adoption, said person has been consistently considered and treated by the adopter/s as his/her own child since minority.</li>
                <li class="list-item">A child whose adoption has been previously rescinded.</li>
                <li class="list-item">A child whose biological parent/s has died provided that no proceedings shall be initiated within 6 months from the time of death of the said parent/s.</li>
            </ul>
            <div class="col-md-12">
                <p class="reference">reference:&nbsp<a href="https://philpad.com/how-to-adopt-a-child-in-the-philippines-adoption-requirements-procedures/" target="_blank">https://philpad.com/how-to-adopt-a-child-in-the-philippines-adoption-requirements-procedures/</a></p>
            </div>
        </div>
        <div class="col-sm-6 col-md-6 main-wrapper">
            <h1 class="title title-2">Register a Child</h1>
            <div class="content-wrapper">
                <div class="col-md-12">                    
                    <form>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label class="input-label" for="firstName">First Name</label>
                                <input type="text" class="form-control" id="firstName" placeholder="First Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="input-label" for="lastName">Last Name</label>
                                <input type="text" class="form-control" id="lastName" placeholder="Last Name" required>
                            </div>
                            <div class="form-group col-md-6">
                                <label class="input-label" for="age">Age</label>
                                <input type="number" class="form-control" id="age" placeholder="Age" required>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="input-label" for="location">Location</label>
                                <textarea class="form-control" id="location" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <label class="input-label" for="description">Description</label>
                                <textarea class="form-control" id="description" rows="3"></textarea>
                            </div>
                            <div class="form-group col-md-12">
                                <div class="custom-file">
                                    <label class="custom-file-label" for="childPic">Child{{ "'" }}s Photo</label>
                                    <input type="file" class="custom-file-input" id="childPic" required>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<style>
    .main-wrapper {
        padding: 0;
    }
    .title {
        padding: 30px 0;
        text-align: center;
        margin-bottom: 0;
    }
    .title-1 {
        background: #01579B;
        color: #fff;
    }
    .title-2 {
        color: #01579B;
    }
    .list {
        font-size: 24px;
        color: #01579B;
        padding: 30px 60px;
    }
    .list-item {
        padding-bottom: 8px;
    }
    .reference {
        padding: 0 30px;
        font-size: 18px;
        color: #01579B;
    }
    .content-wrapper {
        background: #01579B;
        padding: 30px;
    }
    .content-wrapper > div {
        padding: 0;
    }
    .input-label {
        font-size: 24px;
        color: #fff;
    }
    .form-group {
        margin-bottom: 0;
    }
    .custom-file {
        margin-top: 16px;
    }
</style>
@endsection