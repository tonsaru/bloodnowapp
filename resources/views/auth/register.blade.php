@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Register</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }}">
                              <label for="username" class="col-md-4 control-label">Name</label>

                              <div class="col-md-6">
                                  <input id="username" type="text" class="form-control" name="username" value="{{ old('username') }}" required autofocus>

                                  @if ($errors->has('username'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('username') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                              <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                              <div class="col-md-6">
                                  <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                  @if ($errors->has('email'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('email') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                              <label for="password" class="col-md-4 control-label">Password</label>

                              <div class="col-md-6">
                                  <input id="password" type="password" class="form-control" name="password" required>

                                  @if ($errors->has('password'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('password') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>

                              <div class="col-md-6">
                                  <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('blood') ? ' has-error' : '' }}">
                              <label for="blood" class="col-md-4 control-label">Blood</label>

                              <div class="col-md-6">
                                  {{-- <input id="blood" type="text" class="form-control" name="blood" pattern="{a,b,o,ab}" required> --}}
                                  <select id="blood" name="blood">
                                      <option value="a">A</option>
                                      <option value="b">B</option>
                                      <option value="ab">AB</option>
                                      <option value="o">O</option>
                                  </select>
                                  @if ($errors->has('blood'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('blood') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('province') ? ' has-error' : '' }}">
                              <label for="province" class="col-md-4 control-label">Province</label>

                              <div class="col-md-6">
                                  <input id="province" type="text" class="form-control" name="province" required>

                                  @if ($errors->has('province'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('province') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('birthyear') ? ' has-error' : '' }}">
                              <label for="birthyear" class="col-md-4 control-label">Birthyear</label>

                              <div class="col-md-6">
                                  <input id="birthyear" type="integer" class="form-control" name="birthyear" required>

                                  @if ($errors->has('birthyear'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('birthyear') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('phone') ? ' has-error' : '' }}">
                              <label for="phone" class="col-md-4 control-label">Phone</label>

                              <div class="col-md-6">
                                  <input id="phone" type="integer" class="form-control" name="phone" required>

                                  @if ($errors->has('phone'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('phone') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group{{ $errors->has('bcountdonate') ? ' has-error' : '' }}">
                              <label for="countdonate" class="col-md-4 control-label">Countdonate</label>

                              <div class="col-md-6">
                                  <input id="countdonate" type="integer" class="form-control" name="countdonate" required>

                                  @if ($errors->has('countdonate'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('countdonate') }}</strong>
                                      </span>
                                  @endif
                              </div>
                          </div>

                          <div class="form-group">
                              <div class="col-md-6 col-md-offset-4">
                                  <button type="submit" class="btn btn-primary">
                                      Register
                                  </button>
                              </div>
                          </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
