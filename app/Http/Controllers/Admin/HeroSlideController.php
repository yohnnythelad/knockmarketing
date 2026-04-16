<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\HeroSlide;

class HeroSlideController extends Controller
{
    public function index()
    {
        $heroSlides = HeroSlide::all();

        return view('admin.hero_slides.index', compact('heroSlides'));
    }

    public function create()
    {
        return view('admin.hero_slides.form');
    }

    public function store(Request $request)
    {
        //dd($request->all());
        // Validar los datos del formulario
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            //'image' => 'nullable|image|max:2048',
            'cta_text' => 'nullable|string|max:255',
            'cta_link' => 'nullable|url|max:255',
        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        //if ($request->hasFile('image')) {
        //    $path = $request->file('image')->store('hero_slides', 'public');
        //    $validated['image'] = '/storage/' . $path;
        //}

        // Guardar el nuevo hero slide
        HeroSlide::create($validated);

        return redirect()->route('admin.hero_slides.index')->with('success', 'Hero Slide creado exitosamente.');
    }

    public function edit(HeroSlide $heroSlide)
    {
        return view('admin.hero_slides.form', [
            'heroSlide' => $heroSlide,
        ]);
    }

    public function update(Request $request, HeroSlide $heroSlide)
    {
        // Validar los datos del formulario
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            //'image' => 'required|image|max:2048',
            'cta_text' => 'nullable|string|max:255',
            'cta_link' => 'nullable|url|max:255',
        ]);

        if (!$validated) {
            return redirect()->back()->withErrors($validated)->withInput();
        }

        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('hero_slides', 'public');
            $validated['image'] = '/storage/' . $path;
        }

        // Actualizar el hero slide
        $heroSlide->update($validated);

        return redirect()->route('admin.hero_slides.index')->with('success', 'Hero Slide actualizado exitosamente.');
    }

    public function destroy(HeroSlide $heroSlide)
    {
        $heroSlide->delete();

        return redirect()->route('admin.hero_slides.index')->with('success', 'Hero Slide eliminado exitosamente.');
    }
}
