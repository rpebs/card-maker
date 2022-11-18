<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://kit.fontawesome.com/09bae18984.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter" />
    <title>Ramadhany Card Profil</title>
</head>

<body style="background: {{ $profil->bg_color }}">

    <div class="card-container" style="background: {{ $profil->card_color }}">
        <img src="{{ url('/images/' . $profil->gambar) }}" width="500" class="rounded" alt="" />
        <div class="card-title">
            <h3>{{ $profil->nama }}</h3>
        </div>
        <p class="card-subtitle">{{ $profil->pekerjaan }}</p>
        <p class="card-desc">
            {{ $profil->deskripsi }}
        </p>
        <div class="button">
            <a href="https://wa.me/{{ $profil->no_hp }}?text=Hey%20Can%20i%20Ask%20You%20%3F"><button
                    class="btn-primary">Message</button></a>
            <a href="{{ $profil->instagram }}"><button class="btn-outline">Follow Me</button></a>
        </div>
        <div class="social-media">
            <ul>
                <a href="{{ $profil->facebook }}">
                    <li class="fa-brands fa-facebook"></li>
                </a>
                <a href="{{ $profil->instagram }}">
                    <li class="fa-brands fa-instagram"></li>
                </a>

                <a href="mailto:{{ $profil->google }}">
                    <li class="fa-brands fa-google"></li>
                </a>

                <a href="{{ $profil->github }}">
                    <li class="fa-brands fa-github"></li>
                </a>

                <a href="{{ $profil->linkedin }}">
                    <li class="fa-brands fa-linkedin"></li>
                </a>
            </ul>
        </div>
        <div class="skills">
            <h6>Skills</h6>
            <ul>
                @foreach ($profil->tags as $tag)
                    <li>{{ $tag->name }}</li>
                @endforeach

            </ul>
        </div>
    </div>
</body>


</html>
