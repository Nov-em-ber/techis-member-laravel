<!DOCTYPE html>
<html>
<head>
    <title>会員情報編集</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>会員情報編集</h1>
        <form method="post" action="{{ route('members.update', $member->id) }}">
            @csrf
            @method('PUT')
            名前: <input type="text" name="name" value="{{ $member->name }}" required><br>
            電話番号: <input type="text" name="phone" value="{{ $member->phone }}" required><br>
            メールアドレス: <input type="email" name="email" value="{{ $member->email }}" required><br>
            <button type="submit" class="btn btn-primary">更新</button>
        </form>
        <form method="post" action="{{ route('members.destroy', $member->id) }}" onsubmit="return confirm('本当に削除しますか？');">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger mt-3">削除</button>
        </form>
    </div>
</body>
</html>
