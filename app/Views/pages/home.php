<?= $this->include('templates/header') ?>

<section class="hero">
    <p class="eyebrow">POINT-OF-SALE SYSTEM</p>
    <h1>Manage store accounts in one simple place.</h1>
    <p>This first version demonstrates CodeIgniter routes, controllers, views, and temporary static-array data.</p>
    <div class="actions">
        <a class="button" href="<?= site_url('customers') ?>">View Customers</a>
        <a class="button button-secondary" href="<?= site_url('users') ?>">View Users</a>
    </div>
</section>

<section class="card-grid" aria-label="System features">
    <article class="card">
        <h2>Customer Accounts</h2>
        <p>View customer names, email addresses, and phone numbers.</p>
    </article>
    <article class="card">
        <h2>User Accounts</h2>
        <p>View staff usernames, full names, and assigned roles.</p>
    </article>
    <article class="card">
        <h2>MVC Structure</h2>
        <p>Each URL is connected to a controller method and a separate view.</p>
    </article>
</section>

<?= $this->include('templates/footer') ?>
