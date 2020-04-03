@extends('layouts.front')
@section('title', '登録済みProfile一覧')

@section('content')
    <div class="container">
        <div class="row">
            <h2>Profile一覧</h2>
            <div class="list-profile col-md-12 mx-auto">
                    <table class="table table-dark">
                        <thead>
                            <tr>
                                <th width="10%">ID</th>
                                <th width="20%">名前</th>
                                <th width="10%">性別</th>
                                <th width="20%">趣味</th>
                                <th width="30%">自己紹介</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($posts as $profile)
                                <tr>
                                    <th>{{ $profile->id }}</th>
                                    <td>{{ \Str::limit($profile->name, 100) }}</td>
                                    <td>{{ \Str::limit($profile->gender, 100) }}</td>
                                    <td>{{ \Str::limit($profile->hobby, 100) }}</td>
                                    <td>{{ \Str::limit($profile->introduction, 100) }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
@endsection