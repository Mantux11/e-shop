<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;

class Orders extends Component
{
    public $list;
    public $edit, $delete;
    public $status, $shipping, $total_cost, $content;

    protected function rules()
    {
        return [
            'status' => 'min:5',
            'shipping' => 'min:5',
            'total_cost' => 'min:5',
            'content' => '',
        ];
    }

    public function mount()
    {
        $this->edit = false;
        $this->delete = false;
        $this->status = $this->list->status;
        $this->shipping = $this->list->shipping;
        $this->total_cost = $this->list->total_cost;
        $this->content = $this->list->content;
    }

    public function showEdit()
    {
        $this->edit = true;
    }

    public function hideEdit()
    {
        $this->edit = false;
    }

    public function saveChanges()
    {
        $this->validate();

        $this->list->status = $this->status;
        $this->list->shipping = $this->shipping;
        $this->list->total_cost = $this->total_cost;
        $this->list->content = $this->content;

        $this->list->save();
    }

    public function delete()
    {
        $this->delete = true;
    }

    public function deleteCancel()
    {
        $this->delete = false;
    }

    public function deleteConfirm()
    {
        $this->list->delete();
        $this->emit('orderIstrintas');
    }

    public function render()
    {
        return view('livewire.admin.orders');
    }
}
