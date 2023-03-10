<?php
$record = 5;
$reco = '';
$emptyArray = [];

?>



<html>

<body>

    @if ($cognome != '')
        Il cognome è <p>{{ $cognome }}</p>
    @endif

    @unless($nome == '')
        {{--  inverso di if --}}
        {{ $nome }}
    @endunless

    @isset($nome)
        nome è settato
    @endisset

    @isset($xxx)
        xxx è settato //non lo mostra non settato
    @endisset

    @empty($reco)
        reco è vuoto
    @endempty

    @empty($emptyArray)
        array è vuoto
    @endempty

    <hr>

    @auth
        Se sei un admin vedi questo codice <br>
    @endauth

    @guest
        Noi guest vediamo questo<br>
    @endguest

    @if (env('APP_ENV') == 'local')
        <?php var_dump($record); ?>
    @endif

    <?php
    $i = 3;
    ?>

    @switch($i)
        @case(1)
            First case...
        @break

        @case(2)
            Second case...
        @break

        @default
            Default case...
    @endswitch
    <hr>
    @for ($i = 0; $i < 10; $i++)
        The current value is {{ $i }}<br>
    @endfor

    <hr>
    @php
        $isActive = false;
        $hasError = true;
    @endphp

    <span @class([
        'p-4',
        'font-bold'=> $isActive,
        'text-gray-500' => !$isActive,
        'bg-red' => $hasError,
    ])>La mia stringa</span>

    Qui sotto il mio componente<br>

    @php
    $isActive = true;
@endphp
 
<span @style([
    'background-color: grey',
    'font-weight: bold' => $isActive,
])>stile css</span>
 
<span style="background-color: grey; font-weight: bold;"></span>

    @php
        $message = 'Non funziona nulla!';
        $type = 'error';
        $kebab = 'tanta salsa';
        $value = 'selected';
    @endphp

    {{-- type glielo passo come variabile blade, message come variabile php --}}
    <x-alert type="{{ $type }}" :message="$message" alert-type="{{ $kebab }}" value="{{ $value }}" />


    @php
        $message = 'Funziona bene';
        $type = 'Good';
        $kebab = 'niente salsa';
        $value = '';
    @endphp
    {{-- Short attribute syntax se variabile si chiama come parametro --}}
    <x-alert :$type :$message alert-type="{{ $kebab }}" value="{{ $value }}" />

    <x-sidebar>
        <ul>
            <li>Home</li>
            <li>Articles</li>
            <li>About</li>
        </ul>
    </x-sidebar>


    @inject('hello', 'App\Services\HelloService')

    <div>
        Saluta: {{ $hello->sayCiao() }}.
    </div>



</body>

</html>