<script setup>
import { ref } from 'vue';
import { router } from '@inertiajs/vue3';
import Twitter from 'vue-material-design-icons/Twitter.vue';
import Magnify from 'vue-material-design-icons/Magnify.vue';
import DotsHorizontal from 'vue-material-design-icons/DotsHorizontal.vue';
import Feather from 'vue-material-design-icons/Feather.vue';
import Close from 'vue-material-design-icons/Close.vue';
import ChevronDown from 'vue-material-design-icons/ChevronDown.vue';
import Earth from 'vue-material-design-icons/Earth.vue';
import ImageOutline from 'vue-material-design-icons/ImageOutline.vue';
import FileGifBOx from 'vue-material-design-icons/FileGifBOx.vue';
import Emoticon from 'vue-material-design-icons/Emoticon.vue';
import ArrowLeft from 'vue-material-design-icons/ArrowLeft.vue';
import MenuItem from '../Components/MenuItem.vue'

const showingNavigationDropdown = ref(false);
</script>

<template>
    <div class="fixed w-full">
        <div class="max-w-[1400px] flex mx-auto">
            <!--            MENU         -->
            <div class="lg:w-3/12 w-[60px] h-[100vh] max-w-[350px] lg:px-4 lg:mx-auto bg-black">
                <div class="p-2 px-3 mb-4">
                    <Twitter fillColor="#FFFFFF" :size="37" />
                </div>
                <MenuItem iconString="Home"/>
                <MenuItem iconString="Explore"/>
                <MenuItem iconString="Notifications"/>
                <MenuItem iconString="Messages"/>
                <MenuItem iconString="Profile"/>
            </div>


            <!--            Twit section         -->
            <div class="lg:w-6/12 w-11/12 border-x border-gray-800 relative">
                <div class=" bg-black backdrop-blur-md z-10 absolute w-full">
                    <div class="border-gray-800 border-b w-full">
                        <div class="w-full text-white text-[22px] font-extrabold p-4">
                            Home
                        </div>
                        <div class="flex">
                            <div
                                class="flex items-center justify-center w-full h-[60px] text-white text-[17px] font-extrabold p-4 hover:bg-gray-500 hover:bg-opacity-30 cursor-pointer transition duration-200 ease-in-out">
                                <div class="inline-block text-center border-b-4 border-b-[#1C9CEF] h-[60px]">
                                    <div class="my-auto mt-4">For you </div>
                                </div>
                            </div>
                            <div
                                class="w-full h-[60px] text-gray-500 text-[17px] font-extrabold p-4 hover:bg-gray-500 hover:bg-opacity-30 cursor-pointer transition duration-200 ease-in-out">
                                <div class="text-center"> Following </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="absolute top-0 z-0 h-full w-full overflow-auto scrollbar-hide">
                    <div class="mt-[126px]"></div>
                    <slot />
                    <div class="pb-4"></div>
                </div>

            </div>

            <div class="lg:block hidden lg:w-4/12 h-screen border-l border-gray-800 pl-4">

            </div>
        </div>
    </div>
</template>
