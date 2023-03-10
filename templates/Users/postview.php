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
            <?php
            if ($post->userid != null) {
                echo $this->Html->link(__('List Post'), ['controller' => 'users', 'action' => 'view', $post->userid], ['class' => 'side-nav-item']);
            } else {
                echo  $this->Html->link(__('List Post'), ['controller' => 'users', 'action' => 'home'], ['class' => 'side-nav-item']);
            } ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="post view content">
            <h3><?= h($post->title) ?></h3>
            <table>
                <tr>
                    <th><?= __('Post Image') ?></th>
                    <td><?= $this->Html->image(h($post->post_image), array('width' => '250px')) ?></td>
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
                    <th><?= __('Created At') ?></th>
                    <td><?= h($post->created_at) ?></td>
                </tr>
            </table>
            <div class="related">
                <?php if (!empty($post->comment)) : ?>
                    <h4><?= __('Related Comment') ?></h4>
                    <div class="table-responsive">
                        <table>
                            <tr>
                                <th><?= __('Comment') ?></th>
                                <th><?= __('Commented At') ?></th>
                                <?php if ($post->role == 0 && $post->userid != null) { ?>
                                    <th><?= __('Action') ?></th>
                                <?php } ?>
                            </tr>
                            <?php foreach ($post->comment as $comment) : ?>
                                <tr>
                                    <td><?= h($comment->comment) ?></td>
                                    <td><?= h($comment->commented_at) ?></td>
                                    <?php if ($post->role == 0 && $post->userid != null) { ?>
                                        <td class="actions">
                                            <?= $this->Html->link(__('Edit'), ['action' => 'commentedit', $comment->id, $post->id, $post->userid]) ?>
                                            <?= $this->Form->postLink(__('Delete'), ['action' => 'commentdelete', $comment->id, $post->id, $post->userid], ['confirm' => __('Are you sure you want to delete # {0}?', $comment->id)]) ?>
                                        </td>
                                    <?php } ?>

                                </tr>
                            <?php endforeach; ?>
                        </table>
                    </div>
                <?php endif;
                if ($post->userid == null) {
                ?>
                    <div class="comment form content">
                        <?= $this->Form->create($comment) ?>
                        <fieldset>
                            Type your Comment here
                            <?php
                            echo $this->Form->input('comment');
                            ?>
                            <button type="submit" class="fa-solid fa-arrow-right"></button>
                        </fieldset>
                        <?= $this->Form->end() ?>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>