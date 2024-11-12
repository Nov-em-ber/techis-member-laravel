<!DOCTYPE html>
<html>
<head>
    <title>会員登録</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <div class="container">
        <h1>会員登録</h1>
        <form method="post" action="{{ route('members.store') }}">
            @csrf
            名前: <input type="text" name="name" required><br>
            電話番号: <input type="text" name="phone" required><br>
            メールアドレス: <input type="email" name="email" required><br>
            <button type="submit" class="btn btn-success">登録</button>
        </form>
    </div>
</body>
</html>
