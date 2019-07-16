@extends('layouts.dashboard')

@section('content')
    
    <div class="row">
        <div class="col-md-9">
            <div class="box box-danger">
                <div class="box-header">
                    <h3 class="box-title">Company Profile</h3>
                </div>
                <div class="box-body">
                    <div class="container-fluid">
                        <form action="{{ route('profile.update', [$profile->id]) }}" method="post">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="put">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="name">Company name</label>
                                        <input value="{{ $profile->name }}" required class="form-control" id="name" placeholder="Company name" name="name" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="email">Email</label>
                                        <input value="{{ $profile->email }}" required class="form-control" id="email" placeholder="Email" name="email" type="email">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="phone">Phone number</label>
                                        <input value="{{ $profile->phone }}" required class="form-control" id="phone" placeholder="Phone number" name="phone" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="instagram">Instagram</label>
                                        <input value="{{ $profile->instagram }}" required class="form-control" id="instagram" placeholder="Instagram" name="instagram" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="facebook">Facebook</label>
                                        <input value="{{ $profile->facebook }}" required class="form-control" id="facebook" placeholder="Facebook" name="facebook" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="twitter">Twitter</label>
                                        <input value="{{ $profile->twitter }}" required class="form-control" id="twitter" placeholder="Twitter" name="twitter" type="text">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Physical address</label>
                                        <input value="{{ $profile->address }}" required class="form-control" id="address" placeholder="Address" name="address" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="location">Location</label>
                                        <input value="{{ $profile->location }}" required class="form-control" id="location" placeholder="Location" name="location" type="text">
                                    </div>
                                </div>
                            </div> 

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="vision">Vision</label>
                                        <textarea required name="vision" id="vision" class="form-control">{{ $profile->vision }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="mission">Mission</label>
                                        <textarea required name="mission" id="mission" class="form-control">{{ $profile->mission }}</textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="motto">Motto</label>
                                <input value="{{ $profile->motto }}" required type="text" name="motto" class="form-control" id="motto">
                            </div>
                            <label for="about">Write a brief description of the company</label>
                            <textarea required class="textarea" name="about" id="about" placeholder="Write a brief description of the company"
                          style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">{{ $profile->about }}</textarea>
                            <div class="form-group">
                                <br>
                                
                                <button class="btn btn-danger pull-right" type="submit">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
        
@endsection