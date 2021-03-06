<nav class="bg-white dark:bg-paige-900 shadow-md">
    <div class="w-2/3 mx-auto">
        <div class="flex items-center justify-between">
            <div class="flex h-20">
                <div class="flex items-center justify-between text-paige-600 dark:text-paige-200">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" viewBox="0 0 20 20" fill="currentColor">
                        <path fill-rule="evenodd" d="M2 5a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2V5zm14 1a1 1 0 11-2 0 1 1 0 012 0zM2 13a2 2 0 012-2h12a2 2 0 012 2v2a2 2 0 01-2 2H4a2 2 0 01-2-2v-2zm14 1a1 1 0 11-2 0 1 1 0 012 0z" clip-rule="evenodd"/>
                    </svg>
                    <h1 class="ml-2 leading-tight text-2xl filter drop-shadow-lg decoration-clone bg-clip-text text-transparent bg-gradient-to-tl from-paige-800 to-paige-500 dark:from-paige-100 dark:to-paige-500 font-bold">
                        {{ config('app.name') }}
                    </h1>
                    <span class="text-amber-700 dark:text-amber-400 flex items-end pb-2 h-full text-sm -ml-7">{{ config('home.site_desc') }}</span>
                </div>
            </div>

            <div class="flex h-20 items-center md:ml-6">
                <input class="darkmode-checkbox" id="darkMode" type="checkbox">
                <label for="darkMode">
                    <svg class="w-12 h-12 cursor-pointer darkmode-icon" viewBox="0 0 64 64">
                        <clipPath id="sun">
                            <circle cx="32" cy="32" r="12"/>
                        </clipPath>
                        <circle class="sun" cx="32" cy="32" r="12"/>
                        <circle class="moon-shadow" cx="60" cy="32" r="12" clip-path="url(#sun)"/>
                        <circle class="sun-stroke" cx="32" cy="32" r="12"/>
                        <g class="rays">
                            <path d="M 32,4 l0,12"/>
                            <path d="M 32,4 l0,12" transform="rotate(45)" transform-origin="50% 50%"/>
                            <path d="M 32,4 l0,12" transform="rotate(90)" transform-origin="50% 50%"/>
                            <path d="M 32,4 l0,12" transform="rotate(135)" transform-origin="50% 50%"/>
                            <path d="M 32,4 l0,12" transform="rotate(180)" transform-origin="50% 50%"/>
                            <path d="M 32,4 l0,12" transform="rotate(225)" transform-origin="50% 50%"/>
                            <path d="M 32,4 l0,12" transform="rotate(270)" transform-origin="50% 50%"/>
                            <path d="M 32,4 l0,12" transform="rotate(315)" transform-origin="50% 50%"/>
                        </g>
                    </svg>
                </label>
            </div>
        </div>
    </div>
</nav>
