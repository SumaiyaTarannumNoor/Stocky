
@extends('layouts.master')



@section('content')

  <body style="background-color:black">
    <section style = "padding-top: 70px;">
    <div id="main">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
        <div class = "container" style="background-color:#00FFFF">
            <div class= "row">
              <div class = "col-md-12">
                <div class = "card">
                  <div class= "card-header">
                    সকল আইটেম <a href = "/add-post" class="btn btn-success">নতুন আইটেম যোগ করুন</a>
                  </div>
                  <div class = "card-body">
                    @if(Session::has('post_deleted'))
                      <div class="alert alert-success" role="alert">
                        {{Session::get('post_deleted')}}
                      </div>
                    @endif  
                   <table class = "table table-striped" style="background-color:#00FFFF">
                    <thead>
                        <tr>
                            <th>সিরিয়াল নং</th>
                            <th>আইটেম এর নাম</th>
                            <th>আইটেম এর বর্ণনা</th>
                            <th>প্রক্রিয়া</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->id}}</td>
                                <td>{{$post->title}}</td>
                                <td>{{$post->body}}</td>
                                <td>
                                    <a href = "/posts/{{$post->id}}" class="btn btn-info">বর্ণনা</a>
                                    <a href= "/edit-post/{{$post->id}}" class= "btn btn-success">হালনাগাদ</a>
                                    <a href= "/delete-post/{{$post->id}}" class= "btn btn-danger">বাতিল</a>
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
    </section>
</body>
@endsection 
