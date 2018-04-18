<?php
class CrudController extends ControllerBase
{
	// public function indexAction()
	// {
  //
	// }
  public function insertDataAction()
	{
		$user = new User();
		$user->nama = $this->request->getPost('nama');
    $user->email = $this->request->getPost('email');
		$user->telp = $this->request->getPost('telp');

		if(!$user->save())
		{
			echo "gagal disimpan";
		}
		else
		{
			echo "Berhasil di simpan";
		}
	}
  public function viewDataAction()
	{
		$user = User::find();
		$this->view->data = $user;
	}

  public function editDataAction($id)
  {
    $user = User::findFirstById($id);
    $this->view->id = $user->id;
    $this->view->nama = $user->nama;
    $this->view->telp = $user->telp;
    $this->view->email = $user->email;
  }

  public function updateDataAction($id)
  {
    $id = $this->request->getPost("id");
    $user = User::findFirstById($id);
    $user->nama = $this->request->getPost("nama");
    $user->telp = $this->request->getPost("telp");
    $user->email = $this->request->getPost("email");
    if (!$user->save()) {
     echo "Gagal Disimpan";
    }
    else
    {
     echo "Data Berhasil Diupdate";
    }
  }

  public function deleteDataAction($id)
  {
    $user = User::findFirstById($id);
    if (!$user->delete()) {
     echo "Gagal Hapus Data";
    }
    else
    {
     echo "Berhasil Hapus Data";
    }
  }

}
?>
