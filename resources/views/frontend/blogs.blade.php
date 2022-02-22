@extends('frontend.index')
@push('main')
    <section class="relative">

        <!-- Background image -->
        <div class="box-content absolute inset-0 pt-16 h-128 -z-1">
            <img class="absolute inset-0 object-cover w-full h-full opacity-25" src="../images/hero-bg.jpg" width="1440"
                height="577" alt="About" />
            <div class="absolute inset-0 bg-gradient-to-t from-white dark:from-gray-900" aria-hidden="true"></div>
        </div>

        <div class="relative max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pt-32 pb-12 md:pt-40 md:pb-16">

                <!-- Featured article -->
                <div class="max-w-3xl" data-aos="fade-down">
                    <article>
                        <header>
                            <!-- Title and excerpt -->
                            <div class="text-center md:text-left">
                                <a href="blog-post.html">
                                    <h1 class="mb-4 h1 font-red-hat-display">Appy launches new thematic solutions</h1>
                                </a>
                                <p class="text-xl text-gray-600 dark:text-gray-400">Curious about how your favorite product
                                    was created? Hear from the team about how it was built, and how continued improvements
                                    are made.</p>
                            </div>
                            <!-- Article meta -->
                            <div class="mt-5 md:flex md:items-center md:justify-between">
                                <!-- Author meta -->
                                <div class="flex items-center justify-center">
                                    <a href="#0">
                                        <img class="mr-3 rounded-full shrink-0" src="../images/news-author-01.jpg"
                                            width="32" height="32" alt="Author 04" />
                                    </a>
                                    <div>
                                        <span class="text-gray-600 dark:text-gray-400">By </span>
                                        <a class="font-medium text-gray-800 dark:text-gray-300 hover:underline"
                                            href="#0">Micheal Osman</a>
                                        <span class="text-gray-600 dark:text-gray-400"> · Nov 2, 2020</span>
                                    </div>
                                </div>
                            </div>
                        </header>
                    </article>
                </div>

            </div>
        </div>

    </section>
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pb-12 md:pb-16">

                <div class="grid gap-4 sm:gap-6 sm:grid-cols-2 lg:grid-cols-4" data-aos-id-featposts>

                    <!-- 1st article -->
                    <article class="relative px-6 py-4 group sm:py-8" data-aos="fade-up"
                        data-aos-anchor="[data-aos-id-featposts]" data-aos-delay="100">
                        <figure>
                            <img class="absolute inset-0 object-cover w-full h-full transition duration-700 ease-out opacity-50 group-hover:opacity-75"
                                src="../images/related-post-03.jpg" width="258" height="154" alt="Related post 03" />
                            <div class="absolute inset-0 transition duration-700 ease-out bg-teal-500 opacity-75 group-hover:opacity-50"
                                aria-hidden="true"></div>
                        </figure>
                        <div class="relative flex flex-col h-full text-white">
                            <header class="grow">
                                <a class="hover:underline" href="blog-post.html">
                                    <h3 class="mb-2 text-lg font-bold tracking-tight font-red-hat-display">
                                        Creating events in the pandemic
                                    </h3>
                                </a>
                            </header>
                            <footer>
                                <div class="text-sm opacity-80">By Josh Wang · Nov 16, 2020</div>
                            </footer>
                        </div>
                    </article>

                    <!-- 2nd article -->
                    <article class="relative px-6 py-4 group sm:py-8" data-aos="fade-up"
                        data-aos-anchor="[data-aos-id-featposts]" data-aos-delay="200">
                        <figure>
                            <img class="absolute inset-0 object-cover w-full h-full transition duration-700 ease-out opacity-50 group-hover:opacity-75"
                                src="../images/related-post-04.jpg" width="258" height="154" alt="Related post 04" />
                            <div class="absolute inset-0 transition duration-700 ease-out bg-purple-500 opacity-75 group-hover:opacity-50"
                                aria-hidden="true"></div>
                        </figure>
                        <div class="relative flex flex-col h-full text-white">
                            <header class="grow">
                                <a class="hover:underline" href="blog-post.html">
                                    <h3 class="mb-2 text-lg font-bold tracking-tight font-red-hat-display">
                                        5 Ways to grow your personal network
                                    </h3>
                                </a>
                            </header>
                            <footer>
                                <div class="text-sm opacity-80">By Yuri Lapko · Nov 14, 2020</div>
                            </footer>
                        </div>
                    </article>

                    <!-- 3rd article -->
                    <article class="relative px-6 py-4 group sm:py-8" data-aos="fade-up"
                        data-aos-anchor="[data-aos-id-featposts]" data-aos-delay="300">
                        <figure>
                            <img class="absolute inset-0 object-cover w-full h-full transition duration-700 ease-out opacity-50 group-hover:opacity-75"
                                src="../images/related-post-05.jpg" width="258" height="154" alt="Related post 05" />
                            <div class="absolute inset-0 transition duration-700 ease-out bg-indigo-500 opacity-75 group-hover:opacity-50"
                                aria-hidden="true"></div>
                        </figure>
                        <div class="relative flex flex-col h-full text-white">
                            <header class="grow">
                                <a class="hover:underline" href="blog-post.html">
                                    <h3 class="mb-2 text-lg font-bold tracking-tight font-red-hat-display">
                                        How to fix my website myself
                                    </h3>
                                </a>
                            </header>
                            <footer>
                                <div class="text-sm opacity-80">By Josh Wang · Nov 10, 2020</div>
                            </footer>
                        </div>
                    </article>

                    <!-- 4th article -->
                    <article class="relative px-6 py-4 group sm:py-8" data-aos="fade-up"
                        data-aos-anchor="[data-aos-id-featposts]" data-aos-delay="400">
                        <figure>
                            <img class="absolute inset-0 object-cover w-full h-full transition duration-700 ease-out opacity-50 group-hover:opacity-75"
                                src="../images/related-post-06.jpg" width="258" height="154" alt="Related post 06" />
                            <div class="absolute inset-0 transition duration-700 ease-out bg-pink-500 opacity-75 group-hover:opacity-50"
                                aria-hidden="true"></div>
                        </figure>
                        <div class="relative flex flex-col h-full text-white">
                            <header class="grow">
                                <a class="hover:underline" href="blog-post.html">
                                    <h3 class="mb-2 text-lg font-bold tracking-tight font-red-hat-display">
                                        How COVID-19 redefined the entrepreneur
                                    </h3>
                                </a>
                            </header>
                            <footer>
                                <div class="text-sm opacity-80">By Mary Champ · Nov 2, 2020</div>
                            </footer>
                        </div>
                    </article>

                </div>

            </div>
        </div>
    </section>
    <section>
        <div class="max-w-6xl px-4 mx-auto sm:px-6">
            <div class="pb-12 md:pb-20">
                <div class="lg:flex lg:justify-between">

                    <!-- Main content -->
                    <div class="lg:grow" data-aos="fade-down" data-aos-delay="200">

                        <!-- Section title -->
                        <h4 class="mb-8 h3 font-red-hat-display">Latest</h4>

                        <!-- Articles container -->
                        <div class="grid items-start gap-12 sm:grid-cols-2 sm:gap-x-6 md:gap-y-8">

                            <!-- 1st article -->
                            <article class="flex flex-col h-full">
                                <header>
                                    <a class="block mb-4" href="blog-post.html">
                                        <figure class="relative h-0 pb-9/16">
                                            <img class="absolute inset-0 object-cover w-full h-full"
                                                src="../images/news-01.jpg" width="352" height="198" alt="News 01" />
                                        </figure>
                                    </a>
                                    <a class="hover:underline" href="blog-post.html">
                                        <h3 class="mb-2 h4 font-red-hat-display">
                                            How to create a profile page using Appy
                                        </h3>
                                    </a>
                                </header>
                                <p class="text-gray-600 dark:text-gray-400 grow">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <footer class="flex items-center mt-4">
                                    <a href="#0">
                                        <img class="mr-3 rounded-full shrink-0" src="../images/news-author-03.jpg"
                                            width="32" height="32" alt="Author 03" />
                                    </a>
                                    <div class="text-sm text-gray-500">
                                        By <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                            href="#0">Lisa Allison</a> · <span class="text-gray-500">Oct 22, 2020</span>
                                    </div>
                                </footer>
                            </article>

                            <!-- 2nd article -->
                            <article class="flex flex-col h-full">
                                <header>
                                    <a class="block mb-4" href="blog-post.html">
                                        <figure class="relative h-0 pb-9/16">
                                            <img class="absolute inset-0 object-cover w-full h-full"
                                                src="../images/news-02.jpg" width="352" height="198" alt="News 02" />
                                        </figure>
                                    </a>
                                    <a class="hover:underline" href="blog-post.html">
                                        <h3 class="mb-2 h4 font-red-hat-display">
                                            20+ elements of a modern website design
                                        </h3>
                                    </a>
                                </header>
                                <p class="text-gray-600 dark:text-gray-400 grow">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <footer class="flex items-center mt-4">
                                    <a href="#0">
                                        <img class="mr-3 rounded-full shrink-0" src="../images/news-author-06.jpg"
                                            width="32" height="32" alt="Author 06" />
                                    </a>
                                    <div class="text-sm text-gray-500">
                                        By <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                            href="#0">Greg Gilev</a> · <span class="text-gray-500">Oct 22, 2020</span>
                                    </div>
                                </footer>
                            </article>

                            <!-- 3rd article -->
                            <article class="flex flex-col h-full">
                                <header>
                                    <a class="block mb-4" href="blog-post.html">
                                        <figure class="relative h-0 pb-9/16">
                                            <img class="absolute inset-0 object-cover w-full h-full"
                                                src="../images/news-03.jpg" width="352" height="198" alt="News 03" />
                                        </figure>
                                    </a>
                                    <a class="hover:underline" href="blog-post.html">
                                        <h3 class="mb-2 h4 font-red-hat-display">
                                            20 unique places to find web design inspiration
                                        </h3>
                                    </a>
                                </header>
                                <p class="text-gray-600 dark:text-gray-400 grow">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <footer class="flex items-center mt-4">
                                    <a href="#0">
                                        <img class="mr-3 rounded-full shrink-0" src="../images/news-author-01.jpg"
                                            width="32" height="32" alt="Author 01" />
                                    </a>
                                    <div class="text-sm text-gray-500">
                                        By <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                            href="#0">Mark Varsano</a> · <span class="text-gray-500">Oct 22, 2020</span>
                                    </div>
                                </footer>
                            </article>

                            <!-- 4th article -->
                            <article class="flex flex-col h-full">
                                <header>
                                    <a class="block mb-4" href="blog-post.html">
                                        <figure class="relative h-0 pb-9/16">
                                            <img class="absolute inset-0 object-cover w-full h-full"
                                                src="../images/news-04.jpg" width="352" height="198" alt="News 04" />
                                        </figure>
                                    </a>
                                    <a class="hover:underline" href="blog-post.html">
                                        <h3 class="mb-2 h4 font-red-hat-display">
                                            What to look for in a digital portfolio
                                        </h3>
                                    </a>
                                </header>
                                <p class="text-gray-600 dark:text-gray-400 grow">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <footer class="flex items-center mt-4">
                                    <a href="#0">
                                        <img class="mr-3 rounded-full shrink-0" src="../images/news-author-03.jpg"
                                            width="32" height="32" alt="Author 03" />
                                    </a>
                                    <div class="text-sm text-gray-500">
                                        By <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                            href="#0">Lisa Allison</a> · <span class="text-gray-500">Oct 22, 2020</span>
                                    </div>
                                </footer>
                            </article>

                            <!-- 5th article -->
                            <article class="flex flex-col h-full">
                                <header>
                                    <a class="block mb-4" href="blog-post.html">
                                        <figure class="relative h-0 pb-9/16">
                                            <img class="absolute inset-0 object-cover w-full h-full"
                                                src="../images/news-05.jpg" width="352" height="198" alt="News 05" />
                                        </figure>
                                    </a>
                                    <a class="hover:underline" href="blog-post.html">
                                        <h3 class="mb-2 h4 font-red-hat-display">
                                            Why your customers needs a responsive website
                                        </h3>
                                    </a>
                                </header>
                                <p class="text-gray-600 dark:text-gray-400 grow">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <footer class="flex items-center mt-4">
                                    <a href="#0">
                                        <img class="mr-3 rounded-full shrink-0" src="../images/news-author-04.jpg"
                                            width="32" height="32" alt="Author 04" />
                                    </a>
                                    <div class="text-sm text-gray-500">
                                        By <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                            href="#0">Mary Champ</a> · <span class="text-gray-500">Oct 22, 2020</span>
                                    </div>
                                </footer>
                            </article>

                            <!-- 6th article -->
                            <article class="flex flex-col h-full">
                                <header>
                                    <a class="block mb-4" href="blog-post.html">
                                        <figure class="relative h-0 pb-9/16">
                                            <img class="absolute inset-0 object-cover w-full h-full"
                                                src="../images/news-06.jpg" width="352" height="198" alt="News 06" />
                                        </figure>
                                    </a>
                                    <a class="hover:underline" href="blog-post.html">
                                        <h3 class="mb-2 h4 font-red-hat-display">
                                            Launch lessons: the creators of Intrusive Inc.
                                        </h3>
                                    </a>
                                </header>
                                <p class="text-gray-600 dark:text-gray-400 grow">Lorem ipsum dolor sit amet, consectetur
                                    adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                                <footer class="flex items-center mt-4">
                                    <a href="#0">
                                        <img class="mr-3 rounded-full shrink-0" src="../images/news-author-05.jpg"
                                            width="32" height="32" alt="Author 05" />
                                    </a>
                                    <div class="text-sm text-gray-500">
                                        By <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                            href="#0">Yuri Lapko</a> · <span class="text-gray-500">Oct 22, 2020</span>
                                    </div>
                                </footer>
                            </article>

                        </div>

                        <!-- Load more button -->
                        <div class="flex justify-center mt-12 md:mt-16">
                            <a class="flex items-center text-gray-300 bg-gray-800 btn-sm hover:text-gray-100" href="#0">
                                <span>See previous articles</span>
                                <svg class="w-4 h-4 ml-3 shrink-0" viewBox="0 0 16 16" xmlns="http://www.w3.org/2000/svg">
                                    <path class="text-gray-500 fill-current"
                                        d="M14.7 9.3l-1.4-1.4L9 12.2V0H7v12.2L2.7 7.9 1.3 9.3 8 16z" />
                                </svg>
                            </a>
                        </div>

                    </div>

                    <!-- Sidebar -->
                    <aside class="relative mt-12 lg:mt-0 lg:w-64 lg:ml-16 lg:shrink-0" data-aos="fade-down"
                        data-aos-delay="400">

                        <!-- Popular posts -->
                        <div class="mb-8">
                            <h4 class="mb-5 h4 font-red-hat-display">Popular on Simple</h4>
                            <ul class="-my-3">
                                <li class="flex py-3 border-b border-gray-200 dark:border-gray-800">
                                    <div
                                        class="w-12 mt-1 text-gray-400 h4 font-red-hat-display dark:text-gray-600 shrink-0">
                                        01</div>
                                    <article>
                                        <a class="hover:underline" href="blog-post.html">
                                            <h3 class="mb-1 font-bold tracking-tight font-red-hat-display">
                                                How to get creative using geometric patterns
                                            </h3>
                                        </a>
                                        <div class="text-sm text-gray-500">
                                            By <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                                href="#0">Mary Champ</a> · <span class="text-gray-500">Oct 22, 2020</span>
                                        </div>
                                    </article>
                                </li>
                                <li class="flex py-3 border-b border-gray-200 dark:border-gray-800">
                                    <div
                                        class="w-12 mt-1 text-gray-400 h4 font-red-hat-display dark:text-gray-600 shrink-0">
                                        02</div>
                                    <article>
                                        <a class="hover:underline" href="blog-post.html">
                                            <h3 class="mb-1 font-bold tracking-tight font-red-hat-display">
                                                Create your branding strategy in 4 simple steps
                                            </h3>
                                        </a>
                                        <div class="text-sm text-gray-500">
                                            By <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                                href="#0">Lisa Allison</a> · <span class="text-gray-500">Oct 17,
                                                2020</span>
                                        </div>
                                    </article>
                                </li>
                                <li class="flex py-3 border-b border-gray-200 dark:border-gray-800">
                                    <div
                                        class="w-12 mt-1 text-gray-400 h4 font-red-hat-display dark:text-gray-600 shrink-0">
                                        03</div>
                                    <article>
                                        <a class="hover:underline" href="blog-post.html">
                                            <h3 class="mb-1 font-bold tracking-tight font-red-hat-display">
                                                Don’t miss Appy’s exclusive workshop with our CEO
                                            </h3>
                                        </a>
                                        <div class="text-sm text-gray-500">
                                            By <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                                href="#0">Lisa Allison</a> · <span class="text-gray-500">Oct 2,
                                                2020</span>
                                        </div>
                                    </article>
                                </li>
                                <li class="flex py-3 border-b border-gray-200 dark:border-gray-800">
                                    <div
                                        class="w-12 mt-1 text-gray-400 h4 font-red-hat-display dark:text-gray-600 shrink-0">
                                        04</div>
                                    <article>
                                        <a class="hover:underline" href="blog-post.html">
                                            <h3 class="mb-1 font-bold tracking-tight font-red-hat-display">
                                                How to optimize your website to convert more leads
                                            </h3>
                                        </a>
                                        <div class="text-sm text-gray-500">
                                            By <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                                href="#0">Greg Gilev</a> · <span class="text-gray-500">Sep 24, 2020</span>
                                        </div>
                                    </article>
                                </li>
                                <li class="flex py-3 border-b border-gray-200 dark:border-gray-800">
                                    <div
                                        class="w-12 mt-1 text-gray-400 h4 font-red-hat-display dark:text-gray-600 shrink-0">
                                        05</div>
                                    <article>
                                        <a class="hover:underline" href="blog-post.html">
                                            <h3 class="mb-1 font-bold tracking-tight font-red-hat-display">
                                                What to do if your product idea is stolen
                                            </h3>
                                        </a>
                                        <div class="text-sm text-gray-500">
                                            By <a class="font-medium text-gray-800 dark:text-gray-400 hover:underline"
                                                href="#0">Yuri Lapko</a> · <span class="text-gray-500">Sep 22, 2020</span>
                                        </div>
                                    </article>
                                </li>
                            </ul>
                        </div>

                    </aside>

                </div>
            </div>
        </div>
    </section>
@endpush
