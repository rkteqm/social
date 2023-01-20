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
            <?= $this->Html->link(__('List Users'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="users form content">
            <?= $this->Form->create($user,['enctype' => 'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Edit User') ?></legend>
                <div class="row">
                    <div class="col-md-6">
                    <?php echo $this->Form->control('image', ['type' => 'file', 'required' => 'false']); ?>
                    </div>
                    <div class="col-md-6">
                        <td><?= $this->Html->image(h($user->image), array('width' => '300px')) ?></td>
                    </div>
                </div>
                <?php
                echo $this->Form->control('name', ['required' => 'false']);
                echo $this->Form->control('email', ['required' => 'false']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>