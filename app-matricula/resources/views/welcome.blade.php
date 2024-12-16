<!doctype html>
<html lang="pt-br">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0" />

    <title>Modulo Matricula</title>

    <meta name="description" content="Freebie 46 - Landing Software (Tailwind CSS). Check out more at https://pixelcave.com"/>
    <meta name="author" content="pixelcave"/>

    <!-- Icons -->
    {{--<link rel="icon" href="https://cdn.pixelcave.com/favicon.svg" sizes="any" type="image/svg+xml"/>--}}
    <link rel="icon" href="https://sentriweb.com.br/wp-content/uploads/2024/12/favicon-32x32-1.png" type="image/png"/>

    <!-- Inter web font from bunny.net (GDPR compliant) -->
    <link rel="preconnect" href="https://fonts.bunny.net" />
    <link href="https://fonts.bunny.net/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet"/>

    <!-- Tailwind CSS Play CDN (mainly for development/testing purposes) -->
    <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
    <script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="120834f2-d089-452f-805f-e9b3c1ad87de";
        (function(){d=document;s=d.createElement("script");
            s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();
    </script>

    <!-- Tailwind CSS v3 Configuration -->
    <script>
        const defaultTheme = tailwind.defaultTheme;
        const colors = tailwind.colors;
        const plugin = tailwind.plugin;

        tailwind.config = {
            darkMode: "class",
            theme: {
                extend: {
                    fontFamily: {
                        sans: ["Inter", ...defaultTheme.fontFamily.sans],
                    },
                },
            },
        };
    </script>
</head>
<body>
<!-- Page Container -->
<div
    id="page-container"
    class="mx-auto flex min-h-screen w-full flex-col bg-gray-100"
>
    <!-- Page Content -->
    <main id="page-content" class="flex max-w-full flex-auto flex-col">
        <!-- Hero -->
        <div class="relative bg-white">
            <div class="absolute inset-0 -skew-y-3 bg-gradient-to-t from-blue-50 to-white">

            </div>
            <!-- Header -->
            <header id="page-header" class="relative flex flex-none items-center py-10 bg-green-600">
                <div class="container mx-auto flex flex-col gap-6 px-4 text-center sm:flex-row sm:items-center sm:justify-between sm:gap-0 lg:px-10 xl:max-w-6xl">
                    <div class="mr-8">
                        <a target="_blank" href="https://www.camacari.ba.gov.br/" class="group inline-flex items-center gap-2 text-lg font-bold text-gray-800 transition hover:text-black">
                            <x-application-logo></x-application-logo>
                        </a>
                    </div>
                    <nav class="space-x-4 sm:space-x-6 ">
                        <a target="_blank" href="https://cgm.camacari.ba.gov.br/transparencia/" class="text-sm font-semibold text-white hover:text-green-900">
                            <span>TRANSPARÊNCIA</span>
                        </a>
                        <a target="_blank" href="https://municipioonline.com.br/ba/pmc/camacari/cidadao/ouvidoria" class="text-sm font-semibold text-white hover:text-green-900">
                            <span>OUVIDORIA</span>
                        </a>
                        <a target="_blank" href="https://www.camacari.ba.gov.br/arquivos/diario-oficial/"
                           class="text-sm font-semibold text-white hover:text-green-900">
                            <span>DIÁRIO OFICIAL</span>
                        </a>
                    </nav>
                    @if (Route::has('login'))
                        <nav class="-mx-3 flex flex-1 justify-center gap-4">
                            @auth
                                <a
                                    href="{{ url('/dashboard') }}"
                                    class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
                                >
                                    Dashboard
                                </a>
                            @else
                                <a
                                    href="{{ route('login') }}"
                                    class="bg-green-800 p-2 rounded-md text-white hover:bg-green-900 text-sm"
                                >
                                    Login
                                </a>

                                @if (Route::has('register'))
                                    <a
                                        href="{{ route('register') }}"
                                        class="bg-green-800 p-2 rounded-md text-white hover:bg-green-900 text-sm"
                                    >
                                        Cadastrar
                                    </a>
                                @endif
                            @endauth
                        </nav>
                    @endif
                    {{--<div class="flex flex-row gap-4 justify-center">
                        <a href="{{'professor.view.login'}}">
                            <div class="bg-green-800 p-2 rounded-md text-white hover:bg-green-900 text-sm">
                                Login Professor
                            </div>
                        </a>

                        <a href="{{'aluno.view.login'}}">
                            <div class="bg-green-800 p-2 rounded-md text-white hover:bg-green-900 text-sm">
                                Login Aluno
                            </div>
                        </a>

                        <a href="{{route('login.view.usuario')}}">
                            <div class="bg-green-800 p-2 rounded-md text-white hover:bg-green-900 text-sm">
                                Login
                            </div>
                        </a>
                    </div>--}}
                </div>
            </header>
            <!-- END Header -->

            <!-- Hero Content -->
            <div class="container relative mx-auto overflow-hidden px-4 py-16 lg:px-8 lg:py-32 xl:max-w-6xl">
                <div class="text-center">
                    <h2 class="mb-4 text-3xl font-black md:text-5xl">
                        Explore o Conhecimento na <br> <span class="text-green-600">Cidade do Saber!</span>
                    </h2>
                    <h3 class="mx-auto text-balance text-lg font-medium text-gray-500 md:text-xl md:leading-relaxed lg:w-2/3">
                        Aqui você encontra cursos, oficinas, cultura e oportunidades para transformar seu futuro
                    </h3>
                </div>
                <div class="flex flex-wrap justify-center gap-4 pb-24 pt-10">
                    {{--<a href="javascript:void(0)"
                       class="inline-flex items-center justify-center gap-2 rounded bg-green-700 px-6 py-3 font-semibold leading-6 text-white transition hover:border-green-800 hover:bg-green-800 hover:text-white focus:outline-none focus:ring focus:ring-blue-500/50 active:border-blue-700 active:bg-blue-700">
                        <span>Matrícula online</span>
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                            data-slot="icon"
                            class="hi-mini hi-arrow-right inline-block size-5 opacity-50"
                        >
                            <path
                                fill-rule="evenodd"
                                d="M3 10a.75.75 0 0 1 .75-.75h10.638L10.23 5.29a.75.75 0 1 1 1.04-1.08l5.5 5.25a.75.75 0 0 1 0 1.08l-5.5 5.25a.75.75 0 1 1-1.04-1.08l4.158-3.96H3.75A.75.75 0 0 1 3 10Z"
                                clip-rule="evenodd"
                            />
                        </svg>
                    </a>--}}
                </div>
                <div
                    class="relative rounded-xl bg-white p-2 shadow-lg ring-1 ring-blue-100 lg:mx-40 lg:flex lg:items-center lg:justify-center"
                >
                    <div
                        class="absolute left-0 top-0 -ml-20 -mt-12 h-48 w-48 rounded-full bg-blue-200/50"
                    ></div>
                    <div
                        class="absolute right-0 top-0 -mr-16 -mt-20 h-32 w-32 rotate-3 rounded-xl bg-green-200/50"
                    ></div>
                    <div
                        class="absolute bottom-0 right-0 -mb-10 -mr-16 h-40 w-40 rounded-full bg-gray-200/50"
                    ></div>
                    <div
                        class="absolute bottom-0 left-0 -mb-16 -ml-12 h-20 w-20 -rotate-12 rounded-xl bg-red-200/50"
                    ></div>
                    <div class="aspect-h-10 aspect-w-16 w-full">
                    </div>
                    <img src="https://sentriweb.com.br/wp-content/uploads/2024/12/cidade-do-saber.png">
                </div>
            </div>
            <!-- END Hero Content -->
        </div>
        <!-- END Hero -->

        <!-- How it works Section -->
        <div class="bg-white">
            <div
                class="container mx-auto space-y-16 px-4 py-16 lg:px-8 lg:py-32 xl:max-w-6xl"

            >
                <!-- Heading -->
                <div class="text-center">
                    <h2 class="mb-4 text-3xl font-black md:text-5xl">Como funciona?</h2>
                    <h3
                        class="mx-auto text-balance text-lg font-medium text-gray-500 md:text-xl md:leading-relaxed lg:w-2/3"
                    >
                        É tão simples quanto parece
                    </h3>
                </div>
                <!-- END Heading -->

                <!-- Steps -->
                <div class="grid grid-cols-1 gap-4 sm:grid-cols-2 sm:gap-6 lg:grid-cols-3">
                    <div class="flex flex-col items-center gap-4 rounded-2xl border-2 border-green-50 bg-gradient-to-t from-green-50 to-white p-10 text-center transition hover:border-green-100">
                        <img class="w-28" src="https://sentriweb.com.br/wp-content/uploads/2024/12/sign-up.png">
                        <h4 class="mb-2 text-lg font-bold">
                            1. CADASTRO INICIAL
                        </h4>
                        <p class="text-left text-sm leading-relaxed text-gray-600">
                            Aqui em nosso portal procure a opção Matrícula online
                            com seus dados pessoais e de contato.
                            Certifique-se de fornecer informações corretas e atualizadas.
                        </p>
                    </div>

                    <div class="flex flex-col items-center gap-4 rounded-2xl border-2 border-green-50 bg-gradient-to-t from-green-50 to-white p-10 text-center transition hover:border-green-100">
                        <img class="w-28" src="https://sentriweb.com.br/wp-content/uploads/2024/12/homework.png">
                        <h4 class="mb-2 text-lg font-bold">
                            2. ESCOLHA DO CURSO OU ATIVIDADE
                        </h4>
                        <p class="text-left text-sm leading-relaxed text-gray-600">
                            Navegue pela lista de cursos, oficinas e atividades disponíveis.
                            Selecione a opção desejada e verifique os pré-requisitos e datas.
                        </p>
                    </div>
                    <div class="flex flex-col items-center gap-4 rounded-2xl border-2 border-green-50 bg-gradient-to-t from-green-50 to-white p-10 text-center transition hover:border-green-100 sm:col-span-2 lg:col-span-1">
                        <img class="w-28" src="https://sentriweb.com.br/wp-content/uploads/2024/12/customer.png">
                        <h4 class="mb-2 text-lg font-bold">3. CONFIRMAÇÃO E DOCUMENTAÇÃO</h4>
                        <p class="text-left text-sm leading-relaxed text-gray-600">
                            Após escolher sua atividade, siga as instruções para confirmar a matrícula.
                            É necessário informar numeros de CPF e RG válidos.
                        </p>
                    </div>
                </div>
                <!-- END Steps -->
            </div>
        </div>
        <!-- END How it works Section -->

        <!-- Features Section -->
        <div class="relative bg-white">
            <div
                class="absolute inset-0 skew-y-3 bg-gradient-to-t from-blue-50 to-white"
            ></div>
            <div
                class="container relative mx-auto space-y-16 px-4 py-16 lg:px-8 lg:py-32 xl:max-w-6xl"
            >
                <!-- Heading -->
                <div class="text-center">
                    <h2 class="mb-4 text-3xl font-black md:text-5xl">
                        Benefícios de Participar da Cidade do Saber
                    </h2>
                    <h3
                        class="mx-auto text-balance text-lg font-medium text-gray-600 md:text-xl md:leading-relaxed lg:w-2/3"
                    >
                        Transforme seu futuro com aprendizado de qualidade, desenvolvimento
                        pessoal e acesso a cultura e lazer. Aqui, conhecimento e oportunidades se encontram!
                    </h3>
                </div>
                <!-- END Heading -->

                <!-- Features -->
                <div class="grid grid-cols-1 gap-4 md:grid-cols-3 md:gap-12">

                    <div class="py-5 text-center">

                        <div class="relative mb-12 ml-3 inline-flex h-16 w-16 items-center justify-center">
                            <div class="absolute inset-0 -m-2 rotate-45 rounded-3xl bg-green-300">

                            </div>
                            <div class="flex flex-col items-center absolute inset-0 -m-2 rounded-3xl bg-green-600/75">
                                <img class="w-11 mt-4" src="https://sentriweb.com.br/wp-content/uploads/2024/12/check-circle.png">
                            </div>
                        </div>
                        <h4 class="mb-2 text-xl font-bold">Aprendizado de Qualidade</h4>
                        <p class="text-left leading-relaxed text-gray-600">
                            Acesso a cursos e oficinas com profissionais qualificados,
                            ampliando seu conhecimento e habilidades.
                        </p>
                    </div>

                    <div class="py-5 text-center">
                        <div class="relative mb-12 ml-3 inline-flex h-16 w-16 items-center justify-center">
                            <div class="absolute inset-0 -m-2 rotate-45 rounded-3xl bg-green-300"></div>
                            <div class="flex flex-col items-center absolute inset-0 -m-2 rounded-3xl bg-green-600/75">
                                <img class="w-11 mt-4" src="https://sentriweb.com.br/wp-content/uploads/2024/12/check-circle.png">
                            </div>
                        </div>
                        <h4 class="mb-2 text-xl font-bold">Desenvolvimento Pessoal e Profissional</h4>
                        <p class="text-left leading-relaxed text-gray-600">
                            Fortaleça suas competências para o mercado de
                            trabalho ou para crescimento pessoal.
                        </p>
                    </div>

                    <div class="py-5 text-center">
                        <div class="relative mb-12 ml-3 inline-flex h-16 w-16 items-center justify-center">
                            <div class="absolute inset-0 -m-2 rotate-45 rounded-3xl bg-green-300"></div>
                            <div class="flex flex-col items-center absolute inset-0 -m-2 rounded-3xl bg-green-600/75">
                                <img class="w-11 mt-4" src="https://sentriweb.com.br/wp-content/uploads/2024/12/check-circle.png">
                            </div>
                        </div>
                        <h4 class="mb-2 text-xl font-bold">Cultura e Lazer para Todos</h4>
                        <p class="text-left leading-relaxed text-gray-600">
                            Participe de eventos culturais, artísticos e esportivos que
                            enriquecem sua experiência e conectam a comunidade.
                        </p>
                    </div>

                </div>
                <!-- END Features -->
            </div>
        </div>
        <!-- END Features Section -->

        <!-- Pricing Section -->
        <div class="bg-white">
            <div class="container mx-auto space-y-10 px-4 py-16 lg:px-8 lg:py-32 xl:max-w-4xl">
                <!-- Heading -->
                <div class="flex flex-col items-center gap-4 text-center">
                    <h2 class="mb-4 text-3xl font-black md:text-5xl">
                        Equipe Bugados
                    </h2>
                    <img class="w-80" src="https://sentriweb.com.br/wp-content/uploads/2024/12/logo-bugados-nova.png">
                    <h3 class="mx-auto text-lg font-medium text-gray-600 md:text-xl md:leading-relaxed lg:w-2/3">
                        DAVI CARIDADE | WENDEL | PAULO VICTOR
                    </h3>
                </div>
                <div class="flex flex-col items-center justify-center gap-4">
                    <h4 class="text-2xl">Tecnologias e ferramentas utilizadas</h4>
                    <div class="flex flex-row items-center gap-2 justify-center">
                        <img src="https://skillicons.dev/icons?i=phpstorm,php,laravel,git,github,tailwind,mysql,postman" />
                    </div>
                </div>
            </div>
        </div>


        <footer id="page-footer" class="bg-gradient-to-t from-blue-50 to-white">
            <div class="container mx-auto flex flex-col gap-6 px-4 py-16 text-center text-sm md:flex-row md:justify-between md:gap-0 md:text-left lg:px-8 lg:py-32 xl:max-w-6xl">
                <nav class="space-x-2 sm:space-x-4">
                    <a href="javascript:void(0)"
                       class="text-sm font-semibold text-gray-600 hover:text-gray-950">
                        Curso Técnico em Desenvolvimento de Sistemas
                    </a>
                </nav>
                <div class="text-gray-500">
                    <span class="font-medium">EQUIPE BUGADOS</span> ©
                    <script>
                        document.write(new Date().getFullYear());
                    </script>
                </div>
            </div>
        </footer>

    </main>
</div>
</body>
</html>
