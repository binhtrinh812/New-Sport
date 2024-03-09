<?php
include_once('./Models/Contact.php');

class ContactController extends Contact
{
    public function __construct()
    {
        parent::__construct();
        $this->index();
    }

    public function index() {
        $method = 'list';
        if (isset($_GET['method'])) {
            $method = $_GET['method'];
        }

        switch ($method) {
            case 'list':
                $contacts = parent::all();
                include_once('./views/contact/list_contact.php');
                break;

            case 'edit':
                $this->editContact();
                break;

            case 'update':
                $this->updateContact();
                break;

            default :
                include_once('./views/404.php');
                break;
        }
    }

    public function editContact() {
        if (isset($_GET['id'])) {
            $id = trim((int)$_GET['id']);
            $contacts = $this->find($id);
            include_once('./views/contact/update_contact.php');
        } else {
            header("Location: index.php?page=contact&method=list");
        }
    }

    /**
     * @return bool|void
     */

    public function updateContact() {
        if (isset($_GET['id'])) {
            $id = trim((int)$_GET['id']);
            $contacts = $this->find($id);

            if (isset($_POST['submit_update_contact'])) {
                $adds = $_POST['address'];
                $phone = $_POST['phone'];
                $email = $_POST['mail'];
                $facebook = $_POST['facebook'];
                $instagram = $_POST['instagram'];
                $map = $_POST['map'];

                $update = $this->update($id, $adds, $phone, $email, $facebook , $instagram, $map);
                if ($update) {
                    $_SESSION['notification'] = 3;
                    header("Location: index.php?page=contact");
                }
            }
        }   else {
            header("Location: index.php?page=contact");
        }
    }
}