<script setup>
import { Head, Link, router } from '@inertiajs/vue3';
import LogoWhite from '@/Components/LogoWhite.vue';

defineProps({
    title: String,
    user: Object,
});

const logout = () => {
    router.post(route('logout'));
};
</script>
<template>
    <Head :title="title" />
    <div class="flex flex-no-wrap bg-gray-100 dark:bg-gray-700">
        <div class="w-65 sm:relative min-h-screen bg-white shadow flex-col justify-between hidden sm:flex dark:bg-gray-600">
            <div class="text-gray-900 dark:text-black">
                <div class="h-12 w-full flex px-12 mt-2">
                    <LogoWhite class="fill-white"/>
                </div>
                <ul class="mt-12">
                    <Link :href="route('dashboard')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center w-full">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-house"></i>
                            </div>
                            <span class="text-sm ml-2">Dashboard</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('product')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-puzzle-piece"></i>
                            </div>
                            <span class="text-sm ml-2">Products</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('supplier')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-store"></i>
                            </div>
                            <span class="text-sm ml-2">Supplier</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('request')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-sack-dollar"></i>
                            </div>
                            <span class="text-sm ml-2">Budget</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('invoice')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-file-invoice-dollar"></i>
                            </div>
                            <span class="text-sm ml-2">Invoices</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('inventory')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-boxes-stacked"></i>
                            </div>
                            <span class="text-sm ml-2">Inventory</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('options')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-gears"></i>
                            </div>
                            <span class="text-sm ml-2">Options</span>
                        </div>
                    </li>
                    </Link>
                </ul>
            </div>
            <div class="flex h-full items-end mt-4 mb-4 px-8">
                <div class="flex items-center">
                    <div class="w-10 h-10 bg-cover rounded-md mr-3">
                        <img :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name" class="rounded-full h-full w-full overflow-hidden shadow">
                    </div>
                    <a :href="route('profile.show')">
                        <p class="text-gray-600 dark:text-white text-sm font-medium">{{ $page.props.auth.user.name }}</p>
                        <p class="text-gray-600 dark:text-white text-xs">{{ $page.props.auth.user.email }}</p>
                    </a>
                </div>
            </div>
            <div class="px-8 bg-cyan-500">
                <form @submit.prevent="logout">
                    <button type="submit">
                        <ul class="w-full flex items-center justify-between">
                            <li class="cursor-pointer text-white pt-5 ml-5 text-lg pb-3 w-full">
                                <i class="fa-light fa-right-from-bracket"></i> <span class="ml-2">Log Out</span>
                            </li>
                        </ul>
                    </button>
                </form>
            </div>
        </div>

        <!-- Batas Responsive -->
        <div class="w-64 z-40 fixed sm:relative min-h-screen bg-white dark:bg-gray-600 shadow flex flex-col sm:hidden transition duration-150 ease-in-out" id="mobile-nav">
            <div id="openSideBar"
                class="h-10 w-10 bg-white dark:bg-gray-600 absolute right-0 mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer"
                @click="sidebarHandler(true)">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon stroke-gray-900 dark:stroke-white icon-tabler icon-tabler-adjustments" width="20"
                    height="20" viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <circle cx="6" cy="10" r="2" />
                    <line x1="6" y1="4" x2="6" y2="8" />
                    <line x1="6" y1="12" x2="6" y2="20" />
                    <circle cx="12" cy="16" r="2" />
                    <line x1="12" y1="4" x2="12" y2="14" />
                    <line x1="12" y1="18" x2="12" y2="20" />
                    <circle cx="18" cy="7" r="2" />
                    <line x1="18" y1="4" x2="18" y2="5" />
                    <line x1="18" y1="9" x2="18" y2="20" />
                </svg>
            </div>
            <div id="closeSideBar"
                class="h-10 w-10 bg-white absolute dark:bg-gray-600 right-0 stroke-gray-900 dark:stroke-white mt-16 -mr-10 flex items-center shadow rounded-tr rounded-br justify-center cursor-pointer text-white"
                @click="sidebarHandler(false)">
                <svg xmlns="http://www.w3.org/2000/svg" class="icon icon-tabler icon-tabler-x" width="20" height="20"
                    viewBox="0 0 24 24" stroke-width="1.5" fill="none" stroke-linecap="round"
                    stroke-linejoin="round">
                    <path stroke="none" d="M0 0h24v24H0z" />
                    <line x1="18" y1="6" x2="6" y2="18" />
                    <line x1="6" y1="6" x2="18" y2="18" />
                </svg>
            </div>
            <div class="h-12 w-full flex px-12 mt-2">
                <LogoWhite />
            </div>
            <div class="text-gray-900 h-fit dark:text-black">
                
                <ul class="mt-12">
                    <Link :href="route('dashboard')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center w-full">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-house"></i>
                            </div>
                            <span class="text-sm ml-2">Dashboard</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('product')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-puzzle-piece"></i>
                            </div>
                            <span class="text-sm ml-2">Products</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('supplier')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-store"></i>
                            </div>
                            <span class="text-sm ml-2">Supplier</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('request')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-sack-dollar"></i>
                            </div>
                            <span class="text-sm ml-2">Budget</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('invoice')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-file-invoice-dollar"></i>
                            </div>
                            <span class="text-sm ml-2">Invoices</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('inventory')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-boxes-stacked"></i>
                            </div>
                            <span class="text-sm ml-2">Inventory</span>
                        </div>
                    </li>
                    </Link>
                    <Link :href="route('options')">
                    <li
                        class="flex w-full justify-between dark:text-white hover:text-white hover:bg-gray-400 dark:hover:bg-gray-500 dark:hover:text-white cursor-pointer items-center py-3 px-8">
                        <div class="flex items-center">
                            <div class="w-8 text-center">
                                <i class="fa-light fa-gears"></i>
                            </div>
                            <span class="text-sm ml-2">Options</span>
                        </div>
                    </li>
                    </Link>
                </ul>
            </div>
            <div class="flex grow items-end">
                <div class="flex items-center mt-4 mb-4 px-8">
                    <div class="w-10 h-10 bg-cover rounded-md mr-3">
                        <img :src="$page.props.auth.user.profile_photo_url" :alt="$page.props.auth.user.name" class="rounded-full h-full w-full overflow-hidden shadow">
                    </div>
                    <div>
                        <a :href="route('profile.show')">
                        <p class="text-gray-600 dark:text-white text-sm font-medium">{{ $page.props.auth.user.name }}</p>
                        <p class="text-gray-600 dark:text-white text-xs">{{ $page.props.auth.user.email }}</p>
                        </a>
                    </div>
                </div>
            </div>
            <div class="px-8 bg-cyan-500">
                <ul class="w-full flex items-center justify-between">
                    <form @submit.prevent="logout">
                        <button type="submit">
                            <ul class="w-full flex items-center justify-between">
                                <li class="cursor-pointer text-white pt-5 ml-5 text-lg pb-3 w-full">
                                    <i class="fa-light fa-right-from-bracket"></i> <span class="ml-2">Log Out</span>
                                </li>
                            </ul>
                        </button>
                    </form>
                </ul>
            </div>
        </div>
        <div class="mx-auto py-6 md:w-4/5 w-11/12 px-6">
            <slot />
        </div>
    </div>
</template>
<script>
export default {
    name: "LightWithIconsAtBottomAlternateStyle",
    data() {
        return {
            moved: true,
        };
    },
    methods: {
        sidebarHandler() {
            var sideBar = document.getElementById("mobile-nav");
            sideBar.style.transform = "translateX(-260px)";
            if (this.$data.moved) {
                sideBar.style.transform = "translateX(0px)";
                this.$data.moved = false;
                document.getElementById("openSideBar").classList.add("hidden");
                document.getElementById("closeSideBar").classList.remove("hidden");
            } else {
                sideBar.style.transform = "translateX(-260px)";
                this.$data.moved = true;
                document.getElementById("closeSideBar").classList.add("hidden");
                document.getElementById("openSideBar").classList.remove("hidden");
            }
        },
    },
};
</script>