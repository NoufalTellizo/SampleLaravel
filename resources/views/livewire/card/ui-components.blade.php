<div class="w-full h-full flex flex-col p-4">
    {{-- <div class="w-full h-fit py-1 flex gap-4">
        <button class="px-3 py-2 rounded-lg bg-blue-500 text-white tracking-wide text-balance text-sm">Save</button>
        <button class="px-3 py-1.5 rounded-lg bg-blue-500 text-white tracking-wide text-balance text-sm">Save</button>
    </div>  

    <div class="w-full flex">
        <button class="px-3 py-2 rounded-lg bg-blue-500 text-white tracking-wide text-balance text-sm flex items-center justify-center gap-1.5 mt-2">
            <svg xmlns="http://www.w3.org/2000/svg" class="size-4 " viewBox="0 0 24 24"><path fill="currentColor" d="M19 12.998h-6v6h-2v-6H5v-2h6v-6h2v6h6z"/></svg>
            <span class="font-semibold">Add Product</span>
        </button>
    </div> --}}
    <div class="grid grid-cols-3 gap-2 overflow-auto">

        {{-- <div class="flex flex-col">

            <div class="w-[35rem] rounded-t-3xl  border px-12 py-5">
                <div class="flex items-center justify-between">
                    <div class="font-semibold text-[28px]">Aviro - Branding</div>
                    <button class="px-3 py-2 border rounded-xl tracking-wide text-balance">Active</button>
                </div>
            </div>
            <div class="w-[35rem] flex items-center justify-between">
                <div class="border w-full flex items-center justify-between px-12 py-3">
                    <button class="px-3 py-2 border rounded-xl flex gap-2 tracking-wide text-balance">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                            <path fill="currentColor" d="M21 7L9 19l-5.5-5.5l1.41-1.41L9 16.17L19.59 5.59z" />
                        </svg>
                        Mark Complete</button>
                    <div class="flex gap-6">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M14 5v4C7 10 4 15 3 20c2.5-3.5 6-5.1 11-5.1V19l7-7zm2 4.83L18.17 12L16 14.17V12.9h-2c-2.07 0-3.93.38-5.66.95c1.4-1.39 3.2-2.48 5.94-2.85l1.72-.27z" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M387 128c-11.8 0-21.3 9.5-21.3 21.3v213.3c0 58.9-47.7 106.7-106.7 106.7s-106.7-47.8-106.7-106.7v-256c0-35.3 28.6-64 64-64s64 28.7 64 64V320c0 11.8-9.6 21.3-21.3 21.3s-21.3-9.5-21.3-21.3V149.3c0-11.8-9.6-21.3-21.3-21.3c-11.8 0-21.3 9.5-21.3 21.3V320c0 35.4 28.6 64 64 64s64-28.6 64-64V106.7C323 47.8 275.2 0 216.3 0S109.7 47.8 109.7 106.7v256c0 82.5 66.9 149.3 149.3 149.3s149.3-66.9 149.3-149.3V149.3c0-11.8-9.5-21.3-21.3-21.3" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" d="M8 20H4m0 0v-4m0 4l6-6m6-10h4m0 0v4m0-4l-6 6" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M7 12a2 2 0 1 1-4 0a2 2 0 0 1 4 0m7 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0m7 0a2 2 0 1 1-4 0a2 2 0 0 1 4 0" />
                        </svg>

                        <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512">
                            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="48" d="m268 112l144 144l-144 144m124-144H100" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="w-[35rem] flex flex-col border px-12 py-3 ">
                <div class="">
                    <div class="flex flex-col">
                        <span class="text-lg">Healthcare</span>
                        <span class="font-semibold text-3xl mt-2">Product-Design 'Aviro</span>
                    </div>
                    <div class="flex flex-col gap-2 mt-4">
                        <div class="flex items-center mt-4 gap-12">
                            <span class="text-zinc-400 font-normal text-lg">Status</span>
                            <div class="bg-[#68ca7d] rounded-full px-3.5 py-1 text-xs">In Progress</div>
                        </div>
                        <div class="flex items-center mt-4 gap-8">
                            <span class="text-zinc-400 text-lg">Deadline</span>
                            <div class="font-semibold text-lg">24 October 2024</div>
                        </div>
                        <div class="flex items-center mt-4 gap-8">
                            <span class="text-zinc-400 text-lg">Assigned</span>
                            <div class="flex">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9a17.6 17.6 0 0 0 3.8.4c8.3 0 11.5-6.1 11.5-11.4c0-5.5-.2-19.9-.3-39.1a102.4 102.4 0 0 1-22.6 2.7c-43.1 0-52.9-33.5-52.9-33.5c-10.2-26.5-24.9-33.6-24.9-33.6c-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8c11.2 19.6 26.2 25.1 39.6 25.1a63 63 0 0 0 25.6-6c2-14.8 7.8-24.9 14.2-30.7c-49.7-5.8-102-25.5-102-113.5c0-25.1 8.7-45.6 23-61.6c-2.3-5.8-10-29.2 2.2-60.8a18.6 18.6 0 0 1 5-.5c8.1 0 26.4 3.1 56.6 24.1a208.2 208.2 0 0 1 112.2 0c30.2-21 48.5-24.1 56.6-24.1a18.6 18.6 0 0 1 5 .5c12.2 31.6 4.5 55 2.2 60.8c14.3 16.1 23 36.6 23 61.6c0 88.2-52.4 107.6-102.3 113.3c8 7.1 15.2 21.1 15.2 42.5c0 30.7-.3 55.5-.3 63c0 5.4 3.1 11.5 11.4 11.5a19.4 19.4 0 0 0 4-.4C415.9 449.2 480 363.1 480 261.7C480 134.9 379.7 32 256 32" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9a17.6 17.6 0 0 0 3.8.4c8.3 0 11.5-6.1 11.5-11.4c0-5.5-.2-19.9-.3-39.1a102.4 102.4 0 0 1-22.6 2.7c-43.1 0-52.9-33.5-52.9-33.5c-10.2-26.5-24.9-33.6-24.9-33.6c-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8c11.2 19.6 26.2 25.1 39.6 25.1a63 63 0 0 0 25.6-6c2-14.8 7.8-24.9 14.2-30.7c-49.7-5.8-102-25.5-102-113.5c0-25.1 8.7-45.6 23-61.6c-2.3-5.8-10-29.2 2.2-60.8a18.6 18.6 0 0 1 5-.5c8.1 0 26.4 3.1 56.6 24.1a208.2 208.2 0 0 1 112.2 0c30.2-21 48.5-24.1 56.6-24.1a18.6 18.6 0 0 1 5 .5c12.2 31.6 4.5 55 2.2 60.8c14.3 16.1 23 36.6 23 61.6c0 88.2-52.4 107.6-102.3 113.3c8 7.1 15.2 21.1 15.2 42.5c0 30.7-.3 55.5-.3 63c0 5.4 3.1 11.5 11.4 11.5a19.4 19.4 0 0 0 4-.4C415.9 449.2 480 363.1 480 261.7C480 134.9 379.7 32 256 32" />
                                </svg>
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 512 512">
                                    <path fill="currentColor"
                                        d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9a17.6 17.6 0 0 0 3.8.4c8.3 0 11.5-6.1 11.5-11.4c0-5.5-.2-19.9-.3-39.1a102.4 102.4 0 0 1-22.6 2.7c-43.1 0-52.9-33.5-52.9-33.5c-10.2-26.5-24.9-33.6-24.9-33.6c-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8c11.2 19.6 26.2 25.1 39.6 25.1a63 63 0 0 0 25.6-6c2-14.8 7.8-24.9 14.2-30.7c-49.7-5.8-102-25.5-102-113.5c0-25.1 8.7-45.6 23-61.6c-2.3-5.8-10-29.2 2.2-60.8a18.6 18.6 0 0 1 5-.5c8.1 0 26.4 3.1 56.6 24.1a208.2 208.2 0 0 1 112.2 0c30.2-21 48.5-24.1 56.6-24.1a18.6 18.6 0 0 1 5 .5c12.2 31.6 4.5 55 2.2 60.8c14.3 16.1 23 36.6 23 61.6c0 88.2-52.4 107.6-102.3 113.3c8 7.1 15.2 21.1 15.2 42.5c0 30.7-.3 55.5-.3 63c0 5.4 3.1 11.5 11.4 11.5a19.4 19.4 0 0 0 4-.4C415.9 449.2 480 363.1 480 261.7C480 134.9 379.7 32 256 32" />
                                </svg>
                            </div>
                        </div>
                        <div class="flex items-center mt-4 gap-12">
                            <span class="text-zinc-400 text-lg">Lavels</span>
                            <div class="flex gap-1">
                                <div class="px-3 py-1 bg-[#9891f9] rounded-full text-xs">Pitch Deck</div>
                                <div class="px-3 py-1 bg-[#fa844e] rounded-full text-xs">UI Designer</div>
                                <div class="px-3 py-1 bg-[#fee325] rounded-full text-xs">Branding</div>
                            </div>
                        </div>
                    </div>
                    <div class="flex gap-9 mt-12">
                        <span class="font-semibold text-lg">Comments</span>
                        <span class="text-lg">Details</span>
                        <span class="text-lg">Attachements</span>
                    </div>
                </div>
            </div>
            <div class="w-[35rem] flex gap-2 border rounded-b-3xl px-12 py-5">
                <div class="flex flex-col ">
                    <div class="flex gap-4">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-10" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M256 32C132.3 32 32 134.9 32 261.7c0 101.5 64.2 187.5 153.2 217.9a17.6 17.6 0 0 0 3.8.4c8.3 0 11.5-6.1 11.5-11.4c0-5.5-.2-19.9-.3-39.1a102.4 102.4 0 0 1-22.6 2.7c-43.1 0-52.9-33.5-52.9-33.5c-10.2-26.5-24.9-33.6-24.9-33.6c-19.5-13.7-.1-14.1 1.4-14.1h.1c22.5 2 34.3 23.8 34.3 23.8c11.2 19.6 26.2 25.1 39.6 25.1a63 63 0 0 0 25.6-6c2-14.8 7.8-24.9 14.2-30.7c-49.7-5.8-102-25.5-102-113.5c0-25.1 8.7-45.6 23-61.6c-2.3-5.8-10-29.2 2.2-60.8a18.6 18.6 0 0 1 5-.5c8.1 0 26.4 3.1 56.6 24.1a208.2 208.2 0 0 1 112.2 0c30.2-21 48.5-24.1 56.6-24.1a18.6 18.6 0 0 1 5 .5c12.2 31.6 4.5 55 2.2 60.8c14.3 16.1 23 36.6 23 61.6c0 88.2-52.4 107.6-102.3 113.3c8 7.1 15.2 21.1 15.2 42.5c0 30.7-.3 55.5-.3 63c0 5.4 3.1 11.5 11.4 11.5a19.4 19.4 0 0 0 4-.4C415.9 449.2 480 363.1 480 261.7C480 134.9 379.7 32 256 32" />
                        </svg>
                        <div class="flex flex-col">
                            <span class="font-semibold">Jimmy Anderson</span>
                            <span class="text-zinc-400">Design Lead</span>
                        </div>
                        <div class="flex items-center justify-center mb-6">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 24 24">
                                <path fill="currentColor"
                                    d="M12 10a2 2 0 0 0-2 2a2 2 0 0 0 2 2c1.11 0 2-.89 2-2a2 2 0 0 0-2-2" />
                            </svg>
                            <span>2 hours ago</span>
                        </div>
                    </div>
                    <span class="ml-14 mt-2">Hey Guys, I have updated the wireframe!</span>
                    <div class="flex mt-3 ml-14 items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 bg-neutral-100 rounded-full p-1"
                            viewBox="0 0 128 128">
                            <radialGradient id="notoFire0" cx="68.884" cy="124.296" r="70.587"
                                gradientTransform="matrix(-1 -.00434 -.00713 1.6408 131.986 -79.345)"
                                gradientUnits="userSpaceOnUse">
                                <stop offset=".314" stop-color="#ff9800" />
                                <stop offset=".662" stop-color="#ff6d00" />
                                <stop offset=".972" stop-color="#f44336" />
                            </radialGradient>
                            <path fill="url(#notoFire0)"
                                d="M35.56 40.73c-.57 6.08-.97 16.84 2.62 21.42c0 0-1.69-11.82 13.46-26.65c6.1-5.97 7.51-14.09 5.38-20.18c-1.21-3.45-3.42-6.3-5.34-8.29c-1.12-1.17-.26-3.1 1.37-3.03c9.86.44 25.84 3.18 32.63 20.22c2.98 7.48 3.2 15.21 1.78 23.07c-.9 5.02-4.1 16.18 3.2 17.55c5.21.98 7.73-3.16 8.86-6.14c.47-1.24 2.1-1.55 2.98-.56c8.8 10.01 9.55 21.8 7.73 31.95c-3.52 19.62-23.39 33.9-43.13 33.9c-24.66 0-44.29-14.11-49.38-39.65c-2.05-10.31-1.01-30.71 14.89-45.11c1.18-1.08 3.11-.12 2.95 1.5" />
                            <radialGradient id="notoFire1" cx="64.921" cy="54.062" r="73.86"
                                gradientTransform="matrix(-.0101 .9999 .7525 .0076 26.154 -11.267)"
                                gradientUnits="userSpaceOnUse">
                                <stop offset=".214" stop-color="#fff176" />
                                <stop offset=".328" stop-color="#fff27d" />
                                <stop offset=".487" stop-color="#fff48f" />
                                <stop offset=".672" stop-color="#fff7ad" />
                                <stop offset=".793" stop-color="#fff9c4" />
                                <stop offset=".822" stop-color="#fff8bd" stop-opacity="0.804" />
                                <stop offset=".863" stop-color="#fff6ab" stop-opacity="0.529" />
                                <stop offset=".91" stop-color="#fff38d" stop-opacity="0.209" />
                                <stop offset=".941" stop-color="#fff176" stop-opacity="0" />
                            </radialGradient>
                            <path fill="url(#notoFire1)"
                                d="M76.11 77.42c-9.09-11.7-5.02-25.05-2.79-30.37c.3-.7-.5-1.36-1.13-.93c-3.91 2.66-11.92 8.92-15.65 17.73c-5.05 11.91-4.69 17.74-1.7 24.86c1.8 4.29-.29 5.2-1.34 5.36c-1.02.16-1.96-.52-2.71-1.23a16.1 16.1 0 0 1-4.44-7.6c-.16-.62-.97-.79-1.34-.28c-2.8 3.87-4.25 10.08-4.32 14.47C40.47 113 51.68 124 65.24 124c17.09 0 29.54-18.9 19.72-34.7c-2.85-4.6-5.53-7.61-8.85-11.88" />
                        </svg>
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-4 bg-neutral-100 rounded-full p-1"
                            viewBox="0 0 128 128">
                            <path fill="#ffca28"
                                d="M77.6 48.8c7-1.4 13.8-.7 17.2-.2c3.8.5 9.1 1.3 13.2 3.2c4.7 2.1 5.9 5.7 6 10c.1 4-1.1 6.4-2.5 7.7c4.2 2.3 5.2 5 5 9.5c-.2 4-2 7.1-5.6 8.9c2.9 3.1 3.5 5.5 3 10.2c-.4 4.4-2.1 7-9 9c1.3 1.4 1.7 3.8 1.6 6c-.2 2.6-1 5.1-4.6 6.9c-1 .5-6.9 3.4-19.2-.5c-10.4 1.8-24.9.9-36.4-4.6c-10.9-.1-23.8-1-24.8-1c-1.1 0-3.2-.5-4.2-3.3S13.2 86.7 16.1 74c.4-1.8 1.9-2.8 3.2-2.9s8.6-.9 10.3-1.1c9-1.1 6.8-8.9 17.2-21.3c4.9-5.9 14.9-10 15.5-23.1c.2-4.4.5-11.6.5-12.6c0-6.3 12.2-7.5 16.6 1.2c7.9 15.5 1.4 23.1-1.8 34.6" />
                            <defs>
                                <path id="notoThumbsUp0"
                                    d="M77.6 48.8c7-1.4 13.8-.7 17.2-.2c3.8.5 9.1 1.3 13.2 3.2c4.7 2.1 5.9 5.7 6 10c.1 4-1.1 6.4-2.5 7.7c4.2 2.3 5.2 5 5 9.5c-.2 4-2 7.1-5.6 8.9c2.9 3.1 3.5 5.5 3 10.2c-.4 4.4-2.1 7-9 9c1.3 1.4 1.7 3.8 1.6 6c-.2 2.6-1 5.1-4.6 6.9c-1 .5-6.9 3.4-19.2-.5c-10.4 1.8-24.9.9-36.4-4.6c-10.9-.1-23.8-1-24.8-1c-1.1 0-3.2-.5-4.2-3.3S13.2 86.7 16.1 74c.4-1.8 1.9-2.8 3.2-2.9s8.6-.9 10.3-1.1c9-1.1 6.8-8.9 17.2-21.3c4.9-5.9 14.9-10 15.5-23.1c.2-4.4.5-11.6.5-12.6c0-6.3 12.2-7.5 16.6 1.2c7.9 15.5 1.4 23.1-1.8 34.6" />
                            </defs>
                            <clipPath id="notoThumbsUp1">
                                <use href="#notoThumbsUp0" />
                            </clipPath>
                            <g fill="#faa700" clip-path="url(#notoThumbsUp1)">
                                <path
                                    d="M16 72.2c.1 1.5 0 3.7 2.8 3.7s9.5-.7 10.9-.9c2.7-.3 7-2.5 8.6-6c1.4-2.9 4.7-10.5 4.7-10.5s7-20 9.6-20.3c4.1-.5 11.9-1.4 11.9-13c0-3.6.4-9 .4-10c.3-7.7 8.9-4.8 12.3-1.1l3.6-3l-6.4-5.7s-13.4.7-13.3.8c.3.1-45.1 66-45.1 66m.6 38.6l27.5 1v4.2l-26.7-1.4zm94.8-62.2l7 12.6l-1.8 41.7l-13.4 20.3l-20-.5s-5.6-11.3-6.4-13.4c-.8-2-3-6-7.3-12.2c-4.2-6.2-1.3-11.6 1.6-13.7c1.7-1.2 3.1-5.2 3.3-7.6s1-20.7 1.2-26.1s5.1-6.7 7.2-6.7zm-19.8 7c-3.6.4-5.4 4.5-5.4 8.8c.1 7.2 2.9 7.1 5.9 7.7c.8.2 1.2 1.5 0 1.7c-5.2.5-6.2 5-6.2 8.5c0 6.6 4.8 7.2 5.6 7.2c1.3.1 1.7 1.7 0 1.8c-3.3.2-5.3 3.5-5.3 7.4c0 3 .9 6.1 6.1 7.6c.6.2 1.5 1.6-.2 1.8c-4.5.7-4.6 2.9-4.7 5.8c0 3.3 1.6 4.3 3.6 4.9c1.7.4 5.1.5 7 .2c4.6-.8 8.4-5.9 4.4-11.4H96c-.6 0-.6-.8.2-.8c10.9-.6 14.1-4.5 14.7-8.9c.4-3.2-.5-6.5-3.2-8.9c-.4-.4-1-.2-1.7-.2c12-6.5 7.6-16.6 1.8-17.6c-1.1-.2-2.1-.3-1.1-.7c5.9-2.1 7.4-18.5-6-18c.2 0-6.2 2.8-9.1 3.1" />
                            </g>
                            <defs>
                                <use href="#notoThumbsUp0" id="notoThumbsUp2" />
                            </defs>
                            <clipPath id="notoThumbsUp3">
                                <use href="#notoThumbsUp2" />
                            </clipPath>
                            <g fill="#b55e19" clip-path="url(#notoThumbsUp3)">
                                <path
                                    d="M31.3 68.3c.8 2.7 4 2.5 5.8.6C41.5 64 44.8 54.6 49 50.3c6.9-7.1 14.6-12.6 14.6-20c0-2.4 1-8.8-2.1-10.1c-1.6-.7-2.8.5-2.8 1.4c0 1-.7 10.5-.7 10.5z" />
                                <path
                                    d="M72.7 7.1c-.4 1.1-.2 2.4 1.4 3.9c15.1 14-.7 31.5-.5 40.6c.1 2.5 0 18.6-.2 20.3c-1.6 10.9-8 14.8-11.6 16.9c-.5.3-.4 1.4.4 1.2c.7-.2 8-1.6 11.9-9c.3 2.2 2.6 6.2 4.5 7c-2 .9-7.5 9.1 1.4 16.5c-3.4 1.3-5.8 7.9-.9 12.2c-3.5 1.1-22 1.4-32.7-5.6c-1-.7-2.7-.5-3.5.3c-.9.8-1.4.8-1.9.7s-14.9.6-15.9.6s-3.2.2-3.2 1.6s24.6 1.6 24.6 1.6l13.6 6l23.3-.9s13.9 1.3 12.1.9s-10.6-2.4-14.5-6.5c-4.5-4.9-.6-8.1.5-8.4c.7-.2 1.5-.4 2.6 0c1.2.4 14 3.5 20.2.6c.8-.4.5-.9-.2-.9c-10.2.5-18.9-1.2-23-4.7c-5.9-5.1-3.3-10.6-1.3-11.8c.7-.4 1.5-.3 1.9-.1c8 3.4 24.1 1.5 28.7-1.4c.5-.3.3-1-.4-.8c-1.5.4-22.2 4.1-29.4-1.8c-5-4.1-5.9-8.6-2.6-12.1c1-1.1 2.8-.8 3.2-.7c13.2 2.7 27.2 0 29.7-2.6c.6-.6.3-1.4-.7-1.1c-3.5 1.1-17.5 3-23.8 2.2c-1.6-.2-3.2-.4-5.4-1.9c-1.2-.8-2.6-1.8-3.6-2.8s-1.9-2.9-1.5-6.4c.2-2 1.3-4 4.8-4.7c2-.4 5.2.3 6.1.5s2.6.2 3.7-.1c1.8-.5 7.8-2.1 11.6-2.4c1.2-.1 1.4-1.5-.1-1.6c-1.4-.1-6.8-.2-10.9.8c-.5.1-.8-.2-.5-.5c.3-.4 1.1-1 1.3-1.2c.3-.2.4-1.2-1.1-.8c-.9.2-2.5 1.3-3.3 2.4c-.4.6-1.1.7-1.5.7c-4.8-.3-7.8.2-9.4 1.9c-.1-2.5.3-5.2.8-6.6c.3-.9 8.9-9 8.2-23.4c-.7-14.8-11.2-22.9-12.9-18.6" />
                            </g>
                        </svg>
                        <span class="text-xs ml-2 font-semibold">Reply</span>
                    </div>
                </div>
            </div>

        </div> --}}

        {{-- <div class="flex flex-col">
            <div class="flex flex-col rounded-2xl w-[24rem] overflow-clip">
                <div class="flex justify-between items-center bg-black p-4 pb-8">
                    <div class="flex gap-4 items-center">
                        <div class="rounded-full flex size-14">
                            <img src="https://c.pxhere.com/photos/42/e1/blond_female_girl_model_person_portrait_woman-911371.jpg!s2"
                                alt="" class="object-cover rounded-full w-full h-full">
                        </div>
                        <div class="flex flex-col gap-1">
                            <div class="text-white font-semibold">James Arthur</div>
                            <div class="text-white text-sm">Courier</div>
                        </div>
                    </div>
                    <div class="flex items-center gap-5">
                        <button class="rounded-full flex items-center size-10 bg-[#a7acbf] justify-center"><svg
                                xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linejoin="round" stroke-width="1.5"
                                    d="M7.829 16.171a20.9 20.9 0 0 1-4.846-7.614c-.573-1.564-.048-3.282 1.13-4.46l.729-.728a2.11 2.11 0 0 1 2.987 0l1.707 1.707a2.11 2.11 0 0 1 0 2.987l-.42.42a1.81 1.81 0 0 0 0 2.56l3.84 3.841a1.81 1.81 0 0 0 2.56 0l.421-.42a2.11 2.11 0 0 1 2.987 0l1.707 1.707a2.11 2.11 0 0 1 0 2.987l-.728.728c-1.178 1.179-2.896 1.704-4.46 1.131a20.9 20.9 0 0 1-7.614-4.846Z" />
                            </svg>
                        </button>
                        <button class="rounded-full flex items-center size-10 bg-[#a7acbf] justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="2"
                                    d="M8 9h8m-8 4h6m4-9a3 3 0 0 1 3 3v8a3 3 0 0 1-3 3h-5l-5 3v-3H6a3 3 0 0 1-3-3V7a3 3 0 0 1 3-3z" />
                            </svg>
                        </button>
                    </div>
                </div>

                <div class="bg-white rounded-2xl w-full px-3 py-4 flex flex-col -translate-y-4">
                    <div class="flex justify-between items-center bg-[#f6f6f6] rounded-xl p-4">
                        <span class="font-semibold">Regular Package</span>
                        <span class="text-sm text-[#a0a2a5] font-medium">JP12334DD</span>
                    </div>


                    <div class="flex flex-col mt-4">
                        <div class="flex gap-4">
                            <div class="bg-[#f6f6f6] rounded-full flex items-center justify-center size-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-7 text-black" viewBox="0 0 24 24">
                                    <path fill="currentColor"
                                        d="M17 3.34a10 10 0 1 1-14.995 8.984L2 12l.005-.324A10 10 0 0 1 17 3.34M12 6a1 1 0 0 0-.993.883L11 7v5l.009.131a1 1 0 0 0 .197.477l.087.1l3 3l.094.082a1 1 0 0 0 1.226 0l.094-.083l.083-.094a1 1 0 0 0 0-1.226l-.083-.094L13 11.585V7l-.007-.117A1 1 0 0 0 12 6" />
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <div class="text-[#a0a2a5]">Order Process</div>
                                <div class="font-semibold">New York Warehouse</div>
                            </div>
                        </div>

                        <div class="border-l-2 h-9 ml-6 border-dashed"></div>
                        <div class="flex gap-4">
                            <div class="bg-[#f6f6f6] rounded-full flex items-center justify-center size-12">
                                <svg xmlns="http://www.w3.org/2000/svg" class="size-7 " viewBox="0 0 24 24">
                                    <circle cx="12" cy="9.5" r="1.5" fill="currentColor" />
                                    <path fill="currentColor"
                                        d="M12 2a8 8 0 0 0-8 7.92c0 5.48 7.05 11.58 7.35 11.84a1 1 0 0 0 1.3 0C13 21.5 20 15.4 20 9.92A8 8 0 0 0 12 2m0 11a3.5 3.5 0 1 1 3.5-3.5A3.5 3.5 0 0 1 12 13" />
                                </svg>
                            </div>
                            <div class="flex flex-col">
                                <div class="text-[#a0a2a5]">To Your Home</div>
                                <div class="font-semibold">Bohrain House</div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>

        </div> --}}


        <div class="flex flex-col">
            <div class="flex rounded-3xl bg-white w-[28rem] p-6 flex-col">
                <div class="flex w-full gap-2 relative">
                    <div
                        class="rounded-full flex items-center justify-center bg-zinc-300 size-9 absolute top-4 left-[145px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M5.624 4.424C3.965 5.182 2.75 6.986 2.75 9.137c0 2.197.9 3.891 2.188 5.343c1.063 1.196 2.349 2.188 3.603 3.154q.448.345.885.688c.526.415.995.778 1.448 1.043s.816.385 1.126.385s.674-.12 1.126-.385c.453-.265.922-.628 1.448-1.043q.437-.344.885-.687c1.254-.968 2.54-1.959 3.603-3.155c1.289-1.452 2.188-3.146 2.188-5.343c0-2.15-1.215-3.955-2.874-4.713c-1.612-.737-3.778-.542-5.836 1.597a.75.75 0 0 1-1.08 0C9.402 3.882 7.236 3.687 5.624 4.424M12 4.46C9.688 2.39 7.099 2.1 5 3.059C2.786 4.074 1.25 6.426 1.25 9.138c0 2.665 1.11 4.699 2.567 6.339c1.166 1.313 2.593 2.412 3.854 3.382q.43.33.826.642c.513.404 1.063.834 1.62 1.16s1.193.59 1.883.59s1.326-.265 1.883-.59c.558-.326 1.107-.756 1.62-1.16q.396-.312.826-.642c1.26-.97 2.688-2.07 3.854-3.382c1.457-1.64 2.567-3.674 2.567-6.339c0-2.712-1.535-5.064-3.75-6.077c-2.099-.96-4.688-.67-7 1.399"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div
                        class="rounded-full flex items-center justify-center bg-zinc-300 size-9 absolute top-4 left-[345px]">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" viewBox="0 0 24 24">
                            <path fill="currentColor" fill-rule="evenodd"
                                d="M5.624 4.424C3.965 5.182 2.75 6.986 2.75 9.137c0 2.197.9 3.891 2.188 5.343c1.063 1.196 2.349 2.188 3.603 3.154q.448.345.885.688c.526.415.995.778 1.448 1.043s.816.385 1.126.385s.674-.12 1.126-.385c.453-.265.922-.628 1.448-1.043q.437-.344.885-.687c1.254-.968 2.54-1.959 3.603-3.155c1.289-1.452 2.188-3.146 2.188-5.343c0-2.15-1.215-3.955-2.874-4.713c-1.612-.737-3.778-.542-5.836 1.597a.75.75 0 0 1-1.08 0C9.402 3.882 7.236 3.687 5.624 4.424M12 4.46C9.688 2.39 7.099 2.1 5 3.059C2.786 4.074 1.25 6.426 1.25 9.138c0 2.665 1.11 4.699 2.567 6.339c1.166 1.313 2.593 2.412 3.854 3.382q.43.33.826.642c.513.404 1.063.834 1.62 1.16s1.193.59 1.883.59s1.326-.265 1.883-.59c.558-.326 1.107-.756 1.62-1.16q.396-.312.826-.642c1.26-.97 2.688-2.07 3.854-3.382c1.457-1.64 2.567-3.674 2.567-6.339c0-2.712-1.535-5.064-3.75-6.077c-2.099-.96-4.688-.67-7 1.399"
                                clip-rule="evenodd" />
                        </svg>
                    </div>
                    <div class="rounded-2xl bg-[#f6f6f6] p-4">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/041/290/593/small/ai-generated-short-sleeves-black-tshirt-isolated-on-a-transparent-background-free-png.png"
                            alt="" class="size-40 object-cover rounded-md">
                    </div>
                    <div class="rounded-xl bg-[#f6f6f6] p-4">
                        <img src="https://static.vecteezy.com/system/resources/thumbnails/041/290/593/small/ai-generated-short-sleeves-black-tshirt-isolated-on-a-transparent-background-free-png.png"
                            alt="" class="size-40 rounded-md object-cover">
                    </div>
                </div>
                <div class="flex gap-6">
                    <div class="flex flex-col mt-2">
                        <span class="font-semibold text-[21px]">Racing Ways Jacket</span>
                        <div class="mt-2 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 16 16">
                                <g fill="none">
                                    <path fill="url(#fluentColorStar160)"
                                        d="M7.194 2.102a.9.9 0 0 1 1.614 0l1.521 3.082l3.401.494a.9.9 0 0 1 .5 1.535l-2.462 2.4l.581 3.387a.9.9 0 0 1-1.306.948L8.001 12.35l-3.042 1.6A.9.9 0 0 1 3.653 13l.58-3.387l-2.46-2.399a.9.9 0 0 1 .499-1.535l3.4-.494z" />
                                    <defs>
                                        <linearGradient id="fluentColorStar160" x1="14.5" x2="1.125"
                                            y1="14.332" y2="1.72" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#ff6f47" />
                                            <stop offset="1" stop-color="#ffcd0f" />
                                        </linearGradient>
                                    </defs>
                                </g>
                            </svg>
                            <span class="">4.9</span>
                            <span class="text-[#b1b0b0] ml-2 text-[16px]">(1208 Reviews)</span>
                        </div>
                        <span class="font-semibold text-2xl ml-1 mt-1">$66.00</span>
                    </div>
                    <div class="flex flex-col mt-2">
                        <span class="font-semibold text-[21px] mr-1">Racing Ways Jacket</span>
                        <div class="mt-2 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-5" viewBox="0 0 16 16">
                                <g fill="none">
                                    <path fill="url(#fluentColorStar160)"
                                        d="M7.194 2.102a.9.9 0 0 1 1.614 0l1.521 3.082l3.401.494a.9.9 0 0 1 .5 1.535l-2.462 2.4l.581 3.387a.9.9 0 0 1-1.306.948L8.001 12.35l-3.042 1.6A.9.9 0 0 1 3.653 13l.58-3.387l-2.46-2.399a.9.9 0 0 1 .499-1.535l3.4-.494z" />
                                    <defs>
                                        <linearGradient id="fluentColorStar160" x1="14.5" x2="1.125"
                                            y1="14.332" y2="1.72" gradientUnits="userSpaceOnUse">
                                            <stop stop-color="#ff6f47" />
                                            <stop offset="1" stop-color="#ffcd0f" />
                                        </linearGradient>
                                    </defs>
                                </g>
                            </svg>
                            <span class="">4.9</span>
                            <span class="text-[#b1b0b0] ml-2 text-[16px]">(1208 Reviews)</span>
                        </div>
                        <span class="font-semibold text-2xl ml-1 mt-1">$66.00</span>
                    </div>
                </div>
            </div>
        </div>


        <div class="flex flex-col">
            <div class="flex flex-col items-center justify-center w-[28rem] bg-white rounded-lg p-6">
                <div class="size-48 rounded-full bg-[#e6faed] flex items-center justify-center">
                    <div class="size-32 rounded-full bg-[#02d15f] flex items-center justify-center">
                        <div class="font-semibold">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="size-10 bg-white text-[#02d15f] rounded-full p-2 " viewBox="0 0 16 16">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5" d="m2.75 8.75l3.5 3.5l7-7.5" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="font-semibold text-[23px] mt-9">Top Up Successfull</div>
                <div class="flex flex-col items-center justify-center mt-3 text-xs">
                    <div class="flex text-[#808080] text-[12px]">You have successfully top up</div>
                    <div class="text-[#808080] text-[12px]">e-wallet for $1900</div>
                </div>
                <div class="flex gap-1 mt-5">
                    <button
                        class="flex items-center justify-center border rounded-full px-9 py-2.5 mt-3 font-medium text-xl">
                        Cancel</button>
                    <button
                        class="flex items-center justify-center border rounded-full px-6 py-2.5 mt-3 bg-black text-white text-xl ">
                        View Recipe</button>
                </div>
            </div>
        </div>

        <div class="flex flex-col">
            <div class="flex flex-col items-center justify-center w-[26rem] bg-white rounded-2xl px-4 pt-12">
                <div class="">
                    <img src="https://pngimg.com/uploads/jacket/small/jacket_PNG8048.png" alt=""
                        class="size-[320px]">
                </div>
                <div class="flex items-center rounded-lg bg-[#fcfafa] mt-9 mb-5 p-1 gap-0.5 overflow-clip">
                    <img src="https://pngimg.com/uploads/jacket/small/jacket_PNG8048.png" alt=""
                        class=" p-1 size-14 rounded-lg border border-black object-fill bg-white">
                    <img src="https://pngimg.com/uploads/jacket/small/jacket_PNG8048.png" alt=""
                        class=" p-1 size-14 rounded-lg bg-white">
                    <img src="https://pngimg.com/uploads/jacket/small/jacket_PNG8048.png" alt=""
                        class="p-1 size-14 rounded-lg bg-white">

                    <img src="https://pngimg.com/uploads/jacket/small/jacket_PNG8048.png" alt=""
                        class=" p-1 size-14 rounded-lg bg-white">

                    <img src="https://pngimg.com/uploads/jacket/small/jacket_PNG8048.png" alt=""
                        class="size-14 rounded-lg bg-white object-cover">
                </div>
            </div>
        </div>


        <div class="flex flex-col">
            <div class="flex items-center justify-center w-[15rem] h-[10rem] bg-white rounded-2xl px-4 pt-12 relative">

               <div class="z-40 bg-black rounded-full size-10 absolute left-8"></div>
               <div class="z-30 bg-red-500 rounded-full size-10 absolute left-[59px]"></div>
               <div class="z-20 bg-blue-500 rounded-full size-10 absolute left-[89px]"></div>
               <div class="z-10 bg-green-500 rounded-full size-10 absolute left-[115px]"></div>
            </div>
        </div>
    </div>
</div>
