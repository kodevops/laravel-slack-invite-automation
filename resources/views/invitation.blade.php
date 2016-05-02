<!DOCTYPE html>
<html>
    <head>
        <title>동경에서 일하는 개발자 모임</title>
        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
        <link href="{{ asset("css/style.css") }}" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title">Kodevelopers</div>
                @if ($send_flg == true)
                    <h1>초대 메일을 송신 했습니다.</h1>
                    <form method="get">
                        {!! csrf_field() !!}
                        <input type="submit" value="Back">
                    </form>
                @else
                    <h1>Slack : 동경에서 일하는 개발자 모임</h1>
                    <form method="post">
                        {!! csrf_field() !!}
                        <input type="email" name="email" value="{{ $email }}" placeholder="you@yourdomain.com" autofocus="true" class="{{ $err_msg !== '' ? 'error' : '' }}"">
                        @if ($err_msg !== '')
                            <span class="error-span error">{{ $err_msg }}</span>
                        @endif
                        <input type="submit" value="Invite">
                    </form>
                @endif
            </div>
        </div>
    </body>
</html>
