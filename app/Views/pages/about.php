<?= $this->include('templates/header') ?>

<section class="page-heading">
    <p class="eyebrow">ABOUT THE PROJECT</p>
    <h1>About SimplePOS</h1>
    <p>SimplePOS is a beginner CodeIgniter 4 application created to demonstrate how a multi-page website works using MVC.</p>
</section>

<section class="card">
    <h2>How it works</h2>
    <p>Routes connect each URL to a controller method. The controller prepares the page data, and the view displays the final HTML in the browser.</p>
    <p>The Customer Accounts and User Accounts pages currently use PHP arrays. These arrays can be replaced with database records in a future version.</p>
</section>

<?= $this->include('templates/footer') ?>
