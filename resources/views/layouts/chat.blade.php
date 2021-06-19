@extends('layouts.navbar')

<link rel="stylesheet" href="{{ asset('css/home.css') }}">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="{{ asset('js/jquery_v3.4.1/dist/jquery.min.js') }}"></script>
<script src="{{ asset('js/home.js') }}"></script>

@section('navbar-content')
    <div class="container">
        <div class="messaging">
            <div class="inbox_msg">
                <div class="inbox_people">
                    <div class="headind_srch">
                        <div class="recent_heading">
                        <h4>Recent</h4>
                        </div>
                        <div class="srch_bar">
                        <div class="stylish-input-group">
                            <input type="text" class="search-bar"  placeholder="Search" >
                            <span class="input-group-addon">
                            <button type="button"> <i class="fa fa-search" aria-hidden="true"></i> </button>
                            </span> </div>
                        </div>
                    </div>
                        <div class="inbox_chat">
                                        <!-- LIST OF ONLINE USERS -->
                            <div class="col-md-4">
                                <div class="card">
                                    <div class="card-header"></div>

                                    <div class="card-body">
                                        <div class="list-group">
                                            @foreach($users as $row)
                                            <div class="chat_list">
                                                <div class="chat_people">
                                                <div class="chat_img"> <img src="/images/user.jpg" alt="sunil"> </div>
                                                <div class="chat_ib">
                                                    <a href="javascript:;" onclick="openChatBox({{$row}},{{Auth::user()->id}});" class="list-group-item list-group-action-item">
                                                        <div class="d-flex" style="border:0px solid red">
                                                        <span id="{{ $row->username }}"> {{ $row->name }} </span>

                                                        </div>
                                                    </a>
                                                </div>
                                                </div></div>
                                            @endforeach

                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                </div>
                <div class="mesgs">
                        <div class="msg_history">
                             <!-- CHAT BOX OF THE SELECTED USER -->
                            <div class="col-md-8" id="active_card" style="display:none;">
                                <div class="card">
                                    <div class="card-header" id="chatWithName">(Name of Selected User)</div>
                                    <div class="card-body messageThread" id="messageThread">
                                    </div>



                                </div>
                            </div>
                        </div>
                        <div class="type_msg">
                            <div class="input_msg_write">
                                <div class="card-body p-0 m-0" style="border:2px solid black">
                                    <form method="POST" onsubmit="submitMessage();">
                                        @csrf
                                        <div style="display:block;">
                                            <input type="hidden" id="convo_id" name="convo_id" required>
                                            <input class="form-control m-0" name="message" id="messsageInput" rows="3" required>
                                            <button class="msg_send_btn" type="submit" id="sendMsgBtn"><img src="/images/send.jpg" alt="sunil" aria-hidden="true"></i></button>
                                        </div>
                                    </form>
                                </div>

                            </div>
                        </div>

                </div>




        </div>
    </div>
@endsection
