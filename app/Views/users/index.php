<?= $this->include('templates/header') ?>

<section class="page-heading">
    <p class="eyebrow">POS TEAM</p>
    <h1>User Accounts</h1>
    <p>There are <?= count($users) ?> sample staff records.</p>
</section>

<div class="table-wrap">
    <table>
        <thead>
            <tr>
                <th>Username</th>
                <th>Full Name</th>
                <th>Role</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($users as $user): ?>
                <tr>
                    <td><?= esc($user['username']) ?></td>
                    <td><?= esc($user['full_name']) ?></td>
                    <td><span class="badge"><?= esc($user['role']) ?></span></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<?= $this->include('templates/footer') ?>
