


<x-layout>


   <div class="account">
        <div class="account__title">
            <h2 class="title">Ваши данные</h2>
        </div>
        <div class="account__body">
            <p>email:  {{$userData -> email}} </p>
            <p>аккаунта:  {!! $userData -> active == 0 ? 'активирован' : 'заблокирован' !!} </p>
            <p>статус аккаунта:  {{$userData -> status}} </p>
            @if ($userData -> status == 'user')
                <p>отправить запрос на изменение статуса с юзера на модератора:
                    @if ($userData -> request_moderator == 0)
                        <a href="/public/account/change_status">отправить запрос</a>
                    @else
                        <a href="/public/account/cancel_change_status">отменить запрос</a>
                        <span style="color:green;">(запрос отправлен)</span>
                    @endif
                </p>
            @endif
        </div>
   </div>

</x-layout>
