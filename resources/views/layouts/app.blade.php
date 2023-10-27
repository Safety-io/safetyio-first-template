<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
{{--    @vite(['resources/css/app.css', 'resources/js/app.js'])--}}
    <link rel="stylesheet" href="{{ asset("/assets/app.css") }}">
{{--    <script src="{{ asset("/assets/app.js") }}"> </script>--}}
{{--    <script src="{{ asset("/assets/app.js") }}" defer> </script>--}}

    <script>
        import './bootstrap';
        import.meta.glob([
            '../images/**',
            '../fonts/!**',
        ]);
        const showMenu = document.getElementById('showMenu');
        const menu = document.querySelector('ul');
        showMenu.addEventListener('click', () => {
            menu.classList.toggle('hidden');
        })
        window.addEventListener("load", function () {

            document.querySelectorAll('[toggleElement]').forEach((toggle) => {
                toggle.addEventListener("click", function (event) {
                    console.log(toggle);
                    const answerElement = toggle.querySelector("[answer]");
                    const caretElement = toggle.querySelector("img");
                    console.log(answerElement);
                    if (answerElement.classList.contains("hidden")) {
                        answerElement.classList.remove("hidden");
                        caretElement.classList.add("rotate-90");
                    } else {
                        answerElement.classList.add("hidden");
                        caretElement.classList.remove("rotate-90");
                    }
                });
            });
        });
        /*document
            .querySelector("input[id='toggle']")
            .addEventListener("change", function() {
                let span = document.querySelector("label[for='toggle']")
                span.ariaChecked = this.checked ? "true" : "false";
                if (!this.checked) {
                    span.classList.remove("translate-x-3.5")
                    span.classList.add("translate-x-0")
                } else {
                    span.classList.remove("translate-x-0")
                    span.classList.add("translate-x-3.5")
                }

            });*/

    </script>
    <script src="https://cdn.tailwindcss.com"></script>
    <title>@yield('title')</title>
</head>
<body>

@section('sidebar')
@include('layouts.header')
@show
@yield('content')
</body>
</html>
