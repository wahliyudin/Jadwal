<?php

namespace App\Http\Livewire;

use App\Models\Jadwal;
use Livewire\Component;

class JadwalUpdate extends Component
{
    public $nama_tugas;
    public $pengumpulan;
    public $status;
    public $jadwalId;

    protected $listeners = [
        "getJadwal" => 'showJadwal'
    ];
    public function render()
    {
        return view('livewire.jadwal-update');
    }

    public function showJadwal($jadwal)
    {
        $this->nama_tugas = $jadwal['nama_tugas'];
        $this->pengumpulan = date('Y-m-d', strtotime($jadwal['pengumpulan']));
        $this->jadwalId = $jadwal['id'];
    }
    public function update()
    {
        $this->validate([
            'nama_tugas' => 'required'
        ]);

        if ($this->jadwalId) {
            $jadwal = Jadwal::find($this->jadwalId);
            $jadwal->update([
                'nama_tugas' => $this->nama_tugas,
                'pengumpulan' => $this->pengumpulan
            ]);
        }
        $this->resetInput();
        $this->emit('jadwalUpdated', $jadwal);
    }
    private function resetInput()
    {
        $this->nama_tugas = null;
        $this->pengumpulan = null;
    }
}
