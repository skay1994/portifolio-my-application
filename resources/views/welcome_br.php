<?= view('layout.header', compact('title')) ?>

    <div class="flex items-center justify-center pt-2">
        <span class="text-white ">Idiomas:</span>
        <a href="/" class="font-bold text-white pl-4 pr-4">Inglês</a>
        <p class="font-bold text-white cursor-not-allowed">Português</p>
    </div>

    <div class="flex items-center justify-center pt-32">
        <div class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
            <header class="text-center">
                <h1 class="text-3xl font-bold text-white">
                    Bem vindo a My Application
                </h1>
            </header>
        </div>
    </div>

    <main class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
        <div class="max-w-4xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:max-w-5xl lg:gap-x-20 lg:grid-cols-2">
            <div class="grid gap-4 col-start-1 col-end-3 row-start-1 sm:mb-6 sm:grid-cols-4 lg:gap-6 lg:col-start-2 lg:row-end-6 lg:row-span-6 lg:mb-0">
                <img src="/assets/images/controller.png" alt=""
                     class="lightbox cursor-pointer w-full h-60 object-cover rounded-lg sm:h-52 sm:col-span-2 lg:col-span-full"
                     loading="lazy">
                <img src="/assets/images/structure.png" alt=""
                     class="lightbox cursor-pointer hidden w-full h-52 object-cover rounded-lg sm:block sm:col-span-2 md:col-span-1 lg:row-start-2 lg:col-span-2 lg:h-32"
                     loading="lazy">
                <img src="/assets/images/with_tests.png" alt=""
                     class="lightbox cursor-pointer hidden w-full h-52 object-cover rounded-lg md:block lg:row-start-2 lg:col-span-2 lg:h-32"
                     loading="lazy">
            </div>
            <p class="block rounded text-white p-4 mt-4 text-sm leading-6 col-start-1 lg:col-span-1">
                My Application é um projeto desenvolvido para aprimorar meu entendimento e mostrar minhas habilidades, utilizando minha própria estrutura personalizada.
                Este empreendimento incorpora conceitos e estratégias extraídos de vários frameworks PHP estabelecidos, permitindo-me aprender e aplicar as melhores práticas em desenvolvimento web.
            </p>
            <p class="block rounded text-white p-4 mt-4 text-sm leading-6 col-start-1 sm:col-start-2 lg:col-span-1">
                Através deste projeto, pude experimentar e implementar recursos como roteamento, gerenciamento de banco de dados e templates, espelhando aqueles encontrados em frameworks PHP renomados como Laravel e Symfony.
                Essa abordagem prática não apenas solidificou minha compreensão do funcionamento interno dessas estruturas, mas também me equipou com um conjunto de ferramentas versátil para lidar com projetos futuros.
            </p>
        </div>
    </main>

<?= view('layout.footer') ?>