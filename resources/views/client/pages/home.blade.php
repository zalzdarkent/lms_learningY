@extends('client.layouts.app')

@section('title', 'Beranda')

@section('container')
    <div class="container mx-auto px-10 py-10 lg:px-20">
        {{-- Hero Section --}}
        <div class="relative isolate">
            <!-- Gradient Background -->
            <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80"
                aria-hidden="true">
                <div class="relative left-[calc(50%-11rem)] aspect-[1155/678] w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-gradient-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]"
                    style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)">
                </div>
            </div>
            <!-- Header Section -->
            <div class="mx-auto max-h-screen max-w-2xl py-32">
                <h1 class="text-balance text-center text-4xl font-bold tracking-tight text-gray-900 sm:text-5xl">
                    Pembelajaran Mudah di Mana Saja, Kapan Saja
                </h1>
                <p class="mt-6 text-center text-base leading-8 text-gray-600 lg:text-lg">
                    Jelajahi kelas online, atur kemajuan Anda, dan wujudkan potensi maksimal dengan Purmasagi. </p>
                <div class="mt-5 flex items-center justify-center gap-x-6 md:mt-10">
                    <a href="/courses"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                        Mulai Sekarang!
                    </a>
                </div>
            </div>
        </div>

        {{-- Card --}}
        <div class="mb-36 flex flex-wrap items-center justify-center gap-y-6 space-x-0 md:space-x-8">
            <x-card count="100+" title="Pelajar"
                description="Lebih dari 100 pelajar telah bergabung dengan kelas kami untuk meningkatkan keterampilan mereka." />
            <x-card count="10" title="Kelas Video"
                description="Akses kelas video yang memungkinkan Anda belajar tanpa batasan geografis dan waktu." />
            <x-card count="5" title="Guru"
                description="Belajar dari guru berpengalaman yang siap membimbing Anda dalam perjalanan pendidikan Anda." />
        </div>

        {{-- Courses Card --}}
        <div class="mx-auto my-10 max-w-screen-xl">
            <h1 class="mb-12 text-center text-3xl font-bold text-gray-900">Kelas Terbaru</h1>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-y-12 lg:grid-cols-3">
                @foreach ($latestCourses as $course)
                    <div
                        class="mx-auto mb-6 flex w-full max-w-md flex-col justify-between rounded-lg border border-gray-200 bg-white shadow transition duration-500 ease-in-out hover:-translate-y-4 hover:shadow-lg md:mb-0">
                        <a href="/course/{{ $course->id }}">
                            <img class="rounded-t-lg object-cover"
                                src="{{ $course->thumbnail ? asset('storage/' . $course->thumbnail) : asset('assets/img/contents/image-not-found.png') }}"
                                alt="{{ $course->judul }}" />
                        </a>
                        <div class="flex flex-grow flex-col p-5">
                            <div class="flex-grow">
                                <a href="/course/{{ $course->id }}" class="hover:underline hover:underline-offset-4">
                                    <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 lg:text-2xl">
                                        {{ $course->judul }}
                                    </h5>
                                </a>
                            </div>
                            <div class="flex-grow">
                                <p class="mb-3 line-clamp-3 text-justify text-sm text-gray-600 lg:text-base">
                                    {{ $course->deskripsi }}
                                </p>
                            </div>
                            <a href="/course/{{ $course->id }}"
                                class="mt-4 inline-flex w-fit items-center rounded-lg bg-indigo-600 px-3 py-2 text-center text-sm font-medium text-white hover:bg-indigo-500 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                Pelajari
                                <svg class="ms-2 h-3.5 w-3.5 rtl:rotate-180" aria-hidden="true"
                                    xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9" />
                                </svg>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-5 flex items-center justify-center gap-x-6 md:mt-10">
                <a href="/courses"
                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-4 focus:ring-indigo-300">Lihat
                    kelas lainnya
                </a>
            </div>
        </div>

        {{-- Activity --}}
        <div class="mx-auto my-20 max-w-screen-xl">
            <h1 class="mb-12 text-center text-3xl font-bold text-gray-900">Aktivitas</h1>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-y-12 lg:grid-cols-3">
                @foreach ($latestActivity as $activity)
                    <div
                        class="group relative mx-auto mb-6 w-full max-w-md rounded-lg border border-gray-200 bg-white shadow md:mb-0">
                        <img class="rounded-lg"
                            src="{{ $activity->gambar_kegiatan ? asset('storage/' . $activity->gambar_kegiatan) : asset('assets/img/contents/image-not-found.png') }}"
                            alt="{{ $activity->deskripsi_kegiatan }}" />
                        <div
                            class="absolute inset-0 bottom-0 bg-black bg-opacity-50 opacity-0 transition-opacity duration-300 hover:opacity-100">
                            <h2 class="m-4 text-xl font-semibold text-white">
                                {{ $activity->deskripsi_kegiatan }}
                            </h2>
                            <h2 class="m-4 text-white">{{ $activity->waktu }}</h2>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="mt-5 flex items-center justify-center gap-x-6 md:mt-10">
                <a href="/activity"
                    class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-4 focus:ring-indigo-300">Lihat
                    aktivitas lainnya
                </a>
            </div>
        </div>

        {{-- Scroll Up Button --}}
        <button id="scrollUpBtn"
            class="fixed bottom-5 right-5 hidden rounded-full bg-indigo-600 p-3 text-white shadow-lg hover:bg-indigo-500 focus:outline-none focus:ring-2 focus:ring-indigo-300"
            aria-label="Scroll to top">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m-8-8l8-8 8 8" />
            </svg>
        </button>

    </div>

@endsection
