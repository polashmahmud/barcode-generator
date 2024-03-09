<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, router, useForm} from '@inertiajs/vue3';
import PrimaryButton from "@/Components/PrimaryButton.vue";
import SecondaryButton from "@/Components/SecondaryButton.vue";
import InputLabel from "@/Components/InputLabel.vue";
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";

const form = useForm({
    email: '',
    color: '#e66465',
})
</script>

<template>
    <Head title="Home"/>

    <AuthenticatedLayout>
        <template #header>
            <div class="flex items-center justify-between">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    New Barcode
                </h2>
                <SecondaryButton @click.prevent="router.visit(route('home'))">Back</SecondaryButton>
            </div>
        </template>

        <div class="py-12 max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="grid grid-cols-7 gap-6">
                <div class="col-span-5 space-y-3">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h1 class="font-semibold text-lg pb-3 mb-6 border-b">Frame</h1>
                            <div class="flex items-start flex-wrap justify-around gap-2">
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/01.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/02.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/03.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/04.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/05.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/06.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/07.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/08.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/09.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/10.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/11.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/12.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/13.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/14.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/15.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/16.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/17.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/18.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/19.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/20.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/21.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/22.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/23.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/24.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/25.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/26.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/27.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/28.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/29.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/30.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/31.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/32.svg" alt="">
                                </div>
                            </div>
                            <div class="mt-6 bg-gray-200 p-6 rounded-lg">
                                <div class="grid grid-cols-3 gap-6">
                                    <div>
                                        <InputLabel for="title" value="Text"/>

                                        <TextInput
                                            id="title"
                                            type="text"
                                            class="mt-1 block w-full"
                                            v-model="form.email"
                                        />

                                        <InputError class="mt-2" :message="form.errors.email"/>
                                    </div>
                                    <div>
                                        <InputLabel for="title" value="Text Color"/>

                                        <TextInput
                                            id="title"
                                            type="color"
                                            class="mt-1 block"
                                            v-model="form.color"
                                        />

                                        <InputError class="mt-2" :message="form.errors.color"/>
                                    </div>
                                    <div>
                                        <InputLabel for="title" value="Background Color"/>

                                        <TextInput
                                            id="title"
                                            type="color"
                                            class="mt-1 block"
                                            v-model="form.color"
                                        />

                                        <InputError class="mt-2" :message="form.errors.color"/>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h1 class="font-semibold text-lg pb-3 mb-6 border-b">Add Logo</h1>
                            <div>
                                <div>
                                    <InputLabel for="title" value="Add Logo"/>

                                    <TextInput
                                        id="title"
                                        type="file"
                                        class="mt-1 block"
                                        v-model="form.color"
                                    />

                                    <InputError class="mt-2" :message="form.errors.color"/>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h1 class="font-semibold text-lg pb-3 mb-6 border-b">QR Code Style</h1>
                            <div class="flex items-start flex-wrap justify-around gap-2">
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/01.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/02.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/03.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/04.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/05.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/06.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/07.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/08.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/09.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/10.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/11.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/12.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/13.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/14.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/15.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/16.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/17.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/18.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/19.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/20.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/21.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/22.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/23.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/24.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/25.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/26.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/27.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/28.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/29.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/30.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/31.svg" alt="">
                                </div>
                                <div class="w-16 border rounded-lg p-1">
                                    <img src="/images/frames/32.svg" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                        <div class="p-6 text-gray-900">
                            <h1 class="font-semibold text-lg pb-3 mb-6 border-b">Correction Level</h1>
                            <p class="text-sm text-gray-400 mb-6">
                                Ensures reliable reading by compensating for damage or distortion. Choosing a higher
                                level improves readability, although it may increase the size of the QR.
                            </p>
                            <div class="grid grid-cols-4 gap-6">
                                <div class="border rounded-lg p-1">
                                    <img src="/images/level/01.webp" alt="">
                                </div>
                                <div class="border rounded-lg p-1">
                                    <img src="/images/level/02.webp" alt="">
                                </div>
                                <div class="border rounded-lg p-1">
                                    <img src="/images/level/03.webp" alt="">
                                </div>
                                <div class="border rounded-lg p-1">
                                    <img src="/images/level/04.webp" alt="">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-span-2">
                    <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg flex items-center justify-center">
                        <div class="p-6 text-gray-900">
                            <vue-qrcode value="Hello, World!" :options="{ width: 250 }"></vue-qrcode>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </AuthenticatedLayout>
</template>
