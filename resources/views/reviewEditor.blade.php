@extends('layouts.app')

@section('content')
  <div class="container">
      <div class="row">
          <div class="col-md-8 col-md-offset-2">
              <div class="panel panel-default">
                  <div class="panel-heading">Review Editor</div>

                  <div class="panel-body">
                      <form class="form-horizontal" method="POST" action="{{ route('login') }}">
                          {{ csrf_field() }}

                          <div class="form-group{{ $errors->has('title') ? ' has-error' : '' }} mx-2">
                              <label for="title" class="control-label">Title</label>

                                <input id="title" type="text" class="form-control" name="title" value="{{ old('title') }}" required autofocus>

                                @if ($errors->has('title'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('title') }}</strong>
                                    </span>
                                @endif
                          </div>

                          <!-- From Official bootstrap examples and https://www.w3schools.com/bootstrap/bootstrap_forms_inputs.asp. -->
                          <div class="form-group{{ $errors->has('content') ? ' has-error' : '' }} mx-2">
                              <label for="review">Review</label>
                              <textarea class="form-control" id="content" rows="5" name="content" required></textarea>

                                  @if ($errors->has('content'))
                                      <span class="help-block">
                                          <strong>{{ $errors->first('content') }}</strong>
                                      </span>
                                  @endif
                          </div>

                          <div class="form-group mx-2 float-right">
                            <button type="submit" class="btn btn-primary">
                                Send
                            </button>
                          </div>

                      </form>
                  </div>
              </div>
          </div>
      </div>
  </div>
@endsection
