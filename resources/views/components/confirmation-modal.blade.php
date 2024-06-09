@props(['id' => null, 'maxWidth' => null])

<x-modal :id="$id" :maxWidth="$maxWidth" {{ $attributes }}>
    <div class="bg-[#F4F5F7] px-4 pt-5 pb-4 sm:p-6 sm:pb-4 flex justify-center items-center">
        <div class="sm:flex sm:items-start">

            <div class="mt-3 text-center sm:mt-0 sm:ms-4 sm:text-start">
                <h3 class="text-lg font-medium text-gray-900">
                    {{ $title }}
                </h3>

                <div class="mt-4 text-sm text-gray-600">
                    {{ $content }}
                </div>
            </div>
        </div>
    </div>
</x-modal>
