<?php

namespace App\Livewire\Admin\Setting;

use App\Models\Setting;
use Livewire\Component;
use Livewire\WithFileUploads;


class MetaLogo extends Component
{   
    use WithFileUploads;

    public $meta_logo;
    public $isEdit = false;

    public function mount()
    {
        $setting = Setting::first();
        $this->meta_logo = ($setting->meta_logo) ? $setting->meta_logo : null;
    }

    public function toggle()
    {
        $this->isEdit = !$this->isEdit;
    }

    public function update()
    {
        $data = $this->validate([
            'meta_logo' => 'required|image|mimes:jpeg,png,jpg,gif',
        ]);

        // image work
        $image = $this->meta_logo;
        $imageName = time() . '.' . $image->getClientOriginalExtension();
        $image->storeAs("images/setting", $imageName, "public");
        $data['meta_logo'] = $imageName;

        $setting = Setting::first();
        $setting->update($data);
        $this->toggle();
        $this->meta_logo = $setting->meta_logo;
        return redirect()->back()->with('success', 'logo updated successfully');
    }

    public function render()
    {
        return view('livewire.admin.setting.meta-logo');
    }
}
    