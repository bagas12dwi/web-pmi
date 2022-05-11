<?php

namespace Database\Seeders;

use App\Models\Participants as ModelsParticipants;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class Participants extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ModelsParticipants::create([
            'mis' => '20051397065',
            'nama' => 'Rayhan',
            'tempat_lahir' => 'Jombang',
            'tanggal_lahir' => '2001-08-12',
            'jenis_kelamin' => 'Laki - Laki',
            'gol_darah' => 'A',
            'agama' => 'Islam',
            'no_telp' => '08123132333',
            'kelas' => '12',
            'tingkat' => 'Madya',
            'asal_sekolah' => 'SMA Negeri 1 Sidoarjo',
            'no_darurat' => '086127187299',
            'surat_dokter' => 'surat_dokter.pdf',
            'surat_ijin_ortu' => 'surat_ijin_ortu.pdf',
            'foto' => 'foto.jpg'
        ]);
        
        ModelsParticipants::create([
            'mis' => '20051397078',
            'nama' => 'Galih',
            'tempat_lahir' => 'Mojokerto',
            'tanggal_lahir' => '2001-09-08',
            'jenis_kelamin' => 'Laki - Laki',
            'gol_darah' => 'A',
            'agama' => 'Islam',
            'no_telp' => '08123132333',
            'kelas' => '12',
            'tingkat' => 'Madya',
            'asal_sekolah' => 'SMA Negeri 1 Sidoarjo',
            'no_darurat' => '086127187299',
            'surat_dokter' => 'surat_dokter.pdf',
            'surat_ijin_ortu' => 'surat_ijin_ortu.pdf',
            'foto' => 'foto.jpg'
        ]);

        ModelsParticipants::create([
            'mis' => '20051397066',
            'nama' => 'Bagas',
            'tempat_lahir' => 'Tuban',
            'tanggal_lahir' => '2001-06-13',
            'jenis_kelamin' => 'Laki - Laki',
            'gol_darah' => 'O',
            'agama' => 'Islam',
            'no_telp' => '08123132333',
            'kelas' => '12',
            'tingkat' => 'Madya',
            'asal_sekolah' => 'SMA Negeri 1 Sidoarjo',
            'no_darurat' => '086127187299',
            'surat_dokter' => 'surat_dokter.pdf',
            'surat_ijin_ortu' => 'surat_ijin_ortu.pdf',
            'foto' => 'foto.jpg'
        ]);
    }
}
