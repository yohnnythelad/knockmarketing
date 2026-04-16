<x-layouts.app>
    <div class="mb-6">
        <h1 class="text-2xl font-bold text-gray-800 dark:text-gray-100">Hero Slides</h1>
        <p class="text-gray-600 dark:text-gray-400 mt-1">
            Gestión de hero slides.
        </p>
    </div>

    {{-- Boton para crear proyecto --}}
    <div class="flex justify-end mb-4">
        <a href="{{ route('admin.hero_slides.create') }}"
            class="px-4 py-2 bg-indigo-600 hover:bg-indigo-700 text-white rounded-lg text-sm font-medium">
            Crear Hero Slide
        </a>
    </div>

    {{-- Tabla de proyectos --}}
    <div class="overflow-x-auto bg-white dark:bg-gray-800 shadow rounded-lg">
        <table class="w-full border-collapse">
            <thead class="bg-gray-100 dark:bg-gray-700">
                <tr>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Título</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Imagen</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">CTA</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Status</th>
                    <th class="px-4 py-3 text-left text-sm font-medium text-gray-700 dark:text-gray-300">Acciones</th>

                </tr>
            </thead>

            <tbody>
                @foreach ($heroSlides as $slide)
                    <tr class="border-b dark:border-gray-700">
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">{{ $slide->title }}</td>
                        <td class="px-4 py-3">
                            <img src="{{ $slide->image }}" alt="Hero Slide Image"
                                class="w-20 h-20 object-cover rounded">
                        </td>
                        <td class="px-4 py-3 text-sm text-gray-700 dark:text-gray-300">{{ $slide->cta_text }}</td>
                        <td class="px-4 py-3">
                            <span
                                class="inline-flex items-center px-2 py-1 bg-green-100 text-green-800 text-xs font-medium rounded-full">
                                Activo
                            </span>
                        </td>
                        <td class="px-4 py-3">
                            <a href="{{ route('admin.hero_slides.edit', ['heroSlide' => $slide]) }}"
                                class="text-indigo-600 hover:text-indigo-900 mr-2">Editar</a>
                            <form action="{{ route('admin.hero_slides.destroy', ['heroSlide' => $slide]) }}"
                                method="POST" class="inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="text-red-600 hover:text-red-900"
                                    onclick="return confirm('Estas seguro de que deseas eliminar este Hero Slide?')">Eliminar</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layouts.app>
