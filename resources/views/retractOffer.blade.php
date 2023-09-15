<!DOCTYPE html>
<html lang="en">
<head>
    <title>Pokémon Center - Retract Offer</title>
    <meta charset="UTF-8">
</head>
<body>
@include('components.header')
<div id="content">
    @include('components.nav')
    <table id="content_table">
        <tbody>
        <tr>
            <x-profiles/>
            <td id="main">
                <div class="block">
                    <div class="title"><p>Pokemon - <a
                                href="{{ url()->previous() }}">Go Back</a></p></div>
                    <div class="content">
                        <p>You wish to retract this offer?</p>
                    </div>
                </div>

                <div id="tradeUi" class="block">
                    <h2 style="text-align: center">Retract offer?</h2>
                    <x-offer :id="$id" type="NONE"/>
                    <div style="text-align: center">
                        <form method="post">
                            @csrf
                            <button type="submit">Retract?</button>
                        </form>
                    </div>
                </div>
            </td>
        </tr>
        </tbody>
    </table>
</div>
</body>
</html>
