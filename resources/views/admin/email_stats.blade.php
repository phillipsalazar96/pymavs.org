@extends('layouts.app')
@section('content')
<div class="center-box">
        <h2>Number of people that sign up: {{ $people }}</h2>

        <h3>Programming expereince</h3>
        <ul>

            <li>none: {{ $gpe[0] }}</li>
            <li>A liitle: {{ $gpe[1] }}</li>
            <li>intermidate: {{ $gpe[2] }}</li>
            <li>Expert: {{ $gpe[3] }}</li>

        </ul>

        <h3>Python expereince</h3>
        <ul>

            <li>none: {{ $ppe[0] }}</li>
            <li>A liitle: {{ $ppe[1] }}</li>
            <li>intermidate: {{ $ppe[2] }}</li>
            <li>Expert: {{ $ppe[3] }}</li>

        </ul>

        <h3>Topics</h3>
        <ul>

            <li>Python Basic: {{ $topics['python_basic']  }}</li>
            <li>Linux Basic: {{ $topics['linux_biasic']  }}</li>
            <li>Data Science: {{ $topics['data_science']  }}</li>
            <li>Game development: {{ $topics['game_development']  }}</li>
            <li>Web Development: {{ $topics['web_development']  }}</li>
            <li>Machine Learning: {{ $topics['machine_learning']  }}</li>
            <li>Security: {{ $topics['security']  }}</li>

        </ul>

        <br/>
        <a href="/csv" target="_blank">Download CSV File</a>
</div>
@endsection