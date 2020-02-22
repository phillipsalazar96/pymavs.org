@include('layouts.app')

<div class="posts-box about-box">
<h1>About</h1>
<hr/>
<form method="post" action="{{ action('EmailController@store') }}" accept-charset="UTF-8">
    <input type="email" name="email" placeholder="Email...">
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <input type="submit" value="Sign up!">
</form>
</div>

