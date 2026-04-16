<x-layouts.app>
    <h1 class="text-2xl font-bold">
        {{ isset($heroSlide) ? 'Editar Hero Slide' : 'Crear Hero Slide' }}
    </h1>

    <p class="mt-1">
        {{ isset($heroSlide)
            ? 'Modifica la información del hero slide.'
            : 'Rellena el formulario para crear un nuevo hero slide.' }}
    </p>
    {{-- Error mensaje --}}
    @if ($errors->any())
        <div class="mb-4 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded">
            <strong class="font-bold">¡Error!</strong>
            <ul class="mt-2 list-disc list-inside">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form
        action="{{ isset($heroSlide)
            ? route('admin.hero_slides.update', ['heroSlide' => $heroSlide])
            : route('admin.hero_slides.store') }}"
        method="POST" enctype="multipart/form-data" class="bg-white dark:bg-gray-800 shadow rounded-lg p-6">
        @csrf

        @if (isset($heroSlide))
            @method('PUT')
        @endif

        <div class="mb-4">
            <label for="title" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Título</label>
            <input type="text" name="title" id="title" value="{{ old('title', $heroSlide->title ?? '') }}"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
        </div>

        {{-- <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Imagen</label>
            <input type="file" name="image" id="image" required
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
        </div> --}}

        <div class="mb-4">
            <label for="cta_text" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Texto del
                CTA</label>
            <input type="text" name="cta_text" id="cta_text"
                value="{{ old('cta_text', $heroSlide->cta_text ?? '') }}"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
        </div>

        <div>
            <label for="cta_url" class="block text-sm font-medium text-gray-700 dark:text-gray-300">URL del
                CTA</label>
            <input type="text" name="cta_url" id="cta_url" value="{{ old('cta_url', $heroSlide->cta_url ?? '') }}"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
        </div>

        <div class="mb-4">
            <label for="status" class="block text-sm font-medium text-gray-700 dark:text-gray-300">Estado</label>
            <select name="status" id="status"
                class="mt-1 block w-full border border-gray-300 rounded-md shadow-sm py-2 px-3 focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white">
                <option value="active" {{ old('status', $heroSlide->status ?? '') == 'active' ? 'selected' : '' }}>
                    Activo</option>
                <option value="inactive" {{ old('status', $heroSlide->status ?? '') == 'inactive' ? 'selected' : '' }}>
                    Inactivo</option>
            </select>
        </div>

        <div class="flex justify-end">
            <button type="submit"
                class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg text-sm font-medium">
                {{ isset($heroSlide) ? 'Actualizar Hero Slide' : 'Crear Hero Slide' }}
            </button>
        </div>
    </form>
</x-layouts.app>
