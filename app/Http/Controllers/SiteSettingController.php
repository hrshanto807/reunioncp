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
            'qr_video_url' => 'nullable|url|max:255',
        ]);

        $setting = SiteSetting::first() ?? new SiteSetting();

        $setting->meta_title = $request->meta_title;
        $setting->meta_description = $request->meta_description;
        $setting->qr_video_url = $request->qr_video_url;

        // Save favicon
        if ($request->hasFile('favicon')) {
            if ($setting->favicon && file_exists(public_path($setting->favicon))) {
                unlink(public_path($setting->favicon));
            }
            $favicon = $request->file('favicon');
            $faviconName = time() . '_favicon.' . $favicon->getClientOriginalExtension();
            $favicon->move(public_path('uploads'), $faviconName);
            $setting->favicon = 'uploads/' . $faviconName;
        }

        // Save logo
        if ($request->hasFile('logo')) {
            if ($setting->logo && file_exists(public_path($setting->logo))) {
                unlink(public_path($setting->logo));
            }
            $logo = $request->file('logo');
            $logoName = time() . '_logo.' . $logo->getClientOriginalExtension();
            $logo->move(public_path('uploads'), $logoName);
            $setting->logo = 'uploads/' . $logoName;
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
            'background_image' => 'nullable|image|max:4096',
        ]);

        $hero = HeroSection::first() ?? new HeroSection();

        if ($request->hasFile('background_image')) {
            if ($hero->background_image && file_exists(public_path($hero->background_image))) {
                unlink(public_path($hero->background_image));
            }
            $image = $request->file('background_image');
            $imageName = time() . '_bg.' . $image->getClientOriginalExtension();
            $image->move(public_path('uploads'), $imageName);
            $hero->background_image = 'uploads/' . $imageName;
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

