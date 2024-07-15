<header>
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo">
    <ul>
        @foreach ($links as $link)
            <li class="{{ $link['active'] ? 'active' : '' }}">
                {{ $link['name'] }}
            </li>
        @endforeach
    </ul>
</header>

<style>
@import '~resources/scss/partials/variables.scss';
    header{
        display: flex;
        align-items: center;
        justify-content: space-between;
        max-width: 110rem;
        margin: 0 auto;
        height: 7rem;

        ul{
            display: flex;
            li{
                text-transform: uppercase;
                margin: 1.5rem;
                height: 7rem;
                display: flex;
                align-items: center;

                &.active{
                    border-bottom: 5px solid #0282f9;
                }
            }
        }
    }
</style>
