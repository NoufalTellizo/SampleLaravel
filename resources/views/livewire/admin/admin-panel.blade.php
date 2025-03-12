<div class="w-auto bg-white h-[calc(100vh-4rem)] m-4 rounded-lg shadow-lg">
    <div class="flex flex-col w-full rounded-lg p-6">
        <div class="flex flex-col">
            <div class="flex items-center justify-between">
            <div class="flex gap-2">
                <span class="font-bold text-2xl">Your Customers</span>
            </div>
            <button
                class="flex gap-2 px-4 py-2 rounded-lg tracking-wide text-balance bg-green-500 text-white font-medium">
                <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" viewBox="0 0 24 24">
                    <path fill="currentColor"
                        d="M18 10h-4V6a2 2 0 0 0-4 0l.071 4H6a2 2 0 0 0 0 4l4.071-.071L10 18a2 2 0 0 0 4 0v-4.071L18 14a2 2 0 0 0 0-4" />
                </svg>
                Add Customer</button>
            </div>

                <div class="w-full mt-4">
                    <table class="table-fixed w-full">
                        <thead>
                            <tr class="bg-neutral-100">
                                <th class="px-2 py-2 text-left flex gap-2 items-center">
                                    Full Name
                                    <svg xmlns="http://www.w3.org/2000/svg" class="size-5 rotate-90" viewBox="0 0 24 24">
                                        <path fill="currentColor"
                                            d="M9.71 6.29a1 1 0 0 0-1.42 0l-5 5a1 1 0 0 0 0 1.42l5 5a1 1 0 0 0 1.42 0a1 1 0 0 0 0-1.42L5.41 12l4.3-4.29a1 1 0 0 0 0-1.42m11 5l-5-5a1 1 0 0 0-1.42 1.42l4.3 4.29l-4.3 4.29a1 1 0 0 0 0 1.42a1 1 0 0 0 1.42 0l5-5a1 1 0 0 0 0-1.42" />
                                    </svg>
                                </th>
                                <th class="px-2 py-2 text-left">Contact Info</th>
                                <th class="px-2 py-2 text-left">Status</th>
                                <th class="px-2 py-2 text-left">Privacy</th>
                                <th class="px-2 py-2 text-left">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="hover:bg-neutral-100 border-b">
                                <td class="flex px-2 py-2 text gap-2 items-center mt-2">
                                    <div class="bg-green-400 rounded-full size-12 overflow-clip">
                                        <img src="{{ asset('assets/img/user4-128x128.jpg') }}" alt=""
                                            class="rounded-full object-cover">
                                    </div>
                                    <div class="flex flex-col">
                                        <span>Alice Smith</span>
                                        <span class="text-sm">alice@smith.com</span>
                                    </div>
                                </td>
                                <div class="flex gap-2 items-center">
                                    <td class="px-2 py-2">
                                        <div class="flex flex-col">
                                            <span>+84733920293</span>
                                            <span>Kerala, India</span>
                                        </div>
                                    </td>
                                </div>
                                <td class="px-2 py-2">
                                    <span class="bg-red-500 px-2 py-1 rounded-lg text-white">In Active</span>
                                </td>
        
                                <td class="text-red-500">
                                    <div class="flex gap-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 2C9.243 2 7 4.243 7 7v2H6c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-9c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5M9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v2H9zm9.002 13H13v-2.278c.595-.347 1-.985 1-1.722c0-1.103-.897-2-2-2s-2 .897-2 2c0 .736.405 1.375 1 1.722V20H6v-9h12z" />
                                        </svg>
                                        <span class="font-medium text-lg">Private</span>
                                    </div>
                                </td>
        
                                <td class="px-2 py-2">
                                    <div class="flex items-center gap-2">
                                        <button
                                            class="flex px-4 py-2 rounded-lg tracking-wide text-balance bg-neutral-100 gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-yellow-500"
                                                viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5">
                                                    <path
                                                        d="M19.09 14.441v4.44a2.37 2.37 0 0 1-2.369 2.369H5.12a2.37 2.37 0 0 1-2.369-2.383V7.279a2.356 2.356 0 0 1 2.37-2.37H9.56" />
                                                    <path
                                                        d="M6.835 15.803v-2.165c.002-.357.144-.7.395-.953l9.532-9.532a1.36 1.36 0 0 1 1.934 0l2.151 2.151a1.36 1.36 0 0 1 0 1.934l-9.532 9.532a1.36 1.36 0 0 1-.953.395H8.197a1.36 1.36 0 0 1-1.362-1.362M19.09 8.995l-4.085-4.086" />
                                                </g>
                                            </svg>
                                        </button>
                                        <button
                                            class="flex px-4 py-2 rounded-lg tracking-wide text-balance bg-neutral-100 gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-red-500"
                                                viewBox="0 0 256 256">
                                                <path fill="currentColor"
                                                    d="M216 50h-42V40a22 22 0 0 0-22-22h-48a22 22 0 0 0-22 22v10H40a6 6 0 0 0 0 12h10v146a14 14 0 0 0 14 14h128a14 14 0 0 0 14-14V62h10a6 6 0 0 0 0-12M94 40a10 10 0 0 1 10-10h48a10 10 0 0 1 10 10v10H94Zm100 168a2 2 0 0 1-2 2H64a2 2 0 0 1-2-2V62h132Zm-84-104v64a6 6 0 0 1-12 0v-64a6 6 0 0 1 12 0m48 0v64a6 6 0 0 1-12 0v-64a6 6 0 0 1 12 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-neutral-100 border-b">
                                <td class="flex px-2 py-2 text gap-2 items-center mt-2">
                                    <div class="bg-green-400 rounded-full size-12">
                                        <img src="{{ asset('assets/img/user8-128x128.jpg') }}" alt=""
                                            class="rounded-full object-cover">
                                    </div>
                                    <div class="flex flex-col">
                                        <span>Thomas Issac</span>
                                        <span class="text-sm">thomasisac@963.com</span>
                                    </div>
                                </td>
                                <div class="flex gap-2 items-center">
                                    <td class="px-2 py-2">
                                        <div class="flex flex-col">
                                            <span>+84733920293</span>
                                            <span>Karnataka, India</span>
                                        </div>
                                    </td>
                                </div>
                                <td class="px-2 py-2">
                                    <span class="bg-red-500 px-2 py-1 rounded-lg text-white">In Active</span>
                                </td>
                                <td class="text-red-500">
                                    <div class="flex gap-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24">
                                            <path fill="currentColor"
                                                d="M12 2C9.243 2 7 4.243 7 7v2H6c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-9c0-1.103-.897-2-2-2h-1V7c0-2.757-2.243-5-5-5M9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v2H9zm9.002 13H13v-2.278c.595-.347 1-.985 1-1.722c0-1.103-.897-2-2-2s-2 .897-2 2c0 .736.405 1.375 1 1.722V20H6v-9h12z" />
                                        </svg>
                                        <span class="font-medium text-lg">Private</span>
                                    </div>
                                </td>
                                <td class="px-2 py-2">
                                    <div class="flex items-center gap-2">
                                        <button
                                            class="flex px-4 py-2 rounded-lg tracking-wide text-balance bg-neutral-100 gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-yellow-500"
                                                viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5">
                                                    <path
                                                        d="M19.09 14.441v4.44a2.37 2.37 0 0 1-2.369 2.369H5.12a2.37 2.37 0 0 1-2.369-2.383V7.279a2.356 2.356 0 0 1 2.37-2.37H9.56" />
                                                    <path
                                                        d="M6.835 15.803v-2.165c.002-.357.144-.7.395-.953l9.532-9.532a1.36 1.36 0 0 1 1.934 0l2.151 2.151a1.36 1.36 0 0 1 0 1.934l-9.532 9.532a1.36 1.36 0 0 1-.953.395H8.197a1.36 1.36 0 0 1-1.362-1.362M19.09 8.995l-4.085-4.086" />
                                                </g>
                                            </svg>
                                        </button>
                                        <button
                                            class="flex px-4 py-2 rounded-lg tracking-wide text-balance bg-neutral-100 gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-red-500"
                                                viewBox="0 0 256 256">
                                                <path fill="currentColor"
                                                    d="M216 50h-42V40a22 22 0 0 0-22-22h-48a22 22 0 0 0-22 22v10H40a6 6 0 0 0 0 12h10v146a14 14 0 0 0 14 14h128a14 14 0 0 0 14-14V62h10a6 6 0 0 0 0-12M94 40a10 10 0 0 1 10-10h48a10 10 0 0 1 10 10v10H94Zm100 168a2 2 0 0 1-2 2H64a2 2 0 0 1-2-2V62h132Zm-84-104v64a6 6 0 0 1-12 0v-64a6 6 0 0 1 12 0m48 0v64a6 6 0 0 1-12 0v-64a6 6 0 0 1 12 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                            <tr class="hover:bg-neutral-100 border-b">
                                <td class="flex px-2 py-2 text gap-2 items-center mt-2">
                                    <div class="bg-green-400 rounded-full size-12">
                                        <img src="{{ asset('assets/img/user3-128x128.jpg') }}" alt=""
                                            class="rounded-full object-cover">
                                    </div>
                                    <div class="flex flex-col">
                                        <span>Ellyse Perry</span>
                                        <span class="text-sm">ellysepeprry@gmail.com</span>
                                    </div>
                                </td>
                                <div class="flex gap-2 items-center">
                                    <td class="px-2 py-2">
                                        <div class="flex flex-col">
                                            <span>+84733920293</span>
                                            <span>Brisbane, Australia</span>
                                        </div>
                                    </td>
                                </div>
                                <td class="px-2 py-2">
                                    <span class="bg-green-500 px-2 py-1 rounded-lg text-white">Active</span>
                                </td>
                                <td>
                                    <div class="flex gap-2 items-center">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-green-500"
                                            viewBox="0 0 20 20">
                                            <path fill="currentColor"
                                                d="M10 20a10 10 0 1 1 0-20a10 10 0 0 1 0 20m7.75-8a8 8 0 0 0 0-4h-3.82a29 29 0 0 1 0 4zm-.82 2h-3.22a14.4 14.4 0 0 1-.95 3.51A8.03 8.03 0 0 0 16.93 14m-8.85-2h3.84a24.6 24.6 0 0 0 0-4H8.08a24.6 24.6 0 0 0 0 4m.25 2c.41 2.4 1.13 4 1.67 4s1.26-1.6 1.67-4zm-6.08-2h3.82a29 29 0 0 1 0-4H2.25a8 8 0 0 0 0 4m.82 2a8.03 8.03 0 0 0 4.17 3.51c-.42-.96-.74-2.16-.95-3.51zm13.86-8a8.03 8.03 0 0 0-4.17-3.51c.42.96.74 2.16.95 3.51zm-8.6 0h3.34c-.41-2.4-1.13-4-1.67-4S8.74 3.6 8.33 6M3.07 6h3.22c.2-1.35.53-2.55.95-3.51A8.03 8.03 0 0 0 3.07 6" />
                                        </svg>
                                        <span class="font-medium text-lg text-green-500">Public</span>
                                    </div>
                                </td>
                                <td class="px-2 py-2">
                                    <div class="flex items-center gap-2">
                                        <button
                                            class="flex px-4 py-2 rounded-lg tracking-wide text-balance bg-neutral-100 gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-yellow-500"
                                                viewBox="0 0 24 24">
                                                <g fill="none" stroke="currentColor" stroke-linecap="round"
                                                    stroke-linejoin="round" stroke-width="1.5">
                                                    <path
                                                        d="M19.09 14.441v4.44a2.37 2.37 0 0 1-2.369 2.369H5.12a2.37 2.37 0 0 1-2.369-2.383V7.279a2.356 2.356 0 0 1 2.37-2.37H9.56" />
                                                    <path
                                                        d="M6.835 15.803v-2.165c.002-.357.144-.7.395-.953l9.532-9.532a1.36 1.36 0 0 1 1.934 0l2.151 2.151a1.36 1.36 0 0 1 0 1.934l-9.532 9.532a1.36 1.36 0 0 1-.953.395H8.197a1.36 1.36 0 0 1-1.362-1.362M19.09 8.995l-4.085-4.086" />
                                                </g>
                                            </svg>
                                        </button>
                                        <button
                                            class="flex px-4 py-2 rounded-lg tracking-wide text-balance bg-neutral-100 gap-2">
                                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-red-500"
                                                viewBox="0 0 256 256">
                                                <path fill="currentColor"
                                                    d="M216 50h-42V40a22 22 0 0 0-22-22h-48a22 22 0 0 0-22 22v10H40a6 6 0 0 0 0 12h10v146a14 14 0 0 0 14 14h128a14 14 0 0 0 14-14V62h10a6 6 0 0 0 0-12M94 40a10 10 0 0 1 10-10h48a10 10 0 0 1 10 10v10H94Zm100 168a2 2 0 0 1-2 2H64a2 2 0 0 1-2-2V62h132Zm-84-104v64a6 6 0 0 1-12 0v-64a6 6 0 0 1 12 0m48 0v64a6 6 0 0 1-12 0v-64a6 6 0 0 1 12 0" />
                                            </svg>
                                        </button>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>

        </div>


        <div class="w-full bg-black/30 fixed inset-0 flex items-center justify-center">
            <div class="bg-white border rounded-lg w-[50rem] mt-4 flex flex-col">
                <div class="flex items-center justify-between w-full p-4">
                    <span class="font-semibold text-2xl">Add Customer</span>
                    <button class="bg-neutral-100 rounded-full size-8 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="size-6" viewBox="0 0 24 24">
                            <path fill="currentColor"
                                d="M6.4 19L5 17.6l5.6-5.6L5 6.4L6.4 5l5.6 5.6L17.6 5L19 6.4L13.4 12l5.6 5.6l-1.4 1.4l-5.6-5.6z" />
                        </svg>
                    </button>
                </div>
                <div class="border-t w-full"></div>
                <div class="p-4 w-full flex flex-col gap-4">
                    <div class="grid grid-cols-2 w-full gap-4">
                        <div class="mt-2">
                            <label class="">Name: </label>
                            <input type="text"
                                class="bg-neutral-100 rounded-lg px-4 py-2 mt-2 focus:outline-none w-full"
                                placeholder="Enter the Full Name">
                        </div>
                        <div class="mt-2">
                            <label class="">Photo:</label>
                            <input type="file"
                                class="bg-neutral-100 rounded-lg px-4 py-1 mt-2 focus:outline-none w-full">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 w-full gap-4">
                        <div class="mt-2">
                            <label class="">Email: </label>
                            <input type="email"
                                class="bg-neutral-100 rounded-lg px-4 py-2 mt-2 focus:outline-none w-full"
                                placeholder="Enter the Email">
                        </div>
                        <div class="mt-2">
                            <label class="">Mobile/Phone: </label>
                            <input type="text"
                                class="bg-neutral-100 rounded-lg px-4 py-2 mt-2 focus:outline-none w-full"
                                placeholder="Enter the Mobile/Phone Number">
                        </div>
                    </div>
                    <div class="grid grid-cols-2 w-full gap-4">
                        <div class="mt-2">
                            <label class="">Country</label>
                            <select name="" id=""
                                class="bg-neutral-100 rounded-lg px-4 py-2 mt-2 focus:outline-none w-full">
                                <option value="">India</option>
                            </select>
                        </div>
                        <div class="mt-2">
                            <label class="">State: </label>
                            <select name="" id=""
                                class="bg-neutral-100 rounded-lg px-4 py-2 mt-2 focus:outline-none w-full">
                                <option value="">Kerala</option>
                            </select>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 w-full gap-4">
                        <div class="mt-2">
                            <label class="">Description</label>
                            <textarea name="" id=""
                                class="bg-neutral-100 rounded-lg px-4 py-2 mt-2 focus:outline-none w-full resize-none"></textarea>
                        </div>
                    </div>
                    <div class="grid grid-cols-1 w-full gap-4">
                        <div class="mt-2 flex items-center justify-between">
                            <span>is Active?</span>
                            <button>
                                <label class="inline-flex items-center cursor-pointer">
                                    <input type="checkbox" value="" class="sr-only peer">
                                    <div
                                        class="relative w-11 h-6 bg-gray-200 rounded-full peer dark:bg-neutral-500 peer-checked:after:translate-x-full rtl:peer-checked:after:-translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:start-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all dark:border-gray-600 peer-checked:bg-purple-600 dark:peer-checked:bg-purple-600">
                                    </div>
                                </label>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="border-t w-full"></div>
                <div class="p-4">
                    <div class="flex items-end justify-end w-full gap-4 ">
                        <button
                            class="flex gap-2 px-4 py-2 rounded-lg tracking-wide text-balance ring-1 ring-neutral-500 text-neutral-500 font-medium">Cancel</button>
                        <button
                            class="flex gap-2 px-5 py-3 rounded-full tracking-wide text-balance bg-purple-500 ring-1 ring-purple-500 text-white font-medium">
                            <svg xmlns="http://www.w3.org/2000/svg" class="size-6 text-white" viewBox="0 0 24 24">
                                <path fill="none" stroke="currentColor" stroke-linecap="round"
                                    stroke-linejoin="round" stroke-width="1.5"
                                    d="M21.897 6.63c.32.898-.13 1.513-.998 2.118c-.702.488-1.595 1.017-2.542 1.922c-.928.887-1.834 1.955-2.639 3.006a39 39 0 0 0-2.71 3.99a1.65 1.65 0 0 1-1.446.834a1.66 1.66 0 0 1-1.426-.873c-.748-1.363-1.326-1.901-1.592-2.094c-.737-.537-1.544-.63-1.544-1.8C7 12.776 7.746 12 8.667 12c.658.027 1.262.309 1.789.693c.342.249.705.578 1.082 1.012c.442-.654.975-1.408 1.573-2.189c.868-1.133 1.892-2.35 2.99-3.399c1.08-1.032 2.33-1.998 3.653-2.508c.863-.333 1.822.124 2.143 1.022M4.44 12.076a2.7 2.7 0 0 0-.6-.125l-.141-.006c-.938 0-1.699.783-1.699 1.748c0 .874.623 1.598 1.437 1.728q.042.02.137.087c.27.195.86.737 1.623 2.111c.298.538.851.873 1.453.88a1.67 1.67 0 0 0 1.112-.407M15 5.5c-1.35.515-2.622 1.489-3.723 2.53c-.384.363-.76.746-1.123 1.139"
                                    color="currentColor" />
                            </svg>
                            Save</button>
                    </div>
                </div>
            </div>
        

        </div>


    </div>
</div>
