<div class="card">
    <div class="card__wrapper">
        <div class="card__row">
            <div class="card__column">
                <span>
                    ID: {{ $id }}
                </span>
            </div>
            <div class="card__column">
                <span>
                    Имя клиента: {{ $username }}
                </span>
            </div>
            <div class="card__column">
                <span>
                    Контакты: {{ $contact }}
                </span>
            </div>
        </div>
        <div class="card__row">
            <div class="card__column">
                <span>
                    Дата создания: {{ $created }}
                </span>
            </div>
            <div class="card__column">
                <span>
                    Дата редактирования: {{ $updated }}
                </span>
            </div>
            <div class="card__column">
                <span>
                    <a href="/clients/show/{{ $id }}">
                        Подробнее
                    </a>
                </span>
            </div>
        </div>
    </div>
</div>
