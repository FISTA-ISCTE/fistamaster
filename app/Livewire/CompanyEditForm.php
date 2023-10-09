<?php

namespace App\Livewire;

use App\Models\Empresa;
use Livewire\Component;
use Livewire\WithFileUploads;

class CompanyEditForm extends Component
{
    use WithFileUploads;

    public $company, $name, $description, $website, $instagram, $facebook, $linkedin, $other, $image;

    public function mount(Empresa $company)
    {
        $this->company = $company;
        $this->name = $company->nome_empresa;
        $this->description = $company->pequena_descricao;
        $this->website = $company->website;
        $this->instagram = $company->instagram;
        $this->facebook = $company->facebook;
        $this->linkedin = $company->linkedin;
        $this->other = $company->others;
        $this->image = $company->avatar;
    }

    public function save()
    {
        $validatedData = $this->validate([
            'description' => 'string',
            'website' => 'nullable|url',
            'instagram' => 'nullable|url',
            'facebook' => 'nullable|url',
            'linkedin' => 'nullable|url',
            'other' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
        ]);

        if ($this->image) {
            $filename = time() . '.' . $this->image->getClientOriginalExtension();
            $path = $this->image->storeAs('/users/empresas', $filename);
            $validatedData['image'] = $path;
        }

        $this->company->update($validatedData);
        $this->emit('updated');  // Emit an event to let other components/listeners know
    }

    public function render()
    {
        return view('livewire.company-edit-form');
    }
}
