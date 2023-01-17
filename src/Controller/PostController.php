<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Post Controller
 *
 * @property \App\Model\Table\PostTable $Post
 * @method \App\Model\Entity\Post[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class PostController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function initialize(): void
    {
        $this->Model = $this->loadModel('Comment');
        $this->loadComponent('Flash');
    }

    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $post = $this->paginate($this->Post);

        $this->set(compact('post'));
    }

    /**
     * View method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null, $userid)
    {
        $post = $this->Post->get($id, [
            'contain' => ['Users', 'Comment'],
        ]);
        $post['userid'] = $userid;

        $comment = $this->Comment->newEmptyEntity();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $data['post_id'] = $id;
            $comment = $this->Comment->patchEntity($comment, $data);
            // echo '<pre>'; print_r($comment);die;
            if ($this->Comment->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));
                return $this->redirect(['action' => 'view', $id]);
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }

        $this->set(compact('post', 'comment'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add($userid)
    {
        $post = $this->Post->newEmptyEntity();
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['users_id'] = $userid;
            // echo '<pre>';
            // print_r($data);
            // die;
            $post = $this->Post->patchEntity($post, $data);
            if ($this->Post->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['controller' => 'users', 'action' => 'view', $userid]);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $users = $this->Post->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('post', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null, $userid)
    {
        $post = $this->Post->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $post = $this->Post->patchEntity($post, $this->request->getData());
            if ($this->Post->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['controller' => 'users', 'action' => 'view', $userid]);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $users = $this->Post->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('post', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Post id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null, $userid)
    {
        $this->request->allowMethod(['post', 'delete']);
        $post = $this->Post->get($id);
        if ($this->Post->delete($post)) {
            $this->Flash->success(__('The post has been deleted.'));
        } else {
            $this->Flash->error(__('The post could not be deleted. Please, try again.'));
        }

        return $this->redirect(['controller' => 'users', 'action' => 'view', $userid]);
    }
}
