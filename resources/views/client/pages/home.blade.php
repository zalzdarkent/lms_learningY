@extends('client.layouts.app')

@section('title', 'LMS')

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
                    Learning Management System
                </h1>
                <p class="mt-6 text-center text-base leading-8 text-gray-600 lg:text-lg">
                    Anim aute id magna aliqua ad ad non deserunt sunt. Qui irure qui lorem cupidatat commodo. Elit sunt amet
                    fugiat veniam occaecat fugiat aliqua.
                </p>
                <div class="mt-5 flex items-center justify-center gap-x-6 md:mt-10">
                    <a href="#"
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

        {{-- Course Card --}}
        <div class="mx-auto my-10 max-w-screen-xl">
            <h1 class="mb-12 text-center text-3xl font-bold text-gray-900">Kelas Terbaru</h1>
            <div class="grid grid-cols-1 gap-4 md:grid-cols-2 md:gap-y-12 lg:grid-cols-3">
                @foreach ($courses as $course)
                    <div
                        class="mx-auto mb-6 w-full max-w-md rounded-lg border border-gray-200 bg-white shadow transition duration-500 ease-in-out hover:-translate-y-4 hover:shadow-lg md:mb-0">
                        <a href="#">
                            @if ($course->thumbnail)
                                <img class="rounded-t-lg" src="{{ asset('storage/' . $course->thumbnail) }}"
                                    alt="{{ $course->judul }}" />
                            @else
                                <img class="rounded-t-lg" src="{{ asset('assets/img/coba/laravel.jpg') }}"
                                    alt="{{ $course->judul }}" />
                            @endif
                        </a>
                        <div class="p-5">
                            <a href="#">
                                <h5 class="mb-2 text-xl font-semibold tracking-tight text-gray-900 lg:text-2xl">
                                    {{ $course->judul }}
                                </h5>
                            </a>
                            <p class="mb-3 text-sm text-gray-600 lg:text-base">{{ $course->deskripsi }}</p>
                            <a href="/course/{{ $course->id }}"
                                class="inline-flex items-center rounded-lg bg-indigo-600 px-3 py-2 text-center text-sm font-medium text-white hover:bg-indigo-500 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                                Daftar
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

        {{-- CTA  --}}
        <div class="mb-10 flex flex-col items-center justify-between md:flex-row">
            <div class="w-full space-y-6 md:w-1/2 md:p-4">
                <h1 class="text-4xl font-bold text-gray-900">Temukan Pengajar Terbaik!</h1>
                <p class="text-gray-700 lg:text-lg">Cari pengajar yang sesuai dengan kebutuhanmu dan mulailah belajar dengan
                    mudah dan nyaman.</p>
                <div class="mt-10">
                    <a href="/teachers"
                        class="rounded-md bg-indigo-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus:outline-none focus:ring-4 focus:ring-indigo-300">
                        Cari
                        Sekarang
                    </a>
                </div>
            </div>
            <div class="mt-8 w-full md:mt-0 md:w-1/2">
                <img src="../assets/img/coba/lecture.jpg" alt="Teacher Picture"
                    class="flex h-64 w-full items-center justify-center rounded-lg object-cover">
            </div>
        </div>
    </div>

@endsection
