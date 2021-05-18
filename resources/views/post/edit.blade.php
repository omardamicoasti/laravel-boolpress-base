@extends('layouts.layout')

@section('title', 'Edit post')

@section('content')
    <!DOCTYPE html>
<html>
<head>
<style>
* {
  box-sizing: border-box;
}

input, select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: rgb(61, 61, 61);
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
  margin-top: 20px;
}

input[type=submit]:hover {
  background-color: #33ccff;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<div class="container">
  <form action="{{ route("post.update", $post->id) }}" method="post">
    @csrf
    @method("PUT")
  <div class="row">
    <div class="col-25">
      <label for="fname">User</label>
    </div>
    <div class="col-75">
      <input value="{{$post["user"]}}" type="text" id="fname" name="user" placeholder="Your username..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="lname">Picture</label>
    </div>
    <div class="col-75">
      <input value="{{$post["picture"]}}" type="text" id="lname" name="picture" placeholder="Your profile picture..">
    </div>
  </div>
  <div class="row">
    <div class="col-25">
      <label for="subject">Body</label>
    </div>
    <div class="col-75">
      <input value="{{$post["body"]}}" id="subject" name="body" placeholder="Write something.." style="height:200px">
    </div>
  </div>
  <div class="row">
    <input type="submit" value="Submit">
  </div>
  </form>
</div>

</body>
</html>


@endsection