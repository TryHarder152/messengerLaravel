@extends('layouts/'.$template)

@section('content')
<!-- Modal -->
    <div class="modal fade" id="fileUpload" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="fileUpload">Загрузить файл</h5>
                
              </div>
                <form method="post" action="{{ route('main.upload')}}" enctype="multipart/form-data">
                    {{ csrf_field() }}
                    <div class="modal-body">
                            
                        <div class="input__wrapper">
                            <input type="file" name="input__file" id="input__file" class="input input__file">
                            
                        </div>
                          
                            
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" >Understood</button>
                    </div>  
                </form>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row clearfix">
            <div class="col-lg-12">
                <div class="card chat-app">
                    <div id="plist" class="people-list">
                        <a href="{{url('/profile')}}">
                           <div class="profile">
                                <ul class="list-unstyled chat-list ">
                                    <li class="clearfix ">
                                        @if($userAuth->avatar != null)
                                            <img src="{{ asset('/storage/' .  $userAuth->avatar)}}" alt="avatar">
                                        @else
                                            <img src="https://crypto.ru/wp-content/plugins/q-auth/assets/img/default-user.png" alt="avatar">
                                        @endif
                                        <div class="about">
                                            <h6>Profile</h6>
                                            <div class="name">{{ $userAuth->name}}</div>

                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </a>


                        <ul class="list-unstyled chat-list mt-2 mb-0">
                            @foreach($users as $user)
                            <a href="{{url('/chat', $user->id )}}">
                                <li class="clearfix user-tab">
                                    @if($user->avatar != null)
                                        <img src="{{ asset('/storage/' .  $user->avatar)}}" alt="avatar">
                                    @else 
                                        <img src="https://crypto.ru/wp-content/plugins/q-auth/assets/img/default-user.png" alt="avatar">
                                    @endif
                                    <div class="about">
                                        <div class="name">{{$user->name . " ". $user->last_name}}</div>
                                        <div class="status"> <i class="fa fa-circle online"></i> online </div>
                                    </div>
                                </li>
                            </a>

                            @endforeach


                        </ul>
                    </div>
                    @if(isset($userChat))
                        <div class="chats">
                            <div class="chat user-chat">
                                <div class="chat-header clearfix">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <a href="javascript:void(0);" data-toggle="modal" data-target="#view_info">
                                                @if($userChat->avatar != null)
                                                    <img src="{{ asset('/storage/' .  $userChat->avatar)}}" alt="avatar">
                                                @else
                                                <img src="https://crypto.ru/wp-content/plugins/q-auth/assets/img/default-user.png" >
                                                @endif
                                            </a>
                                            <div class="chat-about">
                                                <h6 class="m-b-0">{{ $userChat->name}}</h6>
                                                <small>Last seen: 2 hours ago</small>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 hidden-sm text-right">
                                            <a href="javascript:void(0);" class="btn " data-bs-toggle="modal" data-bs-target="#fileUpload">
                                                <i class="fa fa-image"></i>
                                            </a>
                                        
                                            <a href="javascript:void(0);" class="btn" href="#" data-bs-toggle="dropdown">
                                                <i class="fa fa-cogs"></i>
                                                <ul class="dropdown-menu">
                                                    
                                                    <li><a href="{{ url('/send') }}" class="dropdown-item" href="#">Уведомление</a></li>
                                                    <li><a class="dropdown-item" href="#">Another action</a></li>
                                                    <li><a class="dropdown-item" href="#">Something else here</a></li>
                                                </ul>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-history">
                                    @if(session('error'))
                                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                            <strong>Ошибка!</strong> {{ session('error') }}
                                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                                        </div>
                                    @endif
                                    <ul class="m-b-0">
                                        @if(isset($path))
                                            <li class="clearfix">
                                                <div class="message my-message">
                                                    @if($file == 'jpg' || $file == 'png')
                                                        <img src="{{ asset('/storage/' . $path)}}" class="upload-file">
                                                    @else
                                                        <a href="{{ asset('/storage/' . $path)}}">Ссылка на файл</a>
                                                    @endif
                                                </div>
                                            </li>
                                        @endif
                                        {{--messages--}}
                                    </ul>
                                </div>
                                <div class="chat-message clearfix">
                                    <div class="input-group mb-0">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text"><i class="fa fa-send"></i></span>
                                        </div>
                                        <input type="text" class="form-control sendInput" placeholder="Enter text here...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endif

                </div>
            </div>
        </div>
    </div>
@endsection
