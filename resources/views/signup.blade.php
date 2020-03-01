@extends('layouts.app')
@section('content')

@if ($done == 0)
<div class="posts-box about-box">
<h1>About</h1>
<hr/>
<form method="post" action="{{ action('EmailController@store') }}" accept-charset="UTF-8">
    <input type="email" name="email" placeholder="Email...">
    <br/>
    <br/>
    <article>Programming Experience</article>
    <input type="radio" name="gpe" value="0"><label>None</label>
    <br/>
    <input type="radio" name="gpe" value="1"><label>Some</label>
    <br/>
    <input type="radio" name="gpe" value="2"><label>Experience</label>
    <br/>
    <input type="radio" name="gpe" value="3"><label>Expert</label>
    <br/>
    <br/>
    <article>Python Experience</article>
    <input type="radio" name="ppe" value="0"><label>None</label>
    <br/>
    <input type="radio" name="ppe" value="1"><label>Some</label>
    <br/>
    <input type="radio" name="ppe" value="2"><label>Experience</label>
    <br/>
    <input type="radio" name="ppe" value="3"><label>Expert</label>
    <br/>
    <br/>
    <article>Topics</article>
    <input type="checkbox" name="topics[]" value="python_basic"> <label>Python Basics</label>
    <br/>
    <input type="checkbox" name="topics[]" value="linux_basic"> <label>Linux Basics</label>
    <br/>
    <input type="checkbox" name="topics[]" value="data_science"> <label>Data Science</label>
    <br/>
    <input type="checkbox" name="topics[]" value="game_development"> <label>Game development</label>
    <br/>
    <input type="checkbox" name="topics[]" value="web_development"> <label>Web development</label>
    <br/>
    <input type="checkbox" name="topics[]" value="machine_learning"> <label>Machine Learning</label>
    <br/>
    <input type="checkbox" name="topics[]" value="security"> <label>Security</label>


    </br>
    <input name="_token" type="hidden" value="{{ csrf_token() }}"/>
    <input type="submit" value="Sign up!">
</form>
</div>
@else 

<div class="posts-box about-box">
    <h1>Thank for signing up</h1>
    <hr/>
    <a href="/signup/0">Sign up Again</a>
</div>


@endif

@endsection