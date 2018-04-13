@if(Session::has('userId'))
<script>window.location = "../";</script>
@endif
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link href="../css/signUp.css" rel="stylesheet">
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div class="container">
</div>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="form-body">
                <ul class="nav nav-tabs final-login">
                    <li class="active"><a data-toggle="tab" href="#sectionA">Sign In</a></li>
                </ul>
                <div class="tab-content">
                    <div id="sectionA" class="tab-pane fade in active">
                        @if ($errors->any())
                            <ul class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    <li>{{$error}}</li>
                                    @endforeach
                            </ul>
                        @endif
                        <div class="innter-form">
                            {!! Form::model($user, [
                            'action' => 'LoginController@submitAction',
                            'method' => 'POST'
                            ]) !!}

                            <div class="form-group">
                                {!! Form::label('username', 'Username') !!}
                                {!! Form::text('username', null, ['class' => 'form-control']) !!}
                            </div>

                            <div class="form-group">
                                {!! Form::label('password', 'Password') !!}
                                {!! Form::password('password', null, ['class' => 'form-control']) !!}
                            </div>

                            {!! Form::submit('Sign In', ['class' => 'btn btn-info']) !!}

                            {!! Form::close() !!}
                        </div>
                        <div class="social-login">
                            <p>- - - - - - - - - - - - - Sign In With - - - - - - - - - - - - - </p>
                            <ul>
                                <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
                                <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
                            </ul>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                    <div id="sectionB" class="tab-pane fade">
                        <div class="innter-form">
                            <form class="sa-innate-form" method="post">
                                <label>Name</label>
                                <input type="text" name="username">
                                <label>Email Address</label>
                                <input type="text" name="username">
                                <label>Password</label>
                                <input type="password" name="password">
                                <button type="submit">Join now</button>
                                <p>By clicking Join now, you agree to hifriends's User Agreement, Privacy Policy, and Cookie Policy.</p>
                            </form>
                        </div>
                        <div class="social-login">
                            <p>- - - - - - - - - - - - - Register With - - - - - - - - - - - - - </p>
                            <ul>
                                <li><a href=""><i class="fa fa-facebook"></i> Facebook</a></li>
                                <li><a href=""><i class="fa fa-google-plus"></i> Google+</a></li>
                                <li><a href=""><i class="fa fa-twitter"></i> Twitter</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
