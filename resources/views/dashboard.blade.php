@php use App\Clients\RandomApi\V2\Entities\UserEntity; @endphp
    <!doctype html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Random Api Dashboard</title>
    @vite('resources/css/app.css')
</head>
<body class="bg-gray-200">
<header class="w-full border-black border-b-2">
    <h3 class="text-center text-4xl font-medium text-black my-1">Random Api Dashboard</h3>
</header>
<main class="w-full mt-2 flex justify-center">
    @isset($message)
        <div class="min-w-full h-6 text-center bg-red-500 text-white">{{ $message  }}</div>
    @endisset

    @if(count($users) > 0)
        <div class="w-[1500px] bg-white overflow-hidden shadow-md sm:rounded-lg mx-5 overflow-x-auto">
            <div class="flex flex-row divide-x divide-gray-300 border-b-2 border-gray-300">
                <div class="p-2 text-center font-semibold w-1/12">Avatar</div>
                <div class="p-4 text-center font-semibold w-1/12">Usuário</div>
                <div class="p-4 text-center font-semibold w-2/12">Email</div>
                <div class="p-4 text-center font-semibold w-2/12">Nome</div>
                <div class="p-4 text-center font-semibold w-1/12">Gênero</div>
                <div class="p-4 text-center font-semibold w-2/12">Telefone</div>
                <div class="p-4 text-center font-semibold w-2/12">Data de Nascimento</div>
                <div class="p-4 text-center font-semibold w-1/12">Ações</div>
            </div>

            @php
                /** @var UserEntity $user */
            @endphp
            @foreach($users as $user)
                <div class="flex flex-row border-b-2 border-gray-300">
                    <div class="p-2 text-center font-semibold w-1/12 flex justify-center items-center">
                        <img class="w-[50px] h-[50px]" src="{{ $user->image }}" alt="avatar">
                    </div>
                    <div
                        class="p-4 text-center font-semibold w-1/12 flex justify-center items-center"> {{ $user->username }} </div>
                    <div
                        class="p-4 text-center font-semibold w-2/12 flex justify-center items-center"> {{ $user->email }} </div>
                    <div
                        class="p-4 text-center font-semibold w-2/12 flex justify-center items-center">{{ $user->name->fullName() }}</div>
                    <div
                        class="p-4 text-center font-semibold w-1/12 flex justify-center items-center">{{ $user->gender }}</div>
                    <div
                        class="p-4 text-center font-semibold w-2/12 flex justify-center items-center">{{ $user->phone }}</div>
                    <div
                        class="p-4 text-center font-semibold w-2/12 flex justify-center items-center"> {{ $user->dateOfBirth->format('d/m/Y')  }} </div>
                    <div class="p-4 text-center font-semibold w-1/12 flex justify-center items-center">
                        <button
                            title="Informações adicionais"
                            class="text-blue-500 hover:text-blue-700 focus:outline-none focus:text-blue-700"
                            data-show-details="{{ $user->id }}"
                        >
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                 xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                      d="M19 9l-7 7-7-7"></path>
                            </svg>
                        </button>
                    </div>
                </div>
                <div
                    id="details-{{ $user->id }}"
                    class="hidden border-b-2 border-gray-300">
                    <div class="w-full mx-auto bg-white p-4 shadow-md rounded-md">
                        <h3 class="text-2xl font-semibold mb-4 text-center">Detalhes do {{ $user->username  }}</h3>

                        <!-- Tabs -->
                        <div class="mb-4 flex justify-center items-center">
                            <div class="tab-content flex flex-col justify-center items-start">
                                <div class="flex justify-between">
                                    <h4>Trabalho:</h4>
                                    <div class="flex flex-col align-center justify-center ml-6">
                                        <div class="text-sm">
                                            <strong>Cargo:</strong> {{ $user->job->title }}
                                        </div>
                                        <div class="text-sm">
                                            <strong>Habilidade principal:</strong> {{ $user->job->keySkill }}
                                        </div>
                                    </div>
                                </div>
                                <div class="flex justify-between">
                                    <h4>Endereço:</h4>
                                    <div class="grid grid-cols-2 gap-4 mt-4  ml-6">
                                        <div>
                                            <p class="text-sm">
                                                <strong>Rua:</strong> {{ $user->address->street_name . $user->address->street_address }}
                                            </p>
                                            <p class="text-sm"><strong>Cidade:</strong> {{ $user->address->city }}</p>
                                            <p class="text-sm"><strong>Estado:</strong> {{ $user->address->state }}</p>
                                            <p class="text-sm"><strong>País:</strong> {{ $user->address->country }}</p>
                                            <p class="text-sm"><strong>Código Postal:</strong> {{ $user->address->zip }}
                                            </p>
                                        </div>
                                        <div>
                                            <!-- Exibição das coordenadas do endereço -->
                                            <h3 class="text-sm font-semibold mb-2">Coordenadas:</h3>
                                            <p class="text-sm">
                                                <strong>Latitude:</strong> {{ $user->address->coordinates->latitude }}
                                            </p>
                                            <p class="text-sm">
                                                <strong>Longitude:</strong> {{ $user->address->coordinates->longitude }}
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
</main>
<button id="scrollToTopBtn"
        class="fixed bottom-4 right-4 bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded hidden">
    Ir para cima
    <span class="ml-2">&#9650;</span> <!-- Símbolo de seta para cima -->
</button>
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const scrollToTopBtn = document.getElementById("scrollToTopBtn");

        window.addEventListener("scroll", function () {
            if (window.scrollY > 100) {
                scrollToTopBtn.classList.remove("hidden");
            } else {
                scrollToTopBtn.classList.add("hidden");
            }
        });

        scrollToTopBtn.addEventListener("click", function () {
            scrollToTop();
        });

        function scrollToTop() {
            window.scrollTo({
                top: 0,
                behavior: "smooth"
            });
        }

        document.querySelectorAll("[data-show-details]").forEach(function (teste) {
            teste.addEventListener("click", function (event) {
                const userId = this.dataset.showDetails;
                toggleDetails(userId);
            });
        })

        function toggleDetails(userId) {
            const detailsRow = document.getElementById(`details-${userId}`);
            detailsRow.classList.toggle("hidden");
            // Adiciona ou remove a classe 'details' para acionar a transição de altura máxima
            setTimeout(() => {
                detailsRow.classList.toggle("details");
            }, 10);
        }
    });
</script>

<style>
    .details {
        transition: max-height 0.3s ease-out;
        overflow: hidden;
    }
</style>
</body>
</html>
