<script setup>
import UserLayout from '@/Layouts/DeveloperLayout.vue';
</script>

<template>
    <UserLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>
        <!-- Header -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="sm:rounded-lg">
                    <div class="w-full mb-10 grid sm:grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                        <div class="bg-white dark:bg-gray-800 rounded py-5 pl-6 flex items-start shadow">
                            <div class="text-gray-700 dark:text-gray-400">
                                <i class="fa-light fa-vault fa-xl"></i>
                            </div>
                            <div class="pl-3 pr-10 mt-1">
                                <h3 class="font-normal leading-4 text-gray-800 dark:text-gray-100 text-base">Balance</h3>
                                <div class="flex items-end mt-4">
                                    <h2 class="text-indigo-700 dark:text-indigo-600 text-2xl leading-normal font-bold">
                                        USD 2.330</h2>
                                </div>
                                <div class="flex items-center mt-5">
                                    <p class="text-green-400 text-xs tracking-wide font-bold leading-normal pl-1">
                                        IDR 1.000.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded py-5 pl-6 flex items-start shadow">
                            <div class="text-gray-700 dark:text-gray-400">
                                <i class="fa-light fa-circle-dollar-to-slot fa-xl"></i>
                            </div>
                            <div class="pl-3 pr-10 mt-1">
                                <h3 class="font-normal leading-4 text-gray-800 dark:text-gray-100 text-base">Used</h3>
                                <div class="flex items-end mt-4">
                                    <h2 class="text-indigo-700 dark:text-indigo-600 text-2xl leading-normal font-bold">
                                        USD 220</h2>
                                </div>
                                <div class="flex items-center mt-5">
                                    <p class="text-green-400 text-xs tracking-wide font-bold leading-normal pl-1">
                                        IDR 1.000.000</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded py-5 pl-6 flex items-start shadow">
                            <div class="text-gray-700 dark:text-gray-400">
                                <i class="fa-light fa-cart-shopping fa-xl"></i>
                            </div>
                            <div class="pl-3 pr-10 mt-1">
                                <h3 class="font-normal leading-4 text-gray-800 dark:text-gray-100 text-base">Order in
                                    Progress</h3>
                                <div class="flex items-end mt-4">
                                    <h2 class="text-indigo-700 dark:text-indigo-600 text-2xl leading-normal font-bold">
                                        2,330</h2>
                                </div>
                                <div class="flex items-center mt-5">
                                    <p class="text-red-400 text-xs tracking-wide font-bold leading-normal pl-1">
                                        / 200 order</p>
                                </div>
                            </div>
                        </div>
                        <div class="bg-white dark:bg-gray-800 rounded py-5 pl-6 flex items-start shadow">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="icon icon-tabler icon-tabler-dashboard text-gray-700 dark:text-gray-400" width="32"
                                height="32" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" fill="none"
                                stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" />
                                <circle cx="12" cy="13" r="2" />
                                <line x1="13.45" y1="11.55" x2="15.5" y2="9.5" />
                                <path d="M6.4 20a9 9 0 1 1 11.2 0Z" />
                            </svg>
                            <div class="pl-3 pr-10 mt-1">
                                <h3 class="font-normal leading-4 text-gray-800 dark:text-gray-100 text-base">Used</h3>
                                <div class="flex items-end mt-4">
                                    <h2 class="text-indigo-700 dark:text-indigo-600 text-2xl leading-normal font-bold">
                                        USD 220</h2>
                                </div>
                                <div class="flex items-center mt-5">
                                    <p class="text-green-400 text-xs tracking-wide font-bold leading-normal pl-1">
                                        IDR 1.000.000</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Table -->
                    <div class="bg-white shadow w-full px-6 sm:px-12 py-5 sm:py-10">
                        <div class="mb-5 sm:mb-10 rounded-tl-lg rounded-tr-lg">
                            <div class="sm:flex items-center justify-between">
                                <p tabindex="0"
                                    class="focus:outline-none text-base sm:text-lg md:text-xl lg:text-2xl font-bold leading-normal text-gray-800">
                                    Order</p>
                                <div class="flex items-center mt-4 sm:mt-0">
                                        <input type="text"
                                            class=" py-2.5 pl-1 w-40 sm:w-64 focus:outline-none text-sm rounded-md text-gray-600 placeholder-gray-400"
                                            placeholder="Search" />
                                    <button onclick="popuphandler(true)"
                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 inline-flex ml-3 whitespace-nowrap items-start justify-start px-6 py-3 bg-indigo-700 hover:bg-indigo-600 focus:outline-none rounded">
                                        <p class="text-xs sm:text-sm font-medium leading-none text-white">New Invoice
                                        </p>
                                    </button>
                                </div>
                            </div>
                        </div>
                        <div class="">
                            <div class="w-full overflow-x-auto">
                                <table class="w-full whitespace-nowrap">
                                    <thead>
                                        <tr class="h-20 w-full text-sm leading-none text-gray-600">
                                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-4">Date
                                            </th>
                                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">
                                                #Order Id</th>
                                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">
                                                Supplier</th>
                                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">
                                                Amount</th>
                                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">
                                                Status</th>
                                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10">
                                                Category</th>
                                            <th tabindex="0" class="focus:outline-none font-normal text-left pl-10 w-32">
                                                Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody class="w-full">
                                        <tr
                                            class="h-20 text-sm leading-none text-gray-700 border-b border-t border-gray-200 bg-white hover:bg-gray-100">
                                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                                            <td class="pl-10">
                                                <div class="flex items-center">
                                                    <span tabindex="0" class="focus:outline-none">Miracle Botos</span>
                                                </div>
                                            </td>
                                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                                            <td class="pl-10">
                                                <div
                                                    class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                                    <p tabindex="0"
                                                        class="focus:outline-none text-xs leading-3 text-blue-700">
                                                        Approved</p>
                                                </div>
                                            </td>
                                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                                            <td class="pl-10">
                                                <div class="flex items-center">
                                                    <button
                                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr
                                            class="h-20 text-sm leading-none text-gray-700 border-b border-gray-200 bg-white hover:bg-gray-100">
                                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                                            <td class="pl-10">
                                                <div class="flex items-center">
                                                    <span tabindex="0" class="focus:outline-none">Tiana Levin</span>
                                                </div>
                                            </td>
                                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                                            <td class="pl-10">
                                                <div
                                                    class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                                    <p tabindex="0"
                                                        class="focus:outline-none text-xs leading-3 text-blue-700">
                                                        Approved</p>
                                                </div>
                                            </td>
                                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                                            <td class="pl-10">
                                                <div class="flex items-center">
                                                    <button
                                                        class="focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr
                                            class="h-20 text-sm leading-none text-gray-700 border-b border-gray-200 bg-white hover:bg-gray-100">
                                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                                            <td tabindex="0" class="focus:outline-none pl-10">IDO-2985-2</td>
                                            <td class="pl-10">
                                                <div class="flex items-center">
                                                    <span tabindex="0" class="focus:outline-none">Jordyn
                                                        Korsgaard</span>
                                                </div>
                                            </td>
                                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                                            <td class="pl-10">
                                                <div
                                                    class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                                    <p tabindex="0"
                                                        class="focus:outline-none text-xs leading-3 text-blue-700">
                                                        Approved</p>
                                                </div>
                                            </td>
                                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                                            <td class="pl-10">
                                                <div class="flex items-center">
                                                    <button
                                                        class="focus:ring-2 focus:offset-2 focus:indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr
                                            class="h-20 text-sm leading-none text-gray-700 border-b border-gray-200 bg-white hover:bg-gray-100">
                                            <td tabindex="0" class="focus:outline-none pl-4">06/02/2020</td>
                                            <td tabindex="0" class="focus:ring-2 rounded-md focus:outline-none pl-10">
                                                IDO-2985-2</td>
                                            <td class="pl-10">
                                                <div class="flex items-center">
                                                    <span tabindex="0" class="focus:outline-none">Kierra Curtis</span>
                                                </div>
                                            </td>
                                            <td tabindex="0" class="focus:outline-none pl-10">$2100.00</td>
                                            <td class="pl-10">
                                                <div
                                                    class="w-20 h-6 flex items-center justify-center bg-blue-100 rounded-full">
                                                    <p tabindex="0"
                                                        class="focus:outline-none text-xs leading-3 text-blue-700">
                                                        Approved</p>
                                                </div>
                                            </td>
                                            <td tabindex="0" class="focus:outline-none pl-10">Business</td>
                                            <td class="pl-10">
                                                <div class="flex items-center">
                                                    <button
                                                        class="focus:ring-2 focus:offset-2 focus:indigo-600 focus:outline-none bg-gray-100 mr-5 hover:bg-gray-200 py-2.5 px-5 rounded text-sm leading-3 text-gray-600">View</button>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </UserLayout>
</template>
