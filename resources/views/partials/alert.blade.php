@if (Session::has('success'))
<div class="alert alert-success container">{{session::get('success')}}</div>
@endif @if (Session::has('warning'))
<div class="alert alert-warning container">{{session::get('warning')}}</div>
@endif