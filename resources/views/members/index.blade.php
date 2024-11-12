<!DOCTYPE html>
<html>
<head>
    <title>会員一覧</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>
    <div class="container">
        <h1 class="itiran">会員一覧</h1>
        <a href="{{ route('members.create') }}" class="btn btn-success">新規会員登録</a>
        <table class="table">
            <thead>
                <tr class="ran">
                    <th class="name">名前</th>
                    <th class="phone">電話番号</th>
                    <th class="mail">メールアドレス</th>
                    <th class="hensyu">編集</th>
                </tr>
            </thead>
            <tbody>
                @foreach($members as $member)
                    <tr>
                        <td>{{ $member->name }}</td>
                        <td>{{ $member->phone }}</td>
                        <td>{{ $member->email }}</td>
                        <td>
                            <a href="{{ route('members.edit', $member->id) }}" class="btn btn-primary">編集</a>
                            <form action="{{ route('members.destroy', $member->id) }}" method="POST" style="display:inline-block;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">削除</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
