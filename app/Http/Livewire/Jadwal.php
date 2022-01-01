<?php

namespace App\Http\Livewire;

use App\Models\Jadwal as ModelsJadwal;
use Carbon\Carbon;
use Livewire\Component;
use Livewire\WithPagination;


class Jadwal extends Component
{
    public $search;
    public $option = 'semua';
    public $belum;
    public $sudah;
    public $semua;
    public $optionPaginate = 5;
    public $statusUpdate = false;
    protected $listeners = [
        "jadwalStored" => 'handleStored',
        "jadwalUpdated" => 'handleUpdated'
    ];
    use WithPagination;
    public function render()
    {

        if (!empty($this->search)) {
            $query = ModelsJadwal::query();
            $query = $query->where('nama_tugas', 'like', '%' . $this->search . '%')->orWhere('status', 'like', '%' . $this->search . '%')->orWhere('pengumpulan', 'like', '%' . $this->search . '%');
            if ($this->optionPaginate == 'all') {
                $jadwal = $query->latest()->paginate(1_000_000);
            } else {
                $jadwal = $query->latest()->paginate($this->optionPaginate);
            }
        } elseif (!empty($this->option)) {
            if ($this->option == 'semua') {
                if ($this->optionPaginate == 'all') {
                    $jadwal = ModelsJadwal::query()->latest()->paginate(1_000_000);
                } else {
                    $jadwal = ModelsJadwal::query()->latest()->paginate($this->optionPaginate);
                }
            } else {
                $query = ModelsJadwal::query();
                $query = $query->where('status', 'like', '%' . $this->option . '%');
                if ($this->optionPaginate == 'all') {
                    $jadwal = $query->latest()->paginate(1_000_000);
                } else {
                    $jadwal = $query->latest()->paginate($this->optionPaginate);
                }
            }
        } else {
            if ($this->optionPaginate == 'all') {
                $jadwal = ModelsJadwal::query()->latest()->paginate(1_000_000);
            } else {
                $jadwal = ModelsJadwal::query()->latest()->paginate($this->optionPaginate);
            }
        }
        $this->sudah = count(ModelsJadwal::query()->where('status', 'like', '%sudah%')->get());
        $this->belum = count(ModelsJadwal::query()->where('status', 'like', '%belum%')->get());
        $this->semua = count(ModelsJadwal::query()->get());
        return view('livewire.jadwal', [
            'jadwal' => $jadwal
        ]);
    }

    public function getJadwal($id)
    {
        $this->statusUpdate = true;
        $jadwal = ModelsJadwal::find($id);
        $this->emit('getJadwal', $jadwal);
    }
    public function getStatus($id)
    {
        if ($id) {
            $jadwal = ModelsJadwal::find($id);
            $jadwal->update([
                'status' => 'sudah'
            ]);
        }
    }
    public function getStatusUpdate($id)
    {
        if ($id) {
            $jadwal = ModelsJadwal::find($id);
            $jadwal->update([
                'status' => 'belum'
            ]);
        }
    }

    public function destroy($id)
    {
        if ($id) {
            $jadwal = ModelsJadwal::find($id);
            $jadwal->delete();
            session()->flash('delete', 'Nama Tugas: "' . $jadwal['nama_tugas'] . '", Pengumpulan: "' . Carbon::parse($jadwal['pengumpulan'])->translatedFormat('l, d F Y') . '" was deleted!');
        }
    }

    public function handleStored($jadwal)
    {
        // dd($jadwal->nama_tugas);
        session()->flash('message', 'Nama Tugas: "' . $jadwal['nama_tugas'] . '", Pengumpulan: "' . Carbon::parse($jadwal['pengumpulan'])->translatedFormat('l, d F Y') . '" was created!');
    }
    public function handleUpdated($jadwal)
    {
        // dd($jadwal);
        session()->flash('message', 'Nama Tugas: "' . $jadwal['nama_tugas'] . '", Pengumpulan: "' . Carbon::parse($jadwal['pengumpulan'])->translatedFormat('l, d F Y') . '" was updated!');
        $this->statusUpdate = false;
    }
}
