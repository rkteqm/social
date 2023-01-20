<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Register'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('Login'), ['action' => 'login'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user) ?>
            <fieldset>
                <span class="error-message" id="email-error"></span>
                <?= $this->Form->control('email', ['required' => false]) ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
            <hr>
            <div class="text-center">
                <a class="small" href=""> <?= $this->Html->link(__('Create an Account!'), ['action' => 'add'], ['class' => 'nav-link active']) ?></a>
            </div>
            <div class="text-center">
                <a class="small" href=""> <?= $this->Html->link(__('Already have an account? Login!'), ['action' => 'login'], ['class' => 'nav-link active']) ?></a>
            </div>
        </div>
    </div>
</div>