<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Post $post
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Post'), ['controller' => 'users', 'action' => 'view', $post->userid], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="post view content">
            <h3><?= h($post->title) ?></h3>
            <table> 
                <tr>
                    <th><?= __('User') ?></th>
                    <td><?= $post->has('user') ? $this->Html->link($post->user->name, ['controller' => 'Users', 'action' => 'view', $post->user->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Title') ?></th>
                    <td><?= h($post->title) ?></td>
                </tr>
                <tr>
                    <th><?= __('Body') ?></th>
                    <td><?= h($post->body) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($post->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created At') ?></th>
                    <td><?= h($post->created_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <h4><?= __('Related Comment') ?></h4>
                <?php if (!empty($post->comment)) : ?>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Comment') ?></th>
                                <th><?= __('Commented At') ?></th>
                                <th><?= __('Action') ?></th>
                            </tr>
                            <?php foreach ($post->comment as $comment) : ?>
                                <tr>
                                    <td><?= h($comment->comment) ?></td>
                                    <td><?= h($comment->commented_at) ?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__('Edit'), ['controller' => 'comment', 'action' => 'edit', $comment->id, $post->id]) ?>
                                        <?= $this->Form->postLink(__('Delete'), ['controller' => 'comment', 'action' => 'delete', $comment->id, $post->id], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif; ?>
                <div class="comment form content">
                    <?= $this->Form->create($comment) ?>
                    <fieldset>
                        <?php echo $this->Form->input('comment');?>
                        <span><i class="fa-solid fa-arrow-right"></i></span>
                    </fieldset>
                    <?= $this->Form->button(__('Submit'), ['class' => 'hidethis']) ?>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>