<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Network\Exception\NotFoundException;
/**
 * Users Controller
 *
 * @property \App\Model\Table\UsersTable $Users
 */
class UsersController extends AppController
{

  public function beforeFilter(Event $event)
  {
      parent::beforeFilter($event);
      // Allow users to register and logout.
      // You should not add the "login" action to allow list. Doing so would
      // cause problems with normal functioning of AuthComponent.
      $this->Auth->allow(['add', 'logout']);
  }

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
      $this->set('users', $this->Users->find('all'));
      /*  $users = $this->paginate($this->Users);

        $this->set(compact('users'));
        $this->set('_serialize', ['users']);*/
    }

    /**
     * View method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
      if (!$id) {
           throw new NotFoundException(__('Invalid user'));
       }
      //  $user = $this->Users->get($id, ['contain' => []]);
        $user = $this->Users->get($id);
        $this->set(compact('user'));
        /*$this->set('user', $user);
        $this->set('_serialize', ['user']);*/
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $user = $this->Users->newEntity();
        if ($this->request->is('post')) {
            $user = $this->Users->patchEntity($user, $this->request->getData());
            if ($this->Users->save($user)) {
                $this->Flash->success(__('The user has been saved.'));

                return $this->redirect(['action' => 'add']);
            }
            $this->Flash->error(__('The user could not be saved. Please, try again.'));
        }
        $this->set('user', $user);
      /*  $this->set(compact('user'));
        $this->set('_serialize', ['user']);*/
    }

    /**
     * Edit method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $user = $this->Users->get($id, [
            'contain' => []
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
        $this->set('_serialize', ['user']);
    }

    /**
     * Delete method
     *
     * @param string|null $id User id.
     * @return \Cake\Network\Response|null Redirects to index.
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

    public function login()
    {
        $query = $this->Users->find();
        if ($this->request->is('post')) {
        //  if ($user->execute($this->request->getData())){
              $user = $this->Auth->identify();
              if ($user) {
                  $this->Auth->setUser($user);
                  $this->Flash->success(__("Welcome"));
                  return $this->redirect($this->Auth->redirectUrl( 'http://www.local.blog.com/Articles/myart'));
                //  return $this->redirect();
              }
              $this->Flash->error(__('Invalid username or password, try again'));
      //  }
      }
    }

    public function logout()
    {
        return $this->redirect($this->Auth->logout());
    }
}
