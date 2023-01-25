
    <main class="main-content ">
        <div class="main-content_wrapper _container">
            {{-- <x-main.nav type="error" :message="$a"/> --}}
            {{-- <x-main.nav/> --}}

            @if (!empty($slot))
                {{$slot}}
            @endif
            @php
                // dump(route('showHistories'));
                // dump(route('showLayout'));
                // dump(url()->current());
                // dd(request()->getHttpHost());
            @endphp



            {{-- если пользователь находится на главной странице--}}
            @auth

                @if (route('showLayout') == url()->current() and auth() -> user() -> status == 'moderator')
                    <div class="main-histories">
                        <div class="main-histories__title">
                            <h2 class="main-histories__title_text title">Истории на рассмотрение модератором</h2>
                        </div>
                        <div class="main-add__link">
                            <p><a href="/histories_for_moderator" >Посмотореть все истории</a></p>
                        </div>
                    </div>
                @endif
            @endauth


            {{-- если пользователь находится на главной странице--}}

            @if (route('showLayout') == url()->current())
                <div class="main-histories">
                    <div class="main-histories__title">
                        <h2 class="main-histories__title_text title">Истории наших пользователей</h2>
                    </div>
                    <div class="main-add__link">
                        <p><a href="/histories" >Посмотореть все истории</a></p>
                    </div>
                </div>
            @endif






            {{-- если пользователь авторизован и находится на главной странице--}}
            @if (auth()->check() and route('showLayout') == url()->current())
                <div class="main-add">
                    <div class="main-add__title">
                        <h2 class="title">Добавьте свою историю</h2>
                    </div>
                    <div class="main-add__link">
                        <p><a href="/add_history" >Добваить историю</a></p>
                    </div>
                </div>


            {{-- компонент для отображения истории данного юзера--}}
                <x-main.histories/>

            @endif









            {{-- компонент для отображения юзеров данного сайта--}}
            @auth('admin')
                <x-main.users/>
            @endauth
        </div>

    </main>


