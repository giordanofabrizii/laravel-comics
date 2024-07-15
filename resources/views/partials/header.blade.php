<header>
    <img src="{{ Vite::asset('resources/img/dc-logo.png') }}" alt="dc logo">
    <ul>
        <li>
            characters
        </li>
        <li class="active">
            Comics
        </li>
        <li>
            movies
        </li>
        <li>
            tv
        </li>
        <li>
            games
        </li>
        <li>
            collectibles
        </li>
        <li>
            videos
        </li>
        <li>
            fans
        </li>
        <li>
            news
        </li>
        <li>
            shop
        </li>
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

        ul{
            display: flex;
            li{
                text-transform: uppercase;
                margin: 1.5rem;
                height: 2.5rem;

                &.active{
                    border-bottom: 5px solid #0282f9;
                }
            }
        }
    }
</style>
