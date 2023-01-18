<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Comment $comment
 */
?>
<div class="row">
    <div class="column-responsive column-80">
        <div class="comment form content">
            <?= $this->Form->create($comment) ?>
            <fieldset>
                <legend><?= __('Edit Comment') ?></legend>
                <?php
                    echo $this->Form->control('comment');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
