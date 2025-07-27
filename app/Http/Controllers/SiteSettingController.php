<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SiteSetting;
use App\Models\HeroSection;

class SiteSettingController extends Controller
{
    public function edit()
    {
        $setting = SiteSetting::first();
        return view('pages.admin.site_settings.edit', compact('setting'));
    }

    public function update(Request $request)
    {
        $request->validate([
            'meta_title' => 'nullable|string|max:255',
            'meta_description' => 'nullable|string',
            'favicon' => 'nullable|image|mimes:png,jpg,jpeg,ico|max:2048',
            'logo' => 'nullable|image|mimes:png,jpg,jpeg|max:2048',
        ]);

        $setting = SiteSetting::first() ?? new SiteSetting();

        $setting->meta_title = $request->meta_title;
        $setting->meta_description = $request->meta_description;

        if ($request->hasFile('favicon')) {
            if ($setting->favicon && file_exists(public_path($setting->favicon))) {
                unlink(public_path($setting->favicon));
            }
            $faviconPath = $request->file('favicon')->store('uploads', 'public');
            $setting->favicon = 'storage/' . $faviconPath;
        }


        if ($request->hasFile('logo')) {
            if ($setting->logo && file_exists(public_path($setting->logo))) {
                unlink(public_path($setting->logo));
            }
            $logoPath = $request->file('logo')->store('uploads', 'public');
            $setting->logo = 'storage/' . $logoPath;
        }

        $setting->save();

        return redirect()->back()->with('success', 'Site settings updated successfully.');
    }


    public function heroEdit()
    {
        $hero = HeroSection::first() ?? new HeroSection();
        return view('pages.admin.hero_section.edit', compact('hero'));
    }
    public function heroUpdate(Request $request)
    {
        $request->validate([
            'title' => 'required|string|max:255',
            'subtitle' => 'nullable|string|max:255',
            'highlight' => 'nullable|string|max:255',
            'register_button_text' => 'nullable|string|max:255',
            'register_button_url' => 'nullable|max:255',
            'announcement_button_text' => 'nullable|string|max:255',
            'announcement_button_url' => 'nullable|max:255',
            'background_image' => 'nullable|image',
        ]);

        $hero = HeroSection::first() ?? new HeroSection();

        if ($request->hasFile('background_image')) {
            if ($hero->background_image && file_exists(public_path($hero->background_image))) {
                unlink(public_path($hero->background_image));
            }

            $backgroundPath = $request->file('background_image')->store('uploads', 'public');
            $hero->background_image = 'storage/' . $backgroundPath;
        }

        $hero->fill($request->only([
            'title',
            'subtitle',
            'highlight',
            'register_button_text',
            'register_button_url',
            'announcement_button_text',
            'announcement_button_url',
        ]));
        $hero->save();

        return redirect()->back()->with('success', 'Hero section updated successfully.');
    }

}

