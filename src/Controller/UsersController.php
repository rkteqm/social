<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 * @method \App\Model\Entity\User[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UsersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */

    public function initialize(): void
    {
        $this->Model = $this->loadModel('Post');
        $this->Model = $this->loadModel('Comment');
        $this->loadComponent('Flash');
    }

    public function index()
    {
        $users = $this->paginate($this->Users);

        $this->set(compact('users'));
    }

    public function home()
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
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => ['Post'],
        ]);

        $this->set(compact('user'));
    }

    public function postview($id = null, $userid = null)
    {
        $post = $this->Post->get($id, [
            'contain' => ['Users','Comment'],
        ]);
        $post['userid'] = $userid;

        $comment = $this->Comment->newEmptyEntity();
        if ($this->request->is(['patch', 'post', 'put'])) {
            $data = $this->request->getData();
            $data['post_id'] = $id;
            $comment = $this->Comment->patchEntity($comment, $data);
            if ($this->Comment->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));
                return $this->redirect(['action' => 'postview', $id, $userid]);
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
    public function add()
    {
        $user = $this->Users->newEmptyEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function postadd($userid)
    {
        $post = $this->Post->newEmptyEntity();
        $post['userid'] = $userid;
        if ($this->request->is('post')) {
            $data = $this->request->getData();
            $data['users_id'] = $userid;
            $post = $this->Post->patchEntity($post, $data);
            if ($this->Post->save($post)) {
                $this->Flash->success(__('The post has been saved.'));

                return $this->redirect(['action' => 'view', $userid]);
            }
            $this->Flash->error(__('The post could not be saved. Please, try again.'));
        }
        $users = $this->Post->Users->find('list', ['limit' => 200])->all();
        $this->set(compact('post', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set(compact('user'));
    }

    public function postedit($id = null, $userid = null)
    {
        $post = $this->Post->get($id, [
            'contain' => [],
        ]);
        $post['userid'] = $userid;

        // echo '<pre>';print_r($post);die;
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

    public function commentedit($id = null, $postid, $userid)
    {
        $comment = $this->Comment->get($id, [
            'contain' => [],
        ]);
        $comment['postid'] = $postid;
        $comment['userid'] = $userid;
        if ($this->request->is(['patch', 'post', 'put'])) {
            $comment = $this->Comment->patchEntity($comment, $this->request->getData());
            if ($this->Comment->save($comment)) {
                $this->Flash->success(__('The comment has been saved.'));

                return $this->redirect(['action' => 'postview', $postid, $userid]);
            }
            $this->Flash->error(__('The comment could not be saved. Please, try again.'));
        }
        $this->set(compact('comment'));
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success(__('The user has been deleted.'));
        } else {
            $this->Flash->error(__('The user could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function postdelete($id = null, $userid)
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

    public function commentdelete($id = null, $postid, $userid)
    {
        $this->request->allowMethod(['post', 'delete']);
        $comment = $this->Comment->get($id);
        if ($this->Comment->delete($comment)) {
            $this->Flash->success(__('The comment has been deleted.'));
        } else {
            $this->Flash->error(__('The comment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'postview', $postid, $userid]);
    }
}
