<?php

/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\User> $users
 */
?>
<div class="container">
    <div class="users index content">
        <?= $this->Html->link(__('Logout'), ['action' => 'logout'], ['class' => 'button float-right']) ?>
        <div class="container">
            <div class="row">
                <?php foreach ($posts as $post) : ?>
                    <div class="col-4 mt-3">
                        <div class="card">
                            <h5 class="card-title"><?= h($post->title) ?></h5>
                            <?= $this->Html->image(h($post->post_image), array('width' => '100%', 'height' => '300px')) ?>
                            <div class="card-body">
                                <p class="card-text"><?= h($post->body) ?></p>
                                <p class="card-text"><small class="text-muted">Last updated <?= h($post->created_at) ?></small></p>
                                <?= $this->Html->link(__('View'), ['action' => 'postview', $post->id]) ?>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
        <div class="paginator">
            <ul class="pagination">
                <?= $this->Paginator->first('<< ' . __('first')) ?>
                <?= $this->Paginator->prev('< ' . __('previous')) ?>
                <?= $this->Paginator->numbers() ?>
                <?= $this->Paginator->next(__('next') . ' >') ?>
                <?= $this->Paginator->last(__('last') . ' >>') ?>
            </ul>
            <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
        </div>
    </div>
</div>