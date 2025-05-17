<div class="card">
    <div class="card__wrapper">
        <div class="card__row">
            <div class="items-center bg-gray-50 rounded-lg shadow sm:flex dark:bg-gray-800 dark:border-gray-700 mb-6">
                <a href="#">
                    <img class="w-full rounded-lg sm:rounded-none sm:rounded-l-lg" src="https://flowbite.s3.amazonaws.com/blocks/marketing-ui/avatars/bonnie-green.png" alt="Bonnie Avatar">
                </a>
                <div class="p-5">
                    <h3 class="text-xl font-bold tracking-tight text-gray-900 dark:text-white">
                        <a href="#">{{$username}}</a>
                    </h3>
                    <span class="text-gray-500 dark:text-gray-400">{{$contact}}</span>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">  Статус: {{ $status->status_name }}</p>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">  Создание: {{ $created }}</p>
                    <p class="mt-3 mb-4 font-light text-gray-500 dark:text-gray-400">  Обнавлён: {{ $updated}}</p>
                    <ul class="flex space-x-4 sm:mt-0">
                        <li>
                            <x-link-button href="/clients/show/{{ $id }}" type="primary">
                                Подробнее
                            </x-link-button>
                        </li>
                    </ul>
                </div>
            </div>
    </div>
</div>
