<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="//unpkg.com/alpinejs" defer></script>
    <title>API Login Test</title>
</head>
<body>
<div class="relative bg-white" x-data="app">

    <div class="mx-auto max-w-7xl px-4 sm:px-6">
        <div
            class="flex items-center justify-between border-b-2 border-gray-100 py-6 md:justify-start md:space-x-10">
            <div class="flex justify-start lg:w-0 lg:flex-1">
                <a href="#">
                    <span class="sr-only">Your Company</span>
                    <img class="h-8 w-auto sm:h-10"
                         src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600" alt="">
                </a>
            </div>
            <div class="-my-2 -mr-2 md:hidden">
                <button type="button"
                        class="inline-flex items-center justify-center rounded-md bg-white p-2 text-gray-400 hover:bg-gray-100 hover:text-gray-500 focus:outline-none focus:ring-2 focus:ring-inset focus:ring-indigo-500"
                        aria-expanded="false">
                    <span class="sr-only">Open menu</span>
                    <!-- Heroicon name: outline/bars-3 -->
                    <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                         stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </button>
            </div>
            <nav class="hidden space-x-10 md:flex">
                <div class="relative">
                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                    <button type="button"
                            class="text-gray-500 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            aria-expanded="false">
                        <span>Solutions</span>
                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>
                </div>

                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Pricing</a>
                <a href="#" class="text-base font-medium text-gray-500 hover:text-gray-900">Docs</a>

                <div class="relative">
                    <!-- Item active: "text-gray-900", Item inactive: "text-gray-500" -->
                    <button type="button"
                            class="text-gray-500 group inline-flex items-center rounded-md bg-white text-base font-medium hover:text-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2"
                            aria-expanded="false">
                        <span>More</span>
                        <!--
                          Heroicon name: mini/chevron-down

                          Item active: "text-gray-600", Item inactive: "text-gray-400"
                        -->
                        <svg class="text-gray-400 ml-2 h-5 w-5 group-hover:text-gray-500"
                             xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M5.23 7.21a.75.75 0 011.06.02L10 11.168l3.71-3.938a.75.75 0 111.08 1.04l-4.25 4.5a.75.75 0 01-1.08 0l-4.25-4.5a.75.75 0 01.02-1.06z"
                                  clip-rule="evenodd"/>
                        </svg>
                    </button>

                </div>
            </nav>
            <div class="hidden items-center justify-end md:flex md:flex-1 lg:w-0">
                <a x-on:click="gotoLogin" href="#login" x-show="page != 'dashboard'"
                   class="whitespace-nowrap text-base font-medium text-gray-500 hover:text-gray-900">Sign
                    in</a>
                <a x-on:click="gotoRegister" href="#register" x-show="page != 'dashboard'"
                   class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">Sign
                    up</a>

                <a x-on:click="logout" href="#login" x-show="page == 'dashboard'"
                   class="ml-8 inline-flex items-center justify-center whitespace-nowrap rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700">
                    Logout
                </a>
            </div>
        </div>
    </div>

    <div x-show="page == 'login'">
        <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                     alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Sign in to your
                    account</h2>
            </div>

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form class="space-y-6" action="#" method="POST" x-on:submit.prevent="login">
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                            <div class="mt-1">
                                <input id="email" x-model="email" name="email" type="email" autocomplete="email"
                                       class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1">
                                <input id="password" x-model="password" name="password" type="password"
                                       autocomplete="current-password"
                                       class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div class="flex items-center justify-between">
                            <div class="text-sm">
                                <a href="#forgot" x-on:click="gotoForgot"
                                   class="font-medium text-indigo-600 hover:text-indigo-500">Forgot your password?</a>
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                    class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Sign in
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div x-show="page == 'reset' && password_token">
        <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                     alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Reset Password</h2>
            </div>

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form class="space-y-6" action="#" method="POST" x-on:submit.prevent="resetPassword">

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                            <div class="mt-1">
                                <input id="email" x-model="email" name="email" type="email" autocomplete="email"
                                       class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1">
                                <input id="password" x-model="password" name="password" type="password"
                                       required
                                       class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                                Password</label>
                            <div class="mt-1">
                                <input id="password_confirmation" x-model="password_confirmation"
                                       name="password_confirmation" type="password"
                                       required
                                       class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                    class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Reset Password
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div x-show="page == 'register'">
        <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                     alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Create a new account</h2>
            </div>

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form class="space-y-6" action="#" method="POST" x-on:submit.prevent="register">
                        <div>
                            <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
                            <div class="mt-1">
                                <input id="name" x-model="name" name="name" type="name" autocomplete="name" required
                                       class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                            <div class="mt-1">
                                <input id="email" x-model="email" name="email" type="email" autocomplete="email"
                                       required
                                       class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                            <div class="mt-1">
                                <input id="password" x-model="password" name="password" type="password"
                                       autocomplete="current-password"
                                       required
                                       class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <label for="password_confirmation" class="block text-sm font-medium text-gray-700">Confirm
                                Password</label>
                            <div class="mt-1">
                                <input id="password_confirmation" x-model="password_confirmation"
                                       name="password_confirmation" type="password"
                                       required
                                       class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                    class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Register
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div x-show="page == 'forgot'">
        <div class="flex min-h-full flex-col justify-center py-12 sm:px-6 lg:px-8">
            <div class="sm:mx-auto sm:w-full sm:max-w-md">
                <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/mark.svg?color=indigo&shade=600"
                     alt="Your Company">
                <h2 class="mt-6 text-center text-3xl font-bold tracking-tight text-gray-900">Forgot your password?</h2>
            </div>

            <div class="mt-8 sm:mx-auto sm:w-full sm:max-w-md">
                <div class="bg-white py-8 px-4 shadow sm:rounded-lg sm:px-10">
                    <form class="space-y-6" action="#" method="POST" x-on:submit.prevent="forgotPassword">
                        <p class="mt-2 text-center text-sm text-gray-600">
                            Don't worry, we'll recover it for you, just enter your email address below
                        </p>
                        <div>
                            <label for="email" class="block text-sm font-medium text-gray-700">Email address</label>
                            <div class="mt-1">
                                <input id="email" x-model="email" name="email" type="email" autocomplete="email"
                                       required
                                       class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                            </div>
                        </div>

                        <div>
                            <button type="submit"
                                    class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                Recover
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div x-show="page == 'dashboard'" class="mx-auto max-w-7xl px-4 sm:px-6 mt-4">
        <div class="sm:flex sm:items-center">
            <div class="sm:flex-auto">
                <h1 class="text-xl font-semibold text-gray-900">Events</h1>
                <p class="mt-2 text-sm text-gray-700">A list of all your events are listed here</p>
            </div>
            <div class="mt-4 sm:mt-0 sm:ml-16 sm:flex-none">
                <button type="button"
                        x-on:click="popupState = 'edit'; userEvent = {}"
                        class="inline-flex items-center justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:w-auto">
                    Add Event
                </button>
            </div>
        </div>
        <div class="mt-8 flex flex-col">
            <div class="-my-2 -mx-4 overflow-x-auto sm:-mx-6 lg:-mx-8">
                <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
                    <div class="overflow-hidden shadow ring-1 ring-black ring-opacity-5 md:rounded-lg">
                        <table class="min-w-full divide-y divide-gray-300">
                            <thead class="bg-gray-50">
                            <tr>
                                <th scope="col"
                                    class="py-3.5 pl-4 pr-3 text-left text-sm font-semibold text-gray-900 sm:pl-6">Title
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Description
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">
                                    Start
                                </th>
                                <th scope="col" class="px-3 py-3.5 text-left text-sm font-semibold text-gray-900">End
                                </th>
                                <th scope="col" class="relative py-3.5 pl-3 pr-4 sm:pr-6">
                                    <span class="sr-only">Actions</span>
                                </th>
                            </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-200 bg-white">
                            <template x-for="(event, index) in events.data">
                                <tr>
                                    <td class="whitespace-nowrap py-4 pl-4 pr-3 text-sm font-medium text-gray-900 sm:pl-6">
                                        <span x-text="event.title"></span>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500 overflow-hidden">
                                        <p x-text="event.content" style="width: 200px"></p>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <span x-text="event.start_date"></span>
                                    </td>
                                    <td class="whitespace-nowrap px-3 py-4 text-sm text-gray-500">
                                        <span x-text="event.end_date"></span>
                                    </td>
                                    <td class="relative whitespace-nowrap py-4 pl-3 pr-4 text-right text-sm font-medium sm:pr-6">
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900"
                                           x-on:click="showEvent(event.id, 'show')">
                                            Show
                                        </a> |
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900"
                                           x-on:click="showEvent(event.id, 'edit')">
                                            Edit
                                        </a>
                                        |
                                        <a href="#" class="text-indigo-600 hover:text-indigo-900"
                                           x-on:click="deleteEvent(event.id)">
                                            Delete
                                        </a>
                                    </td>
                                </tr>
                            </template>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="relative z-10" aria-labelledby="modal-title" role="dialog" aria-modal="true" x-show="popupState">
        <div
            x-show="popupState"
            x-transition:enter="ease-out duration-300"
            x-transition:enter-start="opacity-0"
            x-transition:enter-end="opacity-100"
            x-transition:leave="ease-in duration-200"
            x-transition:leave-start="opacity-100"
            x-transition:leave-end="opacity-0"
            class="fixed inset-0 bg-gray-500 bg-opacity-75 transition-opacity"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto">
            <div class="flex min-h-full items-end justify-center p-4 text-center sm:items-center sm:p-0">
                <div
                    x-show="popupState"
                    x-transition:enter="ease-out duration-300"
                    x-transition:enter-start="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    x-transition:enter-end="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave="ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-y-0 sm:scale-100"
                    x-transition:leave-end="opacity-0 translate-y-4 sm:translate-y-0 sm:scale-95"
                    class="relative transform overflow-hidden rounded-lg bg-white px-4 pt-5 pb-4 text-left shadow-xl transition-all sm:my-8 sm:w-full sm:max-w-sm sm:p-6">


                    <div x-show="popupState == 'show'">
                        <div>
                            <div class="mt-3 text-center sm:mt-5">
                                <h3 class="text-lg font-medium leading-6 text-gray-900" id="modal-title"
                                    x-text="userEvent.title"></h3>
                                <div class="mt-2">
                                    <p class="text-sm text-gray-500" x-text="userEvent.content"></p>
                                </div>
                            </div>
                        </div>

                        <div class="mt-5 sm:mt-6">
                            <button type="button"
                                    x-on:click="popupState = null;"
                                    class="inline-flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:text-sm">
                                Close
                            </button>
                        </div>
                    </div>

                    <div x-show="popupState == 'edit'">
                        <form class="space-y-6" novalidate>
                            <div>
                                <label for="title" class="block text-sm font-medium text-gray-700">Title</label>
                                <div class="mt-1">
                                    <input id="title" name="title" type="text" required
                                           x-model="userEvent.title"
                                           class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="content" class="block text-sm font-medium text-gray-700">Content</label>
                                <div class="mt-1">
                                    <textarea id="content" name="content" required
                                              x-model="userEvent.content"
                                              class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm"></textarea>
                                </div>
                            </div>

                            <div>
                                <label for="start_date" class="block text-sm font-medium text-gray-700">Start Date</label>
                                <div class="mt-1">
                                    <input id="start_date" name="start_date" type="datetime-local"
                                           x-model="userEvent.start_date"
                                           class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <label for="end_date" class="block text-sm font-medium text-gray-700">End Date</label>
                                <div class="mt-1">
                                    <input id="end_date" name="end_date" type="datetime-local"
                                           x-model="userEvent.end_date"
                                           class="block w-full appearance-none rounded-md border border-gray-300 px-3 py-2 placeholder-gray-400 shadow-sm focus:border-indigo-500 focus:outline-none focus:ring-indigo-500 sm:text-sm">
                                </div>
                            </div>

                            <div>
                                <button type="button" x-show="userEvent.id"
                                        x-on:click="updateEvent(userEvent.id)"
                                        class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    Update
                                </button>

                                <button type="button" x-show="!userEvent.id"
                                        x-on:click="saveEvent"
                                        class="flex w-full justify-center rounded-md border border-transparent bg-indigo-600 py-2 px-4 text-sm font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                                    Save
                                </button>
                            </div>
                        </form>

                        <div class="mt-5 sm:mt-6">
                            <button type="button"
                                    x-on:click="popupState = null;"
                                    class="inline-flex w-full justify-center rounded-md border border-transparent bg-indigo-600 px-4 py-2 text-base font-medium text-white shadow-sm hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 sm:text-sm">
                                Close
                            </button>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

