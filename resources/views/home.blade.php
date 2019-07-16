@extends('layouts.dashboard')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-aqua"><i class="ion ion-ios-gear-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Services</span>
              <span class="info-box-number">10</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Clients</span>
              <span class="info-box-number">41,410</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->

        <!-- fix for small devices only -->
        <div class="clearfix visible-sm-block"></div>

        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-green"><i class="ion ion-ios-cart-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Likes</span>
              <span class="info-box-number">760</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
        <div class="col-md-3 col-sm-6 col-xs-12">
          <div class="info-box">
            <span class="info-box-icon bg-yellow"><i class="ion ion-ios-people-outline"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Comments</span>
              <span class="info-box-number">2,000</span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </div>
        <!-- /.col -->
      </div>

      {{-- Company profile section --}}

      <div class="row">
        <div class="col-md-4">
          <div class="box box-danger">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="../../dist/img/user4-128x128.jpg" alt="User profile picture">

              <h3 class="profile-username text-center">{{ $profile->name }} </h3>

              <p class="text-muted text-center">{{ $profile->email }}</p>

              <ul class="list-group list-group-unbordered">
                <li class="list-group-item">
                  <b>Phone number</b> <a class="pull-right">{{ $profile->phone }}</a>
                </li>
                <li class="list-group-item">
                  <b>Address</b> <a class="pull-right">{{ $profile->address }}</a>
                </li>
                <li class="list-group-item">
                  <b>Location</b> <a class="pull-right">{{ $profile->location }}</a>
                </li>
                <li class="list-group-item">
                  <b>Twitter</b> <a class="pull-right">{{ $profile->twitter }}</a>
                </li>
                <li class="list-group-item">
                  <b>Instagram</b> <a class="pull-right">{{ $profile->instagram }}</a>
                </li>
                
              </ul>

              <a href="/profile/{{ $profile->id }}/edit" class="btn btn-danger btn-block"><b>Edit profile</b></a>
            </div>
            <!-- /.box-body -->
          </div>

          {{-- the creat post box starts here --}}
          <div class="box box-primary">
              <div class="box-header with-border">
                <h3 class="box-title">Create a post</h3> 
              </div>
              <div class="box-body">
                <form action="{{ route('posts.store') }}" method="post" enctype="multipart/form-data">
                  {{ csrf_field() }}
                    <div class="form-group">
                      <label for="title">Title</label>
                      <input type="text" required id="title" name="title" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="title">Image</label>
                      <input type="file" required id="title" name="url" class="form-control">
                    </div>
                    <div class="form-group">
                      <label for="">Write something about the post</label>
                      <textarea required class="textarea" name="body" id="about" placeholder="Write something about the post"
                          style="width: 100%; height: 150px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>
                    </div>
                    <button class="btn btn-danger pull-right">Submit post</button>
                  </form>
              </div>
            </div>

            {{-- the create post box ends here --}}

        </div>
        <div class="col-md-7">
          <div class="box box-danger">
            {{-- <div class="box-header with-border">
            <h3 class="box-title">More about</h3>
            </div> --}}
            <!-- /.box-header -->
            <div class="box-body">
              <div class="text-center">
                <strong> Motto</strong>
              </div>

              <p class="text-muted text-center">
                "{{ $profile->motto }}"
              </p>

              <hr>

              <div class="text-center">
                <strong> Vision</strong>
              </div>

              <p class="text-muted text-center">"{{ $profile->vision }}"</p>

              <hr>
              <div class="text-center">
                <strong> Mission</strong>
              </div>
              

              <p class="text-muted text-center">"{{ $profile->mission }}"</p>

              <hr>

              
              <div class="text-center">
                <strong> About</strong>
              </div>

              {!! $profile->about !!}
            </div>
            <!-- /.box-body -->
          </div>
          
          {{-- Recent posts start here --}}
          <div class="box box-primary">
            <div class="box-header">
              <h3 class="box-title">Recent posts</h3>
            </div>
            <div class="box-body">
              <div class="post">
                  <div class="user-block">
                      <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                          <span class="username">
                            <a href="#">Adam Jones</a>
                            <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                          </span>
                      <span class="description">Posted 5 photos - 5 days ago</span>
                    </div>
                    <h4 class="text-center">This is the title</h4>
                  <div class="row margin-bottom">
                      <div class="col-sm-6">
                        <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                      </div>
                      <!-- /.col -->
                      <div class="col-sm-6">
                        <p>this is the post content</p>
                      </div>
                      <!-- /.col -->
                    </div>
                    <div class="container-fluid">
                      <a class="col-md-offset-3" href="/posts">View more <i class="fa fa-arrow-circle-right"></i></a>
                    </div>
              </div>
                
            </div>
          </div>
          {{-- Recent posts end here --}}

        </div>
      </div>
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-6">
            
            
          </div>
          <div class="col-md-6">

          </div>
        </div>
      </div>
</div>
@endsection
