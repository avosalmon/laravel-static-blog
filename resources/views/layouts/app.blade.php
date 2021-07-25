<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>@yield('title', config('app.name'))</title>
        <meta name="description" content="@yield('description', 'Ryuta Hamasaki is a software engineer from Japan.')"/>

        <meta property="og:title" content="@yield('title', config('app.name'))" />
        <meta property="og:type" content="article" />
        <meta property="og:image" content="@yield('featured-image', 'https://d3kvywu94yn7wx.cloudfront.net/images/Ud4xfI62qK2Bden2vAXk8hWYS4BSjFXVJ79SOUZ1.jpeg')" />
        <meta property="og:description" content="@yield('description', 'Ryuta Hamasaki is a software engineer from Japan.')" />

        <meta name="twitter:card" content="summary_large_image"/>
        <meta name="twitter:site" content="@avosalmon"/>
        <meta name="twitter:creator" content="@avosalmon"/>
        <meta name="twitter:title" content="@yield('title', config('app.name'))">
        <meta name="twitter:description" content="@yield('description', 'Ryuta Hamasaki is a software engineer from Japan.')">
        <meta name="twitter:image" content="@yield('featured-image', 'https://d3kvywu94yn7wx.cloudfront.net/images/Ud4xfI62qK2Bden2vAXk8hWYS4BSjFXVJ79SOUZ1.jpeg')">

        <link rel="icon" type="image/jpeg" href="{{ mix('image/avatar.jpg') }}">
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    </head>
    <body class="text-gray-800 subpixel-antialiased">
        <header>
            <nav class="flex flex-col items-center justify-between bg-black text-white px-4 py-4 md:flex-row md:px-32">
                <div class="text-2xl font-medium font-mono mb-4 md:mb-0">
                    <a href="/" class="hover:text-blue-400">
                        <img src="{{ mix('image/avatar.jpg') }}" alt="avatar" class="hidden md:inline rounded-full h-16 mr-4">
                        Ryuta Hamasaki
                    </a>
                </div>
                <div class="flex items-center justify-between">
                    <a href="https://github.com/avosalmon/" target="_blank" rel="noopener" class="mx-2 hover:text-blue-400 md:mx-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                    </a>
                    <a href="https://twitter.com/avosalmon/" target="_blank" rel="noopener" class="mx-2 hover:text-blue-400 md:mx-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                    </a>
                    <a href="https://www.linkedin.com/in/ryuta-hamasaki/" target="_blank" rel="noopener" class="mx-2 hover:text-blue-400 md:mx-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                    </a>
                    <a href="https://www.instagram.com/avosalmon/" target="_blank" rel="noopener" class="mx-2 hover:text-blue-400 md:mx-4">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                    </a>
                </div>
            </nav>
        </header>
        <main class="px-4 py-10 mx-auto w-full md:w-2/3 lg:w-3/5 2xl:w-1/2">
            @yield('content')
        </main>
        <div class="px-4 pb-20 mx-auto w-full md:w-2/3 lg:w-3/5 2xl:w-1/2">
            <div class="text-center mb-4">
                <img src="{{ mix('image/avatar.jpg') }}" alt="avatar" class="inline rounded-full h-32">
            </div>
            <h2 class="text-4xl font-semibold text-center mb-6">About Me</h2>
            <p class="text-xl leading-relaxed">
                I am a software engineer from Japan and currently based in Singapore. Over the past 5 years, I've been creating e-commerce and FinTech web applications using Laravel, Angular, and Vue.js. Making clean, maintainable, and scalable software with agile methodology is one of my biggest passions. Im my spare time, I play the bass and enjoy DIY.
            </p>
        </div>
        <footer class="flex flex-col items-center justify-between text-gray-500 px-4 py-4 border-t border-gray-300 md:flex-row md:px-32">
            <div class="mb-4 md:mb-0">&copy; Ryuta Hamasaki</div>
            <div class="flex items-center justify-between">
                <a href="https://github.com/avosalmon/" target="_blank" rel="noopener" class="mx-2 hover:text-blue-400 md:mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-github"><path d="M9 19c-5 1.5-5-2.5-7-3m14 6v-3.87a3.37 3.37 0 0 0-.94-2.61c3.14-.35 6.44-1.54 6.44-7A5.44 5.44 0 0 0 20 4.77 5.07 5.07 0 0 0 19.91 1S18.73.65 16 2.48a13.38 13.38 0 0 0-7 0C6.27.65 5.09 1 5.09 1A5.07 5.07 0 0 0 5 4.77a5.44 5.44 0 0 0-1.5 3.78c0 5.42 3.3 6.61 6.44 7A3.37 3.37 0 0 0 9 18.13V22"></path></svg>
                </a>
                <a href="https://twitter.com/avosalmon/" target="_blank" rel="noopener" class="mx-2 hover:text-blue-400 md:mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-twitter"><path d="M23 3a10.9 10.9 0 0 1-3.14 1.53 4.48 4.48 0 0 0-7.86 3v1A10.66 10.66 0 0 1 3 4s-4 9 5 13a11.64 11.64 0 0 1-7 2c9 5 20 0 20-11.5a4.5 4.5 0 0 0-.08-.83A7.72 7.72 0 0 0 23 3z"></path></svg>
                </a>
                <a href="https://www.linkedin.com/in/ryuta-hamasaki/" target="_blank" rel="noopener" class="mx-2 hover:text-blue-400 md:mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-linkedin"><path d="M16 8a6 6 0 0 1 6 6v7h-4v-7a2 2 0 0 0-2-2 2 2 0 0 0-2 2v7h-4v-7a6 6 0 0 1 6-6z"></path><rect x="2" y="9" width="4" height="12"></rect><circle cx="4" cy="4" r="2"></circle></svg>
                </a>
                <a href="https://www.instagram.com/avosalmon/" target="_blank" rel="noopener" class="mx-2 hover:text-blue-400 md:mx-4">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-instagram"><rect x="2" y="2" width="20" height="20" rx="5" ry="5"></rect><path d="M16 11.37A4 4 0 1 1 12.63 8 4 4 0 0 1 16 11.37z"></path><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"></line></svg>
                </a>
            </div>
        </footer>
    </body>
</html>
