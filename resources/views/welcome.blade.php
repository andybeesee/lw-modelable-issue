<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body class="antialiased">
       <div>

           {{-- Two volt components throws an error --}}
           <livewire:v-one />

           <livewire:v-two />

           {{-- Two Livewire components, does the same thing --}}
           {{--<livewire:lw-one />

           <livewire:lw-two />--}}

       </div>
    </body>
</html>
