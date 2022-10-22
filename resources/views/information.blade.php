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
    <form action="{{route('information.store')}}" method="post" class="d-flex justify-content-evenly">
        {{ csrf_field() }}
        <section>
            <div>
                <input
                    type="text"
                    name="Grade"
                    class="form-control mt-3"
                    placeholder="کلاس چندمی؟"
                />
                @if($errors->has('Grade'))
                    <span class="has_error text-danger">{{ $errors->first('Grade') }}</span>
                @endif
                <input
                    type="text"
                    name="Age"
                    class="form-control mt-3"
                    placeholder="چند سالته؟"
                />
                @if($errors->has('Age'))
                    <span class="has_error text-danger">{{ $errors->first('Age') }}</span>
                @endif
            </div>
            <div class="my-4">
                <span> جنسیتت چیه? </span>
                <div class="d-flex mt-2">
                    <div>
                        <span>پسرم</span>
                        <input type="radio" name="gender" value="0" />
                    </div>
                    <div class="mx-4">
                        <span>دخترم</span>
                        <input type="radio" name="gender" value="1" />
                    </div>
                    @if($errors->has('gender'))
                        <span class="has_error text-danger">{{ $errors->first('gender') }}</span>
                    @endif
                </div>
            </div>
            <div class="d-flex flex-column">
                <span>اینجا ازت میخوام نمراتت رو وارد کنی</span>
                <input type="text" class="form-control mt-3" name="Math" placeholder="ریاضی" />
                @if($errors->has('Math'))
                    <span class="has_error text-danger">{{ $errors->first('Math') }}</span>
                @endif

                <input type="text" class="form-control mt-3" name="Science" placeholder="علوم" />
                @if($errors->has('Science'))
                    <span class="has_error text-danger">{{ $errors->first('Science') }}</span>
                @endif

                <input type="text" class="form-control mt-3" name="History" placeholder="تاریخ" />
                @if($errors->has('History'))
                    <span class="has_error text-danger">{{ $errors->first('History') }}</span>
                @endif
            </div>
        </section>
        <section>
            <div class="my-5">
                <span> اعتقاداتت چطوریه </span>
                <div>
                    <span>مذهبی ام</span>
                    <input type="radio" name="Beliefs" value="0" />
                </div>
                <div class="mt-2">
                    <span>زیاد مذهبی نیستم</span>
                    <input type="radio" name="Beliefs" value="1" />
                </div>
                @if($errors->has('Beliefs'))
                    <span class="has_error text-danger">{{ $errors->first('Beliefs') }}</span>
                @endif
            </div>
            <div>
                <span> دوست داری چیگاره بشی؟ </span>
            </div>
            <div class="mt-3">
                <select id="jobs" name="Job">
                    <option value="doctor">دکتر</option>
                    <option value="engineer">مهندس</option>
                    <option value="cop">پلیس</option>
                    <option value="lawyer">وگیل</option>
                    <option value="programmer">برنامه نویس</option>
                    <option value="actor">بازیگر</option>
                    <option value="the astronaut">فضانورد</option>
                </select>
                @if($errors->has('Job'))
                    <span class="has_error text-danger">{{ $errors->first('Job') }}</span>
                @endif
            </div>
        </section>
        <input type="submit" value="ثبتش کن" class="btn btn-success m-3" />
    </form>
</main>

<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.min.js"
    integrity="sha384-IDwe1+LCz02ROU9k972gdyvl+AESN10+x7tBKgc9I5HFtuNz0wWnPclzo6p9vxnk"
    crossorigin="anonymous"
></script>
</body>
</html>
