<?php
/**
  * @var \App\View\AppView $this
  */
?>

<!-- File: src/Template/Users/login.ctp -->

<div class="users form">
<?= $this->Flash->render('auth') ?>
<?= $this->Form->create() ?>
    <fieldset>
        <legend><?= __('Please enter your username and password') ?></legend>
        Username<?= $this->Form->text('username', ['class' => 'users']) ?>
        Password<?= $this->Form->password('password') ?>
    </fieldset>
<?= $this->Form->button(__('Login')); ?>
<?= $this->Form->end() ?>
</div>