</div>

<script src="https://cdn.jsdelivr.net/npm/js-cookie@3.0.1/dist/js.cookie.min.js"></script>
<script>
    document.addEventListener('alpine:init', () => {

        /**
         * Get the CSRF token from the API and attack it to the cookie
         *
         * WARNING : This is to be used if only the API is on the same domain as the frontend
         *
         * @returns {Promise<Response>}
         */
        function fetchCsrfToken() {
            // fetch the CSRF token from /sanctum/csrf-cookie and add it to the XSRF-TOKEN header and cookie
            return fetch('/sanctum/csrf-cookie').then(response => {
                if (response.status === 204) {
                    console.info('CSRF token successfully set');
                } else {
                    throw new Error('Failed to fetch CSRF token');
                }
            });
        }


        Alpine.data('app', () => ({
            page: 'login',
            name: '',
            email: 'user@test.com',
            password: 'password',
            password_confirmation: '',
            token: '',
            password_token: null,
            user: {},
            events: [],
            userEvent: {
                title: '',
                content: '',
                start_date: '',
                end_date: '',
            },
            popupState: false,

            init() {

                // get the CSRF token
                fetchCsrfToken();

                // check if there is token in the cookie and set it in to the token variable
                this.token = Cookies.get('AUTH-TOKEN');

                // check if the url contains a hash and set it as the active page
                if (window.location.hash) {
                    this.page = window.location.hash.replace('#', '');
                }

                // check if there is a token and redirect the user to the dashboard
                if (this.token) {

                    // get user details
                    this.getUser();

                    this.page = 'dashboard';

                    // load events list
                    this.getEvents();
                }

            },

            // Authentication

            login() {
                // send the login request
                fetch('/api/auth/login', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': Cookies.get('XSRF-TOKEN')
                    },
                    credentials: 'same-origin',
                    body: JSON.stringify({
                        email: this.email,
                        password: this.password
                    })
                }).then(response => {

                    if (response.status === 200) {

                        // remove the token from the alpine data
                        this.token = '';

                        // remove the password_token from the alpine data
                        this.password_token = '';

                        // remove the user from the alpine data
                        this.user = {};

                        // remove the passwords from the alpine data object
                        this.password = '';
                        this.password_token = '';

                        // get the json of the response body and set it to the alpine data
                        response.json().then(data => {

                            // add the token to the alpine data
                            this.token = data.token;

                            // set the token to the AUTH-TOKEN cookie
                            Cookies.set('AUTH-TOKEN', data.token, {expires: 7});

                            // add the user to the alpine data
                            this.user = data.user;
                        });

                        // set the active page as dashboard
                        this.page = 'dashboard';

                        // load the events
                        this.getEvents()

                    } else {
                        // get the response body as json and get the message
                        response.json().then(data => {
                            alert('Failed to login :' + data.message);
                        });
                    }
                });
            },

            logout() {
                // send the logout request
                fetch('/api/auth/logout', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': Cookies.get('XSRF-TOKEN')
                    },
                    credentials: 'same-origin',
                    body: JSON.stringify({
                        token: this.token
                    })
                }).then(response => {

                    if (response.status === 200) {

                        // remove the token from the alpine data
                        this.token = '';

                        // remove the password_token from the alpine data
                        this.password_token = '';

                        // remove the user from the alpine data
                        this.user = {};

                        // remove the passwords from the alpine data object
                        this.password = '';
                        this.password_token = '';

                        // set the active page as login
                        this.page = 'login';

                        // set AUTH-TOKEN cookie to null
                        Cookies.remove('AUTH-TOKEN');

                    } else {
                        // get the response body as json and get the message
                        response.json().then(data => {
                            alert('Failed to logout :' + data.message);
                        });
                    }
                });
            },

            forgotPassword() {
                // send the forgot password request
                fetch('/api/auth/forgot-password', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': Cookies.get('XSRF-TOKEN')
                    },
                    credentials: 'same-origin',
                    body: JSON.stringify({
                        email: this.email
                    })
                }).then(response => {

                    if (response.status === 200) {

                        // remove the token from the alpine data
                        this.token = '';

                        // remove the user from the alpine data
                        this.user = {};

                        // remove the passwords from the alpine data object
                        this.password = '';
                        this.password_token = '';

                        // set the active page as login
                        this.page = 'reset';

                        response.json().then(data => {
                            // add the password_token to the alpine data object
                            this.password_token = data.token;
                        });

                    } else {
                        // get the response body as json and get the message
                        response.json().then(data => {
                            alert('Failed to perform the action :' + data.message);
                        });
                    }
                });
            },

            resetPassword() {
                // send the reset password request
                fetch('/api/auth/reset-password', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': Cookies.get('XSRF-TOKEN')
                    },
                    credentials: 'same-origin',
                    body: JSON.stringify({
                        email: this.email,
                        password: this.password,
                        password_confirmation: this.password_confirmation,
                        token: this.password_token
                    })
                }).then(response => {

                    if (response.status === 200) {

                        // remove the token from the alpine data
                        this.token = '';

                        // remove the user from the alpine data
                        this.user = {};

                        // set the active page as login
                        this.gotoLogin()

                        response.json().then(data => {
                            alert(data.message);
                        });

                    } else {
                        // get the response body as json and get the message
                        response.json().then(data => {
                            alert('Failed to perform the action :' + data.message);
                        });
                    }
                });
            },

            register() {

                // send the register request
                fetch('/api/auth/register', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': Cookies.get('XSRF-TOKEN')
                    },
                    credentials: 'same-origin',
                    body: JSON.stringify({
                        name: this.name,
                        email: this.email,
                        password: this.password,
                        password_confirmation: this.password_confirmation
                    })
                }).then(response => {

                    if (response.status === 200) {

                        // remove the token from the alpine data
                        this.token = '';

                        // remove the password_token from the alpine data
                        this.password_token = '';

                        // remove the user from the alpine data
                        this.user = {};

                        // remove the passwords from the alpine data object
                        this.password = '';
                        this.password_token = '';

                        // get the json of the response body and set it to the alpine data
                        response.json().then(data => {
                            // add the token to the alpine data
                            this.token = data.token;

                            // set the token to the AUTH-TOKEN cookie
                            Cookies.set('AUTH-TOKEN', data.token, {expires: 7});

                            // add the user to the alpine data
                            this.user = data.user;
                        });

                        // send the user to the dashboard
                        this.page = 'dashboard';

                        // load the events
                        this.getEvents()

                    } else {
                        // get the response body as json and get the message
                        response.json().then(data => {
                            alert('Failed to perform the action :' + data.message);
                        });
                    }
                });
            },

            getUser() {
                // send the get user request
                fetch('/api/user', {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': Cookies.get('XSRF-TOKEN')
                    },
                    credentials: 'same-origin'
                }).then(response => {

                    if (response.status === 200) {

                        // get the json of the response body and set it to the alpine data
                        response.json().then(data => {
                            // add the user to the alpine data
                            this.user = data;
                        });

                    } else {
                        // get the response body as json and get the message
                        response.json().then(data => {
                            alert('Failed to perform the action :' + data.message);
                        });

                        this.token = '';

                        this.gotoLogin();
                    }
                });
            },

            // events

            getEvents() {
                // send the get user request
                fetch('/api/events', {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': Cookies.get('XSRF-TOKEN')
                    },
                    credentials: 'same-origin'
                }).then(response => {

                    if (response.status === 200) {

                        // get the json of the response body and set it to the alpine data
                        response.json().then(payload => {
                            // add the events to the alpine data
                            this.events = payload.data;
                        });

                    } else {
                        // get the response body as json and get the message
                        response.json().then(data => {
                            alert('Failed to perform the action :' + data.message);
                        });
                    }
                });
            },

            showEvent(event_id, type) {

                // send the get event request
                fetch('/api/events/' + event_id, {
                    method: 'GET',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': Cookies.get('XSRF-TOKEN')
                    },
                    credentials: 'same-origin'
                }).then(response => {

                    if (response.status === 200) {

                        // get the json of the response body and set it to the alpine data
                        response.json().then(payload => {
                            // add the event to the alpine data
                            this.userEvent = payload.data;
                        });

                        // set popup state
                        this.popupState = type;

                    } else {
                        // get the response body as json and get the message
                        response.json().then(data => {
                            alert('Failed to perform the action :' + data.message);
                        });
                    }
                });
            },

            deleteEvent(event_id) {

                // send the delete event request
                fetch('/api/events/' + event_id, {
                    method: 'DELETE',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': Cookies.get('XSRF-TOKEN')
                    },
                    credentials: 'same-origin'
                }).then(response => {

                    if (response.status === 200) {
                        // load the events
                        this.getEvents()

                        alert('Event deleted successfully');

                    } else {
                        // get the response body as json and get the message
                        response.json().then(data => {
                            alert('Failed to perform the action :' + data.message);
                        });
                    }
                });
            },

            updateEvent(event_id){
                // send the update event request
                fetch('/api/events/' + event_id, {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': Cookies.get('XSRF-TOKEN')
                    },
                    credentials: 'same-origin',
                    body: JSON.stringify({
                        _method: 'PUT',
                        title: this.userEvent.title,
                        content: this.userEvent.content,
                        start_date: this.userEvent.start_date,
                        end_date: this.userEvent.end_date,
                    })
                }).then(response => {

                    if (response.status === 200) {
                        // load the events
                        this.getEvents()

                        this.popupState = null;
                    } else {
                        // get the response body as json and get the message
                        response.json().then(data => {
                            alert('Failed to perform the action :' + data.message);
                        });
                    }
                });
            },

            saveEvent(){
                // send the save event request
                fetch('/api/events', {
                    method: 'POST',
                    headers: {
                        'Accept': 'application/json',
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest',
                        'X-XSRF-TOKEN': Cookies.get('XSRF-TOKEN')
                    },
                    credentials: 'same-origin',
                    body: JSON.stringify({
                        title: this.userEvent.title,
                        content: this.userEvent.content,
                        start_date: this.userEvent.start_date,
                        end_date: this.userEvent.end_date,
                    })
                }).then(response => {

                    if (response.status === 200) {
                        // load the events
                        this.getEvents()
                        this.popupState = null;
                    } else {
                        // get the response body as json and get the message
                        response.json().then(data => {
                            alert('Failed to perform the action :' + data.message);
                        });
                    }
                });
            },

            // routing

            gotoDashboard() {
                // set the page to login
                this.page = this.token ? 'dashboard' : 'login';
            },

            gotoLogin() {
                // set the page to login
                this.page = this.token ? 'dashboard' : 'login';
            },

            gotoRegister() {
                // set the page to register
                this.page = this.token ? 'dashboard' : 'register';
            },

            gotoForgot() {
                // set the page to forgot
                this.page = this.token ? 'dashboard' : 'forgot';
            },

        }))
    })
</script>
</body>
</html>
