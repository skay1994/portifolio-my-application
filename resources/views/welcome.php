<?= view('layout.header') ?>
    <div class="flex items-center justify-center pt-2">
        <span class="text-white">Languages:</span>
        <p class="font-bold text-white pl-4 pr-4 cursor-not-allowed">English</p>
        <a href="/pt-br" class="font-bold text-white">Portuguese</a>
    </div>

    <div class="flex items-center justify-center pt-32">
        <div class="py-6 px-4 sm:p-6 md:py-10 md:px-8">
            <header class="text-center">
                <h1 class="text-3xl font-bold text-white">
                    Welcome to My Application
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
                My Application is a project designed to enhance my understanding and showcase my skills, utilizing my
                own custom-built framework.
                This endeavor incorporates concepts and strategies drawn from various established PHP frameworks,
                enabling me to learn and apply best practices in web development.
            </p>
            <p class="block rounded text-white p-4 mt-4 text-sm leading-6 col-start-1 sm:col-start-2 lg:col-span-1">
                Through this project, I have been able to experiment with and implement features such as routing,
                database management, and templating, mirroring those found in renowned PHP frameworks like Laravel and
                Symfony.
                This hands-on approach has not only solidified my comprehension of these frameworks' inner workings but
                has also equipped me with a versatile toolset to tackle future projects.
            </p>
        </div>
    </main>

<?= view('layout.footer') ?>