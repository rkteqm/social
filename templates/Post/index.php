<?php
/**
 * @var \App\View\AppView $this
 * @var iterable<\App\Model\Entity\Post> $post
 */
?>
<div class="post index content">
    <?= $this->Html->link(__('New Post'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Post') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('users_id') ?></th>
                    <th><?= $this->Paginator->sort('title') ?></th>
                    <th><?= $this->Paginator->sort('body') ?></th>
                    <th><?= $this->Paginator->sort('created_at') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($post as $post): ?>
                <tr>
                    <td><?= $this->Number->format($post->id) ?></td>
                    <td><?= $post->has('user') ? $this->Html->link($post->user->name, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?></td>
                    <td><?= h($post->title) ?></td>
                    <td><?= h($post->body) ?></td>
                    <td><?= h($post->created_at) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $post->id]) ?>
                        </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
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
