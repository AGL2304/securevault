<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\User;
use App\Models\File;
use App\Models\FileAudit;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        // Création des utilisateurs
        $admin = User::create([
            'name' => 'Admin SecureVault',
            'email' => 'admin@securevault.com',
            'password' => Hash::make('admin1234'),
            'role' => 'admin',
            'totp_secret' => null,
        ]);

        $user = User::create([
            'name' => 'John Doe',
            'email' => 'john@example.com',
            'password' => Hash::make('user1234'),
            'role' => 'user',
            'totp_secret' => null,
        ]);

        // Création de fichiers pour l'utilisateur
        $files = [
            ['name' => 'document1.pdf', 'path' => 'files/document1.pdf', 'size' => 102400, 'encrypted' => true],
            ['name' => 'image1.png', 'path' => 'files/image1.png', 'size' => 204800, 'encrypted' => false],
            ['name' => 'notes.txt', 'path' => 'files/notes.txt', 'size' => 5120, 'encrypted' => true],
        ];

        foreach ($files as $f) {
            $file = File::create(array_merge($f, ['user_id' => $user->id]));

            // Création d'audits pour chaque fichier
            FileAudit::create([
                'file_id' => $file->id,
                'user_id' => $user->id,
                'action' => 'upload',
                'ip_address' => '127.0.0.1',
            ]);

            FileAudit::create([
                'file_id' => $file->id,
                'user_id' => $user->id,
                'action' => 'download',
                'ip_address' => '127.0.0.1',
            ]);
        }
    }
}

