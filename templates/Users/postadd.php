<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 * @var \Cake\Collection\CollectionInterface|string[] $users
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?php
            echo $this->Html->link(__('List Post'), ['controller' => 'users', 'action' => 'view', $post->userid], ['class' => 'side-nav-item']);
            ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="post form content">
            <?= $this->Form->create($post,['enctype' => 'multipart/form-data']) ?>
            <fieldset>
                <legend><?= __('Add Post') ?></legend>
                <?php
                echo $this->Form->control('post_image', ['type' => 'file', 'required' => 'false']);
                echo $this->Form->control('title', ['required' => 'false']);
                echo $this->Form->control('body', ['required' => 'false']);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>