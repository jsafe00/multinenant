<div>
    <div class="min-h-screen bg-white flex">
        <div class="flex-1 flex flex-col justify-center py-12 px-4 sm:px-6 lg:flex-none lg:px-20 xl:px-24">
            <div class="mx-auto w-full max-w-sm">
                <div>
                    <img class="h-12 w-auto" src="/img/circle-cropped.png" alt="Workflow" />
                    <h2 class="mt-6 text-3xl leading-9 font-extrabold text-gray-900">
                        Register
                    </h2>
                </div>

                <div class="mt-8">
                    <div class="mt-6">
                        <form wire:submit.prevent="register">
                            <x-text-input
                                wire:model.debounce.1000ms="name"
                                type="text"
                                label="Name"
                                :required="true"
                                placeholder="my placeholder"
                                class="mt-4" />
                            <x-text-input
                                wire:model.debounce.100ms="companyName"
                                type="text"
                                label="Company Name"
                                :required="true"
                                placeholder="my placeholder"
                                class="mt-4" />
                            <x-text-input
                                wire:model.debounce.100ms="email"
                                type="email"
                                label="Email"
                                :required="true"
                                placeholder="Email"
                                class="mt-4" />
                            <x-text-input
                                wire:model.debounce.100ms="password"
                                type="password"
                                label="Password"
                                :required="true"
                                placeholder=""
                                class="mt-4" />

                            <div class="mt-6">
                                <span class="block w-full rounded-md shadow-sm">
                                    <button type="submit" class="w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-500 focus:outline-none focus:border-indigo-700 focus:shadow-outline-indigo active:bg-indigo-700 transition duration-150 ease-in-out">
                                        Register
                                    </button>
                                </span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hidden lg:block relative w-0 flex-1">
            <img class="absolute inset-0 h-full w-full object-cover" src="/img/loay.jpg" alt="" />
        </div>
    </div>
</div>
