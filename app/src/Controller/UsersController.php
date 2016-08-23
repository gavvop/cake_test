<?php
/**
 * Created by PhpStorm.
 * User: pault_000
 * Date: 21/08/2016
 * Time: 21:53
 */

namespace App\Controller;


use Cake\ORM\TableRegistry;

class UsersController extends AppController
{
    public function initialize()
    {
        parent::initialize();

        $this->loadComponent('Flash');
    }

    public function index()
    {
        $users = $this->Users->find('all');
        $this->set('users', $users);
    }

    public function add()
    {
        if ($this->request->is('post')) {
            $users = TableRegistry::get('users');
            $user = $users->newEntity($this->request->data());

            if ($users->save($user)) {
                $this->Flash->success('Utente aggiunto');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Errore in inserimento');
            }
        } else {
            $user = $this->Users->newEntity();
        }
        $this->set('user', $user);
    }

    public function edit($id = null)
    {
        $user = $this->Users->get($id);
        if ($this->request->is(['post', 'put'])) {
            $user = $this->Users->patchEntity($user, $this->request->data());
            if ($this->Users->save($user)) {
                $this->Flash->success('Utente aggiornato');
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error('Errore in aggiornamento');
            }
        }
        $this->set('user', $user);
    }

    public function delete($id = null) {
        $user = $this->Users->get($id);
        if ($this->Users->delete($user)) {
            $this->Flash->success('Utente cancellato');
            return $this->redirect(['action' => 'index']);
        } else {
            $this->Flash->error('Errore cancellazione');
        }
    }

}