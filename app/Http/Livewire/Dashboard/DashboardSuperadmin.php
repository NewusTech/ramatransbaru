<?php

namespace App\Http\Livewire\Dashboard;

use App\Models\Blog;
use App\Models\JenisLayanan;
use App\Models\Layanan;
use App\Models\ListOrder;
use Livewire\Component;

class DashboardSuperadmin extends Component
{

    public $layanan, $jenisLayanan, $blogs;

    public function mount()
    {
        $this->layanan = Layanan::get();
        $this->jenisLayanan = JenisLayanan::get();
        $this->blogs = Blog::get();
        $this->ListOrders = ListOrder::get();
    }

    public function render()
    {
        return view('livewire.dashboard.dashboard-superadmin');
    }
}
