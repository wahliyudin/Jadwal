<?php

namespace App\Http\Livewire;

use App\Models\Jadwal;
use Carbon\Carbon;
use Livewire\Component;

class JadwalCreate extends Component
{
    public $nama_tugas;
    public $pengumpulan;
    public function render()
    {
        return view('livewire.jadwal-create');
    }

    public function store()
    {
        // $tanggal = date('Y-m-d ', strtotime($this->pengumpulan));
        // dd($this->pengumpulan);
        // $peng = Carbon::parse($this->pengumpulan)->translatedFormat('l, d F Y');
        $jadwal = Jadwal::create([
            'nama_tugas' => $this->nama_tugas,
            'pengumpulan' => $this->pengumpulan
        ]);

        $this->resetInput();
        $this->emit('jadwalStored', $jadwal);
    }

    private function resetInput()
    {
        $this->nama_tugas = null;
        $this->pengumpulan = null;
    }
}
