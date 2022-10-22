<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>baby step</title>
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi"
        crossorigin="anonymous"
    />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}" />
</head>
<body dir="rtl">
<main class="container my-5">
    <form action="{{route('test.create')}}" method="post" class="justify-content-evenly">
        {{ csrf_field() }}
        @foreach($q as $ques)
            <div class="my-4">
                <span>{{ $ques['question'] }}</span>
                <div class="mt-2">
                    @php
                        $question = json_decode($ques['answer'],1);
                        $scores = json_decode($ques['score'],1);
                        $questions = array_combine($scores,$question);
                    @endphp
                    @foreach($questions as $key=>$qq)
                    <div class="mx-4 d-flex">
                        <span>{{ \Illuminate\Support\Str::after($qq,':') }}</span>
                        <input type="radio" name="question{{ $ques['id'] }}" value="{{ \Illuminate\Support\Str::after($key,':') }}" />

                    </div>
                    @endforeach
                </div>

            </div>
        @endforeach
        <input type="submit" value="نمایش تست" class="btn btn-success m-3" />
    </form>
</main>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"
></script>
</body>
</html>
