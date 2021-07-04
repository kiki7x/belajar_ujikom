<?= $this->include('templates/header'); ?>

<div class="content">
    <div class="container">
        <?= $this->renderSection('content'); ?>
    </div>
</div>

<?= $this->include('templates/footer'); ?>
<?= $this->renderSection('script'); ?>