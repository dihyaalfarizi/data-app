<h2>Detail User</h2>
<p><strong>Nama:</strong> <?= esc($user['name']) ?></p>
<p><strong>Email:</strong> <?= esc($user['email']) ?></p>
<p><strong>Gender:</strong> <?= esc($user['gender']) ?></p>
<p><strong>Negara:</strong> <?= esc($user['country']) ?></p>
<p><strong>Status:</strong> <?= $user['status'] ? 'Aktif' : 'Tidak Aktif' ?></p>
<p><strong>Hobi:</strong> 
    <?php 
        $hobbies = json_decode($user['hobbies'], true);
        if ($hobbies) {
            echo implode(', ', $hobbies);
        } else {
            echo '-';
        }
    ?>
</p>
<a href="/user">Kembali ke daftar user</a>