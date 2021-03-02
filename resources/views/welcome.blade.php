<x-app-layout>
    <section class="bg-cover" style="background-image: url({{asset('img/home/students.jpg')}})">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-36 ">
            <div class="w-full md:w-3/4 lg:w-1/2">
                <h1 class="text-white font-fold text-4xl">Aspira a más</h1>
                <p class="text-white text-lg mt-2">Aprender te mantiene a la vanguardia. Consigue las habilidades más
                    demandadas para impresionar a
                    cualquiera.</p>
                <!-- component -->
                <div class="relative text-gray-600 mb-4 mt-4">
                    <input type="search" name="serch" placeholder="Buscar cualquier cosa"
                           class="bg-white h-10 px-5 pr-10 rounded-full text-sm focus:outline-none w-full">
                    <button type="submit"
                            class="absolute right-0 top-0inline-block px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-blue-700 rounded-full shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                        Buscar
                    </button>
                </div>
            </div>
        </div>
    </section>

    <!--content-->
    <section class="mt-24">
        <h1 class="text-gray-600 text-center text-3xl mb-6">CONTENIDO</h1>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 grid grid-cols-1 sm:grid-col-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            <article>
                <figure>
                    <img class="rounded-xl h-40 w-full object-cover"
                         src="https://cdn.pixabay.com/photo/2021/02/21/08/27/skiing-6035709_960_720.jpg">
                </figure>

                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the.
                </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-40 w-full object-cover"
                         src="https://cdn.pixabay.com/photo/2021/02/08/06/01/portrait-5993762_960_720.jpg">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the.
                </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-40 w-full object-cover"
                         src="https://cdn.pixabay.com/photo/2019/02/23/19/28/vw-4016326__340.jpg">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the.
                </p>
            </article>
            <article>
                <figure>
                    <img class="rounded-xl h-40 w-full object-cover"
                         src="https://cdn.pixabay.com/photo/2018/02/19/18/21/horse-3165771_960_720.jpg">
                </figure>
                <header class="mt-2">
                    <h1 class="text-center text-xl text-gray-700">Cursos y proyectos</h1>
                </header>
                <p class="text-sm text-gray-500">
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the
                    industry's standard dummy text ever since the.
                </p>
            </article>

        </div>
    </section>
    <!--content-->

    <!--banner-->
    <section class="mt-24 bg-gray-700 py-12">
        <h1 class="text-center text-white text-3xl">Learn much more</h1>
        <p class="text-center text-white">lorem ipsumLorem Ipsum is simply dummy text of the printing and typesetting
            industry.</p>
        <div class="m-6 mx-auto space-y-3 w-72">
            <a href="{{route('course.index')}}"
               class="block w-full px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-pink-500 rounded shadow ripple hover:shadow-lg hover:bg-pink-600 focus:outline-none">
                Click me
            </a>
        </div>
    </section>
    <!--banner-->

    <!--Last courses -->
    <section class="mt-24">
        <h1 class="text-center text-3xl text-gray-600">Last courses</h1>
        <p class="text-center text-gray-500 text-sm">Lorem Ipsum is simply dummy text of the printing and
            typesetting industry</p>
        <div
            class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 py-3 grid grid-cols-1 sm:grid-col-2 md:grid-cols-3 lg:grid-cols-4 gap-x-6 gap-y-8">
            @foreach($courses as $course)
                <article class="bg-white shadow-lg rounded overflow-hidden">
                    <img class="h-36 w-full object-cover" src="https://picsum.photos/id/{{rand(1,80)}}/200/300">
                    <div class="px-6 py-4">
                        <h1 class="text-xm text-gray-700 mb-2 leading-6">{{Str::limit($course->title, 40)}}</h1>
                        <p class="text-gray-500 text-sm mb-2">Prof: {{$course->teacher->name}}</p>
                        <div class="flex">
                            <ul class="flex text-sm">
                                <li class="mr-1"><i
                                        class="fas fa-star text-{{$course->rating >= 1 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1"><i
                                        class="fas fa-star text-{{$course->rating >= 2 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1"><i
                                        class="fas fa-star text-{{$course->rating >= 3 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1"><i
                                        class="fas fa-star text-{{$course->rating >= 4 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                                <li class="mr-1"><i
                                        class="fas fa-star text-{{$course->rating >= 5 ? 'yellow' : 'gray'}}-400"></i>
                                </li>
                            </ul>
                            <p class="text-sm text-gray-500 ml-auto">
                                <i class="fas fa-users"></i>
                                ({{$course->students_count}})
                            </p>
                        </div>
                        <div class="mx-auto py-4">
                            <a href="{{route('course.show', $course)}}" class="block w-full px-6 py-2 text-xs font-medium leading-6 text-center text-white uppercase transition bg-indigo-700 rounded shadow ripple hover:shadow-lg hover:bg-blue-800 focus:outline-none">
                                More info
                            </a>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>
    <!--last courses-->
</x-app-layout>
