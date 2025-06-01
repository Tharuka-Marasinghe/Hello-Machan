<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Models\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    public function index()
    {
        $menus = Menu::all();
        return view('admin.Home.menu', compact('menus'));
    }

    public function create()
    {
        return view('admin.Home.menu');
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'category' => 'required|in:Rice,Kottu,Biriyani,Soup',
            'size' => 'required|in:Small,Large',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('menu_images', 'public');
        }

        Menu::create($validated);

        return redirect()->route('menu.index')->with('success', 'Menu item added successfully.');
    }

    public function edit(Menu $menu)
    {
        return view('admin.Home.menu', compact('menu'));
    }

    public function updateMenu(Request $request, Menu $menu)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'nullable|string',
            'price' => 'required|numeric',
            'image' => 'nullable|image',
            'category' => 'required|in:Rice,Kottu,Biriyani,Soup',
            'size' => 'required|in:Small,Large',
        ]);

        if ($request->hasFile('image')) {
            $validated['image'] = $request->file('image')->store('menu_images', 'public');
        }

        $menu->update($validated);

        return redirect()->route('menu.update')->with('success', 'Menu item updated successfully.');
    }

    public function deleteMenu($id)
    {


        $menuItem = Menu::find($id);
        $menuItem->delete();
        return redirect()->route('menu.index')->with('success', 'Menu item deleted.');
    }
}
